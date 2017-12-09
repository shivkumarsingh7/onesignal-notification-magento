<?php
class ConversionBug_Core_Model_System_Config_Source_Comment_Gcm
{
    public function getCommentText()
    {
        $text = Mage::helper('cbcore')->__('Change gcm_sender_id to your Google Project Number ');
        return $text.'<a target="_blank" href="https://documentation.onesignal.com/v2.0/docs/website-generating-a-gcm-push-notification">(where can I get this?)</a>';
    }
}