<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-03 Benny Philibel Modified in v1.5.7 $
 */

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
define ('EMAIL_LOGO_WIDTH', '550');
define ('EMAIL_LOGO_HEIGHT', '110');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Setzen Sie hier Ihren Slogan');

// -----
// If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
// set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
//
define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
define('OFFICE_FROM', '<strong>Absender: </strong>');
define('OFFICE_EMAIL', '<strong>E-Mail: </strong>');

define('OFFICE_USE', '<strong>Nur für den internen Gebrauch: </strong>');
define('OFFICE_LOGIN_NAME', '<strong>Kontoname: </strong>');
define('OFFICE_LOGIN_EMAIL', '<strong>E-Mail Adresse</strong>: ');
define('OFFICE_LOGIN_PHONE', '<strong>Telefon: </strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS', '<strong>IP Adresse: </strong>');
define('OFFICE_HOST_ADDRESS', '<strong>Hostname: </strong>');
define('OFFICE_DATE_TIME', '<strong>Datum und Uhrzeit: </strong>');
if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'Deaktiviert');

define('EMAIL_TEXT_TELEPHONE', 'Telefon: ');

// email disclaimer
define('EMAIL_DISCLAIMER', 'Diese E-Mail-Adresse wurde uns von Ihnen oder einem unserer Kunden mitgeteilt. Sollten Sie diese Nachricht versehentlich erhalten haben, wenden Sie sich bitte an: ' . STORE_OWNER_EMAIL_ADDRESS);
define('EMAIL_SPAM_DISCLAIMER', '');
// Define a message you'd like to add to an order confirmation email
define('EMAIL_ORDER_MESSAGE','');
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart.com">Zen Cart</a>');
define('TEXT_UNSUBSCRIBE', "\n\n" . 'Um diesen Newsletter abzubestellen, klicken Sie bitte auf folgenden Link: ' . "\n");

// email advisory for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>Achtung:</strong> Aus Sicherheitsgründen werden alle gesendeten E-Mails zwischengespeichert.<br />Sollten Sie diesbezüglich Fragen haben, wenden Sie sich bitte an: ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Diese Nachricht ist in allen E-Mails dieser Seite enthalten: </strong>');


// Admin additional email subjects
define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[NEUES KUNDENKONTO]');
define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[GUTSCHEIN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NEUE BESTELLUNG]');

// Low Stock Emails
define('EMAIL_TEXT_SUBJECT_LOWSTOCK', 'WARNUNG: Lagermindestbestand unterschritten');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE', 'Lagerbestandsbericht: ');
