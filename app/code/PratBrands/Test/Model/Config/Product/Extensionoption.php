<?php
namespace PratBrands\Test\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Extensionoption extends AbstractSource
{
    protected $optionFactory;

    public function getAllOptions()
    {
        $this->_options = [];
        $this->_options[] = ['label' => 'S', 'value' => 's'];
        $this->_options[] = ['label' => 'M', 'value' => 'm'];
        $this->_options[] = ['label' => 'L', 'value' => 'l'];

        return $this->_options;
    }


}
