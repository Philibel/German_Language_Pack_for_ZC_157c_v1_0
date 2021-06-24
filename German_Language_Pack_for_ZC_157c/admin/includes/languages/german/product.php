<?php

/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-06 Benny Philibel Modified in v1.5.7 $
 */


define('TEXT_PRODUCTS_STATUS', 'Artikelstatus:');
define('TEXT_PRODUCTS_VIRTUAL', 'Virtueller Artikel:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Immer versandkostenfrei:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Lagerbestand anzeigen:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Erscheinungsdatum:');
define('TEXT_PRODUCT_AVAILABLE', 'aktiviert');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Deaktiviert');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, Versandadresse überspringen');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nein, Lieferadresse erforderlich');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, immer kostenloser Versand');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nein, normale Versandregeln');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Sonderangebote, Artikel/Download benötigt eine Lieferadresse');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, Mengenfeld anzeigen');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nein, Mengenfeld nicht anzeigen');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT', 'Warnung: Zeigt kein Mengenfeld an, Standard auf Menge 1');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW', 'Warnung: Zeigt kein Mengenfeld an, Standard auf Menge 1');

define('TEXT_PRODUCTS_MANUFACTURER', 'Artikelhersteller: ');
define('TEXT_PRODUCTS_NAME', 'Artikelname: ');
define('TEXT_PRODUCTS_DESCRIPTION', 'Artikelbeschreibung: ');
define('TEXT_PRODUCTS_QUANTITY', 'Artikelmenge: ');
define('TEXT_PRODUCTS_IMAGE', 'Artikelbild: ');
define('TEXT_EDIT_PRODUCTS_IMAGE', 'Artikelbild bearbeiten: ');
define('TEXT_PRODUCTS_IMAGE_DIR', 'In Verzeichnis hochladen: ');
define('TEXT_PRODUCTS_URL', 'Artikel-URL: ');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(Ohne führendes http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Nettopreis: ');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Bruttopreis: ');
define('TEXT_PRODUCTS_WEIGHT', 'Gewicht: ');

define('TEXT_PRODUCT_IS_FREE', 'Artikel ist kostenlos: ');
define('TEXT_PRODUCTS_IS_FREE_PREVIEW', '*Artikel ist als KOSTENLOS markiert');
define('TEXT_PRODUCTS_IS_FREE_EDIT', '*Artikel ist als KOSTENLOS markiert');

define('TEXT_PRODUCT_IS_CALL', 'Artikel ist "Preis bitte anfragen":');
define('TEXT_PRODUCTS_IS_CALL_PREVIEW', '*Artikel ist mit PREIS BITTE ANFRAGEN gekennzeichnet');
define('TEXT_PRODUCTS_IS_CALL_EDIT', '*Artikel ist mit PREIS BITTE ANFRAGEN gekennzeichnet');

define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES', 'Preis durch Attribute festgelegt: ');
define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE', 'Ja');
define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE', 'Nein');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW', '*Der angezeigte Preis enthält den niedrigsten Gruppenattributspreis plus dem Grundpreis');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT', '*Der angezeigte Preis enthält den niedrigsten Gruppenattributspreis plus dem Grundpreis');

define('TEXT_PRODUCTS_TAX_CLASS', 'Steuersatz: ');

define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL', 'Artikel Mindestabnahme:');
define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL', 'Abnahmeeinheit:');
define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL', 'Artikel Maximalabnahme:');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_PREVIEW', 'Warnung: Minimum ist kleiner als Einheiten');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_MISMATCH_PREVIEW', 'Warnung: Minimum ist kein Vielfaches von Einheiten');

define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT', 'Geben Sie die Anzahl ein (0 = unlimitiert)');

define('TEXT_PRODUCTS_MIXED', 'Artikel Mindestabnahme/Anzahl Mix: ');

define('TEXT_PRODUCTS_SORT_ORDER', 'Sortierung: ');

define('TEXT_PRODUCT_MORE_INFORMATION', 'Für weitere Informationen besuchen Sie bitte diese <a href="http://%s" target="blank">Webseite</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Dieser Artikel wurde am %s hinzugefügt.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Artikel wird ab %s auf Lager.');

// meta tags
define('TEXT_META_TAG_TITLE_INCLUDES', '<strong>Wählen Sie aus, welche Informationen die Metatags des Artikels enthalten sollen (in dieser Reihenfolge):</strong><span class="alert">HINWEIS: Wenn die Meta-Tag-Felder "Schlüsselwörter" und "Beschreibung" beide leer sind, werden alle Elemente (außer dem Titel "Zusätzlicher Text") festgelegt zu "ja". In diesem Fall kann jedoch die Anzeige des Artikelmodells und des Artikelpreises auf der Admin-Seite Konfiguration-> Artikelinfo überschrieben (deaktiviert) werden</span>');
define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS', '<strong>Artikelname: </strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS', '<strong>Titel Zusätzlicher Text:</strong><br>(unten definiert)');
define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS', '<strong>Artikelmodell: </strong>');
define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS', '<strong>Artikelpreis: </strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS', '<strong>definierte Konstante "SITE_TAGLINE":</strong>');
define('TEXT_META_TAGS_TITLE', '<strong>Zusätzlicher Text für Titel:</strong><br><span class="alert">HINWEIS: Zusätzlicher Text für Titel wird nicht verwendet, wenn die Meta-Tag-Felder "Schlüsselwörter" und "Beschreibung" leer sind.</Span>');
define('TEXT_META_TAGS_KEYWORDS', '<strong>Meta Tag Schlüsselwörter:</strong>');
define('TEXT_META_TAGS_DESCRIPTION', '<strong>Meta Tag Beschreibung:</strong>');
define('TEXT_META_EXCLUDED', '<span class="alert">AUSGESCHLOSSEN</span>');
define('TEXT_TITLE_PLUS_TAGLINE', 'Shop-Titel + Slogan'); // this refers to whatever rules the storeowner has built into customizing their catalog /includes/modules/meta_tags.php and its lang file.

define('TEXT_PRODUCTS_PRICE_INFO', 'Preis:');
