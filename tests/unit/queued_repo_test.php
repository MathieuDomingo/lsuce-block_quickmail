<?php
 
require_once(dirname(__FILE__) . '/traits/unit_testcase_traits.php');

use block_quickmail\repos\queued_repo;
use block_quickmail\persistents\message;
use block_quickmail\repos\pagination\paginated;

class block_quickmail_queued_repo_testcase extends advanced_testcase {
    
    use has_general_helpers,
        sets_up_courses;

    public function test_find_or_null()
    {
        $this->resetAfterTest(true);

        $queued = $this->create_message(true);

        $found_queued = queued_repo::find_or_null($queued->get('id'));

        $this->assertInstanceOf(message::class, $found_queued);

        $message = $this->create_message(false);

        $not_found_queued = queued_repo::find_or_null($message->get('id'));

        $this->assertNull($not_found_queued);
    }

    public function test_find_for_user_or_null()
    {
        $this->resetAfterTest(true);

        $queued = $this->create_message(true);

        $found_queued = queued_repo::find_for_user_or_null($queued->get('id'), 1);

        $this->assertInstanceOf(message::class, $found_queued);

        $different_user_queued = queued_repo::find_for_user_or_null($queued->get('id'), 2);

        $this->assertNull($different_user_queued);

        $different_message_id_queued = queued_repo::find_for_user_or_null($queued->get('id') + 1, 1);

        $this->assertNull($different_message_id_queued);

        $message = $this->create_message(false);

        $not_found_message = queued_repo::find_for_user_or_null($message->get('id'), 1);

        $this->assertNull($not_found_message);
    }

    public function test_find_for_user_course_or_null()
    {
        $this->resetAfterTest(true);

        $queued = $this->create_message(true);

        $found_queued = queued_repo::find_for_user_course_or_null($queued->get('id'), 1, 1);

        $this->assertInstanceOf(message::class, $found_queued);

        $different_user_queued = queued_repo::find_for_user_course_or_null($queued->get('id'), 2, 1);

        $this->assertNull($different_user_queued);

        $different_message_id_queued = queued_repo::find_for_user_course_or_null($queued->get('id') + 1, 1, 1);

        $this->assertNull($different_message_id_queued);

        $message = $this->create_message(false);

        $different_course_queued = queued_repo::find_for_user_course_or_null($queued->get('id'), 1, 2);

        $this->assertNull($different_course_queued);

        $message = $this->create_message(false);

        $not_found_message = queued_repo::find_for_user_course_or_null($message->get('id'), 1, 1);

        $this->assertNull($not_found_message);
    }

    
    public function test_get_for_user()
    {
        $this->resetAfterTest(true);

        // create 3 queueds for user id: 1
        $queued1 = $this->create_message(true);
        $queued2 = $this->create_message(true);
        $queued3 = $this->create_message(true);
        
        // create 2 queueds for user id: 2
        $queued4 = $this->create_message(true);
        $queued4->set('user_id', 2);
        $queued4->update();
        $queued5 = $this->create_message(true);
        $queued5->set('user_id', 2);
        $queued5->update();

        // create a non-queued message for user id: 1
        $queued6 = $this->create_message();

        // create a soft-deleted message for user id: 1
        $queued7 = $this->create_message(true);
        $queued7->soft_delete();

        // create a message for user: 1, course: 2
        $queued8 = $this->create_message(true);
        $queued8->set('course_id', 2);
        $queued8->update();

        // get all queueds for user: 1
        $queueds = queued_repo::get_for_user(1, 0);

        $this->assertCount(4, $queueds->data);

        // get all queueds for user: 1, course: 1
        $queueds = queued_repo::get_for_user(1, 1);

        $this->assertCount(3, $queueds->data);

        // get all queueds for user: 1, course: 2
        $queueds = queued_repo::get_for_user(1, 2);

        $this->assertCount(1, $queueds->data);
    }

    public function test_sorts_get_for_user()
    {
        $this->resetAfterTest(true);

        $this->create_test_queueds();

        // get all queueds for user: 1
        $queueds = queued_repo::get_for_user(1, 0);
        $this->assertCount(7, $queueds->data);
        $this->assertEquals('date', $queueds->data[0]->get('subject'));

        // sort by id
        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'id',
            'dir' => 'asc'
        ]);
        $this->assertEquals(143000, $queueds->data[0]->get('id'));

        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'id',
            'dir' => 'desc'
        ]);
        $this->assertEquals(143006, $queueds->data[0]->get('id'));

        // sort by course
        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'course',
            'dir' => 'asc'
        ]);
        $this->assertEquals(1, $queueds->data[0]->get('course_id'));

        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'course',
            'dir' => 'desc'
        ]);
        $this->assertEquals(5, $queueds->data[0]->get('course_id'));

        // sort by subject
        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'subject',
            'dir' => 'asc'
        ]);
        $this->assertEquals('apple', $queueds->data[0]->get('subject'));

        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'subject',
            'dir' => 'desc'
        ]);
        $this->assertEquals('grape', $queueds->data[0]->get('subject'));

        // sort by (time) created
        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'created',
            'dir' => 'asc'
        ]);
        $this->assertEquals(1111111111, $queueds->data[0]->get('timecreated'));

        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'created',
            'dir' => 'desc'
        ]);
        $this->assertEquals(8888888888, $queueds->data[0]->get('timecreated'));

        // sort by (time) scheduled
        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'scheduled',
            'dir' => 'asc'
        ]);
        $this->assertEquals(1010101010, $queueds->data[0]->get('to_send_at'));

        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'scheduled',
            'dir' => 'desc'
        ]);
        $this->assertEquals(5454545454, $queueds->data[0]->get('to_send_at'));
    }

    public function test_sorts_get_for_user_and_course()
    {
        $this->resetAfterTest(true);

        $this->create_test_queueds();

        // get all queueds for user: 1, course: 1
        $queueds = queued_repo::get_for_user(1, 1);
        $this->assertCount(4, $queueds->data);
        $this->assertEquals('date', $queueds->data[0]->get('subject'));

        // sort by id
        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'id',
            'dir' => 'asc'
        ]);
        $this->assertEquals(143000, $queueds->data[0]->get('id'));

        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'id',
            'dir' => 'desc'
        ]);
        $this->assertEquals(143006, $queueds->data[0]->get('id'));

        // sort by course
        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'course',
            'dir' => 'asc'
        ]);
        $this->assertEquals(1, $queueds->data[0]->get('course_id'));

        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'course',
            'dir' => 'desc'
        ]);
        $this->assertEquals(1, $queueds->data[0]->get('course_id'));

        // sort by subject
        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'subject',
            'dir' => 'asc'
        ]);
        $this->assertEquals('apple', $queueds->data[0]->get('subject'));

        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'subject',
            'dir' => 'desc'
        ]);
        $this->assertEquals('fig', $queueds->data[0]->get('subject'));

        // sort by (time) created
        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'created',
            'dir' => 'asc'
        ]);
        $this->assertEquals(1111111111, $queueds->data[0]->get('timecreated'));

        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'created',
            'dir' => 'desc'
        ]);
        $this->assertEquals(8888888888, $queueds->data[0]->get('timecreated'));

        // sort by (time) scheduled
        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'scheduled',
            'dir' => 'asc'
        ]);
        $this->assertEquals(1010101010, $queueds->data[0]->get('to_send_at'));

        $queueds = queued_repo::get_for_user(1, 1, [
            'sort' => 'scheduled',
            'dir' => 'desc'
        ]);
        $this->assertEquals(5454545454, $queueds->data[0]->get('to_send_at'));
    }

    public function test_gets_paginated_results_for_user()
    {
        $this->resetAfterTest(true);

        // create 30 queueds for user id: 1
        foreach (range(1, 30) as $i) {
            $this->create_message(true);
        }

        // get all queueds for user: 1
        $queueds = queued_repo::get_for_user(1, 0, [
            'sort' => 'id',
            'dir' => 'asc',
            'paginate' => true,
            'page' => '2',
            'per_page' => '4',
            'uri' => '/blocks/quickmail/queued.php?courseid=7&sort=subject&dir=asc',
        ]);

        $this->assertCount(4, $queueds->data);
        $this->assertInstanceOf(paginated::class, $queueds->pagination);
        $this->assertEquals(8, $queueds->pagination->page_count);
        $this->assertEquals(4, $queueds->pagination->offset);
        $this->assertEquals(4, $queueds->pagination->per_page);
        $this->assertEquals(2, $queueds->pagination->current_page);
        $this->assertEquals(3, $queueds->pagination->next_page);
        $this->assertEquals(1, $queueds->pagination->previous_page);
        $this->assertEquals(30, $queueds->pagination->total_count);
        $this->assertEquals('/blocks/quickmail/queued.php?courseid=7&sort=subject&dir=asc&page=2', $queueds->pagination->uri_for_page);
        $this->assertEquals('/blocks/quickmail/queued.php?courseid=7&sort=subject&dir=asc&page=1', $queueds->pagination->first_page_uri);
        $this->assertEquals('/blocks/quickmail/queued.php?courseid=7&sort=subject&dir=asc&page=8', $queueds->pagination->last_page_uri);
        $this->assertEquals('/blocks/quickmail/queued.php?courseid=7&sort=subject&dir=asc&page=3', $queueds->pagination->next_page_uri);
        $this->assertEquals('/blocks/quickmail/queued.php?courseid=7&sort=subject&dir=asc&page=1', $queueds->pagination->previous_page_uri);
    }

    ///////////////////////////////////////////////
    ///
    /// HELPERS
    /// 
    //////////////////////////////////////////////
    
    private function create_message($is_queued = false)
    {
        return message::create_new([
            'course_id' => 1,
            'user_id' => 1,
            'message_type' => 'email',
            'to_send_at' => $is_queued ? time() : 0
        ]);
    }

    private function create_test_queueds()
    {
        global $DB;

        // id: 143000
        $queued1 = $this->create_message(true);
        $queued1->set('course_id', 1);
        $queued1->set('subject', 'date');
        $queued1->update();
        $queued = $queued1->to_record();
        $queued->timecreated = 8888888888;
        $queued->to_send_at = 3232323232;
        $DB->update_record('block_quickmail_messages', $queued);

        // id: 143001
        $queued2 = $this->create_message(true);
        $queued2->set('course_id', 5);
        $queued2->set('subject', 'elderberry');
        $queued2->update();
        $queued = $queued2->to_record();
        $queued->timecreated = 4444444444;
        $queued->to_send_at = 5252525252;
        $DB->update_record('block_quickmail_messages', $queued);

        // id: 143002
        $queued3 = $this->create_message(true);
        $queued3->set('course_id', 3);
        $queued3->set('subject', 'coconut');
        $queued3->update();
        $queued = $queued3->to_record();
        $queued->timecreated = 7777777777;
        $queued->to_send_at = 1919191919;
        $DB->update_record('block_quickmail_messages', $queued);

        // id: 143003
        $queued4 = $this->create_message(true);
        $queued4->set('course_id', 1);
        $queued4->set('subject', 'apple');
        $queued4->update();
        $queued = $queued4->to_record();
        $queued->timecreated = 1111111111;
        $queued->to_send_at = 5454545454;
        $DB->update_record('block_quickmail_messages', $queued);

        // id: 143004
        $queued5 = $this->create_message(true);
        $queued5->set('course_id', 1);
        $queued5->set('subject', 'banana');
        $queued5->update();
        $queued = $queued5->to_record();
        $queued->timecreated = 2222222222;
        $queued->to_send_at = 3333333333;
        $DB->update_record('block_quickmail_messages', $queued);

        // id: 143005
        $queued6 = $this->create_message(true);
        $queued6->set('course_id', 2);
        $queued6->set('subject', 'grape');
        $queued6->update();
        $queued = $queued6->to_record();
        $queued->timecreated = 1212121212;
        $queued->to_send_at = 2525252525;
        $DB->update_record('block_quickmail_messages', $queued);

        // id: 143006
        $queued7 = $this->create_message(true);
        $queued7->set('course_id', 1);
        $queued7->set('subject', 'fig');
        $queued7->update();
        $queued = $queued7->to_record();
        $queued->timecreated = 3434343434;
        $queued->to_send_at = 1010101010;
        $DB->update_record('block_quickmail_messages', $queued);
    }

}