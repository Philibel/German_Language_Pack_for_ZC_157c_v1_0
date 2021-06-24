<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-04 Benny Philibel Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'PayPal Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA', 'PayPal Website Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
  define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal Payments Standard</strong> (Alter PayPal Dienst, wesentlich unzuverlässiger als PayPal Express!)<br /><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Managen Sie Ihr PayPal Konto.</a><br /><br /><font color="green">Konfigurations Anleitung:</font><br />1. <a href="http://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Melden Sie sich bei Ihrem PayPal Konto an - Klicken Sie hier.</a><br />2. In Ihrem PayPal Konto, unter "Profile",<ul><li>stellen Sie ein <strong>Instant Payment Notification Preferences</strong> URL to:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr><br />(Sollte bereits eine andere URL eingetragen sein, sollten Sie diese Einstellung unverändert lassen.)<br /><span class="alert">Stellen Sie sicher, dass die Checkbox Enable IPN markiert ist!</span><br /><br /></li><li>in den <strong>Website Payments Preferences</strong> Setzen Sie Ihre <strong>Automatic Return URL</strong> auf:<br /><nobr><pre>'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</pre></nobr></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... und klicken Sie oben auf "Installieren" um die PayPal-Standardunterstützung zu aktivieren ... und auf "Bearbeiten" um Zen Cart Ihre PayPal-Einstellungen mitzuteilen.</li>') . '</ul><font color="green"><hr /><strong>Anforderungen:</strong></font><br /><hr />*<strong>PayPal-Konto</strong> (<a href="http://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">zum Anmelden klicken</a>)<br />*<strong>CURL mit SSL</strong> wird dringend empfohlen<br />*<strong>Port 80 (und Port 443 wenn SSL aktiviert ist)</strong> wird für die <strong>*bidirektionale*</strong> Kommunikation mit dem Gateway verwendet. muss also auf Router/Firewall Ihres Hosts geöffnet sein.<br />*<strong>Einstellungen</strong> in Ihrem PayPal-Konto müssen wie oben beschrieben konfiguriert sein.');
 } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  // You should only use choices listed on this page: https://ppmts.custhelp.com/app/answers/detail/a_id/632
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG', 'https://www.paypal.com/de_DE/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT', 'Einkaufen mit PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Sparen Sie Zeit. Kaufen Sie sicher ein. <br />Bezahlen Sie ohne ihre Kontoinformationen öffentlich preiszugeben.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" /> &nbsp;' .
                                                    '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Vorname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nachname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Firmenname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresse:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Strasse:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Stadt:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Bundesland:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Postleitzahl:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Land:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Bezahler E-Mail:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Bezahler- ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Bezahlerstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Adress Status:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Zahlungstyp:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Zahlungsstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'In Warteschleife - Ursache:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Rechnung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Zahlungsdatum:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Währung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Bruttobetrag:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Bezahlungsgebühr:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Wechselkurs:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Stückzahl Warenkorbinhalt:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Typ:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'System Kommentare: ');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', 'Alle Artikel in Ihrem Warenkorb (siehe Details im Geschäft und auf Ihrem Geschäftsbeleg).');
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', STORE_NAME . ' Einkauf');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Einmalige Gebühren im Zusammenhang mit ');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT', 'Zuschläge');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG', 'Bearbeitungsgebühren und andere anfallende Gebühren');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabatte');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG', 'Gutschriften, einschließlich Rabattgutscheinen, Geschenkgutscheinen usw.');
