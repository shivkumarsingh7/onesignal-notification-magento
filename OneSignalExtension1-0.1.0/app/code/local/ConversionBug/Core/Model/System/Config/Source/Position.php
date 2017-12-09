<?php
class ConversionBug_Core_Model_System_Config_Source_Position
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'bottom-left', 'label'=>Mage::helper('adminhtml')->__('bottom-left')),
            array('value' => 'bottom-right', 'label'=>Mage::helper('adminhtml')->__('bottom-right')),
        );
    }

}
