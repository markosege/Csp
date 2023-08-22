<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */

namespace George\Csp\Controller\Adminhtml\Grid;

use George\Csp\Api\CspRepositoryInterface;
use George\Csp\Model\CspModelFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpPostActionInterface;

use Magento\Framework\Controller\Result\RedirectFactory;

class Save extends \Magento\Backend\App\Action implements HttpPostActionInterface
{

    protected $resultRedirectFactory;

    /**
     * @var CspModelFactory
     */
    protected $cspModelFactory;

    /**
     * @param Context $context
     * @param CspModelFactory|null $cspModelFactory
     * @param CspRepositoryInterface|null $cspRepository
     */

    /**
     * @var CspRepositoryInterface
     */
    private $cspRepository;

    public function __construct(
        Context $context,
        RedirectFactory $resultRedirectFactory,
        CspModelFactory $cspModelFactory,
        CspRepositoryInterface $cspRepository
    ) {
        $this->resultRedirectFactory = $resultRedirectFactory;
        $this->cspModelFactory  =   $cspModelFactory;
        $this->cspRepository    =   $cspRepository;
        parent::__construct($context);
    }

    /**
     * Save action
     * @return \Magento\Framework\Controller\ResultInterface
     */

    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();

        if ($data) {
            if (empty($data['csp_id'])) {
                $data['csp_id'] = null;
            }
            /** @var \George\Csp\Model\CspModel $cspmodel */
            $cspmodel = $this->cspModelFactory->create();

            $id = $this->getRequest()->getParam('csp_id');

            if ($id) {
                try {
                    $cspmodel = $this->cspRepository->getById($id);
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage(__('This policy no longer exists.'));
                    return $resultRedirect->setPath('*/*/');
                }
            }
            $cspmodel->setData($data);

            try {
                $this->cspRepository->save($cspmodel);
                $this->messageManager->addSuccessMessage(__('You saved the policy.'));
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the policy.'));
            }
        }
        return $resultRedirect->setPath('*/*/');
    }


}
