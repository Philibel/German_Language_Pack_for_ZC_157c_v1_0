<?php

/**
 * German Language Pack
 * @version 1.5.7.1.0
 * @author Zen4All with minor adaptions for the German version by Benny Philibel
 * @copyright (c) 2014-2021, Zen4All
 * @copyright (c) Adaptations 2021, Philibel
 * @license http://www.gnu.org/licenses/gpl.txt GNU General Public License V2.0
 */
 
/*
 * Added a version installer to the module, so the current version of the language pack can be tracked. *
 *
 */
 
/* Create the admin-page entry for the plugin's configuration */
if (!zen_page_key_exists('configGermanLanguagePack')) {
  zen_register_admin_page('configGermanLanguagePack', 'BOX_CONFIGURATION_GERMAN_LANGUAGE_PACK', 'FILENAME_CONFIGURATION', 'gID=' . $configuration_group_id, 'configuration', 'Y', (int)$configuration_group_id);
}
 
$db->Execute("UPDATE " . TABLE_CONFIGURATION_GROUP . "
              SET visible = 0
              WHERE configuration_group_id = " . $configuration_group_id . ";");
