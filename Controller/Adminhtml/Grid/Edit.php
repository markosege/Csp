<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 * Date: 9/25/20
 * Time: 9:54 PM
 */

namespace George\Csp\Controller\Adminhtml\Grid;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use George\Csp\Model\CspModelFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Edit extends \Magento\Backend\App\Action implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var CspModelFactory
     */
    protected $cspModelFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param CspModelFactory|null $cspModelFactory
     */

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        CspModelFactory $cspModelFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
        $this->cspModelFactory  =   $cspModelFactory;
    }

    /**
     * Edit Csp
     *
     * @return ResultInterface
     */

    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('csp_id');
        $cspmodel = $this->cspModelFactory->create();

        // 2. Initial checking
        if ($id) {
            $cspmodel->load($id);
            if (!$cspmodel->getId()) {
                $this->messageManager->addErrorMessage(__('This policy no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }

        // 3. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();

        $resultPage->getConfig()->getTitle()->prepend(__('Policy'));
        $resultPage->getConfig()->getTitle()->prepend($cspmodel->getId() ? $cspmodel->getTitle() : __('New Policy'));
        return $resultPage;
    }
}
