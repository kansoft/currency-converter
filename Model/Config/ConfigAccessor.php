<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 */

namespace Kansoft\CurrConverter\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;


/**
 * Class ConfigAccessor
 * @package Kansoft\CurrConverter\Model\Config
 */
class ConfigAccessor
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;


    /**
     * ConfigAccessor constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }


    /**
     * Read config value from storage.
     *
     * @param string $path
     * @return mixed
     */
    public function getConfigValue($path)
    {
        $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT;

        return $this->scopeConfig->getValue($path, $scope);
    }
}
