<?php

/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-07 Benny Philibel Modified in v1.5.7a $
 */
define('HEADING_TITLE', 'Kategorien / Artikel');
define('HEADING_TITLE_GOTO', 'Gehe zu: ');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategorien & Artikel');

define('TABLE_HEADING_PRICE', 'Preis/Sonderangebot/Abverkauf');
define('TABLE_HEADING_QUANTITY', 'Anzahl');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sortierung');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' von ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' aktiv');
define('TEXT_CATEGORIES', 'Kategorien: ');
define('TEXT_PRODUCTS', 'Artikel: ');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Kategorie löschen');
define('TEXT_DELETE_CATEGORY_INTRO', 'Wollen Sie diese Kategorie wirklich löschen?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Warnung:</strong> Verbundene Artikel, deren Master Kategorie ID gelöscht wird, setzen nicht den richtigen Preis fest. Vor dem Entfernen einer Kategorie sollten Sie zuerst sicherstellen, daß die zu löschende Kategorie keine verbundenen Artikel enthält. Noch enthaltene verbundene Artikel sollten einer anderen Master Kategorie ID zugeordnet werden');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Kategorie verschieben');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Bitte Kategorie auswählen, in die Sie <b>%s</b> verschieben wollen');
define('TEXT_MOVE_PRODUCT', 'Artikel<br><strong>ID#%1$u %2$s</strong><br>verschieben aus actuellen Kategorie<br><strong>ID#%3$u %4$s</strong><br>zu: ');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Artikel/Links löschen');
define('TEXT_DELETE_PRODUCT_INTRO', 'Löschen Sie die Links dieses Produkts zu Kategorien oder löschen Sie das Produkt vollständig.<br />Um das Verknüpfen/Aufheben der Verknüpfung von Produkten mit mehreren Kategorien zu vereinfachen, können Sie auch die <a href ="index.php?Cmd=' . FILENAME_PRODUCTS_TO_CATEGORIES . '&amp;products_filter=%u">Link-Manager für mehrere Kategorien</a> verwenden.<br /><br /><strong>Verknüpfte Kategorien</strong> sind zum Löschen vorgewählt.<br />Die <strong>Hauptkategorie</strong> (<span class="text-danger">hervorgehoben</span>) ist abgewählt, um ein versehentliches Löschen zu verhindern.<br /><br />Um ein Produkt vollständig zu löschen, wählen Sie ALLE Kategorien aus einschließlich der Hauptkategorie.');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Artikel verschieben');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Verschieben Sie diesen Artikel aus dieser Kategorie in die ausgewählte Kategorie.<br />Wenn diese aktuelle Kategorie auch die Hauptkategorie des Artikels ist, wird diese ebenfalls auf die ausgewählte Kategorie aktualisiert.<br />');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Derzeitige Kategorien: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopieren nach');
define('TEXT_INFO_CURRENT_PRODUCT', 'Derzeitiger Artikel: ');
define('TEXT_HOW_TO_COPY', 'Kopiermethode: ');
define('TEXT_COPY_AS_LINK', 'Artikel verlinken in eine andere Kategorie wie oben ausgewählt');
define('TEXT_COPY_AS_DUPLICATE', 'Artikel duplizieren in die Kategorie wie oben ausgewählt');
define('TEXT_COPY_METATAGS','Metatags zum Duplikat kopieren?');
define('TEXT_COPY_LINKED_CATEGORIES','Verlinkte Kategorien zum Duplikat kopieren?');
define('TEXT_COPY_EDIT_DUPLICATE', 'Doppelten Artikel zum Bearbeiten öffnen');

//used in copy_product_confirm
define('TEXT_COPY_AS_DUPLICATE_ATTRIBUTES', 'Attribute, die aus Artikel ID#%u kopiert wurden, um das Produkt zu duplizieren ID#%u');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Metatags für Sprach ID#%u erfolgreich kopiert von Artikel ID#%u zur duplizierten Artikel ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Verlinkte Kategorie ID#%u erfolgreich kopiert von Artikel ID#%u zur duplizierten Artikel ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Rabatte erfolgreich kopiert von Artikel ID#%u zur duplizierten Artikel ID#%u');
define('TEXT_DUPLICATE_IDENTIFIER', '[VERDOPPELN]');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Attributänderungen für Artikel ID# ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Attributmerkmale Für:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Downloads: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Lösche <strong>ALLE</strong> Artikelattribute für:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Kopiere Attribute zu einem anderen <strong>Artikel</strong> von:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Kopiere Attribute zu einer anderen <strong>Kategorie</strong> von:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Wie sollen bestehende Artikelattribute behandelt werden?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>Löschen</strong> - Bestehende Attribute werden gelöscht, dann die neuen Attribute kopiert.');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Aktualisieren</strong> Bestehende Attribute werden mit den neuen Einstellungen/Preisen aktualisiert, dann werden die neuen Attribute kopiert.');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorieren</strong> Bestehende Attribute werden beibehalten und nur die neuen Attribute hinzufügen');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES', 'Artikelattribute zum Duplikat kopieren?');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'wird nur verwendet für duplizierte Artikel mit Mengenrabatten ...');
define('TEXT_COPY_DISCOUNTS', 'Mengenrabatte des Artikels zum Duplikat kopieren?');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Kategoriestatus ändern für: ');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Kategoriestatus ändern nach: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'AUS');
define('TEXT_CATEGORIES_STATUS_ON', 'EIN');
define('TEXT_PRODUCTS_STATUS_INFO', 'JEDEN enthaltenen Artikelstatus ändern nach: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'AUS');
define('TEXT_PRODUCTS_STATUS_ON', 'EIN');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Unverändert');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>WARNUNG ...</strong><br />HINWEIS: Das deaktivieren von Artikeln (unabhängig davon, ob es sich um verknüpfte Artikel oder Hauptartikel handelt) in einer Kategorie führt dazu, dass ALLE Instanzen dieses Artikels in ALLEN Kategorien deaktiviert werden.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Ändere den Status ALLER Unterkategorien auf:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Deaktiviert');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Aktiviert');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Unverändert');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'WARNUNG: Sie haben Artikel in der obersten Ebene Kategorie. Dies führt dazu, dass die Preisgestaltung im Katalog nicht ordnungsgemäß funktioniert. Artikel gefunden: ');

define('TEXT_COPY_MEDIA_MANAGER', 'Medien kopieren?');
define('SUCCESS_ATTRIBUTES_DELETED','Attribute erfolgreich gelöscht');
