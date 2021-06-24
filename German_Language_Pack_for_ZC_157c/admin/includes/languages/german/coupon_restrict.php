<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-06 Benny Philibel Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Aktionskupon: Artikel/Kategorien Einschränkungen');
define('HEADING_TITLE_CATEGORY', 'Kategorieneinschränkungen');
define('HEADING_TITLE_PRODUCT', 'Artikeleinschränkungen');

define('SUB_HEADING_COUPON_NAME', 'Einschränkungen für den Kupon, benannt &quot;%1$s&quot; [%2$u].');  //-%1$s = coupon-name, %2$u = coupon_id

define('TABLE_HEADING_CATEGORY_ID', 'Kategorie ID');
define('TABLE_HEADING_CATEGORY_NAME', 'Kategorienname');
define('TABLE_HEADING_PRODUCT_NAME', 'Artikelname');
define('TABLE_HEADING_PRODUCT_ID', 'Artikel ID');
define('TABLE_HEADING_RESTRICT', 'Beschränkung');
define('TABLE_HEADING_RESTRICT_REMOVE', 'Entfernen');
define('IMAGE_REMOVE', 'Entfernen');
define('TEXT_ALL_CATEGORIES', 'Alle Kategorien');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Alle Artikel der Kategorie hinzufügen');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Alle Artikel der Kategorie entfernen');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Bei der Auswahl von "Alle Artikel der Kategorie hinzufügen" werden nur Artikel hinzugefügt, für die noch keine Einschränkungen definiert wurden.<br />
                    Bei der Auswahl von "Alle Artikel der Kategorie entfernen" werden nur Artikel entfernt, die mit Erlaubt oder Nicht erlaubt gekennzeichnet wurden.</strong>');

define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Kategorie nicht abgeschlossen');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Artikel nicht abgeschlossen');

define('HEADER_MANUFACTURER_NAME', '<br> -- ODER -- <br>' . 'Manufacturer: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Alle Herstellerartikel hinzufügen');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Alle Herstellerartikel entfernen');

define('TABLE_HEADING_STATUS', 'Status');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Filter für Kategorie und Hersteller zurückgesetzt. Filter einzeln verwenden.');

define('TEXT_PULLDOWN_ALLOW', 'Ermöglichen');
define('TEXT_PULLDOWN_DENY', 'Verweigern');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Hinzufügen');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Aktualisieren');
define('TEXT_STATUS_TOGGLE', 'Umschalten');
define('TEXT_STATUS_TOGGLE_TITLE', 'Klicken Sie hier, um den Status der Einschränkung umzuschalten');
define('TEXT_ALLOWED', 'Produkt oder Kategorie ist erlaubt');
define('TEXT_DENIED', 'Produkt oder Kategorie ist nicht erlaubt');

define('TEXT_NO_CATEGORY_RESTRICTIONS', 'Keine aktuellen Kategorieeinschränkungen');
define('TEXT_NO_PRODUCT_RESTRICTIONS', 'Keine aktuellen Artikelbeschränkungen');
