<?php
/**
 * @package admin
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-05 Benny Philibel $
 */

define('HEADING_TITLE', 'Admin Seiten Registrierung');
define('TEXT_PAGE_KEY', 'Seitenschlüssel');
define('TEXT_LANGUAGE_KEY', 'Seitenname');
define('TEXT_MAIN_PAGE', 'Seiten Dateiname');
define('TEXT_PAGE_PARAMS', 'Seiten Parameter');
define('TEXT_MENU_KEY', 'Menü');
define('TEXT_DISPLAY_ON_MENU', 'Anzeigen im Menü?');
define('TEXT_SORT_ORDER', 'Sortierung');

define('TEXT_EXAMPLE_PAGE_KEY', '(z.B. meinModSeitenName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(z.B. BOX_MEIN_MOD_SEITEN_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(z.B. DATEINAME_SEITEN_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(z.B. option=1 oder im Normalfall leer lassen)');
define('TEXT_SELECT_MENU', 'Menü wählen');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Keinen Seitenschlüssel eingegeben. Alle Admin Seiten müssen einen einzigartigen Seitenschlüssel haben.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Seitenschlüssel bereits vorhanden. Seitenschlüssel müssen einzigartig sein.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Sprachschlüssel nicht eingegeben. Alle Administrationsseiten müssen über einen Sprachschlüssel verfügen, der den Text auf einem beliebigen Menülink definiert.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Der eingegebene Sprachschlüssel wurde nicht definiert. Bitte überprüfen Sie, ob es richtig geschrieben wurde.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Es wurde kein gültiger Dateiname für die Admin Seite eingegeben.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Die eingegebene Dateinamendefinition existiert nicht. Bitte überprüfen Sie, ob es richtig geschrieben wurde.');
define('ERROR_MENU_NOT_CHOSEN', 'Kein Menü ausgewählt. Sie müssen eine Admin Seite immer einem Menü zuordnen, auch wenn Sie die Seite nicht im Menü anzeigen lassen wollen.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Ihre Admin Seite wurde angelegt.');
