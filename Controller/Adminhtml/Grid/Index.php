<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */

namespace George\Csp\Controller\Adminhtml\Grid;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action implements HttpGetActionInterface
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory    =   $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage =   $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__('Policy List')));

        return $resultPage;
    }
}
