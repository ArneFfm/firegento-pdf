<?php
/**
 * Created by PhpStorm.
 * User: akn
 * Date: 11/3/14
 * Time: 1:49 PM
 */


class FireGento_Pdf_Model_System_Config_Source_Margin {

    /**
     * @return array
     */

    public function toOptionArray(){
        return array(
            array('value' => 0,'label' => Mage::helper('core')->__('right')),
            array('value' => 1,'label' => Mage::helper('core')->__('left')),
        );
    }

}

