<?php
class ConversionBug_Core_Model_System_Config_Source_Comment_Safari
{
    public function getCommentText()
    {
        $text = Mage::helper('cbcore')->__('You can find your Safari Web Id. ');
        return $text.'<a target="_blank" href="https://documentation.onesignal.com/docs/website-sdk-installation#5-safari-support">(show me)</a>';
    }
}