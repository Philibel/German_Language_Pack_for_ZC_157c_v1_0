<?php
/**
 * Authorize.net SIM Payment Module
 *
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-04 Benny Philibel Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Kreditkarte');  // Payment option title as displayed to the customer


  if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Händler Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Produktion' ? '<br /><br />Automatischer Kreditkartentest Info:<br /><b>Automatic Approval Credit Card Numbers:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><strong>Hinweis:</strong> Diese Kreditkartennummern bekommen eine Bestätigung für die Ablehnung in Echtzeit zurück und eine Überprüfung erfolgt im Testmodus. Als Ablaufdatum kann jedes beliebige Datum und als Kreditkarten Sicherheitscode jeder beliebige 3-Stellige bzw. 4-Stellige (AMEX) Code eingegeben werden.<br /><br /><strong>Automatisch abgelehnte Kreditkartennummer:</strong><br /><br />Nummer: 4222222222222<br /><br />Diese Kreditkartennummer kann für Testzwecke zum Erhalt der Ablehungsbestätigung verwendet werden.' : '') . '<br /><br /><strong>EINSTELLUNGEN</strong><br />Ihre URL-Einstellungen für "Response" und "Receipt" und "Relay" in Ihrem Authorize.net-Händlerprofil können BLANK gelassen werden oder falls erforderlich Sie können die "Relay-URL" so einstellen, dass sie auf https://your_domain.com/foldername/index.php?main_page=checkout_process verweist.<br><br>Wenn Sie Probleme damit haben, lesen Sie <a href="https://docs.zen-cart.com/user/modules/authorizenet_sim/" rel="noreferrer noopener" target="_blank">im FAQ-Artikel zum SIM-Setup</a> und finden Sie detaillierte Anweisungen zum Einrichten.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Klicken Sie hier um einen Account zu erstellen.</a><br /><br /><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Klicken Sie hier um sich bei Ihrem Händler Login anzumelden</a><br /><br /><strong>Voraussetzungen:</strong><br /><hr />*<strong>Authorize.net Account</strong> (zur Registrierung nutzen Sie den obigen Link)<br />*<strong>Authorize.net Benutzername und Transaction key</strong>Erhältlich in Ihrem Merchant Area<br><br>Siehe <a href="https://docs.zen-cart.com/user/modules/authorizenet_sim/" rel="noreferrer noopener" target="_blank">the SIM Setup FAQ article</a> finden Sie detaillierte Anweisungen zum Setup.');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Kreditkarten Typ: ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Karteninhaber: ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Kartennummer: ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Gültig bis: ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'Kreditkarten Prüfziffer: ');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Was ist das?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Der Name des Karteninhabers muss mindestens ' . CC_OWNER_MIN_LENGTH . ' characters.\n. Zeichen haben!');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Die Kartennummer muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' characters.\n. Zeichen haben!');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Die drei- oder vierstellige Kreditkarten Prüfziffer von der Rückseite der Kreditkarte muss eingegeben werden.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Ein Fehler ist bei der Überprüfung der Kreditkarte aufgetreten. Bitte versuchen Sie es noch einmal.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Ihre Kreditkarte wurde abgelehnt. Für weitere Informationen kontaktieren Sie bitte Ihre Bank');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Kreditkartenfehler!');
