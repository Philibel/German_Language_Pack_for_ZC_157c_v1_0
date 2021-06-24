<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-10 Benny Philibel Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Administrator-Login');
define('HEADING_TITLE_EXPIRED', 'Administrator-Login - Passwort abgelaufen');

define('TEXT_SUBMIT','Einreichen');
define('TEXT_ADMIN_NAME', 'Administrator-Benutzername');
define('TEXT_ADMIN_PASS', 'Administrator-Passwort');
define('TEXT_ADMIN_OLD_PASSWORD', 'Altes Passwort');
define('TEXT_ADMIN_NEW_PASSWORD', 'Neues Passwort');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Passwort bestätigen');

define('ERROR_WRONG_LOGIN', 'Sie haben den falschen Benutzernamen oder das falsche Passwort eingegeben.');
define('ERROR_SECURITY_ERROR', 'Beim Versuch, sich anzumelden, ist ein Sicherheitsfehler aufgetreten.');

define('TEXT_PASSWORD_FORGOTTEN', 'Passwort vergessen?');

define('LOGIN_EXPIRY_NOTICE', '');
define('ERROR_PASSWORD_EXPIRED', 'HINWEIS: Die Gültigkeit Ihres Passworts ist abgelaufen. Bitte wählen Sie ein neues Passwort. Ihr Passwort <strong>muss Zahlen und Buchstaben enthalten und mindestens 7 Zeichen lang sein.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Aus Sicherheitsgründen muss Ihr temporäres Passwort geändert werden. Bitte wählen Sie ein neues Passwort.<br />Ihr Passwort <strong>muss Zahlen und Buchstaben enthalten und mindestens 7 Zeichen lang sein.</strong>');
define('SUCCESS_PASSWORD_UPDATED', 'Passwort aktualisiert');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Fehlermeldung bei der Administratoranmeldung');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Wichtiger Hinweis: Es gab mehrere erfolglose Anmeldeversuche für Ihr Administratorkonto. Zu Ihrem Schutz und zur Sicherheit des Systems wird das Konto nach 6 Versuchen für mindestens 30 Minuten gesperrt. Während dieser Zeit können Sie sich nicht anmelden, selbst wenn Sie sich an Ihr Passwort erinnern. Durch fortgesetzte Anmeldeversuche wird das Konto für weitere 30 Minuten gesperrt. Während dieser Zeit können Sie das Passwort nicht zurücksetzen. Entschuldigung für die Unannehmlichkeiten.' . "\n\n Der letzte Anmeldeversuch erfolgte über diese IP-Adresse: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Hinweis: Ihr Kennwort ist abgelaufen, da Ihre Site von Nicht-SSL (weniger sicher) zu SSL-geschützt (sicherer) geändert wurde. Das Ändern Ihres Passworts unter SSL ist ein wichtiger Schritt für mehr Sicherheit. Entschuldigung für jegliche Unannehmlichkeiten. Es gelten die Standardregeln für das Ablaufen des Passworts.');
