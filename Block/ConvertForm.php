<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 */
namespace Kansoft\CurrConverter\Block;

use \Magento\Framework\View\Element\Template;

/**
 * Class ConvertForm
 * @package Kansoft\CurrConverter\Block
 */
class ConvertForm extends Template
{

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('currconverter/index/convert', ['_secure' => true]);
    }

}