<?php
/**
 * Copyright © Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * See COPYING.txt for license details.
 */
namespace Faonni\ShowAddressFields\Setup;

use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Config\Model\ResourceModel\Config\Data\CollectionFactory as ConfigCollectionFactory;

/**
 * Uninstall schema
 */
class Uninstall implements UninstallInterface
{
    /**
     * Config collection factory
     *
     * @var \Magento\Config\Model\ResourceModel\Config\Data\CollectionFactory
     */
    private $_configCollectionFactory;

    /**
     * Initialize schema
     *
     * @param ConfigCollectionFactory $configCollectionFactory
     */
    public function __construct(
        ConfigCollectionFactory $configCollectionFactory
    ) {
        $this->_configCollectionFactory = $configCollectionFactory;
    }

    /**
     * Uninstall DB schema
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $this->removeConfig();

        $setup->endSetup();
    }

    /**
     * Remove config
     *
     * @return void
     */
    private function removeConfig()
    {
        $path = 'customer/address/showaddressfields';
        $collection = $this->_configCollectionFactory->create();
        $collection->addPathFilter($path);

        foreach ($collection as $config) {
            $config->delete();
        }
    }
}
