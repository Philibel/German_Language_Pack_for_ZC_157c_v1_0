<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-03 Benny Philibel $
 */

define('NAVBAR_TITLE', 'Anmelden');
define('HEADING_TITLE', 'Willkommen, bitte melden Sie sich an.');

define('HEADING_NEW_CUSTOMER', 'Sie sind neu hier? Dann erstellen Sie bitte ein Kundenkonto');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Neukunden');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Ein Kundenkonto bei <strong>' . STORE_NAME . '</strong> ermöglicht Ihnen z.B. komfortabel einzukaufen, sich Ihre aktuellen und bisherigen Bestellungen anzusehen u.v.m.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Haben Sie ein PayPal Konto? Sie möchten mit einer Kreditkarte schnell zahlen? Klicken Sie auf den PayPal Button unten, um die Option "Paypal Express" zu verwenden.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">oder</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Ein Kundenkonto bei <strong>' . STORE_NAME . '</strong> ermöglicht Ihnen z.B. komfortabel einzukaufen, sich Ihre aktuellen und bisherigen Bestellungen anzusehen sowie alle Vorteile zu nutzen, die Kunden vorbehalten sind.');

define('HEADING_RETURNING_CUSTOMER', 'Stammkunden/wiederkehrende Kunden: Bitte melden Sie sich an');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Stammkunden/wiederkehrende Kunden ');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Um fortzusetzen, melden Sie sich bitte mit Ihrem <strong>' . STORE_NAME . '</strong> Konto an.');

define('TEXT_PASSWORD_FORGOTTEN', 'Haben Sie Ihr Passwort vergessen?');

define('TEXT_LOGIN_ERROR', 'Fehler: Leider stimmt diese E-Mail-Adresse und/oder dieses Passwort nicht überein.');
define('TEXT_VISITORS_CART', '<strong>Hinweis:</strong> Wenn Sie zuvor bei uns eingekauft und etwas in Ihrem Warenkorb gelassen haben, wird der Inhalt zusammengeführt, wenn Sie sich erneut anmelden. <a href="javascript:session_win();">[Mehr Informationen]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Datenschutz</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Bitte bestätigen Sie, dass Sie mit unserer Datenschutzerklärung einverstanden sind, indem Sie das folgende Kästchen ankreuzen. Die Datenschutzerklärung kann </span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">hier</span></a> gelesen werden.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Ich habe die Datenschutzbestimmungen gelesen und akzeptiert.</span>');

define('ERROR_SECURITY_ERROR', 'Es gab einen Sicherheitsfehler, als Sie versucht haben sich anzumelden.');

define('TEXT_LOGIN_BANNED', 'FEHLER: Zugriff verweigert.');
