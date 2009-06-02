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
	'poll-create-block-error' => 'You are not allowed to create a new poll because you use a blocked user',
	'poll-vote-right-error' => 'You are not allowed to vote(needed right: poll-vote)',
	'poll-vote-block-error' => 'You are not allowed to vote because you use a blocked user',
	'poll-alternative' => 'Alternative',
	'poll-question' => 'Question',
	'poll-submit' => 'Submit',
	'right-poll-create' => 'Create Poll',
	'right-poll-vote' => 'Vote by a Poll',
	'right-poll-admin' => 'Manage the Polls',
	'poll-create-fields-error' => 'The fields Question, Alternative 1 and Alternative 2 must be set',
	'poll-dis' => 'Description',
	'poll-list-current' => '== Current Polls ==',
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
	'poll-change-block-error' => 'You are not allowed to change a poll because you use a blocked user',
	'poll-change-pass' => 'Changed!',
	'poll-number-poll' => 'Number of Votes',
	'poll-title-delete' => 'Delete Poll',
	'poll-delete-question' => 'Do you really want to delete the Poll "$1"?',
	'poll-delete-right-error' => 'You must be the creater of the Poll or have the "poll-admin" right to delete this Poll',
	'poll-delete-block-error' => 'You are not allowed to delete a poll because you use a blocked user',
	'poll-delete-pass' => 'Deleted!',
	'poll-delete-cancel' => 'Poll don\'t delete(Checkbox don\'t set)!',
	'poll-logpage' => 'Poll-Log',
	'poll-logpagetext' => 'This is a log of changes to Polls.',
	'poll-log-create' => '$1 created "$2"!',
	'poll-log-change' => '$1 changed "$2"!',
	'poll-log-delete' => '$1 deleted "$2"!',
	'poll-logentry' => 'Polls changed',
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
	'poll-create-block-error' => 'Leider darfst du keine neue Umfrage erstellen, weil du einen gesperten Benutzer benutzt',
	'poll-vote-right-error' => 'Leider darfst du nicht abstimmen(benötige Gruppenberechttigung: poll-vote)',
	'poll-vote-block-error' => 'Leider darfst du nicht abstimmen, weil du einen gesperten Benutzer benutzt',
	'poll-alternative' => 'Antwortmöglichkeit',
	'poll-question' => 'Frage',
	'poll-submit' => 'Absenden',
	'right-poll-create' => 'Umfrage erstellen',
	'right-poll-vote' => 'Bei einer Umfrage abstimmen',
	'right-poll-admin' => 'Umfragen verwalten',
	'poll-create-fields-error' => 'Die Felder Frage, Antwortmöglichkeit 1 sowie Antwortmöglichkeit 2 müssen ausgefüllt sein',
	'poll-dis' => 'Beschreibung',
	'poll-list-current' => '== Aktuelle Umfragen ==',
	'poll-create-pass' => 'Umfrage erfolgreich erstellt!',
	'poll-vote-pass' => 'Erfolgreich abgestimmt!',
	'poll-vote-already-error' => 'Du hast bereits abgestimmt!',
	'poll-create-link' => 'Eine neue Umfrage erstellen',
	'poll-back' => 'Zurück zur Übersicht!',
	'poll-change' => 'Umfrage ändern',
	'poll-delete' => 'Umfrage löschen',
	'poll-title-change' => 'Umfrage ändern',
	'poll-title-delete' => 'Umfrage löschen',
	'poll-change-right-error' => 'Du musst der Autor dieser Umfrage sein oder die "poll-admin"-Gruppenberechtigung haben, um diese Umfrage zu ändern',
	'poll-change-block-error' => 'Leider darfst du keine Umfrage ändern, weil du einen gesperten Benutzer benutzt',
	'poll-change-pass' => 'Umfrage erfolgreich geändert!',
	'poll-number-poll' => 'Anzahl der abgegebenen Stimmen',
	'poll-title-delete' => 'Umfrage löschen',
	'poll-delete-question' => 'Möchtest du wirklich die Umfrage "$1" löschen?',
	'poll-delete-right-error' => 'Du musst der Autor dieser Umfrage sein oder die "poll-admin"-Gruppenberechtigung haben, um diese Umfrage zu löschen',
	'poll-delete-block-error' => 'Leider darfst du keine Umfrage löschen, weil du einen gesperten Benutzer benutzt',
	'poll-delete-pass' => 'Umfrage erfolgreich gelöscht',
	'poll-delete-cancel' => 'Umfrage wurde nicht gelöscht(Häckchen nicht gesetzt)!',
	'poll-logpage' => 'Umfrage-Logbuch',
	'poll-logpagetext' => 'Dieses Logbuch zeigt Änderungen an den Umfragen.',
	'poll-log-create' => '$1 hat "$2" erstellt!',
	'poll-log-change' => '$1 hat "$2" geändert!',
	'poll-log-delete' => '$1 hat "$2" gelöscht!',
	'poll-logentry' => 'Änderung an den Umfragen wurde vorgenommen',
);
