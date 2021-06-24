<?php
// -----
// Part of the "Display Logs" plugin for Zen Cart v1.5.0 or later
// Deutsche Version: Benny Philibel.com 2021 v1.5.7c
// Copyright (c) 2012-2017, Vinos de Frutas Tropicales (lat9)
//
define('HEADING_TITLE', 'Debug-Protokolldateien anzeigen');

define('TABLE_HEADING_FILENAME', 'Dateiname');
define('TABLE_HEADING_MODIFIED', 'Änderungsdatum');
define('TABLE_HEADING_FILESIZE', 'Dateigröße (Bytes)');
define('TABLE_HEADING_DELETE', 'Löschen?');
define('TABLE_HEADING_ACTION', 'Action');

define('BUTTON_DELETE_SELECTED', 'Ausgewählte löschen');
define('DELETE_SELECTED_ALT', 'Alle ausgewählten Dateien löschen');
define('BUTTON_DELETE_ALL', 'Alle löschen');
define('DELETE_ALL_ALT', 'Alle Dateien in der aktuellen Ansicht löschen');

define('ICON_INFO_VIEW', 'Inhalt dieser Datei anzeigen');

define('DISPLAY_DEBUG_LOGS_ONLY', 'Nur Debug-Protokolle anzeigen?');
define('LOG_SORT_ASC', 'Aufsteigend');
define('LOG_SORT_DESC', 'Absteigend');

define('TEXT_HEADING_INFO', 'Dateiinhalt');

// -----
// Sort-order descriptions, used in the instructions' display.
//
define('TEXT_MOST_RECENT', 'neueste');
define('TEXT_OLDEST', 'älteste');
define('TEXT_SMALLEST', 'kleinste');
define('TEXT_LARGEST', 'größten');

// -----
// The TEXT_INSTRUCTIONS string is passed into sprintf to produce the instructions given on the plugin's main display,
// using the following variables:
//
// %1$u ... The maximum size of a fully-displayed file.
// %2$s ... Contains a descriptive string identifying the current sort order
// %3$u ... The number of log files currently being displayed.
// %4$u ... The number of log files currently present in the log-related directories.
// %5$s ... The "included" prefixes for the log-files displayed.
// %6$s ... The "excluded" prefixes for the log-files displayed.
//
$imageName = zen_image (DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br /><br />Die Dateien können entweder in aufsteigender oder absteigender Reihenfolge (basierend auf dem Datum der letzten Änderung oder der Dateigröße) sortiert werden, indem Sie auf einen der Links <em>Aufsteigend</em> oder <em>Absteigend</em> klicken . Klicken Sie auf ein ' . $imageName . ' Symbol, um den Inhalt der zugehörigen Datei anzuzeigen. Es werden nur die ersten %1$u Bytes der ausgewählten Datei gelesen. Wenn eine Datei &quot;übergroß&quot; ist, wird ihre <em>Dateigröße</em> wie folgt hervorgehoben: <span class="bigfile">this</span>.<br /><br />Klicken auf Die Schaltfläche <strong>Alle löschen</strong> löscht alle aktuell angezeigten Dateien. Wenn Sie auf <strong>Ausgewählte löschen</strong> klicken, werden nur die Dateien mit aktivierten Kontrollkästchen gelöscht.<br /><br />Derzeit werden die Protokolldateien %2$s %3$u von %4$u mit diesem <code>%5$s</code> Präfixe angezeigt und <b>nicht</b> passend zu diesen <code>%6$s</code>.<br />');

define('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Möchten Sie diese \'+ n +\' Datei(en) wirklich löschen?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Möchten Sie die \'+ ausgewählte(n) +\' ausgewählte(n) Datei(en) wirklich löschen? ');

define('WARNING_NOT_SECURE','<span class="errorText">HINWEIS: Sie haben SSL nicht aktiviert. Der auf dieser Seite angezeigte Dateiinhalt wird nicht verschlüsselt und kann ein Sicherheitsrisiko darstellen.</span>');
define('WARNING_NO_FILES_SELECTED', 'Es wurden keine Dateien zum Löschen ausgewählt!');
define('WARNING_SOME_FILES_DELETED', 'Warnung: Nur %u der %u Protokolldateien wurden gelöscht. Berechtigungen überprüfen.');
define('SUCCESS_FILES_DELETED', '%u Protokolldateien wurden gelöscht.');