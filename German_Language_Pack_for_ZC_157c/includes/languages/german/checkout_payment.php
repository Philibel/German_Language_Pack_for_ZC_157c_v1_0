<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-03 Benny Philibel Modified in v1.5.7 $
 */

define('NAVBAR_TITLE_1', 'Bestellung - Schritt 2');
define('NAVBAR_TITLE_2', ' Schritt 2 - Zahlungsart wählen');

define('HEADING_TITLE', 'Schritt 2 von 3 : Zahlungsinformationen');

define('TABLE_HEADING_BILLING_ADDRESS', 'Rechnungsanschrift');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Ihre Rechnungsanschrift steht links. Sie können Ihre Rechnungsanschrift ändern indem Sie auf <em>Adresse ändern</em> klicken.');
define('TITLE_BILLING_ADDRESS', 'Rechnungsanschrift: ');

define('TABLE_HEADING_PAYMENT_METHOD', 'Zahlungsart');
define('TEXT_SELECT_PAYMENT_METHOD', 'Bitte wählen Sie eine Zahlungsart für diese Bestellung.');
define('TITLE_PLEASE_SELECT', 'Bitte wählen Sie');
define('TABLE_HEADING_COMMENTS', 'Besondere Anweisungen oder Kommentare zur Bestellung');

define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE', '<span class="alert">Entschuldigung, aber wir können Zahlungen aus Ihrer Region nicht annehmen .</span><br />Bitte setzen Sie sich mit uns in Verbindung, um Alternativen zu suchen.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Weiter zu Schritt 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- um Ihre Bestellung fortzuführen ...');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Allgemeine Geschäftsbedingungen</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Bitte bestätigen Sie unsere Allgemeinen Geschäftsbedingungen durch Anklicken der Checkbox. Unsere AGB können Sie <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" rel="noopener" target="_blank"><span class="pseudolink">hier</span></a> nachlesen.</span>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Ich habe die AGB gelesen und akzeptiert.');

define('TEXT_YOUR_TOTAL', 'Gesamtbetrag Ihrer Rechnung');
