<?php
/**
 * ConversionBug
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category 	ConversionBug
 * @package 	ConversionBug_Onesignal
 * @copyright 	Copyright (c) 2015 ConversionBug (http://www.ConversionBug.com/)
 * @license 	http://www.ConversionBug.com/license-agreement.html
 * @author  shiv kumar singh
 * @email shivam.kumar@conversionbug.com
 */
?>
<?php
class ConversionBug_Onesignal_Model_Json extends Mage_Core_Model_Config_Data
{
    public function save()
    {
       $gcm = $this->getValue(); //get the value from our config
       $jsonData = array('name' => Mage::app()->getStore()->getFrontendName(), 'short_name' =>Mage::app()->getStore()->getFrontendName(),'start_url'=>"/",'display'=>'standalone','gcm_sender_id'=>$gcm); 
       $onesignalData  = Mage::helper('core')->jsonEncode($jsonData);
  
       file_put_contents($this->getBaseUrl().'manifest.json', $onesignalData);
       $sdkWorker = "importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');";
       file_put_contents($this->getBaseUrl().'OneSignalSDKWorker.js', $sdkWorker);
       $sdkUpdateWorker = "importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');";
       file_put_contents($this->getBaseUrl().'OneSignalSDKUpdaterWorker.js', $sdkUpdateWorker);
       return parent::save();  //call original save method so whatever happened 
                                //before still happens (the value saves)
    }
}