<?php
/**
 * @copyright Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: german translation 2021-04-30 Benny Philibel $
 */

// defined as an image, text or a combination for Always Free Shipping
// comment out the ones you do not which to use
// to show nothing, comment all out except one and define as ''

// for text or set to '' for nothing
//define('TEXT_PRODUCT_FREE_SHIPPING_ICON', 'KOSTENLOSER VERSAND');

// for an image only or comment out to use another
define('TEXT_PRODUCT_FREE_SHIPPING_ICON', zen_image(DIR_WS_TEMPLATE_IMAGES . 'always-free-shipping.gif'));

// for an image with text or comment out to use another
define('TEXT_PRODUCT_FREE_SHIPPING_ICON', zen_image(DIR_WS_TEMPLATE_IMAGES . 'always-free-shipping.gif', 'Immer versandkostenfrei'));
