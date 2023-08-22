<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */


namespace George\Csp\Api;


interface CspRepositoryInterface
{

    /**
     * Save csp.
     *
     * @param \George\Csp\Api\Data\CspInterface $csp
     * @return \George\Csp\Api\Data\CspInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\CspInterface $csp);

    /**
     * Retrieve csp.
     *
     * @param int $cspId
     * @return \George\Csp\Api\Data\CspInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($cspId);

    /**
     * Retrieve csp matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \George\Csp\Api\Data\CspSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete csp.
     *
     * @param \George\Csp\Api\Data\CspInterface $csp
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\CspInterface $csp);

    /**
     * Delete csp by ID.
     *
     * @param int $cspId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($cspId);

}
