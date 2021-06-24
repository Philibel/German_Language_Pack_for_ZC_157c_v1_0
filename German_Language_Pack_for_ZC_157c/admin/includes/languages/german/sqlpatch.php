<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-13 Benny Philibel Modified in v1.5.7 $
 */

  define('HEADING_TITLE', 'SQL Query Executor');
  define('HEADING_WARNING', 'Stellen Sie sicher, dass Sie VOR DEM AUSFÜHREN DIESES SCRIPTS eine VOLLSTÄNDIGE SICHERUNG IHRER DATENBANK erstellt haben!');
  define('HEADING_WARNING2', 'Wenn Sie 3rd-Party Kontributionen installieren, bedenken Sie bitte, dass Sie dies auf eigenen Gefahr machen.<br>Zen Cart&reg; gibt keine Garantie für die Sicherheit oder Funktion von 3rd-Party Kontributionen. Testen Sie die Kontributionen, bevor Sie diese auf eimen Live-System einsetzen!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'HINWEIS: Zen Cart Datenbank-Upgrade Scripts sollen NICHT über diese Seite ausgeführt werden.<br>Bitte laden Sie den neuen <strong>zc_install</strong> Ordner hoch und führen das Update dort durch um ein besseres Ergebnis zu erzielen.');
  define('TEXT_QUERY_RESULTS', 'Abfrageergebnisse:');
  define('TEXT_ENTER_QUERY_STRING', 'SQL-Befehl(e) ausführen:&nbsp;&nbsp;<br><br>Abschliessen mit ein Semikolon ";"');
  define('TEXT_QUERY_FILENAME', 'Datei hochladen:');
  define('ERROR_NOTHING_TO_DO', 'FEHLER: Kein SQL-Befehl bzw. keine Datei gewählt.');
  define('TEXT_CLOSE_WINDOW', '[ Fenster schliessen ]');
  define('SQLPATCH_HELP_TEXT', 'Das Tool "SQLPATCH" gibt Ihnen die Möglichkeit, SQL Codes direkt in das Textfeld einzugeben, ' .
                              'oder eigene (.SQL) - Dateien hochzuladen.<br>' .
                              'SQL Skripts für dieses Tool <strong>dürfen kein</strong> Tabellen Präfix enthalten z.B. "zen_", da das Präfix automatisch ' .
                              'für die verwendete Datenbank hinzugefügt wird, basierend auf den Einstellungen in der Datei ' .
                              'admin/includes/configure.php (DB_PREFIX Definition).<br><br>' .
                              'Es werden nur die folgenden SQL Befehle unterstützt (Nur GROßBUCHSTABEN verwenden):' .
                              '<br><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (nur eine einzige Tabelle)</li><li>UPDATE IGNORE (just a single table)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<li>SELECT </li></ul>' .
'<h2>Erweiterte Funktionen</h2>Damit einzelne SQL Befehle in einem Block von MySQL ausgeführt werden, muss folgende Zeile am Beginn eines Blockes stehen "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>".  Der Parser wird daraufhin die nächsten X Zeilen als einen Befehl interpretieren.<br>
Um einige Codeblöcke zusammen auszuführen, sodass sie von MySQL als ein Befehl behandelt werden, benötigen Sie den Wertesatz "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>". Der Parser behandelt dann X Befehle als einen.<br>
Wird dieses Skript in phpMyAdmin od. anderen Programmen ausgeführt, so wird die Zeile "#NEXT..." ignoriert und das Skript wird gut verarbeitet.<br>
<br><strong>ANMERKUNG: </strong>SELECT.... FROM... und LEFT JOIN Befehle setzen voraus, dass "FROM" oder "LEFT JOIN" in einer eigenen Zeile stehen, um für den Parse-Skript der Tabelle Präfix hinzufügt.<br><br>
<em><strong>Beispiele:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br>
SET @t1=0;<br>
SELECT (@t1:=configuration_value) as t1 <br>
FROM configuration <br>
WHERE configuration_key = \'KEY_NAME_HERE\';<br>
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br>
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO tablename <br>
(col1, col2, col3, col4)<br>
SELECT col_a, col_b, col_3, col_4<br>
FROM table2;</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO table1 <br>
(col1, col2, col3, col4 )<br>
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br>
FROM table2 p, table3 pm<br>
LEFT JOIN othercol_f po<br>
ON p.othercol_f = po.othercol_f<br>
WHERE p.othercol_f = pm.othercol_f;</code><br>&nbsp;</li>
</ul>' );
  define('REASON_TABLE_ALREADY_EXISTS', 'Tabelle(Table) %s kann nicht erstellt werden, da sie bereits vorhanden ist.');
  define('REASON_TABLE_DOESNT_EXIST', 'Tabelle(Table) %s kann nicht gedroppt werden, da sie nicht vorhanden ist.');
  define('REASON_TABLE_NOT_FOUND', 'Kann nicht nicht ausgeführt werden, da die Tabelle(Table) %s nicht vorhanden ist.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS', 'Kann nicht insert configuration_key "%s", da er bereits vorhanden ist.');
  define('REASON_COLUMN_ALREADY_EXISTS', 'Kann nicht ADD column %s , da sie bereits vorhanden ist.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP', 'Kann nicht DROP column %s , da diese nicht existiert.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE', 'Kann nicht CHANGE column %s , da diese nicht existiert.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS', 'Kann nicht insert prod-type-layout configuration_key %s , da er bereits existiert.');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP', 'Kann nicht drop index %s in table %s , da er nicht existiert.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP', 'Kann nicht drop primary key on table %s , da er nicht existiert.');
  define('REASON_INDEX_ALREADY_EXISTS', 'Kann nicht add index %s in table %s , da er bereits vorhanden ist.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS', 'Kann nicht add primary key in table %s , da er bereits vorhanden ist.');
  define('REASON_NO_PRIVILEGES','User '.DB_SERVER_USERNAME.'@'.DB_SERVER.' hat nicht die %s Rechte für Datenbank '.DB_DATABASE.'.');
  
define('ERROR_RENAME_TABLE', 'Der Befehl RENAME TABLE wird vom SQLpatch-Tool nicht unterstützt. Bitte verwenden Sie stattdessen phpMyAdmin.');
define('ERROR_LINE_INCOMPLETE', 'Abfrage unvollständig: fehlendes schließendes Semikolon.');

define('TEXT_EXECUTE_SUCCESS', 'Erfolg: %u Anweisung(en) verarbeitet.');
define('ERROR_EXECUTE_FAILED', 'Abfrage fehlgeschlagen: %u Anweisung(en) verarbeitet.');
define('ERROR_EXECUTE_IGNORED', 'Hinweis: %u Anweisungen werden ignoriert. Weitere Informationen finden Sie in der Datenbanktabelle "upgrade_exceptions".');

define('TEXT_UPLOADQUERY_SUCCESS', 'Erfolg: %u Anweisung(en), die per Datei-Upload verarbeitet wurden');
define('ERROR_UPLOADQUERY_FAILED', 'Abfrage fehlgeschlagen: %u Anweisung(en), die über das Hochladen von Dateien verarbeitet wurden');
define('ERROR_UPLOADQUERY_IGNORED', 'Hinweis: %u Anweisungen werden beim Hochladen von Dateien ignoriert. Weitere Informationen finden Sie in der Datenbanktabelle "upgrade_exceptions".');
