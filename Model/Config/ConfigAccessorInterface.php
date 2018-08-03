<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 * Date: 2018-08-01
 * Time: 23:40
 */

namespace Kansoft\CurrConverter\Model\Config;


interface ConfigAccessorInterface
{

    /**
     * @param $path
     * @return mixed
     */
    public function getConfigValue($path);
}