<?php
/**
 * templates transport file for NewsPublisher extra
 *
 * Copyright 2013-2015 by Bob Ray <http://bobsguides.com>
 * Created on 12-20-2016
 *
 * @package newspublisher
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $templates */


$templates = array();

$templates[1] = $modx->newObject('modTemplate');
$templates[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'templatename' => 'npElFinderConnectorTemplate',
  'description' => 'Template for NewsPublisher Connector to launch el Finder',
  'icon' => '',
  'template_type' => 0,
  'properties' => NULL,
), '', true, true);
$templates[1]->setContent(file_get_contents($sources['source_core'] . '/elements/templates/npelfinderconnectortemplate.template.html'));

return $templates;
