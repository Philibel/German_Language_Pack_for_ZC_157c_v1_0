<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-11 Benny Philibel Modified in v1.5.7 $
 */


define('HEADING_TITLE', 'Sonderangebote und Abverkäufe');

define('TABLE_HEADING_PRODUCTS', 'Artikel');
define('TABLE_HEADING_STOCK', 'Vorrat');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Artikelpreis | Sonderpreis | Abverkauf');
define('TABLE_HEADING_AVAILABLE_DATE', 'Verfügbar ab');
define('TABLE_HEADING_EXPIRES_DATE', 'Ablaufdatum');
define('TABLE_HEADING_STATUS', 'Sonderstatus');
define('TABLE_HEADING_ACTION', 'Aktionen');
define('TEXT_ADD_SPECIAL_SELECT', 'Special durch Auswahl hinzufügen');
define('TEXT_ADD_SPECIAL_PID', 'Fügen Sie Special nach Produkt-ID hinzu');
define('TEXT_SEARCH_SPECIALS', 'Suchen Sie nach aktuellen Specials');
define('TEXT_SPECIAL_ACTIVE', 'Sonderpreis Aktiv');
define('TEXT_SPECIAL_INACTIVE', 'Sonderpreis Inaktiv');
define('TEXT_SPECIAL_STATUS_BY_DATE', 'Status nach Datum festgelegt');

define('TEXT_SPECIALS_PRODUCT', 'Artikel: ');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Sonderpreis: ');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Verfügbar ab: ');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Ablaufdatum: ');

define('TEXT_INFO_DATE_ADDED', 'Erstellt am: ');
define('TEXT_INFO_LAST_MODIFIED', 'Letzte Änderung: ');
define('TEXT_INFO_NEW_PRICE', 'Neuer Sonderpreis: ');
define('TEXT_INFO_ORIGINAL_PRICE', 'Originalpreis: ');
define('TEXT_INFO_DISPLAY_PRICE', 'Derzeit angezeigter Preis: ');
define('TEXT_INFO_STATUS_CHANGED', 'Status geändert: ');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Sonderpreis löschen');
define('TEXT_INFO_DELETE_INTRO', 'Wollen Sie diesen Sonderpreis wirklich löschen?');

define('WARNING_SPECIALS_PRE_ADD_PID_EMPTY', 'Warnung: Es wurde keine Artikel-ID angegeben.');
define('WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE', 'Warnung: Artikel ID#%u bereits auf Special.');
define('WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST', 'Warnung: Artikel ID#%u existiert nicht.');
if (!defined('TEXT_GV_NAME')) {
    require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
}
define('WARNING_SPECIALS_PRE_ADD_PID_GIFT', 'Warnung: Artikel ID#%u ist ein ' . TEXT_GV_NAME . '.');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Sonderpreis nach Artikel-ID hinzufügen');
define('TEXT_INFO_PRE_ADD_INTRO', 'Sie können einen Sonderpreis nach Artikel-ID hinzufügen. Diese Methode eignet sich möglicherweise für Geschäfte mit vielen Produkten, wenn das Rendern der Auswahlseite zu lange dauert oder die Auswahl eines Produkts aus der Dropdown-Liste unhandlich wird.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Geben Sie die Artikel-ID ein: ');

define('TEXT_SPECIALS_PRICE_NOTES', '<b>Hinweise:</b><ul><li>Der Sonderpreis kann ein Preis (ohne Steuern) sein. Der berechnete prozentuale Rabatt wird neben dem neuen Produktpreis im Katalog angezeigt.</li><li>Der Sonderpreis kann ein prozentualer Rabatt sein, z. B.: <b>20%</b>.</li><li>Start- und Enddaten sind nicht obligatorisch. Sie können das Ablaufdatum ohne Ablauf leer lassen.</li><li>Wenn Daten festgelegt sind, wird der Status des Sonderpreises automatisch entsprechend aktiviert/deaktiviert.</li><li>' . TEXT_INFO_PRE_ADD_INTRO . '</li></ul>');
