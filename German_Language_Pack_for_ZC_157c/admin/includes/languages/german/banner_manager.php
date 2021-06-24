<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-06 Benny Philibel Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Bannermanager');

define('TABLE_HEADING_BANNERS', 'Bannerwerbungen');
define('TABLE_HEADING_GROUPS', 'Gruppen');
define('TABLE_HEADING_STATISTICS', 'Anzeige/Klicks');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS', 'Neues Fenster');
define('TABLE_HEADING_BANNER_ON_SSL', 'Auf SSL Seiten anzeigen');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Sortier<br />folge');

define('TEXT_BANNERS_TITLE', 'Name des Banner: ');
define('TEXT_BANNERS_URL', 'Banner URL: ');
define('TEXT_BANNERS_GROUP', 'Bannergruppe: ');
define('TEXT_BANNERS_NEW_GROUP', ', oder tragen Sie unten eine neue Bannergruppe ein');
define('TEXT_BANNERS_IMAGE', 'Bild: ');
define('TEXT_BANNERS_IMAGE_LOCAL', ', oder tragen Sie unten eine lokale Datei ein');
define('TEXT_BANNERS_IMAGE_TARGET', 'Zielverzeichnis des Bildes (Speichern unter): ');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Vorgeschlagenes Zielverzeichnis:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>HINWEIS: HTML-Banner zeichnen die Klicks nicht auf</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Text:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Sortierung - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>Anmerkung: Die banners_box_all Sidebox zeigt die Banner in der angegebenen Sortierung an</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Banner wird angezeigt bis: ');
define('TEXT_BANNERS_OR_AT', ', oder nach');
define('TEXT_BANNERS_IMPRESSIONS', 'Eindrücke / Ansichten.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Geplant für: ');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Bannerhinweise:</b><ul><li>Verwenden Sie ein Bild oder HTML-Text für das Banner - nicht beide.</li><li>HTML-Text hat Vorrang vor einem Bild</li><li>HTML-Text registriert den Klick nicht, registriert jedoch Anzeigen.</li><li>Banner mit absoluten Bild-URLs sollten nicht auf sicheren Seiten angezeigt werden.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Bildhinweise:</b><ul><li>Beim Hochladen von Verzeichnissen müssen die richtigen Benutzer- (Schreib-) Berechtigungen eingerichtet sein!</li><li>Füllen Sie das Feld \' Speichern nicht aus Feld "Zu", wenn Sie kein Bild auf den Webserver hochladen (dh Sie verwenden ein lokales (serverseitiges) Bild).</Li><li>Das Feld "Speichern unter" muss ein vorhandenes Verzeichnis mit einem sein Schrägstrich beenden (z. B. Banner /).</li></ul>');
define('TEXT_BANNERS_EXPIRY_NOTE', '<b>Ablaufhinweise:</b><ul><li>Es sollte nur eines der beiden Felder gesendet werden.</li><li>Wenn das Banner nicht automatisch abläuft, gehen Sie diese Felder sind leer</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Hinweise zum Zeitplan:</b><ul><li>Wenn ein Zeitplan festgelegt ist, wird das Banner an diesem Datum aktiviert.</li><li>Alle geplanten Banner sind markiert als inaktiv bis zu ihrem Datum, zu dem sie dann als aktiv markiert werden.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Bannerstatus: ');
define('TEXT_BANNERS_ACTIVE', 'Aktiv');
define('TEXT_BANNERS_NOT_ACTIVE', 'Nicht aktiv');
define('TEXT_INFO_BANNER_STATUS', '<strong>Hinweis:</strong> Der Bannerstatus wird basierend auf den vorhandenen Einstellungen für Zeitplan und Einblendungen aktualisiert');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Banner in neuem Fenster');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>Hinweis:</strong> Banner öffnet sich in einem neuen Fenster');
define('TEXT_BANNERS_ON_SSL', 'Banner mit SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>Hinweis:</strong> Banner kann auf SSL Seiten ohne Fehler angezeigt werden');

define('TEXT_BANNERS_DATE_ADDED', 'Hinzugefügt am: ');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Startet am: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Endet am: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Endet nach: <b>%s</b> Einblendungen');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status ändern: %s');

define('TEXT_BANNERS_LAST_3_DAYS', 'Die letzten 3 Tage');
define('TEXT_BANNERS_BANNER_VIEWS', 'Bannereinblendungen');
define('TEXT_BANNERS_BANNER_CLICKS', 'Bannerklicks');

define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sicher das Sie diesen Banner löschen wollen?');
define('TEXT_INFO_DELETE_IMAGE', 'Bannerbild löschen');

define('SUCCESS_BANNER_INSERTED', 'Erfolgreich: Der Banner wurde eingefügt.');
define('SUCCESS_BANNER_UPDATED', 'Erfolgreich: Der Bannerstatus wurde aktualisiert.');
define('SUCCESS_BANNER_REMOVED', 'Erfolgreich: Der Banner wurde entfernt.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Erfolgreich: Der Bannerstatus wurde aktualisiert.');

define('ERROR_BANNER_TITLE_REQUIRED', 'FEHLER: Ein Bannername wird benötigt.');
define('ERROR_BANNER_GROUP_REQUIRED', 'FEHLER: Eine Bannergruppe wird benötigt.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'FEHLER: Bild existiert nicht.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'FEHLER: Bild kann nicht entfernt werden.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'FEHLER: Unbekannter Status.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'FEHLER: Bild für Banner wird benötigt.');

define('TEXT_LEGEND_BANNER_ON_SSL', 'SSL anzeigen');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Neues Fenster');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON', 'Neues Fenster öffnen - EIN');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF', 'Neues Fenster öffnen - AUS');
define('IMAGE_ICON_BANNER_ON_SSL_ON', 'Auf SSL Seiten darstellen - EIN');
define('IMAGE_ICON_BANNER_ON_SSL_OFF', 'Auf SSL Seiten darstellen - AUS');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Erfolgreich: Der Status des Banners zum Öffnen in einem neuen Fenster ist aktualisiert worden .');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Erfolgreich: Der Status des Banners zum Darstellen auf SSL Seiten ist aktualisiert worden .');

