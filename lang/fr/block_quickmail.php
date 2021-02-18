<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    block_quickmail
 * @copyright  2008 onwards Louisiana State University
 * @copyright  2008 onwards Chad Mazilly, Robert Russo, Jason Peak, Dave Elliott, Adam Zapletal, Philip Cali
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Block.
//$string['pluginname'] = 'Courriel'; //'Quickmail';
$string['open_broadcast'] = 'Ecrire un nouveau message'; //'Compose Message';
$string['open_compose'] = 'Ecrire un nouveau message'; //'Compose Message';
$string['manage_drafts'] = 'Voir les brouillons'; //'View Drafts';
$string['view_queued'] = 'Voir les messages planifiés'; //'View Scheduled';
$string['view_sent'] = 'Voir les messages envoyés'; //'View Sent Messages';
$string['view_message_detail'] = 'Voir les détails du message'; //'View Message Details';
$string['manage_signatures'] = 'Mes signatures'; //'My Signatures';
$string['migrate'] = 'Migrer les données'; //'Migrate Data';
$string['manage_alternates'] = 'Adresses secondaires'; //'Alternate Emails';
$string['create_notification'] = 'Créer une notification'; //'Create Notification';
$string['notifications'] = 'Notifications'; //'Notifications';
$string['messageprovider:quickmessage'] = 'Message Courriel'; //'Quickmail message';

// Tasks.
$string['send_all_ready_messages_task'] = 'Envoyer tous les messages Courriel planifiés'; //'Send all scheduled Quickmail messages';
$string['queue_scheduled_notifications_task'] = 'Queue any scheduled Quickmail notifications to be sent'; //'Queue any scheduled Quickmail notifications to be sent';
$string['migrate_legacy_data_task'] = 'Migrer les données historiques de la v1 à la v2 Courriel'; //'Migrate historical data from Quickmail v1 to v2';

// Capabilities.
//$string['quickmail:cansend'] = 'Autorise les utilisateurs à envoyer des messages par le biais de Courriel.'; //'Send Quickmail messages in a course';
//$string['quickmail:canconfig'] = 'Autorise les utilisateurs à configurer l\'instance de Courriel.'; //'Configure Quickmail settings in a course';
//$string['quickmail:allowalternate'] = 'Autoriser les utilisateurs à ajouter une adresse secondaire pour les cours.'; //'Create alternate email addresses to send from';
$string['quickmail:allowcoursealternate'] = 'Autoriser les utilisateurs à ajouter des adresses secondaires pour partager avec les autres enseignants du cours'; //'Create alternate email addresses to share with other course instructors';
//$string['quickmail:addinstance'] = 'Ajouter un nouveau bloc Courriel'; //'Add a new Quickmail block to a course page';
//$string['quickmail:myaddinstance'] = 'Ajouter un nouveau bloc Courriel à ma page'; //'Add a new Quickmail block to the /my page';
$string['quickmail:viewgroupusers'] = 'Voir tous les utilisateurs dans tous les groupes'; //'View all users in every group';
$string['quickmail:createnotifications'] = 'Créer des auto notifications dans Courriel'; //'Create auto notifications in Quickmail';

// General terms.
$string['duplicate'] = 'Dupliquer'; //'Duplicate';
$string['open'] = 'Ouvrir'; //'Open';
$string['create_new'] = 'Créer un nouveau'; //'Create New';
//$string['actions'] = 'Actions'; //'Actions';
$string['title'] = 'Titre'; //'Title';
$string['status'] = 'Status'; //'Status';
$string['here'] = 'ici'; //'here';
$string['view'] = 'Voir'; //'View';
$string['back_to_course'] = 'Retourner dans le cours'; //'Back to course';
$string['back_to_mypage'] = 'Retourner dans le tableau de bord'; //'Back to My page';

// Message status.
$string['drafted'] = 'Brouillons'; //'Drafted';
$string['queued'] = 'Planifié'; //'Scheduled';
$string['sending'] = 'En cours d\'envoi '; //'Sending';
$string['sent'] = 'Envoyé'; //'Sent';
$string['deleted'] = 'Supprimé'; //'Deleted';

// Messaging terms.
$string['included_ids_label'] = 'A'; //'To';
$string['excluded_ids_label'] = 'Exclure'; //'Exclude';
$string['all_in_course'] = 'Tous ceux du cours'; //'All In Course';
$string['compose'] = 'Rédiger un message de cours'; //'Compose Course Message';
$string['broadcast'] = 'Rédiger un message d\'admin'; //'Compose Admin Message';
$string['subject'] = 'Sujet'; //'Subject';
$string['message_preview'] = 'Prévisualiser le message'; //'Message Preview';
$string['message_details'] = 'Détails du message'; //'Message Details';
$string['preview_no_subject'] = '(Pas de sujet)'; //'(No subject)';
//$string['body'] = 'Corps'; //'Body';
$string['preview_no_body'] = '(Pas de contenu)'; //'(No content)';
$string['send_at'] = 'Envoyer à'; //'Send at';
$string['send_now'] = 'Envoyer maintenant'; //'Send Now';
$string['send_message'] = 'Envoyer message'; //'Send Message';
//$string['additional_emails'] = 'Adresses électroniques secondaires'; //'Additional Recipient Emails';
$string['unqueue'] = 'Sortir de la file d\'attente'; //Unqueue';
$string['no_queued'] = 'Vous n\'avez pas de messages planifiés'; //'You have no scheduled messages.';
$string['message_no_record'] = 'Impossible de trouver ce message.'; //'Could not find that message.';
$string['queued_no_record'] = 'Impossible de trouver ce message planifié.'; //'Could not find that queued message.';
$string['send_as_tasks'] = 'Envoyer tous les messages comme des taches de fonds'; //'Send all messages as background tasks.';
//$string['receipt'] = 'Recevoir une copie'; //'Receive a send report';
//TODO // $string['mentor_copy'] = ''; //Send copies to mentors of recipients?';
//TODO// $string['mentors_copied'] = ''; //Send copies to mentors';
//TODO // $string['mentor_copy_subject_prefix'] = ''; //[Mentor Copy]';
//TODO // $string['mentor_copy_message_prefix'] = ''; //<p><strong>You are receiving this message because you are assigned as the mentor of</strong>: {$a}. The following is a copy of the message that was also sent to your mentee.</p>';
//TODO // $string['profile_mentor_copy_message_prefix'] = ''; //<p><strong>You are receiving this message because you are assigned as {$a} of the intended recipient</strong>. The following is a copy of what was sent to the recipient.</p>';
$string['select_message_type'] = 'Envoyer le message en tant que'; //'Send message as';
$string['message_type_message'] = 'Message Moodle';//'Moodle Message';
$string['message_type_email'] = 'Courrier electronique'; //'Email';
$string['attached_files'] = 'Fichiers joints ({$a})'; //'Attached Files ({$a})';
$string['download_file_content'] = 'Télécharger le contenu du fichier'; //'Download File Content';
$string['included_recipients_desc'] = 'Qui devrait recevoir ce message ?'; //'Who should receive this message?';
$string['no_included_recipients'] = 'Pas de destinataire inclus'; //'No included recipients';
$string['excluded_recipients_desc'] = 'Qui NE devrait PAS recevoir ce message ?'; //'Who should NOT receive this message?';
$string['no_excluded_recipients'] = 'Pas de destinataire exclus'; //'No excluded recipients';
$string['created'] = 'Crée'; //'Created';
$string['last_updated'] = 'Derniere mise à jour'; //'Last Updated';
$string['send_schedule'] = 'Envoi planifié'; //Send Schedule';
$string['scheduled_time'] = 'Heure prévue'; //Scheduled Time';
$string['last_run_at'] = 'Dernier passage'; //Last Run';
$string['next_run_at'] = 'Prochain passage'; //Next Run';
$string['sent_at'] = 'Envoyé à'; //Sent At';
//$string['attachments'] = 'Pièce(s) jointe(s)'; //Attachments';
$string['recipients'] = 'Destinataires'; //Recipients';
$string['failed_recipients'] = 'Destinataires en attente ou en échec'; //Failed or Pending Recipients';
$string['pending_recipients'] = 'Destinataires en attente'; //Pending Recipients';
$string['failed_recipients_promise'] = 'Nous allons continuer à essayer d\'envoyer un message à ces destinataires jusqu\à ce que le message soit envoyé avec succès'; //We will continue attempting to send to these recipients until the message has been successfully sent.';
$string['success_recipients_promise'] = 'Ces destinataires ont tous reçu un message du systeme'; //These recipients were all successfully messaged by the system.';
$string['pending_recipients_promise'] = 'L\'envoi de messages à ces destinataires est en cours. Revenez plus tard pour voir les eventuels échecs d\'envoi '; //These recipients are currently being messaged, check back later to view any failures.';
$string['unqueue_scheduled_modal_title'] = 'Sortir le message planifié de la file d\'attente '; //Unqueue Scheduled Message';
$string['unqueue_scheduled_confirm_message'] = 'Cela va annuler la planification d\'envoi de ce message et le sauvegarder en tant que brouillon. Êtes vous sûr?'; //This will unschedule this message to be sent and save the message as a draft, are you sure?';
$string['send_now_scheduled_modal_title'] = 'Envoyer le message maintenant'; //Send Message Now';
$string['send_now_scheduled_confirm_message'] = 'Cela annule la planification et envoie directement le message. Êtes vous sûr?'; //This will forget the schedule and send the message now, are you sure?';
$string['send_receipt_subject_addendage'] = 'Message envoyé'; //Sent Message';
$string['found_filtered_users'] = 'Utilisateur(s) {$a} trouvé(s)'; //Found {$a} user(s)';
$string['never'] = 'Jamais'; //Never';
$string['save'] = 'Enregistrer'; //Save';
$string['courseneveraccessed'] = 'Jamais accédé'; //Never Accessed';
$string['message_sent_now'] = 'Message envoyé'; //Message sent';
$string['message_queued'] = 'Message planifié à l\'envoi'; //Message scheduled to be sent';
$string['message_sent_asap'] = 'Le message sera envoyé dans les plus bref délais'; //Message will be sent shortly';
$string['message_unqueued'] = 'Message planifié sorti de la file d\'attente '; //Message unscheduled';
$string['message_not_found'] = 'Message introuvable'; //Could not find that message';
$string['message_deleted'] = 'Message supprimé'; //Message deleted';

// Notifications.
$string['notification_name'] = 'Titre'; //Title';
$string['notification_name_help'] = 'Une courte description pour t\'aider à identifier cette notification parmi d\'autres'; //A short description of this notification to help you easily identify this from other notifications you may have set up.';
$string['notification_review'] = 'Revoir votre notification'; //Review Your Notification';
$string['notified_by'] = 'Notifié par'; //Notified By';
$string['enable_notification'] = 'Activé la notification'; //Enable Notification';
$string['no_notifications'] = 'Tu n\'as crée aucune notification'; //You have no created notifications.';
$string['notification_not_found'] = 'Impossible de trouver cette notification'; //Could not find that notification.';
$string['notification_created'] = 'Notification créée'; //Notification created.';
$string['notification_updated'] = 'Notificaton mise à jour'; //Notification updated.';
$string['notification_deleted'] = 'Notification supprimée'; //Notification deleted.';
$string['notification_not_updated'] = 'Notification non mise à jour'; //Notification updated.';
$string['notification_model'] = 'Modèle de notification'; //Notification Model';
$string['notification_conditions'] = 'Conditions'; //Conditions';
$string['notification_conditions_description'] = 'Précise les conditions de la notification. N\'importe quel destinataire qui les respecte sera notifié '; //Specify this notifications conditions. Any recipients that meets these conditions will be notified.';
$string['select_notification_model'] = 'Modèle de notification {$a} selectionné '; //Select {$a} Notification Model';
$string['invalid_notification_model'] = 'Modèle de notification selectionné invalide'; //Invalid notification model selection.';
$string['time_delay_unit'] = 'Temporisation'; //Time Delay';
$string['time_delay_summary'] = 'Temporisation'; //Time Delay';
$string['time_delay_unit_help'] = 'Une durée optionnelle de temps à attendre avant l\'envoi de la notification'; //An optional amount of time to wait before the notification is sent.';
$string['mute_time_unit'] = 'Temps muet'; //Mute Time';
$string['mute_time_summary'] = 'Temps muet'; //Mute Time';
$string['mute_time_unit_help'] = 'Une durée optionnel de temps qui doit s\'écouler avant l\'envoi automatique de la notification '; //An optional amount of time that must pass in between this notification being automatically sent.';
$string['edit_notification'] = 'Modifier la notifiation'; //Edit Notification';
$string['edit_conditions'] = 'Modifier les conditions'; //Edit Conditions';
$string['edit_schedule'] = 'Modifier la planification'; //Edit Schedule';
$string['edit_event_details'] = 'Modifier les détails de l\'évènement'; //Edit Event Details';
$string['edit_message'] = 'Modifier le message'; //Edit Message';

// Notification types.
$string['notification_type'] = 'Type de notification'; //Notification Type';
$string['notification_type_reminder'] = 'Rappel'; //Reminder';
$string['notification_type_event'] = 'Événement'; //Event';
$string['invalid_notification_type'] = 'La notification doit etre de type "Rappel" ou "Événement" '; //Notification type must be "Reminder" or "Event".';
$string['notification_type_reminder_description'] = 'Un message récurrent qui sera automatiquement envoyé sur une base programmée. Les rappels peuvent être utilisés pour informer les destinataires des activités à venir, des dates d\'échéance, de la participation aux cours, etc'; //A recurring message that will automatically be sent on a scheduled basis. Reminders can be used to alert recipients of upcoming activities, due dates, class participation, and more.';
$string['notification_type_event_description'] = 'Un message automatisé qui est envoyé en réaction à un événement spécifique. Les événements peuvent être utilisés pour alerter les destinataires que les activités ont été réalisées, que les devoirs ont été soumis ou notés, et plus encore.'; //An automated message that is sent as a reaction to a specific event. Events can be used to alert recipients that activities have been completed, assignments have been submitted or graded, and more.';

// Notification models.

// Reminder: course_non_participation.
$string['notification_model_reminder_course_non_participation'] = 'Non-participation aux cours'; //Course Non-Participation';
$string['notification_model_reminder_course_non_participation_description'] = 'Aviser les participants au cours qui n\'ont pas accédé au cours dans un laps de temps donné.'; //Notify course participants that have not accessed the course in a given amount of time.';
$string['notification_model_reminder_course_non_participation_condition_description'] = ''; //Specify the amount of time since last course access. If a course participant has not accessed the course in this amount of time, they will be notified.';
$string['condition_summary_reminder_course_non_participation'] = 'Précisez le temps écoulé depuis le dernier accès au cours. Si un participant au cours n\'a pas accédé au cours dans ce laps de temps, il en sera informé.'; //All who have not accessed the course in {$a->time_amount} {$a->time_unit}';

// Reminder: course_grade_range.
$string['notification_model_reminder_course_grade_range'] = 'Fourchette de notes du cours'; //Course Grade Range';
$string['notification_model_reminder_course_grade_range_description'] = 'Aviser les participants aux cours qui ont actuellement une note dans la fourchette donnée.'; //Notify course participants which currently have a grade within the given range.';
$string['notification_model_reminder_course_grade_range_condition_description'] = 'Précisez la fourchette de grades. Si un participant au cours a actuellement une note comprise dans cette fourchette, il en sera informé.'; //Specify the grade range. If a course participant currently has within this range, they will be notified.';
$string['condition_summary_reminder_course_grade_range'] = 'Tous ceux qui ont une note comprise entre {$a->grade_greater_than} et {$a->grade_less_than}'; //All who have a grade between {$a->grade_greater_than} and {$a->grade_less_than}';

// Event: course_entered.
$string['notification_model_event_course_entered'] = 'Cours suivi'; //Course Entered';
$string['notification_model_event_course_entered_description'] = 'Aviser un participant au cours lorsqu\'il accède au cours pour la première fois.'; //Notify a course participant when they access the course for the first time.';

// Event: assignment_submitted.

// Notification conditions.
$string['set_notification_conditions'] = 'Fixer les conditions de notification de {$a->model} {$a->type}'; //Set {$a->model} {$a->type} Notification Conditions';
$string['time_unit'] = 'Unité de temps'; //Unit of time';
$string['invalid_time_unit'] = 'Unité de temps invalide'; //Invalid unit of time.';
$string['invalid_schedule_time_unit'] = 'Unité de temps non valable pour la planification'; //Invalid unit of time for schedule.';
$string['invalid_condition_time_unit'] = 'Unité de temps non valable pour les conditions'; //Invalid unit of time for condition.';
$string['time_amount'] = 'Durée'; //Amount of time';
$string['invalid_time_amount'] = 'Durée invalide'; //Invalid amount of time.';
$string['invalid_schedule_time_amount'] = 'Durée invalide pour la planification'; //Invalid amount of time for schedule.';
$string['invalid_condition_time_amount'] = 'Durée invalide pour les conditions'; //Invalid amount of time for condition.';
$string['time_relation'] = 'Avant ou après'; //Before or After';
$string['invalid_time_relation'] = 'Doit obligatoirement être "avant" ou "après".'; //Must be "before" or "after".';
$string['condition_grade_greater_than'] = 'Note supérieure à'; //Grade greater than';
$string['invalid_condition_grade_greater_than'] = 'Valeur invalide de "Note supérieure à"'; //Invalid grade greater than value.';
$string['condition_grade_less_than'] = 'Note inférieure à'; //Grade less than';
$string['invalid_condition_grade_less_than'] = 'Valeur invalide de "Note inférieure à"'; //Invalid grade less than value.';

// Reminder notification schedules.
$string['notification_schedule'] = 'Planification'; //Schedule';
$string['set_notification_schedule'] = 'Configurer la planification de notification de {$a->model} {$a->type}'; //Set {$a->model} {$a->type} Notification Schedule';
$string['set_notification_schedule_description'] = 'Précisez la fréquence d\'envoi de cette notification, la date à laquelle elle doit commencer et la date à laquelle elle doit se terminer. Si aucune date de fin n\'est spécifiée, cette notification continuera à être envoyée jusqu\'à ce qu\'elle soit désactivée ou supprimée.'; //Specify how often this notification should be sent, when it should start, and when it should end. If no end date is specified, this notification will continue to be sent until it is disabled or deleted.';
$string['schedule_begin_at'] = 'Date de début'; //Begin date';
$string['schedule_end_at'] = 'Date de fin'; //End date';
$string['notification_already_sent'] = 'Cette notification a déjà été envoyée au moins une fois'; //This notification has already been sent at least once.';
$string['time_unit_day'] = 'Jour'; //Day';
$string['time_unit_days'] = 'Jours'; //Days';
$string['time_unit_week'] = 'Semaine'; //Week';
$string['time_unit_weeks'] = 'Semaines'; //Weeks';
$string['time_unit_month'] = 'Mois'; //Month';
$string['time_unit_months'] = 'Mois'; //Months';

$string['time_once_a'] = 'Une fois par'; //Once a';
$string['time_every'] = 'Chaque'; //Every';
$string['time_beginning'] = 'A partir de'; //Beginning';
$string['time_ending'] = 'Jusqu\'à'; //Ending';

// Event notification details.
$string['set_event_details'] = 'Configurer les détails de l\'evenement de notification de {$a->model} '; //Set {$a->model} Event Notification Details';
$string['set_event_details_description'] = 'Préciser les options supplémentaires concernant l\'événement'; //Specify additional options about the event.';

// Create notification message.
$string['create_notification_message'] = 'Créer le message de notification de {$a->model} {$a->type}'; //Create {$a->model} {$a->type} Notification Message';
$string['create_notification_message_description'] = 'Créez maintenant le message que vous souhaitez voir envoyé lors de la diffusion de cette notification.'; //Now create the message that you\'d like to be sent when this notification goes out.';
$string['is_enabled'] = 'Activé'; //Enabled';
$string['notification_is_enabled'] = 'Notification activée'; //Notification Enabled';
$string['notification_is_enabled_help'] = 'Si elle est activée, cette notification sera active, sinon, la notification sera désactivée jusqu\'à ce que vous l\'activiez.'; //If enabled, this notification will be active, otherwise, the notification will be disabled until you enable it.';

// History.
$string['no_sents'] = 'Vous n\'avez pas d\'historique de messages envoyés'; //You have no sent message history.';
$string['sent_messages'] = 'Historique des messages envoyés'; //Sent Message History';
$string['sent_no_record'] = 'Impossible de trouver ce message envoyé.';

// Drafts.
//$string['drafts'] = 'Voir les brouillons'; //Drafts';
//$string['no_drafts'] = 'Vous n\'avez pas de brouillon.'; //You have no message drafts.';
$string['save_draft'] = 'Sauvegarder le brouillon'; //Save Draft';
$string['draft_no_record'] = 'Impossible de trouver ce brouillon'; //Could not find that draft message.';
$string['could_not_duplicate'] = 'Impossible de reproduire ce brouillon. Veuillez réessayer.'; //Could not duplicate this draft. Please try again.';
$string['must_be_draft_to_duplicate'] = 'Le message doit obligatoirement être un brouillon pour pouvoir le dupliquer.'; //Message must be a draft to duplicate.';
$string['must_be_owner_to_duplicate'] = 'Désolé, ce brouillon ne vous appartient pas et ne peut être dupliquer.'; //Sorry, that draft does not belong to you and cannot be duplicated.';
$string['delete_draft_modal_title'] = 'Supprimer le brouillon'; //Delete Message Draft';
$string['delete_draft_confirm_message'] = 'Cela supprimera définitivement votre brouillon. Êtes vous sûr?'; //This will permanently delete your draft message, are you sure?';
$string['duplicate_draft_modal_title'] = 'Dupliquer le brouillon'; //Duplicate Message Draft';
$string['duplicate_draft_confirm_message'] = 'Cela créera une copie du brouillon. Êtes vous sûr?'; //This will make a copy of the draft, are you sure?';

// Alternates.
//$string['alternate'] = 'Adresses secondaires'; //Alternate Email';
//$string['no_alternates'] = 'Pas d\'adresse secondaire de trouvée pour {$a->fullname}. Poursuivre la création.'; //You have no alternate emails. Create a new one now!';
//$string['alternate_new'] = 'Ajouter des adresses secondaires'; //Add Alternate Address';
$string['alternate_delete'] = 'Supprimer des adresses secondaires'; //Delete Alternate Address';
$string['alternate_availability'] = 'Qui peut envoyer à partir de cet adresse ?'; //Who can send from this email?';
$string['alternate_availability_only'] = 'Moi uniquement et uniquement dans {$a->courseshortname}'; //Only me, in {$a->courseshortname} only';
$string['alternate_availability_user'] = 'Moi uniquement, dans n\'importe quel cours'; //Only me, in any course';
$string['alternate_availability_course'] = 'Tous les roles autorisés dans {$a->courseshortname}'; //All allowed roles in {$a->courseshortname}';
$string['alternate_resend_confirmation'] = 'Renvoyer le courrier électronique de confirmation'; //Re-send confirm email';
$string['alternate_created'] = 'Adresse secondaire crée avec succès'; //Alternate sending email successfully created!';
$string['alternate_delete_confirm'] = 'Cela supprimera définitivement votre adresse secondaire. Êtes vous sûr?'; //This will permanently delete your alternate email, are you sure?';
$string['alternate_deleted'] = 'Adresse secondaire supprimée'; //Your alternate sending email has been deleted.';
$string['alternate_confirmed'] = 'Confirmé'; //Confirmed';
$string['alternate_email_not_found'] = 'Impossible de trouver cette Adresse secondaire.'; //Could not find that alternate email.';
$string['alternate_owner_must_confirm'] = 'Il faut obligatoirement être le propriétaire de cette adresse pour confirmer.'; //Must be the owner of the email to confirm.';
$string['alternate_owner_must_delete'] = 'Il faut obligatoirement être le propriétaire de cette adresse pour supprimer'; //Must be the owner of the email to delete.';
$string['alternate_already_confirmed'] = 'Ce courrier électronique  a déjà été confirmé.'; //That email has already been confirmed.';
$string['alternate_invalid_token'] = 'Jeton de confirmation invalide.'; //Invalid confirmation token.';
$string['alternate_waiting'] = 'En attente'; //Waiting';
$string['alternate_activated'] = 'L\'adresse secondaire {$a} peut maintenant être utilisée'; //Alternate email {$a} can now be used!';
$string['alternate_confirmation_email_resent'] = 'Le courrier électronique de confirmation a été renvoyé!'; //The confirmation email has been resent!';
$string['eventalternateemailadded'] = 'Adresse secondaire ajoutée'; //Alternate email added';
$string['eventalternateemailadded_desc'] = 'L\'utilisateur avec l\'identifiant {$a->user_id} a ajouté une adresse secondaire : {$a->email}.'; //The user with id {$a->user_id} has added an alternate email: {$a->email}';
//$string['alternate_subject'] = 'Vérification de l\'adresse secondaire'; //Alternate email address verification';
$string['coursealternate_not_allowed'] = 'Vous n\'êtes pas en mesure de partager cette adresse secondaire dans ce cours.'; //You are not able to share this alternate email is this course.';

// Signatures.
$string['signature'] = 'Signature'; //Signature';
$string['signatures'] = 'Signatures'; //Signatures';
$string['signature_title_required'] = 'Un titre de signature est requis.'; //A signature title is required.';
$string['signature_title_must_be_unique'] = 'Le titre de la signature doit être unique.'; //The signature title must be unique.';
$string['signature_signature_required'] = 'Une signature est requise.'; //A signature is required.';
$string['select_signature_for_edit'] = 'Sélectionnez la signature à modifier'; //Select Signature To Edit';
$string['save_signature'] = 'Enregistrer la signature'; //Save Signature';
$string['delete_signature'] = 'Supprimer la signature'; //Delete Signature';
$string['user_signature_deleted'] = 'Votre signature a été supprimée'; //Your signature has been deleted.';
$string['no_signatures_create'] = 'Vous n\'avez pas de signatures. {$a}.'; //You have no signatures. {$a}.';
$string['delete_signature_modal_title'] = 'Supprimer la signature'; //Delete Signature';
$string['delete_signature_confirm_message'] = 'Cela supprimera définitivement votre signature. Êtes vous sûr?'; //This will permanently delete your signature, are you sure?';

// Help buttons.
//$string['additional_emails'] = 'Adresses électroniques secondaires'; //Additional emails';
/*$string['additional_emails_help'] = 'Autres adresses électroniques vers lesquelles vous souhaiteriez envoyer le message (séparez ces adresses par une virgule ou un point virgule). Exemple:

email1@exemple.com, email2@exemple.com'; *//*Other email addresses you would like the message sent to, in a comma or semicolon separated list. Example:

 email1@example.com, email2@example.com
 ';
 */
//$string['receipt_help'] = 'Recevoir une copie du message envoyé'; //Send a confirmation email to the message sender when the message has been sent by default. This setting is overridable by course configuration.';
$string['receipt_configuration'] = 'Envoyer un courrier électronique de confirmation à l\'expéditeur du message lorsque celui-ci a été envoyé. Ce paramètre sera la préférence par défaut de l\'expéditeur.'; //Send a confirmation email to the message sender when the message has been sent. This setting will be the default preference for the sender.';
$string['receipt_configuration_help'] = 'Envoyer un courrier électronique de confirmation à l\'expéditeur du message lorsque celui-ci a été envoyé. Ce paramètre sera la préférence par défaut de l\'expéditeur.'; //Send a confirmation email to the message sender when the message has been sent. This setting will be the default preference for the sender.';
$string['mentor_copy_help'] = 'S\'ils sont sélectionnés, les mentors de vos destinataires recevront une copie du message.'; //If selected, any mentors of your recipients will receive a copy of the message.';
$string['from_email'] = 'Adresse électronique de l\'expéditeur'; //Sender email address';
$string['from_email_help'] = 'L\'adresse électronique à partir de laquelle ce message sera envoyé. Vous pouvez ajouter d\'autres adresses de remplacement par le biais du menu du bloc de la page du cours.'; //The email address that this message will be sent from. You may add additional alternate addresses through the block menu on the course page.';
$string['allow_mentor_copy'] = 'Permettre aux expéditeurs d\'envoyer automatiquement un message aux mentors d\'un destinataire lors de l\'envoi'; //Allow senders to automatically message a recipient\'s mentors when sending';
$string['allow_mentor_copy_help'] = 'Si non, cette option ne sera pas visible pour les expéditeurs et les mentors ne seront jamais copiés. Si oui, l\'expéditeur aura la possibilité de choisir par message. Si elle est forcée, cette option sera forcée sans possibilité de désélection.'; //If no, this option will not be visible to senders and mentors will never be copied. If yes, the sender will have the option to choose per message. If forced, this option will be forced with no option for de-selecting.';
$string['send_as_tasks_help'] = 'Si cette option est sélectionnée, tous les messages seront envoyés de manière asynchrone en tant que tâches cron. Sinon, l\'envoi sera immédiat.'; //If selected, will send all messages asynchronously as cron tasks. Otherwise, will send immediately.';

// Settings management.
$string['restore_default_modal_title'] = 'Rétablir la configuration par défaut'; //Restore Default Configuration';
$string['restore_default_confirm_message'] = 'Cela va rétablir les paramètres par défaut de Courriel. Êtes vous sûr?'; //This will restore this course\'s Quickmail settings to default, are you sure?';
$string['reset_success_message'] = 'Les paramètres par défaut de Courriel ont été rétablis'; //Quickmail default settings have been restored!';

// Configuration.
//$string['allowstudents'] = 'Autoriser les étudiants à utiliser Courriel'; //Allow students to use Quickmail';
$string['allowstudents_desc'] = 'Autoriser les étudiants à utiliser Courriel. Si vous choisissez "Jamais", le bloc ne peut pas être configuré pour permettre aux étudiants d\'accéder au niveau cours.'; //Allow students to use Quickmail. If you choose "Never", the block cannot be configured to allow students access at the course level.';
$string['selectable_roles'] = 'Rôles sélectionnables'; //Selectable roles';
$string['selectable_roles_desc'] = 'Ces rôles pourront être sélectionnés lors de la composition d\'un message. Ce paramètre peut être modifié en fonction de la configuration du cours.'; //These roles will be available for selection when composing a message. This setting is overridable by course configuration.';
$string['selectable_roles_configuration'] = 'Ces rôles pourront être sélectionnés lors de la composition d\'un message.'; //These roles will be available for selection when composing a message.';
$string['selectable_roles_configuration_help'] = 'These roles will be available for selection when composing a message.'; //These roles will be available for selection when composing a message.';
$string['email_profile_fields'] = 'Champs de profil du courrier électronique'; //Email profile fields';
$string['email_profile_fields_desc'] = 'Ces champs de profil seront automatiquement envoyés par courrier électronique s\'ils sont définis pour l\'utilisateur destinataire.'; //These profile fields will be automatically emailed if they are set for the recipient user.';
//$string['prepend_class'] = 'Nom du cours dans l\'objet'; //Prepend Course name';
//$string['prepend_class_desc'] = 'Ajoute l\'identification du cours dans l\'objet du message.'; //Prepend course identifying information to the subject of the message. This setting is overridable by course configuration.';
$string['prepend_class_configuration'] = 'Préfixez les informations d\'identification du parcours à l\'objet du message.'; //Prepend course identifying information to the subject of the message.';
$string['prepend_class_configuration_help'] = 'Préfixez les informations d\'identification du parcours à l\'objet du message.'; //Prepend course identifying information to the subject of the message.';
//$string['ferpa'] = 'Mode FERPA'; //FERPA Mode';
//$string['ferpa_desc'] = 'Permet au système de prendre en compte soit le réglage des groupes du cours, soit en ignorant les réglage des groupes mais en faisant des groupes séparés, soit en ignorant la notion de groupe du cours.<br>FERPA : Family Educational Rights and Privacy Act'; //Allows the system to behave either according to the course groupmode setting, ignoring the groupmode setting but separating groups, or ignoring groups altogether.';
$string['strictferpa'] = 'Toujours séparer les groupes'; //Always Separate Groups';
//$string['courseferpa'] = 'Respecte le mode du cours'; //Respect Course Mode';
//$string['noferpa'] = 'Pas de respect de groupe'; //No Group Respect';
$string['downloads'] = 'Nécessite d\'être connecter pour les pièces jointes'; //Require login for attachments';
$string['downloads_desc'] = 'Ce paramètre détermine si les pièces jointes sont accessibles uniquement aux utilisateurs Moodle connectés'; //This setting determines if attachments are available only to logged in Moodle users';
$string['additionalemail'] = 'Autoriser les messages vers des adresses électroniques externes'; //Allow emails to external email addresses';
$string['additionalemail_desc'] = 'Si cette option est activée, les messages de Courriel sont aussi envoyés aux adresses électroniques externes que l\'utilisateur a saisi dans le formulaire.'; //If this option is enabled, the sender will have the ability to send messages to additional emails outside of Moodle';
$string['message_type'] = 'Envoyer des messages Courriel en tant que'; //Send Quickmail messages as';
$string['message_type_desc'] = 'Permet d\'envoyer des messages Courriel sous forme de message Moodle, de courrier électronique traditionnel ou à la préférence de l\'expéditeur.'; //Allows Quickmail messages to be sent as a Moodle message, traditional email, or sender preference.';
$string['default_message_type'] = 'Méthode préférée d\'envoi des messages'; //Preferred message sending method';
$string['default_message_type_configuration'] = 'Ce paramètre sera la méthode d\'envoi par défaut pour toute personne composant un message dans ce cours. L\'expéditeur pourra passer outre lors de la composition du message.'; //This setting will be the default sending method for anyone composing a message in this course. The sender will be able to override when composing the message.';
$string['default_message_type_configuration_help'] = 'Ce paramètre sera la méthode d\'envoi par défaut pour toute personne composant un message dans ce cours. L\'expéditeur pourra passer outre lors de la composition du message.'; //This setting will be the default sending method for anyone composing a message in this course. The sender will be able to override when composing the message.';
$string['default_message_type_desc'] = 'Envoyez vos messages sous forme de messages Moodle ou de courrier électronique traditionnel.'; //Send your messages as Moodle Messages or traditional email.';
$string['message_types_available'] = 'Restrictions concernant le type de message'; //Message message type restrictions';
$string['message_types_available_desc'] = 'Limiter Courriel à envoyer les messages sous forme de messages Moodle, de courriels traditionnels ou à la préférences de l\'expéditeur.'; //Restrict Quickmail messages to be sent as Moodle Messages, traditional emails, or sender preference.';
$string['message_type_available_all'] = 'Aucune restriction, préférence de l\'expéditeur'; //No restrictions, sender preference';
$string['message_type_available_message'] = 'Restreindre uniquement aux messages Moodle'; //Restrict to Moodle messages only';
$string['message_type_available_email'] = 'Restreindre uniquement au courrier électronique traditionnel'; //Restrict to traditional email only';
$string['select_allowed_user_fields'] = 'Champs de données utilisateur pris en charge'; //Supported user data fields';
$string['select_allowed_user_fields_desc'] = 'Les expéditeurs pourront se référer aux champs sélectionnés pour rendre le contenu du message dynamique et spécifique au destinataire. Ex : "[:firstname:]"'; //Senders will be able to reference the selected fields to make message content dynamic and specific to the recipient. Ex: "[:firstname:]"';
$string['notifications_enabled'] = 'Activer les notifications de Courriel'; //Enable Quickmail Notifications';
$string['notifications_enabled_desc'] = 'Permettre aux cours de créer des notifications automatisées, y compris des rappels et des réponses aux événements.'; //Allow courses to create automated notifications including reminders and event responses.';
$string['migration_chunk_size'] = 'Taille des lots pour la migration'; //Migration Chunk Size';
$string['migration_chunk_size_desc'] = 'Nombre d\'enregistrements qui devraient être traités par la tâche de migration des données héritées à chaque fois qu\'elle est exécutée, si elle est activée.'; //Number of records that should be processed by the legacy data migration task each time it is run, if enabled.';
$string['send_now_threshold'] = 'Envoyer maintenant le seuil'; //Send Now Threshold';
$string['send_now_threshold_desc'] = 'Forcer l\'envoi immédiat d\'un message non programmé si le nombre de destinataires est égal ou inférieur à ce nombre, même si le bloc est configuré pour envoyer des messages en tâche de fond. La valeur 0 ignore ce paramètre.'; //Force a non-scheduled message to be sent immediately if the number of recipients is this number or less, even if the block is configured to send messages as background tasks. Setting of 0 will ignore this setting.';
$string['picker_style_option_title'] = 'Interface préféré de selection des destinataires'; //My Preferred Recipient Picker Style';
$string['picker_style_option_title_help'] = 'Votre interface personnelle préférée pour sélectionner les destinataires lors de la composition d\'un message.'; //Your personally preferred interface for selecting recipients when composing a message.';
$string['picker_style_autocomplete'] = 'Autocomplétion'; //Autocomplete';
$string['picker_style_multiselect'] = 'Séléction multiple'; //Multiselect';

// Redirect messages.
$string['redirect_back_to_course_from_message_after_duplicate'] = 'Votre message a été dupliqué avec succès.'; //Your message has been successfully duplicated.';
$string['redirect_back_to_course_from_message_after_save'] = 'Votre brouillon a été sauvegardé.'; //Your draft has been saved.';
$string['redirect_back_to_course_from_notifications_not_enabled'] = 'Les notifications Courriel sont désactivées pour votre site.'; //Quickmail notifications are disabled for your site.';
$string['redirect_back_from_message_detail_message_deleted'] = 'Le message que vous tentez de consulter a été supprimé.'; //The message you are attempting to view has been deleted.';
$string['redirect_back_from_message_detail_no_access'] = 'Vous ne pouvez pas visualiser ce message.'; //You are not able to view this message.';

// Validation.
$string['missing_subject'] = 'Sujet manquant.'; //Missing subject line.';
$string['missing_body'] = 'Corps de message manquant.'; //Missing message body.';
$string['missing_email'] = 'Adresse électronique manquante.'; //Missing email address.';
$string['invalid_email'] = 'Adresse électronique invalide.'; //Invalid email address.';
$string['missing_firstname'] = 'Prénom manquant.'; //Missing first name.';
$string['missing_lastname'] = 'Nom de famille manquant.'; //Missing last name.';
$string['missing_notification_name'] = 'Nom de notification manquant.'; //Missing notification name.';
$string['notification_name_too_long'] = 'Le nom de la notification doit comporter 40 caractères ou moins.'; //Notification name must be 40 characters or less.';
$string['invalid_availability'] = 'Valeur de disponibilité non valable.'; //Invalid availability value.';
$string['no_included_recipients_validation'] = 'Vous devez sélectionner au moins un destinataire.'; //You must select at least one recipient.';
$string['invalid_additional_emails_validation'] = 'Certains des courriels supplémentaires que vous avez saisis n\'étaient pas valides.'; //Some of the additional emails you entered were invalid.';
$string['invalid_custom_data_not_allowed'] = 'Les codes de substitution personnalisés ne sont pas autorisés pour ce message.'; //Custom substitution codes are not allowed for this message.';
$string['invalid_custom_data_key'] = 'La clé de données personnalisée "{$a}" n\'est pas autorisée.'; //Custom data key "{$a}" is not allowed.';
$string['invalid_custom_data_delimiters'] = 'Les codes de substitution du corps du message ne sont pas formatés correctement.'; //Message body substitution codes not formatted properly.';
$string['invalid_additional_email'] = 'L\'adresse supplémentaire "{$a}" que vous avez saisi n\'est pas valide'; //The additional email "{$a}" you entered is invalid';
$string['invalid_send_method'] = 'Cette méthode d\'envoi n\'est pas autorisée.'; //That send method is not allowed.';

// Errors.
$string['critical_error'] = 'Erreur critique'; //Critical error';
$string['validation_exception_message'] = 'Exception de validation !'; //Validation exception!';
$string['course_required'] = 'Un cours est nécessaire.'; //A course is required.';

// Caches.
$string['cachedef_qm_msg_recip_count'] = 'Compte du nombre de destinataire en cache'; //Cached message recipient counts.';
$string['cachedef_qm_msg_deliv_count'] = 'Compte du nombre de message remis en cache'; //Cached message delievered counts.';
$string['cachedef_qm_msg_attach_count'] = 'Compte du nombre de pièces jointes en cache'; //Cached message attachment counts.';
$string['cachedef_qm_msg_addl_email_count'] = 'Compte du nombre d\'adresses secondaires en cache'; //Cached message additional email counts.';
$string['cachedef_qm_controller_store'] = 'Cache pour les instances de contrôle.'; //Cache store for controller instances.';
$string['cachedef_qm_event_notif_last_fired_at'] = 'Cache pour les horodatages de la dernière notification d\'événement.'; //Cache store for timestamps when event notification was last fired.';

// Backup/restore.
//$string['backup_history'] = 'Inclure l\'historique Courriel'; //Include Quickmail History';
$string['backup_block_configuration'] = 'Sauvegarde des paramètres de configuration au niveau du bloc Courriel (Tel que [Autoriser les Étudiants à utilisé Courriel])'; //Backup Quickmail Block Level Configuration Settings (Such as [Allow Students to use Quickmail])';
$string['restore_history'] = 'Restaurer l\'historique de Courriel'; //Restore Quickmail History';
//$string['overwrite_history'] = 'Écraser l\'historique Courriel'; //Overwrite Quickmail History';

// Email templates.
/*$string['alternate_body'] = '<p>
{$a->fullname} a ajouté {$a->address} comme adresse secondaire pour le cours {$a->course}.
</p>

<p>
Ce message a pour but de vérifier la validité de cette adresse, et si le destinataire a les droits nécessaires sur la plateforme.
</p>

<p>
Si vous souhaitez terminer le processus de validation, merci de cliquer sur le lien suivant :<br> {$a->url}.
</p>

<p>
Si le contenu de ce message n'a aucun sens pour vous, c'est qu'il a été envoyé par erreur. Merci d'ignorer simplement ce message.
</p>

Cordialement.'; *//*
<p>
{$a->fullname} added {$a->email} as an alternate sending address for {$a->plugin_name}.
</p>

<p>
The purpose of this email was to verify that this address exists, and the owner
of this address has the appropriate permissions in Moodle.
</p>

<p>
If you wish to complete the verification process, please continue by directing
your browser to the following url: {$a->url}.
</p>

<p>
If the description of this email does not make any sense to you, then you may have
received it by mistake. Simply discard this message.
</p>

Thank you.
';
*/
$string['receipt_email_body'] = '<p>Votre message a été envoyé ! Vous pouvez consulter les détails de ce message envoyé {$a->sent_message_link}.</p>

<p>
    <strong>Résumé des détails du message:</strong><br><br>
    <strong>Cours :</strong> {$a->course_name}<br><br>
    <strong>Sujet du message :</strong> {$a->subject}<br><br>
    <strong>Destinataires :</strong> {$a->recipient_count}<br><br>
    <strong>Adresse des destinataires supplémentaires:</strong> {$a->addition_emails_string}<br><br>
    <strong>Envoyés aux Mentors:</strong> {$a->sent_to_mentors}<br><br>
    <strong>Nombre de pièces jointes:</strong> {$a->attachment_count}<br><br>
    <forte>Corps du message:</forte>
</p>

{$a->message_body}'; /*
<p>Your message has been sent! You can view further details of this sent message {$a->sent_message_link}.</p>

<p>
    <strong>Message details summary:</strong><br><br>
    <strong>Course:</strong> {$a->course_name}<br><br>
    <strong>Message Subject:</strong> {$a->subject}<br><br>
    <strong>Recipients:</strong> {$a->recipient_count}<br><br>
    <strong>Additional Recipient Emails:</strong> {$a->addition_emails_string}<br><br>
    <strong>Sent To Mentors:</strong> {$a->sent_to_mentors}<br><br>
    <strong>File Attachment Count:</strong> {$a->attachment_count}<br><br>
    <strong>Message Body:</strong>
</p>

{$a->message_body}';*/

// Qm_page.
$string['ms_compose'] = 'Rédiger'; //Compose';
$string['ms_drafts'] = 'Brouillons'; //Drafts';
$string['ms_queued'] = 'Planifiés'; //Scheduled';
$string['ms_sent'] = 'Messages envoyés'; //Sent Emails';
$string['ms_signatures'] = 'Mes signatures'; //My Signatures';
$string['ms_alternate'] = 'Adresses secondaires'; //Alternate Emails';
$string['ms_config'] = 'Configurer'; //Configure';
$string['ms_notifications'] = 'Notifications'; //Notifications';
$string['ms_create_notification'] = 'Créer une notification'; //Create Notification';
