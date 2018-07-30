<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 */

namespace Kansoft\CurrConverter\Model;

use Kansoft\CurrConverter\Model\Config\ModuleConfig;

/**
 * Class Converter
 * @package Kansoft\CurrConverter\Model
 */
class Converter
{
    /**
     * @var ApiClient
     */
    protected $_apiClient;
    /**
     * @var ModuleConfig
     */
    protected $_config;

    /**
     * @var string
     */
    protected $_response;

    /**
     * Converter constructor.
     * @param ModuleConfig $config
     * @param ApiClient $apiClient
     */
    public function __construct(
        ModuleConfig $config,
        ApiClient $apiClient
    )
    {
        $this->_config = $config;
        $this->_apiClient = $apiClient;
    }

    /**
     * @return string
     */
    public function getCurrentExchangeRate()
    {
        $this->_response = $this->_apiClient->sendRequest($this->_config->getApiEndpoint() . '/' . $this->_config->getApiTableType() . '/' . $this->_config->getApiCodeRub().'?format='.$this->_config->getApiFormat());

        return $this->_response;
    }


}