<?php
namespace PratBrands\Test\Block;
 
class Slick extends \Magento\Framework\View\Element\Template {
 
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;
 
    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
            \Magento\Framework\Registry $registry
    ) {
        parent::__construct($context);
        $this->_coreRegistry = $registry;
    }
     
    /**
     * Retrieve current product object
     *
     * @return \Magento\Catalog\Model\Product
     */
    public function getProduct()
    {
        return $this->_coreRegistry->registry('current_product');
    }
     
 
    /**
     * Retrieve the Product ShortDescription
     * @return string
     */
    public function getShortDescription() {
        $product = $this->getProduct();
        return $product->getResource()->getAttribute('short_description')->getFrontend()->getValue($product);
    }
    /**
     * Retrieve the Product Description
     * @return string
     */
    public function getDescription() {
        $product = $this->getProduct();
        return $product->getResource()->getAttribute('description')->getFrontend()->getValue($product);
    }

    public function getSize()
    {
        return $this->getProduct()->getSize();
    }
}