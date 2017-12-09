<?php
class ConversionBug_Core_Model_System_Config_Source_Size
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'small', 'label'=>Mage::helper('adminhtml')->__('small')),
            array('value' => 'medium', 'label'=>Mage::helper('adminhtml')->__('medium')),
            array('value' => 'large', 'label'=>Mage::helper('adminhtml')->__('large')),
        );
    }

}
