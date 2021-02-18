$(function() {
    // Handle change of "select course filter".
    var originalSelectValue = $('#select_course_filter').val();

    // When selected course id changes.
    $('#select_course_filter').change(function(e) {
        e.preventDefault();

        // If the value actually changed, redirect to the correct page.
        if (originalSelectValue !== this.value) {
            window.location.href = 'sent.php?courseid=' + this.value;
        }
    });
    
    $(document).click(function(e) {
        if ($(e.target).hasClass("btn-delete-sent")) {
            if ( ! confirm('Delete this sent message?')) {
                e.preventDefault();
            }
        }
    });
});
