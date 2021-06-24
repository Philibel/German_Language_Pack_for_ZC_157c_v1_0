<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-03 Benny Philibel Modified in v1.5.6 $
 */

define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Vorkasse/Überweisung');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Kunden können ihre Zahlungsanweisung einreichen. In der Bestellbestätigungs-E-Mail werden sie aufgefordert: <br><br>Bitte machen Sie Ihre Zahlungsanweisung zahlbar an:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(Ihr Geschäftsname)') . '<br /><br /> Senden Sie Ihre Zahlung an:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Ihre Bestellung wird erst versendet, wenn wir die Zahlung erhalten haben.');
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Bitte überweisen Sie den Betrag auf unser Konto:" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nSchicken Sie Ihre Zahlung an:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Ihre Bestellung wird versendet, sobald wir den Betrag erhalten haben.');
}
