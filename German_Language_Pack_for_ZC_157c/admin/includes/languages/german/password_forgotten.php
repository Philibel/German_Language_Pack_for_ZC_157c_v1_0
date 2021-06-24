<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-05-08 Benny Philibel Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Passwort erneut senden');

define('TEXT_ADMIN_EMAIL', 'Admin E-Mail Adresse:');
define('TEXT_ADMIN_USERNAME', 'Administrator-Benutzername');
define('TEXT_BUTTON_REQUEST_RESET', 'Neues Passwort anfordern');
define('TEXT_BUTTON_LOGIN', 'Anmelden');
define('TEXT_BUTTON_CANCEL', 'Abbrechen');

define('ERROR_WRONG_EMAIL', 'Sie haben eine falsche E-Mail Adresse eingegeben.');
define('ERROR_WRONG_EMAIL_NULL', 'Geh weg, Dummkopf :-P');
define('MESSAGE_PASSWORD_SENT', 'Vielen Dank. Wenn die von Ihnen eingegebene E-Mail-Adresse und der Benutzername mit einem Administratorkonto in unserer Datenbank übereinstimmen, wird ein neues Passwort an diese E-Mail-Adresse gesendet.<br>Bitte lesen Sie diese E-Mail und klicken Sie dann auf "Anmelden", um das neue temporäre Passwort zu verwenden.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Ihre angeforderte Änderung');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Es wurde eine neues Passwort angefordert von %s.' . "\n\n" . 'Ihr neues temporäres Passwort ist:' . "\n\n   %s\n\nBei der Anmeldung weden sie aufgefordert, ein neues Passwort zu erstellen.\n\nDieses temporäre passwort wird nach 24 Stunden ungültig.\n\n\n");

define('TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET', 'Zugang Alert!');
define('TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET', "Fehlgeschlagene Versuche zum Zurücksetzen des Administratorkennworts wurden empfangen von %s\n\nUngültige E-Mail-Adresse und/oder Benutzername angegeben.\n\nWenn Sie über Administratorkonten haben, die dieselbe E-Mail-Adresse verwenden, sollten Sie in Betracht ziehen, ihnen eindeutige E-Mail-Adressen zuzuweisen, um das Zurücksetzen zu vereinfachen . ");
