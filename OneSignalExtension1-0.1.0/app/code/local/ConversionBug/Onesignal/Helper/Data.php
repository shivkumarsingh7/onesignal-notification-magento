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

class ConversionBug_Onesignal_Helper_Data extends Mage_Core_Helper_Abstract {

    const XML_CONFIG_PATH_ONESIGNAL_ENABLED = 'onesignal/general/status';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_SSL = 'onesignal/general/ssl';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_SUBDOMAIN = 'onesignal/general/subdomain';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_GCM = 'onesignal/general/gcm';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_AUTOREGISTER = 'onesignal/general/autoregister';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_NOTIFYBUTTON = 'onesignal/general/notifybutton';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_APPID = 'onesignal/general/appid';
    const XML_CONFIG_PATH_ONESIGNAL_GENERAL_SAFARI_WEB_ID = 'onesignal/general/safari_web_id';
    const XML_CONFIG_PATH_ONESIGNAL_ICON_SIZE = 'onesignal/icon/size';
    const XML_CONFIG_PATH_ONESIGNAL_ICON_POSITION = 'onesignal/icon/position';
    const XML_CONFIG_PATH_ONESIGNAL_ICON_LEFT = 'onesignal/icon/left';
    const XML_CONFIG_PATH_ONESIGNAL_ICON_RIGHT = 'onesignal/icon/right';
    const XML_CONFIG_PATH_ONESIGNAL_ICON_THEME = 'onesignal/icon/theme';
    const XML_CONFIG_PATH_ONESIGNAL_ICON_PRENOTIFY = 'onesignal/icon/prenotify';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_CIRCLE_BACKGROUND = 'onesignal/color/circle_background';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_CIRCLE_FOREGROUND = 'onesignal/color/circle_foreground';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_FOREGROUND = 'onesignal/color/badge_foreground';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_BORDERCOLOR = 'onesignal/color/badge_bordercolor';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_BADGE_BACKGROUND = 'onesignal/color/badge_background';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_PULSE_COLOR = 'onesignal/color/pulse_color';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_HOVERING = 'onesignal/color/dialog_hovering';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_ACTIVE = 'onesignal/color/dialog_active';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_BACKGROUND = 'onesignal/color/dialog_background';
    const XML_CONFIG_PATH_ONESIGNAL_COLOR_DIALOG_FOREGROUND = 'onesignal/color/dialog_foreground';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_UNSUBSCRIBED = 'onesignal/text/tip_state_unsubscribed';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_SUBSCRIBED = 'onesignal/text/tip_state_subscribed';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_TIP_STATE_BLOCKED = 'onesignal/text/tip_state_blocked';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_PRENOTIFY = 'onesignal/text/message_prenotify';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_SUBSCRIBED = 'onesignal/text/message_action_subscribed';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_RESUBSCRIBED = 'onesignal/text/message_action_resubscribed';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_MESSAGE_ACTION_UNSUBSCRIBED = 'onesignal/text/message_action_unsubscribed';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_TITLE = 'onesignal/text/dialog_main_title';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_BUTTON_SUBSCRIBE = 'onesignal/text/dialog_main_button_subscribe';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_MAIN_BUTTON_UNSUBSCRIBE = 'onesignal/text/dialog_main_button_unsubscribe';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_BLOCKED_MESSAGE = 'onesignal/text/dialog_blocked_message';
    const XML_CONFIG_PATH_ONESIGNAL_TEXT_DIALOG_BLOCKED_TITLE = 'onesignal/text/dialog_blocked_title';
    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_ACTIONMESSAGE = 'onesignal/prompt/actionmessage';
    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONTITLEDESKTOP = 'onesignal/prompt/examplenotificationtitledesktop';

    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONMESSAGEDESKTOP = 'onesignal/prompt/examplenotificationmessagedesktop';
    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONTITLEMOBILE = 'onesignal/prompt/examplenotificationtitlemobile';
    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONMESSAGEMOBILE = 'onesignal/prompt/examplenotificationmessagemobile';
    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_EXAMPLENOTIFICATIONCAPTION = 'onesignal/prompt/examplenotificationcaption';
    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_ACCEPTBUTTONTEXT = 'onesignal/prompt/acceptbuttontext';
    const XML_CONFIG_PATH_ONESIGNAL_PROMPT_CANCELBUTTONTEXT = 'onesignal/prompt/cancelbuttontext';
    const ONESIGNAL_ENABLED = 1;

    public function isEnable() {
        $storeId = Mage::app()->getStore()->getStoreId();
        if (self::ONESIGNAL_ENABLED == Mage::getStoreConfig(self::XML_CONFIG_PATH_ONESIGNAL_ENABLED, $storeId))
            return true;

        return false;
    }
}

?>
