<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-04-30 Benny Philibel Modified in v1.5.7c $
 */

define('NAVBAR_TITLE', 'Anmeldezeit überschritten');
define('HEADING_TITLE', 'Ups! Ihre Session ist abgelaufen.');
define('HEADING_TITLE_LOGGED_IN', 'Entschuldigen Sie bitte, aber Sie dürfen diese Tätigkeit nicht ausführen. ');
define('TEXT_INFORMATION', '<p>Wenn Sie eine Bestellung aufgegeben haben, melden Sie sich bitte an und Ihr Warenkorb wird wiederhergestellt. Sie können dann zur Kasse zurückkehren und Ihre endgültigen Einkäufe abschließen.</p><p>Wenn Sie eine Bestellung abgeschlossen haben und diese überprüfen möchten' . (DOWNLOAD_ENABLED == 'true' ? ', oder hatte einen Download und möchte ihn abrufen' : '') . ', gehen Sie bitte zu Ihrer <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mein Konto</a> Seite, um Ihre Bestellung anzuzeigen.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Sie sind bei Ihrem Konto angemeldet und können nun weiter einkaufen. Wählen Sie einen Menüpunkt aus.');

define('HEADING_RETURNING_CUSTOMER', 'Anmelden');
define('TEXT_PASSWORD_FORGOTTEN', 'Passwort vergessen?');
