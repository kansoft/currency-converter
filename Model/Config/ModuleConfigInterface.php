<?php
/**
 * Created by PhpStorm.
 * User: Waldek

 */

namespace Kansoft\CurrConverter\Model\Config;

/**
 * Interface ModuleConfigInterface
 * @package Kansoft\CurrConverter\Model\Config
 */
interface ModuleConfigInterface
{

    /**
     * Read URL of API Endpoint
     *
     * @return mixed
     */
    public function getApiEndpoint();
}