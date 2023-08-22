<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */

namespace George\Csp\Model;

use George\Csp\Api\CspRepositoryInterface;
use George\Csp\Api\Data;
use George\Csp\Api\Data\CspInterface;
use George\Csp\Api\Data\CspInterfaceFactory;
use George\Csp\Api\Data\CspSearchResultsInterface;
use George\Csp\Model\ResourceModel\CspModel as ResourceCspModel;
use George\Csp\Model\ResourceModel\CspModel\CollectionFactory as CspCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;

class CspRepository implements CspRepositoryInterface
{
    /**
     * @var ResourceCspModel
     */
    protected $resource;

    /**
     * @var CspModelFactory
     */
    protected $cspModelFactory;

    /**
     * @var CspCollectionFactory
     */
    protected $cspCollectionFactory;

    /**
     * @var Data\CspSearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;

    /**
     * @var CspInterfaceFactory
     */
    protected $dataCspFactory;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @param ResourceCspModel $resource
     * @param CspModelFactory $cspModelFactory
     * @param CspInterfaceFactory $dataCspFactory
     * @param CspCollectionFactory $cspCollectionFactory
     * @param Data\CspSearchResultsInterfaceFactory $searchResultsFactory
     * @param StoreManagerInterface $storeManager
     */

    public function __construct(
        ResourceCspModel $resource,
        CspModelFactory $cspModelFactory,
        CspInterfaceFactory $dataCspFactory,
        CspCollectionFactory $cspCollectionFactory,
        Data\CspSearchResultsInterfaceFactory $searchResultsFactory,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->cspModelFactory = $cspModelFactory;
        $this->cspCollectionFactory = $cspCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataCspFactory = $dataCspFactory;
        $this->storeManager = $storeManager;
    }

    /**
     * Save policy data
     *
     * @inheritDoc
     */
    public function save(CspInterface $csp)
    {
        if (empty($csp->getStoreId())) {
            $csp->setStoreId($this->storeManager->getStore()->getId());
        }

        try {
            $this->resource->save($csp);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $csp;
    }

    /**
     * Load policy data by given policy Identity
     *
     * @inheritDoc
     */
    public function getById($cspId)
    {
        $csp = $this->cspModelFactory->create();
        $this->resource->load($csp, $cspId);
        if (!$csp->getId()) {
            throw new NoSuchEntityException(__('The policy data with the "%1" ID doesn\'t exist.', $cspId));
        }
        return $csp;
    }

    /**
     * Load policy data collection by given search criteria
     *
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $criteria)
    {
        $collection = $this->cspCollectionFactory->create();

        $this->collectionProcessor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * Delete policy
     *
     * @inheritDoc
     */
    public function delete(CspInterface $csp)
    {
        try {
            $this->resource->delete($csp);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * Delete policy by given policy Identity
     *
     * @inheritDoc
     */
    public function deleteById($cspId)
    {
        return $this->delete($this->getById($cspId));
    }
}
