<?php
/**
 * ConversionBug
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    ConversionBug
 * @package    ConversionBug_Onesignal
 * @copyright    Copyright (c) 2015 ConversionBug (http://www.ConversionBug.com/)
 * @license    http://www.ConversionBug.com/license-agreement.html
 * @author  shiv kumar singh
 * @email shivam.kumar@conversionbug.com
 */
?>
<?php

class ConversionBug_Onesignal_Model_Send
{
    const XML_CONFIG_PATH_ONESIGNAL_ENABLED = 'onesignal/general/status';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_TITLE = 'onesignal_notification/general/title';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_CONTENT = 'onesignal_notification/general/content';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_HEADING = 'onesignal_notification/general/headings';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISANYWEB = 'onesignal_notification/general/isanyweb';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_CHROMEWEBICON = 'onesignal_notification/general/chrome_web_icon';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_FIREFOX_ICON = 'onesignal_notification/general/firefox_icon';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISCHROMEWEB = 'onesignal_notification/general/ischromeweb';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISSAFARI = 'onesignal_notification/general/issafari';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_RESTAPIKEY = 'onesignal_notification/general/rest_api_key';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_URL = 'onesignal_notification/general/url';

    public function send()
    {

        $helper = Mage::helper('cbonesignal');
        if (!$helper->isEnable()) {
            return;
        }
        $content = array(
            "en" => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_CONTENT)
        );

        $fields = array(
            'app_id' => Mage::getStoreConfig(ConversionBug_Onesignal_Helper_Data::XML_CONFIG_PATH_ONESIGNAL_GENERAL_APPID),
            'included_segments' => array('All'),
            'contents' => $content,
            'headings' => array(
                "en" => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_HEADING)
            ),
//            'isAnyWeb' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISANYWEB),
            'chrome_web_icon' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_CHROMEWEBICON),
            'firefox_icon' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_FIREFOX_ICON),
//            'isChromeWeb' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISCHROMEWEB),
//            'isSafari' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_ISSAFARI),
            'url' => Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_URL),

        );

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic '.Mage::getStoreConfig(ConversionBug_Onesignal_Model_Send::XML_CONFIG_PATH_ONESIGNAL_GENERAL_RESTAPIKEY)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        Mage::log($response, null, 'onesignal.log');

    }
}