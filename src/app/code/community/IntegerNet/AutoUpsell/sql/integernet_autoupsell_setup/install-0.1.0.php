<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_AutoUpsell
 * @copyright  Copyright (c) 2015 integer_net GmbH (http://www.integer-net.de/)
 * @author     Fabian Schmengler <fs@integer-net.de>
 */

/** @var Mage_Catalog_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);

$installer->addAttribute($entityTypeId, 'upsell_priority', array(
    'type'            => 'int',
    'label'           => 'Priority for automatic upselling',
    'input'           => 'text',
    'global'          => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'required'        => false,
    'default'         => '',
    'visible'         => true,
    'user_defined'    => 1,
));
$installer->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'upsell_priority',
    '100'
);


$installer->endSetup();