<?php
class ConversionBug_Core_Model_System_Config_Source_Display
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Top')),
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Sidebar')),
        );
    }

}
