<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-04 Benny Philibel Modified in v1.5.7 $
 */

define('NAVBAR_TITLE', 'Neues Konto erstellen');

define('HEADING_TITLE', 'Meine Kontoinformationen');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">Achtung:</strong> Sollten Sie bereits bei uns registriert sein, melden Sie sich bitte <a href="%s">hier an</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Vielen Dank, Ihre Registrierungsanfrage wurde zur Überprüfung übermittelt.');


// greeting salutation
define('EMAIL_SUBJECT', 'Herzlich Willkommen bei ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Sehr geehrter Herr %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Sehr geehrte Frau %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Sehr geehrte(r) %s,' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Herzlich Willkommen bei <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Herzlichen Glückwunsch! Um Ihren nächsten Besuch in unserem Online Shop zu belohnen, haben wir für Sie einen Aktionskupon reserviert!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Diesen Aktionskupon können Sie bei Ihrem nächsten Einkauf einlösen. Geben Sie dazu die ' . TEXT_GV_REDEEM . ':  <strong>%s</strong> während des Bestellvorgangs ein' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Der Gutschen ist gültig zwischen %s und %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Wenn Sie heute bei uns einkaufen, erhalten Sie den ' . TEXT_GV_NAME . ' für %s!' . "\n");
define('EMAIL_GV_REDEEM', 'Ihr ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' im Wert von: %s ' . "\n\n" . 'Geben Sie dazu bitte den ' . TEXT_GV_REDEEM . ' während des Bestellvorgangs ein, nachdem Sie Ihre Artikel ausgesucht haben.' . "\n\n");
define('EMAIL_GV_LINK', 'Oder lösen Sie den Gutschein mithilfe des folgenden Links ein: ' . "\n\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER', 'Einmal angegeben, können Sie den ' . TEXT_GV_NAME . ' verwenden. Oder machen Sie mit dem ' . TEXT_GV_NAME . ' doch anderen eine Freude und schenken Ihn an Ihre Freunde weiter!' . "\n\n");

define('EMAIL_TEXT', 'Sie haben jetzt ein Konto bei '. STORE_NAME . ', was bietet:' . "\n\n<ul>" . '<li><strong>Bestellhistorie</strong> - Bestelldetails anzeigen. </li>' . "\n\n" . '<li><strong>Ständiger Warenkorb</strong> - Produkte, die Sie Ihrem Warenkorb hinzufügen, bleiben dort, bis sie entfernt oder gekauft werden.</li>' . "\n\n" . '<li><strong>Adressbuch</strong> - Definieren Sie zusätzliche Adressen (z.B. um ein Geschenk zu senden).</li>' . "\n\n" . '<li><strong>Artikel Bewertungen</strong> - Teilen Sie Ihre Meinung zu unseren Artikeln mit anderen Kunden.</li>' . "\n\n</ul>");
define('EMAIL_CONTACT', 'Sollten Sie einmal Hilfe zu unseren Diensten und Artikeln benötigen, kontaktieren Sie uns unter: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . '</a>' . "\n\n\n" . ''); 
define('EMAIL_GV_CLOSURE', 'Mit freundlichen Grüssen,' . "\n\n" . STORE_OWNER . "\nShopinhaber\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Diese E-Mail Adresse haben wir von Ihnen oder einer unserer Kunden erhalten. Sollten Sie diese Nachricht zu Unrecht erhalten haben, kontaktieren Sie uns bitte unter %s');
