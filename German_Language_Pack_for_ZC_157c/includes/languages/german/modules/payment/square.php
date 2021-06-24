<?php
/**
 * Square payment module language defines
 *
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-04-29 Benny Philibel Modified in v1.5.7 $
 */

define('MODULE_PAYMENT_SQUARE_TEXT_DESCRIPTION', 'Akzeptieren Sie Kreditkarten in weniger als 5 Minuten.<br>Keine monatlichen Gebühren und keine Einrichtungsgebühren.<br>PCI-konform. Der Kunde verlässt Ihr Geschäft nie!<br>Die Standardpreise betragen 2,9% + 0,30 USD pro Transaktion.<br>Geldbeträge werden innerhalb von 1-2 Werktagen auf Ihr Bankkonto eingezahlt.<br><br>
       <a href="https://www.zen-cart.com/partners/square" rel="noopener" target="_blank">Weitere Informationen erhalten oder ein Konto eröffnen</a><br><br>
       <a href="https://squareup.com/login" rel="noopener" target="_blank">Melden Sie sich bei Ihrem Square-Konto an</a>');

define('MODULE_PAYMENT_SQUARE_TEXT_ADMIN_TITLE', 'Square'); // Payment option title as displayed in the admin
define('MODULE_PAYMENT_SQUARE_TEXT_CATALOG_TITLE', 'Kreditkarte');  // Payment option title as displayed to the customer

define('MODULE_PAYMENT_SQUARE_TEXT_NOTICES_TO_CUSTOMER', '');  // Payment option sub-text displayed to the customer, above the cc input fields

define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_POSTCODE', 'Postleitzahl: ');
define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_NUMBER', 'Kartennummer: ');
define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_EXPIRES', 'Ablaufdatum: ');
define('MODULE_PAYMENT_SQUARE_TEXT_CVV', 'CVV Number: ');
define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_TYPE', 'Kreditkartentyp: ');

define('MODULE_PAYMENT_SQUARE_TEXT_ERROR', '(SQ-ERR) Ihre Transaktion konnte aufgrund eines Fehlers nicht abgeschlossen werden: ');
define('MODULE_PAYMENT_SQUARE_TEXT_MISCONFIGURATION', 'Ihre Transaktion konnte aufgrund einer Fehlkonfiguration in unserem Geschäft nicht abgeschlossen werden. Bitte melden Sie diesen Fehler dem Geschäftsinhaber: SQ-MISCONF');
define('MODULE_PAYMENT_SQUARE_TEXT_COMM_ERROR', 'Zahlung kann aufgrund eines Kommunikationsfehlers nicht verarbeitet werden. Sie können es erneut versuchen oder uns um Unterstützung bitten.');
define('MODULE_PAYMENT_SQUARE_ERROR_INVALID_CARD_DATA',
    'Wir konnten Ihre Transaktion aufgrund eines Problems mit den von Ihnen eingegebenen Kartendaten nicht initiieren. Bitte korrigieren Sie die Kartendaten oder melden Sie diesen Fehler dem Ladenbesitzer: SQ-NONCE-FAILURE');
define('MODULE_PAYMENT_SQUARE_ERROR_DECLINED', 'Entschuldigung, Ihre Zahlung konnte nicht autorisiert werden. Bitte wählen Sie eine alternative Zahlungsmethode aus.');

if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_SQUARE_TEXT_NEED_ACCESS_TOKEN',
        '<span class="text-danger"><strong>VORSICHT: Zugriffstoken nicht gesetzt: </strong></span> <br>
    1. Stellen Sie sicher, dass die OAuth Redirect-URL in Ihrer Square Account "App" auf <u><nobr><pre>' . str_replace(array('index.php?main_page=index', 'http://'), array('square_handler.php', 'https://'), zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></u> eingestellt ist.<br>
    2. Und dann <a href="%s" rel="noopener" target="_blank" class="onClickStartCheck"><button class="btn btn-xs btn-success">Klicken Sie hier, um sich anzumelden und Ihr Konto zu autorisieren</button></a>');
}


define('MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_SUMMARY', '<strong>Transaktionszusammenfassung</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_ACTIONS', '<strong>Aktionen</strong>');
define('MODULE_PAYMENT_SQUARE_TEXT_UPDATE_FAILED', 'Entschuldigung, die versuchte Transaktionsaktualisierung ist unerwartet fehlgeschlagen. Weitere Informationen finden Sie in den Protokollen.');

define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TITLE', '<strong>Rückerstattungstransaktion</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND', 'Hier können Sie dem Kunden Geld zurückerstatten: ');
define('MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_CHECK', 'Aktivieren Sie dieses Kontrollkästchen, um Ihre Absicht zu bestätigen: ');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_AMOUNT_TEXT', 'Geben Sie den Betrag ein, den Sie zurückerstatten möchten');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TEXT_COMMENTS', 'Anmerkungen (wird im Bestellverlauf angezeigt): ');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_DEFAULT_MESSAGE', 'Rückerstattung ausgestellt');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_SUFFIX', 'Sie können eine Bestellung innerhalb von 120 Tagen bis zum ursprünglich angebotenen Betrag erstatten. Sie müssen die ursprüngliche Transaktions-ID und die Angebots-ID angeben.<br>Weitere Informationen finden Sie auf der Square-Website. <a href="https://squareup.com/help/us/en/article/5060" rel="noopener" target="_blank">Informationen zu Square-Rückerstattungen (auf Englisch)</a>.');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_BUTTON_TEXT', 'Rückerstattung durchführen');
define('MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_ERROR', 'Fehler: Sie haben eine Rückerstattung beantragt, aber das Kontrollkästchen Bestätigung nicht aktiviert.');
define('MODULE_PAYMENT_SQUARE_TEXT_INVALID_REFUND_AMOUNT', 'Fehler: Sie haben eine Rückerstattung beantragt, aber einen ungültigen Betrag eingegeben.');
define('MODULE_PAYMENT_SQUARE_TEXT_REFUND_INITIATED', 'Rückerstattung ');

define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TITLE', '<strong>Transaktion erfassen</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE', 'Hier können Sie zuvor autorisierte Gelder erfassen: ');
define('MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_CHECK', 'Aktivieren Sie dieses Kontrollkästchen, um Ihre Absicht zu bestätigen: ');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TEXT_COMMENTS', 'Anmerkungen (wird im Bestellverlauf angezeigt): ');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_DEFAULT_MESSAGE', '');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_SUFFIX', 'Die Erfassung muss innerhalb von 6 Tagen nach erfolgendie ursprüngliche Genehmigung. Sie dürfen eine Bestellung nur EINMAL erfassen.');
define('MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_ERROR', 'Fehler: Sie haben eine Erfassung angefordert, aber das Kontrollkästchen Bestätigung nicht aktiviert.');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_BUTTON_TEXT', 'Machen eine Erfassung');
define('MODULE_PAYMENT_SQUARE_TEXT_TRANS_ID_REQUIRED_ERROR', 'Fehler: Sie müssen eine Transaktions-ID angeben.');
define('MODULE_PAYMENT_SQUARE_TEXT_CAPT_INITIATED', 'Mittelerfassung initiiert. Transaktions-ID: %s');

define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_TITLE', '<strong>Transaktion stornieren</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID', 'Sie können eine nicht erfasste Autorisierung ungültig machen.');
define('MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_CHECK', 'Aktivieren Sie dieses Kontrollkästchen, um Ihre Absicht zu bestätigen: ');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_TEXT_COMMENTS', 'Anmerkungen (wird im Bestellverlauf angezeigt): ');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaktion abgebrochen');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_SUFFIX', '');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_BUTTON_TEXT', 'Nichtig machen');
define('MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_ERROR', 'Fehler: Sie haben eine Leere angefordert, aber das Kontrollkästchen Bestätigung nicht aktiviert.');
define('MODULE_PAYMENT_SQUARE_TEXT_VOID_INITIATED', 'Nichtig initiiert. Transaktions-ID: %s');
