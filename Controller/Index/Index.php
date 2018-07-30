<?php
/**
 * Created by PhpStorm.
 * User: Waldek
 */
namespace Kansoft\CurrConverter\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Kansoft\CurrConverter\Controller\Index
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     * Create and return page to view
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        return $resultPage;
    }
}