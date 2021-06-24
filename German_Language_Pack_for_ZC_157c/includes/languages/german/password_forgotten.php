<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team

 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-04-30 Benny Philibel $
 */

define('NAVBAR_TITLE_1', 'Anmelden');
define('NAVBAR_TITLE_2', 'Vergessenes Passwort');

define('HEADING_TITLE', 'Vergessenes Passwort');

define('TEXT_MAIN', 'Tragen Sie Ihre E-Mail Adresse ein, um ein neues Passwort zu erhalten.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Neues Passwort');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Ein neues Passwort wurde angefordert von ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Ihr neues Passwort für \'' . STORE_NAME . '\' lautet:' . "\n\n" . '   %s' . "\n\nNachdem Sie sich mit dem neuen Passwort angemeldet haben, können Sie es ändern, indem Sie in den Bereich 'Mein Konto' gehen.");

define('SUCCESS_PASSWORD_SENT', 'Vielen Dank. Wenn sich diese E-Mail-Adresse in unserem System befindet, senden wir Anweisungen zur Kennwortwiederherstellung an diese E-Mail-Adresse.');
