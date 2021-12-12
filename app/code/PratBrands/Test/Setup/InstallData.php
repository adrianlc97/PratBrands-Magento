<?php
namespace PratBrands\Test\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;
 
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
 
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'size',
            [
                'label' => 'Size',
                'type'  => 'text',
                'input' => 'multiselect',
                'source' => 'PratBrands\Test\Model\Config\Product\Extensionoption',
                'required' => false,
                'sort_order' => 30,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'used_in_product_listing' => true,
                'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                'visible_on_front' => true
            ]
        );
        $setup->endSetup();

    }
}