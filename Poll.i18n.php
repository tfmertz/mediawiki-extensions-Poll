<?php
/**
 * Internationalisation file for Poll extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Jan Luca
 */
$messages['en'] = array(
	'poll' => 'List of the Polls',
	'poll-desc' => 'Add a [[Special:Poll|special page]] for using polls',
	'poll-title-create' => 'Create a new poll',
	'poll-title-vote' => 'Voting page',
	'poll-title-score' => 'Score',
	'poll-create-right-error' => 'You are not allowed to create a new poll(needed right: poll-create)',
	'poll-vote-right-error' => 'You are not allowed to vote(needed right: poll-vote)',
	'poll-score-right-error' => 'You are not allowed to view the score(needed right: poll-score)',
	'poll-option1' => 'Vote option 1',
	'poll-option2' => 'Vote option 2',
	'poll-option3' => 'Vote option 3',
	'poll-option4' => 'Vote option 4',
	'poll-option5' => 'Vote option 5',
	'poll-option6' => 'Vote option 6',
	'poll-option7' => 'Vote option 7',
	'poll-option8' => 'Vote option 8',
	'poll-option9' => 'Vote option 9',
	'poll-option10' => 'Vote option 10',
	'poll-option11' => 'Vote option 11',
	'poll-option12' => 'Vote option 12',
	'poll-question' => 'Question',
	'poll-submit' => 'Submit',
	'right-poll-create' => 'Create Poll',
	'right-poll-vote' => 'Vote on a Poll',
	'right-poll-admin' => 'Manage the Polls',
	'right-poll-score' => 'View the score of Polls',
	'poll-create-fields-error' => 'The fields Question, Vote option 1 and Vote option 2 must be set',
	'poll-dis' => 'Description',
	'poll-list-current' => 'Current Polls',
	'poll-create-pass' => 'Poll created!',
	'poll-vote-pass' => 'Voted!',
	'poll-vote-already-error' => 'You has already voted!',
	'poll-create-link' => 'Create a new Poll',
	'poll-back' => 'Back to Overview!',
	'poll-change' => 'Change Poll',
	'poll-delete' => 'Delete Poll',
	'poll-title-change' => 'Change Poll',
	'poll-title-delete' => 'Delete Poll',
	'poll-change-right-error' => 'You must be the creater of the Poll or have the "poll-admin" right to change this Poll',
	'poll-change-pass' => 'Changed!',
	'poll-number-poll' => 'Number of Votes',
	'poll-delete-question' => 'Do you really want to delete the Poll "$1"?',
	'poll-delete-right-error' => 'You must be the creater of the Poll or have the "poll-admin" right to delete this Poll',
	'poll-delete-pass' => 'Deleted!',
	'poll-delete-cancel' => 'Poll wasn\'t deleted (checkbox not set)',
	'poll-invalid-id' => 'Invalid poll id',
	'poll-logpage' => 'Poll log',
	'poll-logpagetext' => 'This is a log of changes to polls.',
	'poll-logentry-create' => 'created poll "$2"',
	'poll-logentry-change' => 'changed poll "$2"',
	'poll-logentry-delete' => 'deleted poll "$2"',
	'poll-score-created' => 'created from [[User:$1]]',
	'poll-administration' => 'Administration:',
	'poll-no-dis' => 'No Description!',
	'poll-create-allow-more' => 'Allow Multi-Vote',
	'poll-vote-changed' => 'Vote has been changed!',
	'poll-vote-other' => 'Other answers:',
	'poll-ip-error' => 'Unregistered person can not vote at this poll!',
	'poll-create-allow-ip' => 'Allow unregistered users to vote',
	'poll-vote-error-ip-change' => 'Someone has already voted with your IP and unregistered users can not change his vote!',
	'poll-runtime' => 'Runtime:',
	'poll-runtime-1-day' => '1 Day',
	'poll-runtime-2-days' => '2 Days',
	'poll-runtime-1-week' => '1 Week',
	'poll-runtime-2-weeks' => '2 Weeks',
	'poll-runtime-3-weeks' => '3 Weeks',
	'poll-runtime-4-weeks' => '4 Weeks',
	'poll-list-old' => 'Old Polls',
);

/** German (Deutsch)
 * @author Jan Luca
 */
$messages['de'] = array(
	'poll' => 'Liste der Umfragen',
	'poll-desc' => 'Erstellt eine [[Special:Poll|Spezialsite]], um Umfragen zu nutzen',
	'poll-title-create' => 'Eine neue Umfrage erstellen',
	'poll-title-vote' => 'Abstimmen',
	'poll-title-score' => 'Auswertung',
	'poll-create-right-error' => 'Leider darfst du keine neue Umfrage erstellen(benötige Gruppenberechttigung: poll-create)',
	'poll-vote-right-error' => 'Leider darfst du nicht abstimmen(benötige Gruppenberechttigung: poll-vote)',
	'poll-score-right-error' => 'Leider darfst du nicht die Auswertung betrachten(benötige Gruppenberechttigung: poll-score)',
	'poll-option1' => 'Antwortmöglichkeit 1',
	'poll-option2' => 'Antwortmöglichkeit 2',
	'poll-option3' => 'Antwortmöglichkeit 3',
	'poll-option4' => 'Antwortmöglichkeit 4',
	'poll-option5' => 'Antwortmöglichkeit 5',
	'poll-option6' => 'Antwortmöglichkeit 6',
	'poll-question' => 'Frage',
	'poll-submit' => 'Absenden',
	'right-poll-create' => 'Umfrage erstellen',
	'right-poll-vote' => 'Bei einer Umfrage abstimmen',
	'right-poll-admin' => 'Umfragen verwalten',
	'right-poll-score' => 'Auswertung der Umfragen betrachten',
	'poll-create-fields-error' => 'Die Felder Frage, Antwortmöglichkeit 1 sowie Antwortmöglichkeit 2 müssen ausgefüllt sein',
	'poll-dis' => 'Beschreibung',
	'poll-list-current' => 'Aktuelle Umfragen',
	'poll-create-pass' => 'Umfrage erfolgreich erstellt!',
	'poll-vote-pass' => 'Erfolgreich abgestimmt!',
	'poll-vote-already-error' => 'Du hast bereits abgestimmt!',
	'poll-create-link' => 'Eine neue Umfrage erstellen',
	'poll-back' => 'Zurück zur Übersicht!',
	'poll-change' => 'Umfrage ändern',
	'poll-delete' => 'Umfrage löschen',
	'poll-title-change' => 'Umfrage ändern',
	'poll-change-right-error' => 'Du musst der Autor dieser Umfrage sein oder die "poll-admin"-Gruppenberechtigung haben, um diese Umfrage zu ändern',
	'poll-change-pass' => 'Umfrage erfolgreich geändert!',
	'poll-number-poll' => 'Anzahl der abgegebenen Stimmen',
	'poll-title-delete' => 'Umfrage löschen',
	'poll-delete-question' => 'Möchtest du wirklich die Umfrage "$1" löschen?',
	'poll-delete-right-error' => 'Du musst der Autor dieser Umfrage sein oder die "poll-admin"-Gruppenberechtigung haben, um diese Umfrage zu löschen',
	'poll-delete-pass' => 'Umfrage erfolgreich gelöscht',
	'poll-delete-cancel' => 'Umfrage wurde nicht gelöscht(Häckchen nicht gesetzt)!',
	'poll-invalid-id' => 'Unbekannte Umfrage-ID!',
	'poll-logpage' => 'Umfrage-Logbuch',
	'poll-logpagetext' => 'Dieses Logbuch zeigt Änderungen an den Umfragen.',
	'poll-logentry-create' => 'hat Umfrage "$2" erstellt',
	'poll-logentry-change' => 'hat Umfrage "$2" geändert',
	'poll-logentry-delete' => 'hat Umfrage "$2" gelöscht',
	'poll-score-created' => 'erstellt von [[Benutzer:$1]]',
	'poll-administration' => 'Administration:',
	'poll-no-dis' => 'Keine Beschreibung vorhanden!',
	'poll-create-allow-more' => 'Mehfachabstimmung erlaubt',
	'poll-vote-changed' => 'Stimme wurde geändert!',
	'poll-vote-other' => 'Andere Antworten:',
	'poll-ip-error' => 'Nicht registrierte Benutzer können bei dieser Umfrage nicht abstimmen!',
	'poll-create-allow-ip' => 'Erlaube nicht registrierten Benutzer abzustimmen',
	'poll-vote-error-ip-change' => 'Ihre Stimme wurde nicht gezählt, da mit Ihrer IP-Adresse wurde bereits eine Stimme abgegeben wurde und nicht registierte Benutzer ihre Stimme nicht nachträglich ändern dürfen.',
	'poll-runtime' => 'Laufzeit:',
	'poll-runtime-1-day' => '1 Tag',
	'poll-runtime-2-days' => '2 Tage',
	'poll-runtime-1-week' => '1 Woche',
	'poll-runtime-2-weeks' => '2 Wochen',
	'poll-runtime-3-weeks' => '3 Wochen',
	'poll-runtime-4-weeks' => '4 Wochen',
	'poll-list-old' => 'Alte Umfragen',
);

/** Message Documentation
 * @author Jan Luca
 */
$messages['qqq'] = array(
	'poll' => 'Title of the overview page with the list of the polls',
	'poll-desc' => 'Description for [[Special:Version]]',
	'poll-title-create' => 'Title of the page "Create a new poll"',
	'poll-title-vote' => 'Title of the page "Vote on a poll"',
	'poll-title-score' => 'Title of the page "View the score"',
	'poll-create-right-error' => 'Right error when user has not right "poll-create"',
	'poll-vote-right-error' => 'Right error when user has not right "poll-vote"',
	'poll-score-right-error' => 'Right error when user has not right "poll-score"',
	'poll-option1' => 'Vote option 1 of a poll',
	'poll-option2' => 'Vote option 2 of a poll',
	'poll-option3' => 'Vote option 3 of a poll',
	'poll-option4' => 'Vote option 4 of a poll',
	'poll-option5' => 'Vote option 5 of a poll',
	'poll-option6' => 'Vote option 6 of a poll',
	'poll-option7' => 'Vote option 7 of a poll',
	'poll-option8' => 'Vote option 8 of a poll',
	'poll-option9' => 'Vote option 9 of a poll',
	'poll-option10' => 'Vote option 10 of a poll',
	'poll-option11' => 'Vote option 11 of a poll',
	'poll-option12' => 'Vote option 12 of a poll',
	'poll-question' => 'Question of a poll',
	'poll-submit' => '{{Doc-action|submit}}',
	'right-poll-create' => '{{Doc-right|poll-create}}',
	'right-poll-vote' => '{{Doc-right|poll-vote}}',
	'right-poll-admin' => '{{Doc-right|poll-admin}}',
	'right-poll-score' => '{{Doc-right|poll-score}}',
	'poll-create-fields-error' => 'The fields Question, Alternative 1 and Alternative 2 must be set',
	'poll-dis' => 'Description of the poll',
	'poll-list-current' => 'Head of list of current polls',
	'poll-create-pass' => 'Success message if poll was created',
	'poll-vote-pass' => 'Success message if voting was successfull',
	'poll-vote-already-error' => 'Error message if you already voted',
	'poll-create-link' => '{{Doc-action|create}}',
	'poll-back' => 'Link back to the overview page',
	'poll-change' => '{{Doc-action|change}}',
	'poll-delete' => '{{Doc-action|delete}}',
	'poll-title-change' => 'Title of the page "Change a poll"',
	'poll-title-delete' => 'Title of the page "Delete a poll"',
	'poll-change-right-error' => 'Right error when user is not allowed to change a poll',
	'poll-change-pass' => 'Success message if changing was successfull',
	'poll-number-poll' => 'Number of Votes in a poll',
	'poll-delete-question' => 'Control question to confirm a deletion',
	'poll-delete-right-error' => 'Right error when user is not allowed to delete a poll',
	'poll-delete-pass' => 'Success message if deletion was successful',
	'poll-delete-cancel' => 'Error message if deletion was not successful because confirm-checkbox was not setted',
	'poll-invalid-id' => 'Error message if poll id is unknown',
	'poll-logpage' => 'Title of the poll-log',
	'poll-logpagetext' => 'Desciption of the poll-log',
	'poll-log-create' => 'Create-logentry of the poll-log ($2: Name of poll, user name will be added by MW)',
	'poll-log-change' => 'Change-logentry of the poll-log ($2: Name of poll, user name will be added by MW)',
	'poll-log-delete' => 'Delete-logentry of the poll-log ($2: Name of poll, user name will be added by MW)',
	'poll-score-created' => 'Show the user ($1) that created the poll in score',
	'poll-administration' => 'Title of the section with options to administrate a poll',
	'poll-no-dis' => 'Error message if there is no description',
	'poll-create-allow-more' => 'Checkbox to enable multiple votes',
	'poll-vote-changed' => 'Success message if vote was successful changed',
	'poll-vote-other' => 'Title for section with answer that was not specified by the creator',
	'poll-ip-error' => 'Error message if a unregistered person try to vote at a poll',
	'poll-create-allow-ip' => 'Checkbox to enable voting to unregistered persons',
	'poll-vote-error-ip-change' => 'Error message if a unregistered person try to change its vote',
	'poll-runtime' => 'Runtime of the poll',
	'poll-runtime-1-day' => 'Runtime of 1 Day (see also [[Mediawiki:Poll-runtime/en|poll-runtime]])',
	'poll-runtime-2-days' => 'Runtime of 2 Days (see also [[Mediawiki:Poll-runtime/en|poll-runtime]])',
	'poll-runtime-1-week' => 'Runtime of 1 Week (see also [[Mediawiki:Poll-runtime/en|poll-runtime]])',
	'poll-runtime-2-weeks' => 'Runtime of 2 Weeks (see also [[Mediawiki:Poll-runtime/en|poll-runtime]])',
	'poll-runtime-3-weeks' => 'Runtime of 3 Weeks (see also [[Mediawiki:Poll-runtime/en|poll-runtime]])',
	'poll-runtime-4-weeks' => 'Runtime of 4 Weeks (see also [[Mediawiki:Poll-runtime/en|poll-runtime]])',
	'poll-list-old' => 'Title of the page "List of old polls"',
);
