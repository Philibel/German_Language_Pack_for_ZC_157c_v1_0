<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2005 CardinalCommerce
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-04 Benny Philibel Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP', 'PayPal Payments Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_NONUSA', 'PayPal Website Payments Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Website Payments Pro Payflow Edition (UK)');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Payments Pro</strong>%s<br />' . '<a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Manage your PayPal account.</a>' . '<br /><br /><font color="green">Configuration Instructions:</font><br /><span class="alert">1. </span><a href="https://www.zen-cart.com/partners/paypal-pro" rel="noopener" target="_blank">Sign up for your PayPal account - click here.</a><br />' .
(defined('MODULE_PAYMENT_PAYPALDP_STATUS') ? '' : '... and click "install" above to enable PayPal Payments Pro.<br /><a href="https://www.zen-cart.com/getpaypal" rel="noopener" target="_blank">For additional detailed help, see this FAQ article</a><br />') .
(!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE === '' ? '<span class="alert">2. </span><strong>API credentials</strong> from the API Credentials option in your PayPal Profile Settings area. This module uses the <strong>API Signature</strong> option -- you will need the username, password and signature to enter in the fields below.' : '<span class="alert">2. </span>Ensure you have entered the appropriate security data for username/pwd etc, below.') .
'<font color="green"><hr /><strong>Requirements:</strong></font><br /><hr />*<strong>Express Checkout</strong> must be installed and activated in order to use PayPal Payments Pro, according to PayPal Terms of Service. <br />*Also requires CURL over SSL for outbound communications. CURL should be enabled for ports 80 and 443.<hr />' );
  }

  define('MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION', 'Kreditkarte');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TITLE', 'Kreditkarte');
  define('MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE', 'Kreditkarte (WPP)');
  define('MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE', 'Kreditkarte (PF)');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_HEADING', 'Es tut uns leid, aber wir konnten Ihre Kreditkarte nicht verarbeiten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR', 'Die von Ihnen eingegebenen Kreditkarteninformationen enthalten einen Fehler. Bitte überprüfen Sie es und versuchen Sie es erneut.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME', 'Vorname:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME', 'Nachname:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER', 'Karteninhaber:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE', 'Speicherkarten-Typ:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER', 'Kartennummer:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES', 'Verfallsdatum:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE', 'Ausgabedatum:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Maestro Issue No.:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV-Nummer:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(auf der Rückseite der Kreditkarte)');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR', 'Transaktion für');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED', 'Ihre Kreditkarte wurde abgelehnt. Bitte versuchen Sie es mit einer anderen Karte oder wenden Sie sich an Ihre Bank, um weitere Informationen zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED', 'Wir konnten Ihre Bestellung nicht bearbeiten. Bitte wählen Sie eine alternative Zahlungsmethode oder wenden Sie sich an den Ladenbesitzer, um Unterstützung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE', 'Wir konnten Ihre Bestellung nicht bearbeiten. Bitte versuchen Sie erneut, eine alternative Zahlungsmethode auszuwählen, oder wenden Sie sich an den Ladenbesitzer, um Unterstützung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR', 'Beim Versuch, den Zahlungsabwickler zu kontaktieren, ist ein Fehler aufgetreten. Bitte versuchen Sie erneut, eine alternative Zahlungsmethode auszuwählen, oder wenden Sie sich an den Ladenbesitzer, um Unterstützung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE', 'Lieber Ladenbesitzer' . "\n" . 'Beim Versuch, die Zahlungsüberprüfungstransaktion zu initiieren, ist ein Fehler aufgetreten. Aus Höflichkeit wurde Ihrem Kunden nur die "Fehlernummer" angezeigt. Die Details des Fehlers sind unten aufgeführt.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERT: PayPal-Direktzahlungsfehler');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR', 'Die von Ihnen eingegebenen Adressinformationen scheinen nicht gültig zu sein oder können nicht abgeglichen werden. Bitte wählen Sie eine andere Adresse aus oder fügen Sie sie hinzu und versuchen Sie es erneut.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal konnte diese Transaktion nicht erfolgreich finanzieren. Bitte wählen Sie eine andere Zahlungsoption oder überprüfen Sie die Finanzierungsoptionen in Ihrem PayPal-Konto, bevor Sie fortfahren.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ERROR', 'Beim Versuch, Ihre Kreditkarte zu verarbeiten, ist ein Fehler aufgetreten. Bitte versuchen Sie erneut, eine alternative Zahlungsmethode auszuwählen, oder wenden Sie sich an den Ladenbesitzer, um Unterstützung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD', 'Wir entschuldigen uns für die Unannehmlichkeiten, aber die von Ihnen eingegebene Kreditkarte wird von uns nicht akzeptiert. Bitte verwenden Sie eine andere Kreditkarte oder überprüfen Sie, ob die von Ihnen eingegebenen Daten korrekt sind, oder wenden Sie sich an den Ladenbesitzer, um Unterstützung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN', 'Es gab ein Problem bei der Validierung Ihres Kontos. Bitte versuche es erneut.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER', '* Der Name des Karteninhabers muss mindestens sein' . CC_OWNER_MIN_LENGTH . 'Zeichen.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER', '* Die Kreditkartennummer muss mindestens sein' . CC_NUMBER_MIN_LENGTH . 'Zeichen.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV', '* Die 3- oder 4-stellige CVV-Nummer muss auf der Rückseite der Kreditkarte eingegeben werden.\n');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT', 'ALERT: Fehler bei der Adressüberprüfung.');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fehler bei der Überprüfung des Karten-CVV-Codes.');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT', 'Die Bestellung wird bis zur Überprüfung durch den Ladenbesitzer zurückgestellt.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR', 'Der Ihrem Konto zugewiesene Status ist ungültig. Bitte gehen Sie in Ihre Kontoeinstellungen und ändern Sie diese.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Zahlung konnte nicht initiiert werden, da das vom Geschäftsinhaber konfigurierte PayPal-Konto kein PayPal Payments Pro-Konto ist oder keine PayPal-Gateway-Dienste gekauft wurden. Oder Sie haben versucht, mit einer AmEx-Karte zu bezahlen, und der Händler hat den AmEx-Support nicht aktiviert. Bitte wählen Sie eine alternative Zahlungsmethode für Ihre Bestellung oder eine andere Art von Kreditkarte.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Zahlung konnte nicht initiiert werden, da das vom Geschäftsinhaber konfigurierte PayPal-Konto kein US-amerikanisches PayPal Payments Pro-Konto ist oder PayPal-Gateway-Dienste nicht gekauft wurden (oder nicht durch Akzeptieren der Abrechnungsvereinbarung auf der PayPal-Website aktiviert wurden). Bitte wählen Sie eine alternative Zahlungsmethode für Ihre Bestellung.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Zahlung konnte nicht initiiert werden, da das vom Geschäftsinhaber konfigurierte PayPal-Konto kein PayPal Website Payments Pro 2.0 (UK) -Konto ist oder die PayPal-Gateway-Dienste nicht gekauft oder nicht ordnungsgemäß aktiviert wurden. Bitte wählen Sie eine alternative Zahlungsmethode für Ihre Bestellung.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Einstellungen für die PayPal-Kontoauthentifizierung sind noch nicht eingerichtet oder die API-Sicherheitsinformationen sind falsch. Wir können Ihre Transaktion nicht abschließen. Bitte benachrichtigen Sie den Ladenbesitzer, damit er dieses Problem beheben kann.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Es tut uns leid -- das vom Store-Administrator konfigurierte PayPal-Konto befindet sich in einem Land, das derzeit nicht für Website Payments Pro unterstützt wird. Bitte wählen Sie eine andere Zahlungsmethode, um Ihre Bestellung abzuschließen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Es tut uns leid -- die von Ihnen verwendete Kreditkarte ist nicht mit der Währung kompatibel, die Sie für die Kaufabwicklung ausgewählt haben. Bitte ändern Sie Ihre Währungsauswahl oder wählen Sie eine andere Zahlungsmethode, um Ihre Bestellung abzuschließen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED', '<span class="alert"> (HINWEIS: Das Modul ist noch nicht konfiguriert)</span>');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Sie haben versucht, Ihren Einkauf mit einer Kreditkarte zu bezahlen, die von diesem Händler nicht akzeptiert wird. Wir entschuldigen uns für die Unannehmlichkeiten und laden Sie ein, es erneut mit einem anderen Kartentyp zu versuchen oder sich an den Ladenbesitzer zu wenden, um alternative Zahlungsmöglichkeiten zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRY_OTHER_PAYMENT_METHOD', 'PayPal hat die von Ihnen ausgewählte Finanzierungsquelle abgelehnt. Bitte versuchen Sie es mit einer anderen Zahlungsart in Ihrem PayPal-Konto oder versuchen Sie es mit einer alternativen Zahlungsmethode.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR', 'Beim Abrufen der Transaktionsdetails ist ein Problem aufgetreten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR', 'Beim Auffinden von Transaktionen, die den von Ihnen angegebenen Kriterien entsprechen, ist ein Problem aufgetreten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR', 'T. Hier war ein Problem beim Stornieren der Transaktion.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR', 'Es gab ein Problem bei der Rückerstattung des angegebenen Transaktionsbetrags.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR', 'Es gab ein Problem bei der Autorisierung der Transaktion.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR', 'Es gab ein Problem bei der Erfassung der Transaktion.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR', 'Ihr Rückerstattungsantrag wurde von PayPal abgelehnt.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT', 'Sie haben eine teilweise Rückerstattung beantragt, aber keinen Betrag angegeben.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Sie haben eine vollständige Rückerstattung beantragt, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu überprüfen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT', 'Sie haben eine Autorisierung beantragt, aber keinen Betrag angegeben.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT', 'Sie haben eine Erfassung angefordert, aber keinen Betrag angegeben.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Bestätigen');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR', 'Sie haben beantragt, eine Transaktion für ungültig zu erklären, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu überprüfen.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Bestätigen');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR', 'Sie haben eine Autorisierung beantragt, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu überprüfen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Sie haben die Erfassung von Geldern angefordert, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu überprüfen.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED', 'PayPal-Rückerstattung für %s eingeleitet. Transaktions-ID: %s. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Bestätigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED', 'PayPal-Autorisierung für %s eingeleitet. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Bestätigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED', 'PayPal Capture für %s initiiert. Beleg-ID: %s. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Bestätigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED', 'PayPal Void-Anfrage initiiert. Transaktions-ID: %s. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Bestätigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR', 'Bei der versuchten Transaktion ist ein Fehler aufgetreten. Ausführliche Informationen finden Sie im API-Referenzhandbuch oder in den Transaktionsprotokollen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten; Derzeit können wir diese Methode jedoch nicht verwenden, um Bestellungen aus der geografischen Region zu verarbeiten, die Sie als Ihre Kontoadresse ausgewählt haben. Bitte verwenden Sie weiterhin die normale Kaufabwicklung und wählen Sie eine der verfügbaren Zahlungsmethoden aus, um Ihre Bestellung abzuschließen.');


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Vorname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nachname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Firmenname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adressname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Adresse Straße:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Adresse Stadt:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Adressstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Postleitzahl der Adresse:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Adresse Land:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Zahler-E-Mail:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Zahler-ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Zahlerstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Adressstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Zahlungsart:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Zahlungsstatus:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Ausstehender Grund:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Rechnung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Zahlungsdatum:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Währung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Bruttobetrag:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Gebühr:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Tauschrate:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Warenkorbartikel:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Art:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ICH WÜRDE:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Eltern Trans. ICH WÜRDE:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Rückerstattungen bestellen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Wenn Sie diese Bestellung vollständig zurückerstatten möchten, klicken Sie hier:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Vollständige Rückerstattung durchführen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Teilweise Rückerstattung durchführen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... oder geben Sie den Teil ein');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Enter the ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'Rückerstattungsbetrag hier und klicken Sie auf Teilrückerstattung');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Eine vollständige Rückerstattung kann nicht gewährt werden, nachdem eine teilweise Rückerstattung beantragt wurde.<br />*Mehrere teilweise Rückerstattungen sind bis zum verbleibenden nicht erstatteten Restbetrag zulässig.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Hinweis für den Kunden:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Vom Geschäftsadministrator erstattet.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Bestätigen: ');


  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Bestellberechtigungen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Wenn Sie einen Teil dieser Bestellung autorisieren möchten, geben Sie hier den Betrag ein:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Autorisierung durchführen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Erfassen von Berechtigungen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Wenn Sie die ausstehenden autorisierten Beträge für diese Bestellung ganz oder teilweise erfassen möchten, geben Sie den Erfassungsbetrag ein und wählen Sie aus, ob dies die endgültige Erfassung für diese Bestellung ist. Aktivieren Sie das Bestätigungsfeld, bevor Sie Ihre Capture-Anfrage senden.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Erfassen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Zu erfassender Betrag:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Ist das die endgültige Gefangennahme?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Hinweis für den Kunden:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Vielen Dank für Ihre Bestellung.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK', 'Bestätigen: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Aufheben von Auftragsberechtigungen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Wenn Sie eine Autorisierung ungültig machen möchten, geben Sie hier die Autorisierungs-ID ein und bestätigen Sie:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Hinweis für den Kunden:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Danke für Ihre Schirmherrschaft. Bitte komm wieder.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Nichtig machen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Trans. Zustand:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Auth. Code:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS-Adressübereinstimmung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP-Übereinstimmung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2-Übereinstimmung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Tage zum Abrechnen:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Einmalige Gebühren im Zusammenhang mit ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Zuschläge');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Bearbeitungsgebühren und andere anfallende Gebühren');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabatte');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Gutschriften einschließlich Rabattgutscheinen, Geschenkgutscheinen usw.');

  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Zahlung im Betrugsprüfungsstatus: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Dies ist eine automatische Benachrichtigung, die Sie darüber informiert, dass PayPal die Zahlung für eine neue Bestellung als Zahlungsüberprüfung durch das Betrugsteam gekennzeichnet hat. Normalerweise ist die Überprüfung innerhalb von 36 Stunden abgeschlossen. Es wird dringend empfohlen, die Bestellung erst dann zu versenden, wenn die Zahlungsüberprüfung abgeschlossen ist. Sie können den aktuellen Überprüfungsstatus der Bestellung anzeigen, indem Sie sich bei Ihrem PayPal-Konto anmelden und die letzten Transaktionen überprüfen.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Alle Artikel in Ihrem Warenkorb (siehe Details im Geschäft und auf Ihrem Ladenbeleg).');

  define('CENTINEL_AUTHENTICATION_ERROR', 'Authentifizierung fehlgeschlagen - Ihr Finanzinstitut hat angegeben, dass es diese Transaktion nicht erfolgreich authentifizieren konnte. Zum Schutz vor unbefugter Verwendung kann diese Karte nicht zum Abschluss Ihres Kaufs verwendet werden. Sie können den Kauf abschließen, indem Sie eine andere Zahlungsart auswählen.');
  define('CENTINEL_PROCESSING_ERROR', 'Es gab ein Problem bei der Erlangung der Genehmigung für SieIhre Transaktion. Bitte geben Sie Ihre Zahlungsinformationen erneut ein und / oder wählen Sie eine alternative Zahlungsart.');
  define("CENTINEL_ERROR_CODE_8000", "8000");
  define("CENTINEL_ERROR_CODE_8000_DESC", "Protokoll nicht erkannt muss http:// oder https:// sein");
  define("CENTINEL_ERROR_CODE_8010", "8010");
  define("CENTINEL_ERROR_CODE_8010_DESC", "Kommunikation mit MAPS Server nicht möglich");
  define("CENTINEL_ERROR_CODE_8020", "8020");
  define("CENTINEL_ERROR_CODE_8020_DESC", "Fehler beim Parsen der XML-Antwort");
  define("CENTINEL_ERROR_CODE_8030", "8030");
  define("CENTINEL_ERROR_CODE_8030_DESC", "Kommunikations-Timeout festgestellt");
  define("CENTINEL_ERROR_CODE_1001", "1001");
  define("CENTINEL_ERROR_CODE_1001_DESC", "Konto-Konfigurationsproblem mit Cardinal Centinel. Bitte wenden Sie sich umgehend an Ihren Cardinal-Vertreter unter implement@cardinalcommerce.com. Ihre Transaktionen werden erst dann durch Rückbuchungshaftung geschützt, wenn dieses Problem behoben ist.\n\n" . 'Es gibt drei Schritte, um Ihren Cardinal 3D-Secure-Dienst ordnungsgemäß zu konfigurieren: ' . "\n1-Melden Sie sich bei der in Ihrem Willkommenspaket angegebenen Kardinal-Händler-Administrator-URL an (NICHT bei der Test-URL) und akzeptieren Sie die Lizenzvereinbarung.\n2-Legen Sie ein Transaktionskennwort fest.\n3-Kopieren Sie Ihre Kardinal-Händler-ID und Ihr Kardinal-Transaktionskennwort in Ihre ZC PayPal-Modul.");
  define("CENTINEL_ERROR_CODE_4243", "4243");
  define("CENTINEL_ERROR_CODE_4243_DESC", "Kontokonfigurationsproblem mit Cardinal Centinel. Bitte wenden Sie sich umgehend an Ihren Kardinalvertreter unter implement@cardinalcommerce.com und teilen Sie ihm mit, dass Sie die Fehlernummer 4243 erhalten, wenn Sie versuchen, 3D Secure mit Ihrer Zen Cart-Site und Ihrem PayPal-Konto zu verwenden, und dass Sie diese benötigen das Prozessormodul in Ihrem Konto aktiviert. Ihre Transaktionen werden erst durch Rückbuchungshaftung geschützt, wenn dieses Problem behoben ist.");
