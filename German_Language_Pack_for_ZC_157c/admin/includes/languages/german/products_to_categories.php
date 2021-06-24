<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-13 Benny Philibel Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Artikel in mehreren Kategorien anzeigen - Link Manager ...');
define('HEADING_TITLE2', 'Kategorien / Artikel');//used by prev_next if HEADING_TITLE not defined...so never used!

//Select Product
define('TEXT_HEADING_PRODUCT_SELECT', 'Artikel auswählen');
define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'WARNUNG: Artikel wurde zurückgesetzt und ist nicht mehr Teil dieser Kategorie  ...');

// Change Master Category
define('TEXT_PRODUCTS_ID_INVALID', 'WARNUNG: UNGÜLTIGE ARTIKEL ID#%u ODER KEIN ARTIKEL AUSGEWÄHLT');
define('TEXT_INFO_MASTER_CATEGORY_CHANGE', 'Ein Artikel verfügt über eine Hauptkategorie ID (für Preiszwecke), die als die Kategorie betrachtet werden kann, in der sich der Artikel tatsächlich <i>befindet</i>. Darüber hinaus kann ein Artikel mit einer beliebigen Anzahl anderer Kategorien <i>verknüpft</i> (kopiert) werden, wobei der Preis aufgrund der Bedingungen für diese verknüpften Kategorien geändert werden kann.<br>Die Hauptkategorie ID kann mithilfe von geändert werden In dieser Dropdown-Liste der Hauptkategorie werden nur die <strong>aktuell verknüpften</strong> Kategorien als mögliche Alternativen angeboten.<br>Um die Hauptkategorie ID auf <strong>eine andere</strong> Kategorie festzulegen, verknüpfen Sie sie zunächst mit einer neuen Kategorie Verwenden Sie die folgende Tabelle und Aktualisieren. Verwenden Sie dann diese Dropdown-Liste, um die Hauptkategorie dieser neuen Kategorie zuzuweisen.');

// Product InfoBox
define('TEXT_INFOBOX_HEADING_SELECT_PRODUCT', 'Wählen Sie Artikel nach ID#');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Setze Artikel - Kategorie Links für: ');
define('TEXT_PRODUCTS_ID', 'Artikel ID# ');
define('TEXT_PRODUCTS_NAME', 'Artikel: ');
define('TEXT_PRODUCTS_PRICE', 'Preis: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Kategorie Links aktualisieren für');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Wählen Sie einen anderen Artikel nach ID#');
define('BUTTON_CATEGORY_LISTING', 'Kategorieliste');

// Link product to multiple categories
define('TEXT_HEADING_LINKED_CATEGORIES', 'Verknüpfte Kategorien');
define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>WARNUNG:</strong> Es muss eine MASTER CATEGORIES ID zugewiesen werden');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO', '<p>Dieser Artikel ist derzeit mit den unten ausgewählten Kategorien verknüpft (Sie können die Anzahl der Spalten ändern, die auf <a target="_blank" href="configuration.php?&amp;gID=3">dieser Seite</a> angezeigt werden).<br>Um Links hinzuzufügen/zu entfernen, aktivieren/deaktivieren Sie die Kontrollkästchen nach Bedarf und klicken Sie dann auf ' . BUTTON_UPDATE_CATEGORY_LINKS . ' Schaltfläche.</p><p>Beachten Sie, dass zusätzliche Artikel-/Kategorieaktionen mit den folgenden globalen Tools verfügbar sind.</p>');
define('TEXT_LABEL_CATEGORY_DISPLAY_ROOT', 'Zeigen Sie die Unterkategorien unter an:');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY', 'Als Standard festlegen');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE', 'Legen Sie diese ausgewählte Zielkategorie als Standardanzeige fest');
define('TEXT_LABEL_SELECT_ALL_OR_NONE', 'Wählen Sie Alle oder Keine');
define('ERROR_CATEGORY_ID_INVALID', 'Verknüpfte Kategorie ID#%u ungültig (nicht hinzugefügt).');
define('SUCCESS_PRODUCT_LINKED_TO_CATEGORIES', 'Artikel-Links zu mehreren Kategorien aktualisiert für: %s');
define('WARNING_PRODUCT_UNLINKED_FROM_CATEGORY', 'Der Artikel wurde von der zuvor ausgewählten Kategorie "%1$s" ID#%2$u getrennt und wird nun in seiner Hauptkategorie angezeigt.');
define('WARNING_MAX_INPUT_VARS_LIMIT', 'WARNUNG: Auf dieser Seite stehen %1$u Unterkategorien zum Verknüpfen zur Verfügung, die über dem PHP Limit "max_input_vars" (derzeit %2$u) liegen. Dies bedeutet, dass nicht mehr als %2$u Kategorien verknüpft werden dürfen, bis dieses PHP Limit in Ihrem Hosting erhöht ist.');

// Global Tools
define('HEADER_CATEGORIES_GLOBAL_TOOLS', 'Globale Artikel- / Kategorietools');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '<p>Hinweis: Für die Verwendung dieser Tools muss kein Artikel ausgewählt werden. Wenn Sie jedoch einen Artikel oben auswählen, werden die verfügbaren Kategorien (und ihre ID Nummern beim Hover) angezeigt.</p>');

// Copy linked categories from one product to another product
define('TEXT_HEADING_COPY_LINKED_CATEGORIES', 'Kopieren Sie verknüpfte Kategorien nach einen anderen Artikel');
define('TEXT_INFO_COPY_LINKED_CATEGORIES', 'Kopieren Sie die verknüpften Kategorien des aktuell ausgewählten Artikels %s nach einen anderen Artikel.<br>Sie können <strong>die verknüpften Kategorien dieser Artikel zum Zielartikel hinzufügen oder <strong>Ersetzen</strong> (Löschen +) Hinzufügen) der verknüpften Kategorien der Zielartikel.<br>Hinweis: Diese Aktion kopiert nicht die Hauptkategorie des Quellartikels als verknüpfte Kategorie für die Zielkategorie, sondern nur die verknüpften Kategorien.');
define('TEXT_LABEL_ENABLE_COPY_LINKS', 'Dropdown-Liste zur Artikelauswahl aktivieren (listet <b>alle</b> Artikel auf)');
define('TEXT_OPTION_LINKED_CATEGORIES', 'Wählen Sie den Zielartikel aus');
define('BUTTON_COPY_LINKED_CATEGORIES_ADD', 'Verknüpfte Kategorien kopieren und hinzufügen');
define('BUTTON_COPY_LINKED_CATEGORIES_REPLACE', 'Verknüpfte Kategorien durch Kopieren und Ersetzen ersetzen');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD', 'Verknüpfte Kategorien (%1$u) wurden hinzugefügt:<br>VOM Referenzartikel: %2$s<br>ZUM Zielartikel: %3$s');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE', 'Verknüpfte Kategorien (%1$u) für Zielartikel: %3$s<br>wurden <em> durch</em> verknüpfte Kategorien des Artikels ersetzt: %2$s');
define('WARNING_COPY_LINKED_CATEGORIES_NO_TARGET', 'Ein Zielartikel wurde nicht ausgewählt!');
define('WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL', 'Nichts zu tun!<br>Quellartikel: %1$s<br>hat keine <em> zusätzlichen</em> verknüpften Kategorien zum Kopieren in<br>Zielartikel: %2$s');
define('ERROR_MASTER_CATEGORY_MISSING', 'FEHLER: Master-Kategorie ID fehlt in Tabelle "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>für Artikel: %s');

// Copy as linked, all products from category source to category target
define('TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Verknüpfen (Kopieren) von Artikeln aus einer Kategorie mit einer anderen Kategorie');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Beispiel: Eine Kopie von der Quellkategorie ID#8 zur Zielkategorie ID#22 erstellt verknüpfte Kopien ALLER Artikel der Kategorie 8 in Kategorie 22.');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Wählen Sie ALLE Artikel aus der Quellkategorie ID# aus: ');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Link (Kopie) zur Zielkategorie ID#: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Artikel als verknüpft kopieren');
define('WARNING_CATEGORY_SOURCE_NOT_EXIST', '<strong>Quelle</strong> Kategorie ID#%u ungültig (existiert nicht)');
define('WARNING_CATEGORY_TARGET_NOT_EXIST', '<strong>Ziel</strong> Kategorie ID#%u ungültig (existiert nicht)');
define('WARNING_CATEGORY_IDS_DUPLICATED', 'Warnung: gleiche Kategorie IDs (#%u)');
define('WARNING_CATEGORY_NO_PRODUCTS', '<strong>Quelle</strong> Kategorie ID#%u ungültig (enthält keine Artikel)');
define('WARNING_CATEGORY_SUBCATEGORIES', '<strong>Ziel</strong> Kategorie ID#%u ungültig (enthält Unterkategorien)');
define('SUCCESS_PRODUCT_COPIED', 'Artikel: %1$s wurde mit der Kategorie ID#%2$u<br>verknüpft');
define('SUCCESS_COPY_LINKED', '%1$u Artikel, die von der Quellkategorie ID#%2$u mit der Zielkategorie ID#%3$u verknüpft sind');
define('WARNING_COPY_FROM_IN_TO_LINKED', 'WARNUNG: Keine Artikel kopiert (alle Artikel in der Kategorie ID#%1$u sind bereits mit der Kategorie ID#%2$u verknüpft)');

// Remove linked products in reference category from target category
define('TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED', 'Verknüpfte Artikel aus einer Kategorie entfernen');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Beispiel: Wenn Sie die Referenzkategorie 8 und die Zielkategorie 22 verwenden, werden alle verknüpften Artikel aus der Zielkategorie 22 entfernt, die in der Referenzkategorie 8 vorhanden sind. Kein Artikel in der Zielkategorie Nr. 22 kann eine Hauptkategorie ID von Nr. 22 haben (wenn ja, muss sie einer anderen Kategorie zugewiesen werden).<br><strong>Aktuelle Kategorie ID#%u.</Strong>');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Wählen Sie ALLE Artikel in der Referenzkategorie aus:');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Entfernen Sie alle verknüpften Artikel aus der Zielkategorie:');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Verknüpfte Artikel entfernen');
define('SUCCESS_REMOVED_PRODUCT', 'Artikel: %1$s wurde aus der Kategorie ID#%2$u<br>entfernt');
define('SUCCESS_REMOVE_LINKED_PRODUCTS', '%u verknüpfte Artikel entfernt');
define('WARNING_REMOVE_FROM_IN_TO_LINKED', 'WARNUNG: Nichts zu tun! Keine Artikel in der Zielkategorie ID#%1$u sind mit der Referenzkategorie ID#%2$u verknüpft');
define('WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET', 'Artikel: ID#%1$u "%2$s" (%3$s)<br>hat dieselbe Hauptkategorie ID wie die Zielkategorie ID#%4$u<br>');
define('WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT', '<strong>WARNUNG: ID KONFLIKT DER MEISTERKATEGORIEN!</strong><br>Referenzkategorie ID#%1$u zum Entfernen verknüpfter Artikel in der Zielkategorie ID#%2$u.<br>Sie haben die Entfernung einiger Artikel beantragt verknüpfte Artikel aus einer Zielkategorie. Einer oder mehrere dieser Artikel haben dieselbe Hauptkategorie ID wie die Zielkategorie. Dies bedeutet, dass der Artikel nicht mit der Zielkategorie "verknüpft" ist, sondern sich in dieser Kategorie "befindet" und daher nicht als Teil dieser Anforderung zum Entfernen von <i> verknüpften</i> Artikeln entfernt werden kann.<br>Wenn Sie möchten <i> Behalten Sie</i> diesen Artikel bei, Sie müssen seine Hauptkategorie ID in eine andere Kategorie ändern (dh "Verschieben"), bevor Sie diesen Vorgang erneut ausführen. Dies kann auf dieser Seite oder über die Aktion "Verschieben" auf einer Kategorie-Artikel-Auflistungsseite erfolgen. Der erste Artikel mit einer widersprüchlichen Hauptkategorie ID wurde bereits zur Bearbeitung ausgewählt. <br/> Wenn Sie diesen Artikel <i> löschen</i> möchten, müssen Sie die Aktion "Löschen" auf der Seite "Kategorie-Artikel-Auflistung" verwenden .');

// Reset Master Categories ID for all products in a category
define('TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Setzen Sie die Hauptkategorie ID für ALLE Artikel in einer Kategorie zurück');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Beispiel: Durch das Zurücksetzen von Kategorie 22 wird ALLEN Artikeln in Kategorie 22 eine Hauptkategorie ID von 22 zugewiesen.');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Setzen Sie die Maste zurück');
define('BUTTON_RESET_CATEGORY_MASTER', 'Verknüpfte Kategorien');
define('SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY', '<strong>WARNUNG:</strong> Es muss eine MASTER CATEGORIES ID zugewiesen werden');
define('TEXT_CATEGORIES_NAME', 'Kategoriename');
