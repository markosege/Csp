<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 * Date: 9/26/20
 * Time: 10:59 AM
 */

namespace George\Csp\Block\Adminhtml\Grid\Edit;

use George\Csp\Api\CspRepositoryInterface;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Exception\NoSuchEntityException;

class GenericButton
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var CspRepositoryInterface
     */
    protected $cspRepository;

    /**
     * @param Context $context
     * @param CspRepositoryInterface $cspRepository
     */
    public function __construct(
        Context $context,
        CspRepositoryInterface $cspRepository
    ) {
        $this->context = $context;
        $this->cspRepository = $cspRepository;
    }

    /**
     * Return Csp ID
     *
     * @return int|null
     */
    public function getCspId()
    {
        try {
            return $this->cspRepository->getById(
                $this->context->getRequest()->getParam('csp_id')
            )->getId();
        } catch (NoSuchEntityException $e) {
        }
        return null;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
