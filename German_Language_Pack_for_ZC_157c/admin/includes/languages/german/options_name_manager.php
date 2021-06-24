<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-14 Benny Philibel Modified in v1.5.7 $
 */
define('HEADING_TITLE', 'Optionsname Manager');
define('TEXT_ATTRIBUTES_CONTROLLER', 'Attributen Controller');

define('TEXT_WARNING_TEXT_OPTION_NAME_RESTORED', 'Warnung: Der Optionswert TEXT ID#0 fehlt in der Datenbanktabelle "' . TABLE_PRODUCTS_OPTIONS_VALUES . '". Dies kann an einem falsch codierten Plugin liegen.<br>Der Wert wurde korrekt wiederhergestellt.');
define('TABLE_HEADING_PRODUCT', 'Artikelname');
define('TABLE_HEADING_OPTION_NAME', 'Optionsname');
define('TABLE_HEADING_OPTION_VALUE', 'Optionswert');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Hinweis: Bearbeiten Sie den Optionsnamen für zusätzliche Einstellungen</strong>');

define('TEXT_WARNING_OF_DELETE', 'Dieser Optionsname wird von den unten aufgeführten Artikelen verwendet: Er kann erst gelöscht werden, wenn alle mit diesem Optionsnamen verknüpften Optionswerte (Attribute) aus diesen Artikelen entfernt wurden (dies kann mit den folgenden globalen Tools erfolgen).');
define('TEXT_OK_TO_DELETE', 'Dieser Optionsname wird von keinem Artikel verwendet - es ist sicher, ihn zu löschen.<br><strong>Warnung: </strong>Dadurch werden sowohl der Optionsname als auch alle mit diesem Optionsnamen verknüpften Optionswerte gelöscht.');

define('TEXT_OPTION_ID', 'Options ID');
define('TEXT_OPTION_NAME', 'Optionsname');

define('TEXT_WARNING_DUPLICATE_OPTION_NAME','Options ID#%1$u: Doppelter Optionsname hinzugefügt: "%2$s" (%3$s)');

define('TEXT_ORDER_BY','Sortieren nach');
define('TEXT_SORT_ORDER','Sortierung');

define('TABLE_HEADING_OPTION_TYPE', 'Optionstyp');
define('TABLE_HEADING_OPTION_NAME_SIZE','Größe');
define('TABLE_HEADING_OPTION_NAME_MAX','Max');

define('TEXT_OPTION_NAME_COMMENTS','Kommentar (angezeigt neben Optionsname)');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Attributbilder pro Zeile');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Attributbild-Layoutstil (nur für Kontrollkästchen/Optionsfelder)');
define('TEXT_OPTION_ATTRIBUTE_LAYOUTS_EXAMPLE', 'Beispiele anzeigen');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0 - Auswahl + Text, Bilder unter Optionen ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1 - Wählen Sie + Bild + Option inline');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2 - Wählen Sie + Option + Bild umbrochen');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3 - Wählen Sie + Bild + Option umschlossen');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4 - Bild + Option + Als Spalte auswählen');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5 - Wählen Sie + Bild + Option als Spalte');
//text attributes only
define('TEXT_OPTION_NAME_ROWS', 'Reihen');
define('TEXT_OPTION_NAME_SIZE','Anzeigegröße');
define('TEXT_OPTION_NAME_MAX','Maximale Länge');
define('TEXT_OPTION_TYPE_TEXT_ATTRIBUTE_INFO', 'Hinweis: ' . TEXT_OPTION_NAME_ROWS . ', ' . TEXT_OPTION_NAME_SIZE . ' und ' . TEXT_OPTION_NAME_MAX . ' sind nur für den Optionsnamen Typ "Text".');
define('TEXT_INSERT_NEW_OPTION_NAME', 'Neuen Optionsnamen hinzufügen');

// Global Tools
define('TEXT_GLOBAL_TOOLS', 'Globale Tools');
define('TEXT_CLICK_TO_SHOW_HIDE', 'zum Anzeigen/Ausblenden klicken');
define('TEXT_WARNING_BACKUP', 'Wichtig: Erstellen Sie immer eine überprüfte Sicherung Ihrer Datenbank, bevor Sie globale Änderungen vornehmen/globale Tools verwenden');
define('TEXT_SELECT_OPTION_TYPES_ALLOWED', 'Beachten Sie, dass globale Tools nicht mit den Optionsnamentypen "Text" oder "Datei" verwendet werden können.');
define('TEXT_SELECT_PRODUCT', 'Wähle ein Artikel');
define('TEXT_SELECT_CATEGORY', 'Wählen Sie eine Kategorie aus');
define('TEXT_SELECT_OPTION', 'Wählen Sie einen Optionsnamen');
define('TEXT_NAME', 'Name');

// Add
define('TEXT_INFO_OPTION_VALUES_ADD', '<strong> Hinweis:</strong> für Artikeln, die mit den Tools <b>Hinzufügen</b> aktualisiert werden (zusätzliche Optionswerte erhalten),  Die Sortierreihenfolge für die Optionswerte (Attribute) wird auf die <strong>Standard-Sortierreihenfolge</strong> für diesen Optionsnamen zurückgesetzt.');

define('TEXT_OPTION_VALUE_ADD_ALL', 'Aktualisieren (Hinzufügen) aller verbleibenden Optionswerte zu ALLEN Artikelen, die diesen Optionsnamen verwenden');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Für ALLE Artikeln, die den ausgewählten Optionsnamen verwenden (und daher mindestens einen Optionswert zugewiesen haben), füge ALLE anderen Optionswerte hinzu, die dem Optionsnamen zugeordnet sind.');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', 'Aktualisieren (Hinzufügen) aller verbleibenden Optionswerte zu EINEM Artikel, das diesen Optionsnamen verwendet');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Für ein Artikel, das den ausgewählten Optionsnamen verwendet (und dem mindestens ein Optionswert zugewiesen ist), füge ALLE anderen Optionswerte hinzu, die dem Optionsnamen zugeordnet sind.');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', 'Aktualisieren (Hinzufügen) aller verbleibenden Optionswerte zu ALLEN Artikelen in einer Kategorie, die diesen Optionsnamen verwenden');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Nur für Artikele in EINER Kategorie, die den ausgewählten Optionsnamen verwenden,  füge ALLE anderen Optionswerte hinzu, die dem Optionsnamen zugeordnet sind.');
define('TEXT_SHOW_CATEGORY_PATH', 'Kategoriepfad anzeigen');
define('TEXT_SHOW_CATEGORY_NAME', 'Nur Kategorienamen anzeigen');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUE', 'Optionsname "%1$s": Optionswert "%2$s" zum Artikel "%3$s" hinzugefügt.');
define('SUCCESS_PRODUCT_OPTIONS_VALUES_SORT_ORDER', 'Optionsname "%1$s": Artikel "%2$s" Optionswerte, die auf die Standardsortierreihenfolge für Optionsname "%1$s" aktualisiert wurden.');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Optionsname "%1$s": %2$u Artikele mit zusätzlichen Optionswerten aktualisiert.');

define('ERROR_PRODUCTS_OPTIONS_PRODUCTS', 'Warnung: Mit dem Optionsnamen "%s" wurden keine passenden Artikele gefunden (nichts wurde aktualisiert).');
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Warnung: Alle übereinstimmenden Artikele haben bereits alle Optionswerte für den Optionsnamen "%s" (nichts wurde aktualisiert).');

// Delete
define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong> HINWEIS:</strong> Alle Optionswerte werden aus den übereinstimmenden/ausgewählten Artikelen gelöscht. Dadurch werden die für diesen Optionsnamen definierten Optionswerte nicht gelöscht.');
define('TEXT_OPTION_VALUE_DELETE_ALL', 'Alle Optionswerte aus ALLEN Artikelen mit diesem Optionsnamen löschen');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Für ALLE Artikele, die den ausgewählten Optionsnamen verwenden, entferne alle Optionswerte/den Optionsnamen.');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', 'Alle Optionswerte mit diesem Optionsnamen aus EINEM Artikel löschen');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Für ein Artikel, das den ausgewählten Optionsnamen verwendet, entferne ALLE Optionswerte/den Optionsnamen.');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', 'Alle Optionswerte aus EINER Artikelkategorie für diesen Optionsnamen löschen');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Nur für Artikele in EINER Kategorie, die den ausgewählten Optionsnamen verwenden, entferne alle Optionswerte/den Optionsnamen.');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUES_DELETED', 'Optionsname "%1$s": Alle Optionswerte aus Artikel "%2$s" gelöscht.');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES_DELETED', 'Optionsname "%1$s": Alle Optionswerte, die aus %2$u Artikelen entfernt wurden.');

// Copy
define('TEXT_OPTION_VALUE_COPY_ALL', 'Alle Optionswerte in einen anderen Optionsnamen kopieren');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Alle Optionswerte aus dem ausgewählten Optionsnamen werden in einen anderen Optionsnamen kopiert (hinzugefügt).');
define('TEXT_SELECT_OPTION_FROM', 'Vom Optionsnamen kopieren: ');
define('TEXT_SELECT_OPTION_TO', 'In Optionsnamen kopieren: ');

define('SUCCESS_OPTION_VALUE_COPIED', 'Optionswert "%6$s" ID#%5$u kopiert von Optionsname "%2$s" ID#%1$u in Optionsname "%4$s" ID#%3$u.');
define('SUCCESS_OPTION_VALUES_COPIED', '%5$u Optionswert(e) kopiert von Optionsname "%2$s" ID#%1$u in Optionsname "%4$s" ID#%3$u.');
define('ERROR_OPTION_VALUES_COPIED', 'Fehler: Optionswerte können nicht in denselben Optionsnamen kopiert werden ("%2$s" ID#%1$u bis "%4$s" ID#%3$u)!');
define('ERROR_OPTION_VALUES_NONE', 'Fehler: Optionsname "%2$s" ID#%1$u hat keine Optionswerte definiert (nichts zu kopieren)!');
