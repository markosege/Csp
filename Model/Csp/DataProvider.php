<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */

namespace George\Csp\Model\Csp;

use George\Csp\Model\ResourceModel\CspModel\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var array
     */
    protected $loadedData;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $cspCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $cspCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $cspCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     *
     * @return array
     */

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();

        foreach ($items as $item) {
            $this->loadedData[$item->getId()] = $item->getData();
        }

        return $this->loadedData;
    }
}
