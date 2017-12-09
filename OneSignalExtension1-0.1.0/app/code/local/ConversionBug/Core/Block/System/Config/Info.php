<?php

class ConversionBug_Core_Block_System_Config_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
         $html = <<<HTML
             <div class="cb-intro">
                 <div class="content">
                    <h1>CONVERSIONbug</h1>
                    <p>We want to change the way you look at your website</p>
                    <p><span>Visit Us: </span><a href="http://www.conversionbug.com/">www.conversionbug.com</a></p>
                 <p><span>Contact Us: </span><a href="mailto:support@conversionbug.com">support@conversionbug.com</a></p>
                 <p><span>Skype: </span><a href="#">convertsionbug</a></p>
                 </div>
                 <div class="cb-pattern"></div>
             </div>
HTML;

        return $html;
    }
}
