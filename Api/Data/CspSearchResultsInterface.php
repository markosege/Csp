<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */


namespace George\Csp\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface CspSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get csp list.
     *
     * @return \George\Csp\Api\Data\CspInterface[]
     */
    public function getItems();

    /**
     * Set csp list.
     *
     * @param \George\Csp\Api\Data\CspInterface[] $items
     * @return $this
     */
    public function setItems(array $items);

}
