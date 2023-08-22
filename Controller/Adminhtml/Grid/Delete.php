<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 * Date: 9/26/20
 * Time: 10:53 AM
 */

namespace George\Csp\Controller\Adminhtml\Grid;

use George\Csp\Model\CspModelFactory;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
class Delete extends \Magento\Backend\App\Action implements HttpPostActionInterface, HttpGetActionInterface
{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var CspModelFactory
     */
    protected $cspModelFactory;


    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        CspModelFactory $cspModelFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->cspModelFactory  =   $cspModelFactory;
        parent::__construct($context);

    }
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('csp_id');
        if ($id) {
            try {
                // init model and delete
                $cspmodel = $this->cspModelFactory->create();
                $cspmodel->load($id);
                $cspmodel->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the policy.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['csp_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a policy to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }

}
