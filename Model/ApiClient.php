<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 */

namespace Kansoft\CurrConverter\Model;


use Magento\Framework\HTTP\ZendClientFactory;

/**
 * Class ApiClient
 * @package Kansoft\CurrConverter\Model
 */
class ApiClient implements ApiClientInterface
{

    /**
     * @var ZendClientFactory
     */
    protected $_httpClientFactory;

    /**
     * ApiClient constructor.
     * @param ZendClientFactory $httpClientFactory
     */
    public function __construct(
        ZendClientFactory $httpClientFactory
    )
    {
        $this->_httpClientFactory = $httpClientFactory;
    }

    /**
     * Send request to API and return response body
     *
     * @param $requestUrl
     * @return string
     */
    public function sendRequest($requestUrl)
    {
        $client = $this->_httpClientFactory->create();
        try {
            $client->setUri($requestUrl);
            $client->setMethod(\Zend\Http\Request::METHOD_GET);
            $client->setConfig(['timeout' => 500]);
        } catch (\Zend\Http\Exception\InvalidArgumentException $argumentException) {
            throw new \InvalidArgumentException($argumentException->getMessage(), $argumentException->getCode(), $argumentException);
        }

        try {
            $request = $client->request();
            $responseBody = $request->getBody();
        } catch (\Zend\Http\Exception\RuntimeException $runtimeException) {
            throw new \RuntimeException($runtimeException->getMessage(), $runtimeException->getCode(), $runtimeException);
        }

        return $responseBody;
    }


}