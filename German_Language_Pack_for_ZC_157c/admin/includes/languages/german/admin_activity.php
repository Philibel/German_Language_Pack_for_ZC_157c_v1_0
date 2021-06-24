<?php
/**
 * @package admin
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-06 Benny Philibel Modified in v1.5.6 $
 */

define('HEADING_TITLE', 'Administrator Aktivitätsprotokoll-Manager ');
define('HEADING_SUB1', 'Protokolle überprüfen oder exportieren');
define('HEADING_SUB2', 'Protokollverlauf löschen');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Export-Dateiformat: ');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Dateiname beim Export: ');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE', 'In Datei auf dem Server speichern? (Andernfalls wird der Stream direkt aus diesem Fenster zum Download gestreamt)');
define('TEXT_ACTIVITY_EXPORT_DEST', 'Ziel: ');
define('TEXT_PROCESSED', 'Verarbeitet.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Export abgeschlossen.');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'ALERT: Export fehlgeschlagen. Konnte nicht erfolgreich in Datei schreiben');

define('TEXT_INSTRUCTIONS', '<u>ANWEISUNGEN</u><br />
Auf dieser Seite können Sie Ihren Zen Cart&reg; Administratorzugriff auf eine CSV-Datei zur Archivierung.<br />
Sie sollten diese Daten zur Verwendung bei Betrugsuntersuchungen speichern, falls Ihre Website kompromittiert wird. Dies ist eine Voraussetzung für die PCI-Konformität.<br />
<ol>
<li>Wählen Sie aus, ob eine Datei angezeigt oder in eine Datei exportiert werden soll.</li>
<li>Geben Sie einen Dateinamen ein. (muss mit einem der folgenden Punkte enden: .csv .txt .htm .html .xml)</li>
<li>Klicken Sie auf Speichern, um fortzufahren.</li>
<li>Wählen Sie aus, ob die Datei gespeichert oder geöffnet werden soll, je nachdem, was Ihr Browser bietet.</li></ol>
');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Leere Admin-Aktivitätsprotokolltabelle aus der Datenbank<br />WARNUNG: SICHERN SIE IHRE DATENBANK, bevor Sie dieses Update ausführen!</strong><br />Das Admin-Aktivitätsprotokoll ist eine Nachverfolgung Methode, die Aktivitäten im Administrator aufzeichnet.<br />Aufgrund seiner Natur kann sie sehr groß werden, sehr schnell und muss von Zeit zu Zeit bereinigt werden.<br />Warnungen werden bei 50.000 Datensätzen oder 60 Tagen ausgegeben. Dies geschieht immer zuerst.<br /><span class = "alert">HINWEIS: Für die PCI-Konformität müssen Sie den Protokollverlauf der Administratoraktivität 12 Monate lang aufbewahren.<br />Am besten archivieren Sie Ihre Protokolle, indem Sie EXPORT wählen TO CSV und klicken Sie oben auf Speichern, * BEVOR * Protokolldaten löschen.</Span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class = "alert">WARNUNG!: Sie sind dabei, *wichtige* Audit-Trail-Datensätze aus Ihrer Datenbank zu LÖSCHEN.</span></strong><br />Sie sollten Bestätigen Sie zunächst, dass Sie eine zuverlässige Sicherung Ihrer Datenbank haben, bevor Sie fortfahren.<br />Indem Sie fortfahren, akzeptieren Sie, dass diese Informationen gelöscht werden, und verstehen Ihre rechtlichen Verantwortlichkeiten in Bezug auf diese Daten.<br /><br />Ich verstehe meine Verantwortlichkeiten, und möchten mit dem Löschen fortfahren, indem Sie auf Zurücksetzen klicken:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Löschen des Admin-Aktivitätsprotokolls abgeschlossen</strong>');
define('TEXT_NO_RECORDS_FOUND', 'Keine Datensätze mit dem von Ihnen ausgewählten Filter gefunden.');

define('TEXT_EXPORTFORMAT0', 'Als HTML exportieren (ideal für die Anzeige auf dem Bildschirm)');
define('TEXT_EXPORTFORMAT1', 'Export in CSV (ideal zum Importieren in Tabellenkalkulationen)');
define('TEXT_EXPORTFORMAT2', 'Export nach TXT');
define('TEXT_EXPORTFORMAT3', 'Export nach XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Welche Protokolldaten möchten Sie sehen?');
define('TEXT_EXPORTFILTER0', 'Alle protokollierten Daten, unabhängig vom Schweregrad.');
define('TEXT_EXPORTFILTER1', 'INFO - Allgemeine protokollierte Informationen');
define('TEXT_EXPORTFILTER2', 'HINWEIS - Bemerkenswerte Informationen, die regelmäßig überprüft werden sollten');
define('TEXT_EXPORTFILTER3', 'WARNUNG - Aktivität, die täglich überprüft werden sollte');
define('TEXT_EXPORTFILTER4', 'NOTICE und WARNING (gemeinsame Kombination zur Überprüfung).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Interpretation der Protokolldaten</strong></p><ul>
<li><strong>Schweregrad</strong> - Die Standards für die Protokollierung beschreiben Schweregrade im Allgemeinen wie folgt:
  <ul>
  <li><strong>INFO</strong>bezieht sich auf allgemeine Aktivitäten. Dies kann bemerkenswerte Details enthalten oder nicht.</li>
  <li><strong>HINWEIS</strong>bezieht sich auf Aktivitäten, die darauf hinweisen, dass höhere Berechtigungen verwendet wurden, und kann beispielsweise das Erstellen neuer Administratorbenutzer oder das Hinzufügen neuer Zahlungsmodule umfassen. Es wird auch hervorgehoben, wenn auf der Webseite übermittelte Daten potenziell riskante Inhalte wie Skript-Tags oder eingebettete Iframes enthalten, bei denen schädliche Inhalte von unglücklichen Mitarbeitern oder einem Eindringling auf Ihrer Website zu Ihren Produkten / Kategorien / Seiten hinzugefügt werden. Diese sollten regelmäßig auf Anomalien wie nicht autorisierte Aktivitäten überprüft werden.</li>
  <li><strong>WARNUNG</strong>ist KRITISCHEN Dingen wie dem Entfernen von Zahlungsmodulen oder dem Löschen von Administratorbenutzern zugeordnet. Dies sind Aktivitäten, die auf anstehende Probleme hindeuten können, wenn sie nicht schnell erkannt werden. Diese sollten sehr häufig überprüft werden. täglich empfohlen.</li>
  </ul>
</li>
<li><strong>admin_user</strong> - Hier wird die Administrator-Benutzer-ID gefolgt von ihrem Administrator-Benutzernamen angezeigt. Wenn nicht angemeldet, wird 0 angezeigt.</li>
<li><strong>page_accessed</strong> - Hier wird der Name der besuchten Seite angegeben, wodurch Hinweise auf die Art der stattfindenden Aktivität gegeben werden.</li>
<li><strong>Parameter</strong> - Dies ist der Rest der URI der besuchten Seite und gibt einen weiteren Hinweis auf die Art der Aktivität, die der Besucher versucht.</li>
<li><strong>markiert</strong> - Wenn dies auf 1 gesetzt ist, bedeutet dies, dass Sie den im Feld "Postdaten" aufgezeichneten Inhalt auf unbefugte Eingabe von Skripten oder Iframes oder anderen potenziell gefährlichen Inhalten untersuchen sollten. Eine Erklärung für verdächtige Inhalte wird im Feld "Aufmerksamkeit" aufgeführt.</li>
<li><strong>Aufmerksamkeit</strong> - Dies enthält Vorschläge zur Art der verdächtigen Aktivität, die im Feld "Postdaten" überprüft werden sollten, wenn sie markiert sind.</li>
<li><strong>Protokollnachricht</strong> - Enthält alle vom System aufgezeichneten Nachrichten über die stattfindende Aktivität, z. B. die Installation eines bestimmten Moduls.</li>
<li><strong>Postdaten</strong> - Enthält die POST-Rohdaten (mit einigen vertraulichen Informationen), die bei Verdacht auf böswillige Aktivitäten leicht überprüft werden können.</li>
</ul>');
