<?php
class ConversionBug_Core_Model_System_Config_Source_Theme
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label'=>Mage::helper('adminhtml')->__('default (red-white)')),
            array('value' => 'inverse', 'label'=>Mage::helper('adminhtml')->__('inverse (white-red)')),
        );
    }

}
