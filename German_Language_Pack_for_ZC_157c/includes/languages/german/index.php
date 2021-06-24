<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-03 Benny Philibel Modified in v1.5.7 $
 */

define('TEXT_MAIN', 'Dies ist die Hauptdefinitionsanweisung für die Seite für Deutsch, wenn keine Template Datei vorhanden ist. Diesen Text können Sie in <strong>/includes/languages/german/index.php</strong> editieren.');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Willkommen <span class="greetUser">Gast!</span> Wollen Sie sich <a href="%s">anmelden</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Willkommen! Bitte genießen Sie unseren Schauraum.');
}

define('TEXT_GREETING_PERSONAL', 'Willkommen <span class="greetUser">%s</span>! Wollen Sie sehen, was es <a href="%s">Neues</a> bei uns gibt?');

define('TEXT_INFORMATION', 'Definieren Sie hier Ihren persönlichen Text. Diesen Text können Sie in <strong>/includes/languages/german/index.php</strong> editieren.');

//moved to german
//define('TABLE_HEADING_FEATURED_PRODUCTS', 'Ausgewählte Artikel');

//define('TABLE_HEADING_NEW_PRODUCTS', 'Neue Artikel für %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Neue Artikel für');
//define('TABLE_HEADING_DATE_EXPECTED', 'Datum erwartet');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'verfügbare Artikel');
  define('TABLE_HEADING_IMAGE', 'Artikelbild');
  define('TABLE_HEADING_PRODUCTS', 'Artikelname');
  define('TABLE_HEADING_MANUFACTURER', 'Hersteller');
  define('TABLE_HEADING_PRICE', 'Preis');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'Jetzt kaufen');
  define('TEXT_NO_PRODUCTS', 'In dieser Kategorie gibt es derzeit keine Artikel.');
  define('TEXT_NO_PRODUCTS2', 'Von diesem Hersteller ist kein Artikel verfügbar.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Anzahl der Artikel: ');
  define('TEXT_SHOW', '<strong>Ergebnisse filtern nach: </strong>');
  define('TEXT_BUY', 'Kaufe 1 \'');
  define('TEXT_NOW', '\' jetzt');
  define('TEXT_ALL_CATEGORIES', 'Alle Kategorien');
  define('TEXT_ALL_MANUFACTURERS', 'Alle Hersteller');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Willkommen in unserem Online Shop!');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Willkommen in unserem Online Shop!');
}
