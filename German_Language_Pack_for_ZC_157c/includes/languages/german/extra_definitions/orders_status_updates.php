<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-04-29 Benny Philibel Modified in v1.5.7 $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Order Update');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Bestelldetails:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Die Kommentare für Ihre Bestellung lauten: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Der Status Ihrer Bestellung wurde aktualisiert:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Der Status Ihrer Bestellung hat sich nicht geändert:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Aktueller Status: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Alter Status:</strong> %1$s, <strong>Neuer Status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Bitte antworten Sie auf diese E-Mail, wenn Sie Fragen haben.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[ORDERS STATUS]');