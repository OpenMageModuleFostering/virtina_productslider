<?php

/**
 * Virtina
 * @package    Virtina_ProductSlider
 * @copyright  Copyright (c) 2015-2016 Virtina. (http://www.virtina.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
class Virtina_ProductSlider_Model_System_Config_Source_Types
{
   /**
     * Product type options multiselect dropdown
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
			array('value' => -1, 'label' => Mage::helper('adminhtml')->__('')),
            array('value' =>  0, 'label' => Mage::helper('adminhtml')->__('simple')),
            array('value' =>  1, 'label' => Mage::helper('adminhtml')->__('configurable')),
            array('value' =>  2, 'label' => Mage::helper('adminhtml')->__('grouped')),
            array('value' =>  3, 'label' => Mage::helper('adminhtml')->__('bundle')),
            array('value' =>  4, 'label' => Mage::helper('adminhtml')->__('downloadable')),
            array('value' =>  5, 'label' => Mage::helper('adminhtml')->__('virtual')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray() {
        return array(
           -1 => Mage::helper('adminhtml')->__(''),
            0 => Mage::helper('adminhtml')->__('simple'),
            1 => Mage::helper('adminhtml')->__('configurable'),
            2 => Mage::helper('adminhtml')->__('grouped'),
            3 => Mage::helper('adminhtml')->__('bundle'),
            4 => Mage::helper('adminhtml')->__('downloadable'),
            5 => Mage::helper('adminhtml')->__('virtual'),
        );
    }
}
?>
