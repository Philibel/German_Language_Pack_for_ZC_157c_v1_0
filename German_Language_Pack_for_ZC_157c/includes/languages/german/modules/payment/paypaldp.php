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
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR', 'Die von Ihnen eingegebenen Kreditkarteninformationen enthalten einen Fehler. Bitte ??berpr??fen Sie es und versuchen Sie es erneut.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME', 'Vorname:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME', 'Nachname:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER', 'Karteninhaber:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE', 'Speicherkarten-Typ:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER', 'Kartennummer:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES', 'Verfallsdatum:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE', 'Ausgabedatum:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Maestro Issue No.:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV-Nummer:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(auf der R??ckseite der Kreditkarte)');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR', 'Transaktion f??r');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED', 'Ihre Kreditkarte wurde abgelehnt. Bitte versuchen Sie es mit einer anderen Karte oder wenden Sie sich an Ihre Bank, um weitere Informationen zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED', 'Wir konnten Ihre Bestellung nicht bearbeiten. Bitte w??hlen Sie eine alternative Zahlungsmethode oder wenden Sie sich an den Ladenbesitzer, um Unterst??tzung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE', 'Wir konnten Ihre Bestellung nicht bearbeiten. Bitte versuchen Sie erneut, eine alternative Zahlungsmethode auszuw??hlen, oder wenden Sie sich an den Ladenbesitzer, um Unterst??tzung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR', 'Beim Versuch, den Zahlungsabwickler zu kontaktieren, ist ein Fehler aufgetreten. Bitte versuchen Sie erneut, eine alternative Zahlungsmethode auszuw??hlen, oder wenden Sie sich an den Ladenbesitzer, um Unterst??tzung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE', 'Lieber Ladenbesitzer' . "\n" . 'Beim Versuch, die Zahlungs??berpr??fungstransaktion zu initiieren, ist ein Fehler aufgetreten. Aus H??flichkeit wurde Ihrem Kunden nur die "Fehlernummer" angezeigt. Die Details des Fehlers sind unten aufgef??hrt.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERT: PayPal-Direktzahlungsfehler');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR', 'Die von Ihnen eingegebenen Adressinformationen scheinen nicht g??ltig zu sein oder k??nnen nicht abgeglichen werden. Bitte w??hlen Sie eine andere Adresse aus oder f??gen Sie sie hinzu und versuchen Sie es erneut.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal konnte diese Transaktion nicht erfolgreich finanzieren. Bitte w??hlen Sie eine andere Zahlungsoption oder ??berpr??fen Sie die Finanzierungsoptionen in Ihrem PayPal-Konto, bevor Sie fortfahren.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ERROR', 'Beim Versuch, Ihre Kreditkarte zu verarbeiten, ist ein Fehler aufgetreten. Bitte versuchen Sie erneut, eine alternative Zahlungsmethode auszuw??hlen, oder wenden Sie sich an den Ladenbesitzer, um Unterst??tzung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD', 'Wir entschuldigen uns f??r die Unannehmlichkeiten, aber die von Ihnen eingegebene Kreditkarte wird von uns nicht akzeptiert. Bitte verwenden Sie eine andere Kreditkarte oder ??berpr??fen Sie, ob die von Ihnen eingegebenen Daten korrekt sind, oder wenden Sie sich an den Ladenbesitzer, um Unterst??tzung zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN', 'Es gab ein Problem bei der Validierung Ihres Kontos. Bitte versuche es erneut.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER', '* Der Name des Karteninhabers muss mindestens sein' . CC_OWNER_MIN_LENGTH . 'Zeichen.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER', '* Die Kreditkartennummer muss mindestens sein' . CC_NUMBER_MIN_LENGTH . 'Zeichen.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV', '* Die 3- oder 4-stellige CVV-Nummer muss auf der R??ckseite der Kreditkarte eingegeben werden.\n');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT', 'ALERT: Fehler bei der Adress??berpr??fung.');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fehler bei der ??berpr??fung des Karten-CVV-Codes.');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT', 'Die Bestellung wird bis zur ??berpr??fung durch den Ladenbesitzer zur??ckgestellt.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR', 'Der Ihrem Konto zugewiesene Status ist ung??ltig. Bitte gehen Sie in Ihre Kontoeinstellungen und ??ndern Sie diese.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Wir entschuldigen uns f??r die Unannehmlichkeiten. Die Zahlung konnte nicht initiiert werden, da das vom Gesch??ftsinhaber konfigurierte PayPal-Konto kein PayPal Payments Pro-Konto ist oder keine PayPal-Gateway-Dienste gekauft wurden. Oder Sie haben versucht, mit einer AmEx-Karte zu bezahlen, und der H??ndler hat den AmEx-Support nicht aktiviert. Bitte w??hlen Sie eine alternative Zahlungsmethode f??r Ihre Bestellung oder eine andere Art von Kreditkarte.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR', 'Wir entschuldigen uns f??r die Unannehmlichkeiten. Die Zahlung konnte nicht initiiert werden, da das vom Gesch??ftsinhaber konfigurierte PayPal-Konto kein US-amerikanisches PayPal Payments Pro-Konto ist oder PayPal-Gateway-Dienste nicht gekauft wurden (oder nicht durch Akzeptieren der Abrechnungsvereinbarung auf der PayPal-Website aktiviert wurden). Bitte w??hlen Sie eine alternative Zahlungsmethode f??r Ihre Bestellung.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR', 'Wir entschuldigen uns f??r die Unannehmlichkeiten. Die Zahlung konnte nicht initiiert werden, da das vom Gesch??ftsinhaber konfigurierte PayPal-Konto kein PayPal Website Payments Pro 2.0 (UK) -Konto ist oder die PayPal-Gateway-Dienste nicht gekauft oder nicht ordnungsgem???? aktiviert wurden. Bitte w??hlen Sie eine alternative Zahlungsmethode f??r Ihre Bestellung.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Wir entschuldigen uns f??r die Unannehmlichkeiten. Die Einstellungen f??r die PayPal-Kontoauthentifizierung sind noch nicht eingerichtet oder die API-Sicherheitsinformationen sind falsch. Wir k??nnen Ihre Transaktion nicht abschlie??en. Bitte benachrichtigen Sie den Ladenbesitzer, damit er dieses Problem beheben kann.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Es tut uns leid -- das vom Store-Administrator konfigurierte PayPal-Konto befindet sich in einem Land, das derzeit nicht f??r Website Payments Pro unterst??tzt wird. Bitte w??hlen Sie eine andere Zahlungsmethode, um Ihre Bestellung abzuschlie??en.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Es tut uns leid -- die von Ihnen verwendete Kreditkarte ist nicht mit der W??hrung kompatibel, die Sie f??r die Kaufabwicklung ausgew??hlt haben. Bitte ??ndern Sie Ihre W??hrungsauswahl oder w??hlen Sie eine andere Zahlungsmethode, um Ihre Bestellung abzuschlie??en.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED', '<span class="alert"> (HINWEIS: Das Modul ist noch nicht konfiguriert)</span>');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Sie haben versucht, Ihren Einkauf mit einer Kreditkarte zu bezahlen, die von diesem H??ndler nicht akzeptiert wird. Wir entschuldigen uns f??r die Unannehmlichkeiten und laden Sie ein, es erneut mit einem anderen Kartentyp zu versuchen oder sich an den Ladenbesitzer zu wenden, um alternative Zahlungsm??glichkeiten zu erhalten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRY_OTHER_PAYMENT_METHOD', 'PayPal hat die von Ihnen ausgew??hlte Finanzierungsquelle abgelehnt. Bitte versuchen Sie es mit einer anderen Zahlungsart in Ihrem PayPal-Konto oder versuchen Sie es mit einer alternativen Zahlungsmethode.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR', 'Beim Abrufen der Transaktionsdetails ist ein Problem aufgetreten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR', 'Beim Auffinden von Transaktionen, die den von Ihnen angegebenen Kriterien entsprechen, ist ein Problem aufgetreten.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR', 'T. Hier war ein Problem beim Stornieren der Transaktion.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR', 'Es gab ein Problem bei der R??ckerstattung des angegebenen Transaktionsbetrags.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR', 'Es gab ein Problem bei der Autorisierung der Transaktion.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR', 'Es gab ein Problem bei der Erfassung der Transaktion.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR', 'Ihr R??ckerstattungsantrag wurde von PayPal abgelehnt.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT', 'Sie haben eine teilweise R??ckerstattung beantragt, aber keinen Betrag angegeben.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Sie haben eine vollst??ndige R??ckerstattung beantragt, aber das Kontrollk??stchen Best??tigen nicht aktiviert, um Ihre Absicht zu ??berpr??fen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT', 'Sie haben eine Autorisierung beantragt, aber keinen Betrag angegeben.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT', 'Sie haben eine Erfassung angefordert, aber keinen Betrag angegeben.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Best??tigen');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR', 'Sie haben beantragt, eine Transaktion f??r ung??ltig zu erkl??ren, aber das Kontrollk??stchen Best??tigen nicht aktiviert, um Ihre Absicht zu ??berpr??fen.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Best??tigen');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR', 'Sie haben eine Autorisierung beantragt, aber das Kontrollk??stchen Best??tigen nicht aktiviert, um Ihre Absicht zu ??berpr??fen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Sie haben die Erfassung von Geldern angefordert, aber das Kontrollk??stchen Best??tigen nicht aktiviert, um Ihre Absicht zu ??berpr??fen.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED', 'PayPal-R??ckerstattung f??r %s eingeleitet. Transaktions-ID: %s. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Best??tigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED', 'PayPal-Autorisierung f??r %s eingeleitet. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Best??tigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED', 'PayPal Capture f??r %s initiiert. Beleg-ID: %s. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Best??tigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED', 'PayPal Void-Anfrage initiiert. Transaktions-ID: %s. Aktualisieren Sie den Bildschirm, um die im Abschnitt Bestellstatusverlauf / Kommentare aktualisierten Best??tigungsdetails anzuzeigen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR', 'Bei der versuchten Transaktion ist ein Fehler aufgetreten. Ausf??hrliche Informationen finden Sie im API-Referenzhandbuch oder in den Transaktionsprotokollen.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR', 'Wir entschuldigen uns f??r die Unannehmlichkeiten; Derzeit k??nnen wir diese Methode jedoch nicht verwenden, um Bestellungen aus der geografischen Region zu verarbeiten, die Sie als Ihre Kontoadresse ausgew??hlt haben. Bitte verwenden Sie weiterhin die normale Kaufabwicklung und w??hlen Sie eine der verf??gbaren Zahlungsmethoden aus, um Ihre Bestellung abzuschlie??en.');


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Vorname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nachname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Firmenname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adressname:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Adresse Stra??e:');
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
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'W??hrung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Bruttobetrag:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Geb??hr:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Tauschrate:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Warenkorbartikel:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Art:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ICH W??RDE:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Eltern Trans. ICH W??RDE:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>R??ckerstattungen bestellen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Wenn Sie diese Bestellung vollst??ndig zur??ckerstatten m??chten, klicken Sie hier:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Vollst??ndige R??ckerstattung durchf??hren');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Teilweise R??ckerstattung durchf??hren');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... oder geben Sie den Teil ein');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Enter the ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'R??ckerstattungsbetrag hier und klicken Sie auf Teilr??ckerstattung');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Eine vollst??ndige R??ckerstattung kann nicht gew??hrt werden, nachdem eine teilweise R??ckerstattung beantragt wurde.<br />*Mehrere teilweise R??ckerstattungen sind bis zum verbleibenden nicht erstatteten Restbetrag zul??ssig.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Hinweis f??r den Kunden:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Vom Gesch??ftsadministrator erstattet.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Best??tigen: ');


  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Bestellberechtigungen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Wenn Sie einen Teil dieser Bestellung autorisieren m??chten, geben Sie hier den Betrag ein:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Autorisierung durchf??hren');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Erfassen von Berechtigungen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Wenn Sie die ausstehenden autorisierten Betr??ge f??r diese Bestellung ganz oder teilweise erfassen m??chten, geben Sie den Erfassungsbetrag ein und w??hlen Sie aus, ob dies die endg??ltige Erfassung f??r diese Bestellung ist. Aktivieren Sie das Best??tigungsfeld, bevor Sie Ihre Capture-Anfrage senden.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Erfassen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Zu erfassender Betrag:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Ist das die endg??ltige Gefangennahme?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Hinweis f??r den Kunden:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Vielen Dank f??r Ihre Bestellung.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK', 'Best??tigen: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Aufheben von Auftragsberechtigungen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Wenn Sie eine Autorisierung ung??ltig machen m??chten, geben Sie hier die Autorisierungs-ID ein und best??tigen Sie:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Hinweis f??r den Kunden:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Danke f??r Ihre Schirmherrschaft. Bitte komm wieder.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Nichtig machen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Trans. Zustand:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Auth. Code:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS-Adress??bereinstimmung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP-??bereinstimmung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2-??bereinstimmung:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Tage zum Abrechnen:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Einmalige Geb??hren im Zusammenhang mit ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Zuschl??ge');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Bearbeitungsgeb??hren und andere anfallende Geb??hren');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabatte');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Gutschriften einschlie??lich Rabattgutscheinen, Geschenkgutscheinen usw.');

  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Zahlung im Betrugspr??fungsstatus: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Dies ist eine automatische Benachrichtigung, die Sie dar??ber informiert, dass PayPal die Zahlung f??r eine neue Bestellung als Zahlungs??berpr??fung durch das Betrugsteam gekennzeichnet hat. Normalerweise ist die ??berpr??fung innerhalb von 36 Stunden abgeschlossen. Es wird dringend empfohlen, die Bestellung erst dann zu versenden, wenn die Zahlungs??berpr??fung abgeschlossen ist. Sie k??nnen den aktuellen ??berpr??fungsstatus der Bestellung anzeigen, indem Sie sich bei Ihrem PayPal-Konto anmelden und die letzten Transaktionen ??berpr??fen.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Alle Artikel in Ihrem Warenkorb (siehe Details im Gesch??ft und auf Ihrem Ladenbeleg).');

  define('CENTINEL_AUTHENTICATION_ERROR', 'Authentifizierung fehlgeschlagen - Ihr Finanzinstitut hat angegeben, dass es diese Transaktion nicht erfolgreich authentifizieren konnte. Zum Schutz vor unbefugter Verwendung kann diese Karte nicht zum Abschluss Ihres Kaufs verwendet werden. Sie k??nnen den Kauf abschlie??en, indem Sie eine andere Zahlungsart ausw??hlen.');
  define('CENTINEL_PROCESSING_ERROR', 'Es gab ein Problem bei der Erlangung der Genehmigung f??r SieIhre Transaktion. Bitte geben Sie Ihre Zahlungsinformationen erneut ein und / oder w??hlen Sie eine alternative Zahlungsart.');
  define("CENTINEL_ERROR_CODE_8000", "8000");
  define("CENTINEL_ERROR_CODE_8000_DESC", "Protokoll nicht erkannt muss http:// oder https:// sein");
  define("CENTINEL_ERROR_CODE_8010", "8010");
  define("CENTINEL_ERROR_CODE_8010_DESC", "Kommunikation mit MAPS Server nicht m??glich");
  define("CENTINEL_ERROR_CODE_8020", "8020");
  define("CENTINEL_ERROR_CODE_8020_DESC", "Fehler beim Parsen der XML-Antwort");
  define("CENTINEL_ERROR_CODE_8030", "8030");
  define("CENTINEL_ERROR_CODE_8030_DESC", "Kommunikations-Timeout festgestellt");
  define("CENTINEL_ERROR_CODE_1001", "1001");
  define("CENTINEL_ERROR_CODE_1001_DESC", "Konto-Konfigurationsproblem mit Cardinal Centinel. Bitte wenden Sie sich umgehend an Ihren Cardinal-Vertreter unter implement@cardinalcommerce.com. Ihre Transaktionen werden erst dann durch R??ckbuchungshaftung gesch??tzt, wenn dieses Problem behoben ist.\n\n" . 'Es gibt drei Schritte, um Ihren Cardinal 3D-Secure-Dienst ordnungsgem???? zu konfigurieren: ' . "\n1-Melden Sie sich bei der in Ihrem Willkommenspaket angegebenen Kardinal-H??ndler-Administrator-URL an (NICHT bei der Test-URL) und akzeptieren Sie die Lizenzvereinbarung.\n2-Legen Sie ein Transaktionskennwort fest.\n3-Kopieren Sie Ihre Kardinal-H??ndler-ID und Ihr Kardinal-Transaktionskennwort in Ihre ZC PayPal-Modul.");
  define("CENTINEL_ERROR_CODE_4243", "4243");
  define("CENTINEL_ERROR_CODE_4243_DESC", "Kontokonfigurationsproblem mit Cardinal Centinel. Bitte wenden Sie sich umgehend an Ihren Kardinalvertreter unter implement@cardinalcommerce.com und teilen Sie ihm mit, dass Sie die Fehlernummer 4243 erhalten, wenn Sie versuchen, 3D Secure mit Ihrer Zen Cart-Site und Ihrem PayPal-Konto zu verwenden, und dass Sie diese ben??tigen das Prozessormodul in Ihrem Konto aktiviert. Ihre Transaktionen werden erst durch R??ckbuchungshaftung gesch??tzt, wenn dieses Problem behoben ist.");
