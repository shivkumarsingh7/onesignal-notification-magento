<?php
class ConversionBug_Core_Model_System_Config_Source_Comment_Appid
{
    public function getCommentText()
    {
        $text = Mage::helper('cbcore')->__('You can find your appId under App Settings > Keys & IDs. ');
        return $text.'<a target="_blank" href="http://notify.tech/wp-content/plugins/onesignal-free-web-push-notifications/views/images/settings/keys-2.jpg">(show me)</a>';
    }
}