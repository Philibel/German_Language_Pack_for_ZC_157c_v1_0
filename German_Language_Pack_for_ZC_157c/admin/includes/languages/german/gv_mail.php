<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-10 Benny Philibel Modified in v1.5.7 $
 */


require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAME . ' an Kunden versenden');

define('TEXT_FROM', 'Absender: ');
define('TEXT_TO', 'E-Mail an: ');
define('TEXT_TO_CUSTOMERS', 'Zu Kundenlisten: ');
define('TEXT_TO_EMAIL', 'oder an eine E-Mail-Adresse: ');
define('TEXT_TO_EMAIL_NAME', 'Name: (Optional): '); 
define('TEXT_TO_EMAIL_INFO', '<span class="smallText">Wählen Sie eine Liste aus der obigen Dropdown-Liste aus oder verwenden Sie die folgenden Felder, um eine einzelne E-Mail zu senden.</span>');
define('TEXT_SUBJECT', 'Betreff: ');
define('TEXT_AMOUNT', TEXT_GV_NAME . ' Wert: ');
define('ERROR_GV_AMOUNT', '<span class="smallText">Bitte den Wert ohne Symbole angeben. Beispiel: 25</span>');
define('TEXT_AMOUNT_INFO', '<span class="smallText">' . ERROR_GV_AMOUNT . '</span>');
define('TEXT_HTML_MESSAGE', 'HTML<br>Nachricht: ');
define('TEXT_MESSAGE', 'Text-Only<br>Nachricht: ');
define('TEXT_MESSAGE_INFO', '<p>Fügen Sie optional eine bestimmte Nachricht hinzu, die vor dem Standard-' . TEXT_GV_NAME . '-E-Mail-Text eingefügt wird.</p>');

define('NOTICE_EMAIL_SENT_TO', 'HINWEIS: %1s E-Mail wurde versendet an: %2s');
define('ERROR_NO_CUSTOMER_SELECTED', 'FEHLER: Es wurde kein Kunde ausgewählt.');
define('ERROR_NO_AMOUNT_ENTERED', 'Fehler: Zertifikatwert ungültig.');
define('ERROR_NO_SUBJECT', 'FEHLER: Es wurde kein Betreff angegeben.');

define('TEXT_GV_ANNOUNCE', 'Wir freuen uns, Ihnen einen ' . TEXT_GV_NAME . ' schenken zu können für %s.');
define('TEXT_GV_TO_REDEEM_TEXT', 'Um den ' . TEXT_GV_NAME . ', einlösen zu können, klicken Sie bitte auf nachstehenden Link.' . "\n\n ". '%1$s%2$s' . "\n\n" . 'oder besuchen Sie ' . STORE_NAME . " unter " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'und geben Sie den Code %2$s auf der Seite Kasse-Zahlung ein.');
define('TEXT_GV_TO_REDEEM_HTML', '<a href="%1$s%2$s">Klicken Sie hier, um den ' . TEXT_GV_NAME . ' einzulösen</a> oder besuchen Sie <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> und geben Sie den Code <strong>%2$s</strong> auf der Seite Kasse-Zahlung ein.');

