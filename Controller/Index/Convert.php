<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 */

namespace Kansoft\CurrConverter\Controller\Index;

use Kansoft\CurrConverter\Model\Config\ModuleConfig;
use Kansoft\CurrConverter\Model\Converter;
use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Controller\Result\JsonFactory;

/**
 * Class Convert
 * @package Kansoft\CurrConverter\Controller\Index
 */
class Convert extends Action
{
    /**
     * @var JsonFactory
     */
    protected $_resultJsonFactory;
    /**
     * @var \Magento\Framework\Controller\Result\Json
     */
    protected $_resultJson;
    /**
     * @var ModuleConfig
     */
    protected $_config;

    /**
     * @var Converter
     */
    protected $_converter;

    /**
     * Convert constructor.
     * @param Context $context
     * @param JsonFactory $resultJsonFactory
     * @param Converter $converter
     */
    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        Converter $converter)
    {
        $this->_resultJsonFactory = $resultJsonFactory;
        $this->_converter = $converter;

        return parent::__construct($context);
    }

    /*
     * Get current exchange rate and return to app view
     *
     * @return string
     */
    public function execute()
    {
        $data = array();
        $data['success'] = false;
        $this->_resultJson = $this->_resultJsonFactory->create();
        if ($this->getRequest()->isAjax()) {
            $currentExchangeRate = \GuzzleHttp\json_decode($this->_converter->getCurrentExchangeRate(), true);

            if (is_array($currentExchangeRate) && count($currentExchangeRate['rates']) > 0) {
                $requestData = $this->getRequest()->getParams();

                if (isset($requestData['rub'])) {
                    $data['currency'] = (float)$requestData['rub'] * (float)$currentExchangeRate['rates'][0]['mid'];
                    $data['success'] = true;
                }
            }else{
                $data['message'] = 'There is a problem with the current exchange rate.';
            }

        }

        return $this->_resultJson->setData($data);
    }
}