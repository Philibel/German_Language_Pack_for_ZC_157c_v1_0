<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team

 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-04-30 Benny Philibel $
 */

define('MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE', 'Selbstabholung');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION', 'Selbstabholung');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_WAY', 'Sie holen die Ware in unserem Hause ab');


// Hier finden für die Definition von mehrere Standorte/Methoden, auf einer Pro-Sprache Grundlage. Es wird nur verwendet, wenn der Käufer eine andere Sprache als die Standardsprache des Geschäfts ausgewählt hat.
// Der Inhalt der Definition MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS sollte mit den mehreren Speicherorten in den Einstellungen des Versandmoduls in Ihrem Administrator übereinstimmen, nur mit geänderten Namen.
// Typische Formate sind:
// "Standort Eins, 5.00; Standort Zwei, 3.50; Standort Drei, 0.00"
// "Standort Eins, Standort Zwei, Standort Drei"
// oder lassen Sie es leer, um einfach den gleichen Text wie im Admin definiert zu verwenden, unabhängig von der Sprache.
// TIPP: Dies sollte für die Standardsprache wirklich leer bleiben, da sonst das Feld Admin-Einstellungen nie verwendet wird.
define('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS', '');
