<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 */

namespace Kansoft\CurrConverter\Model\Config;

use \Kansoft\CurrConverter\Model\Config\ModuleConfigInterface;

/**
 * Class ModuleConfig
 * @package Kansoft\CurrConverter\Model\Config
 */
class ModuleConfig implements ModuleConfigInterface
{
    const CONFIG_XML_PATH_API_ENDPOINT = 'converter/nbp/npb_endpoint';
    const CONFIG_XML_TABLE_TYPE = 'converter/nbp/table';
    const CONFIG_XML_CODE_RUB = 'converter/nbp/codeRub';
    const CONFIG_XML_API_FORMAT = 'converter/nbp/format';

    /**
     * @var ConfigAccessor
     */
    private $configAccessor;

    /**
     * ModuleConfig constructor.
     * @param ConfigAccessor $configAccessor
     */
    public function __construct(ConfigAccessor $configAccessor)
    {
        $this->configAccessor = $configAccessor;
    }

    /**
     * Get API URL Endpoint
     *
     * @return mixed
     */
    public function getApiEndpoint()
    {
        return $this->configAccessor->getConfigValue(self::CONFIG_XML_PATH_API_ENDPOINT);
    }

    /**
     * Get API path table type
     *
     * @return mixed
     */
    public function getApiTableType()
    {
        return $this->configAccessor->getConfigValue(self::CONFIG_XML_TABLE_TYPE);
    }

    /**
     * Get API code RUB
     *
     * @return mixed
     */
    public function getApiCodeRub()
    {
        return $this->configAccessor->getConfigValue(self::CONFIG_XML_CODE_RUB);
    }

    /**
     * Get API format
     *
     * @return mixed
     */
    public function getApiFormat()
    {
        return $this->configAccessor->getConfigValue(self::CONFIG_XML_API_FORMAT);
    }
}