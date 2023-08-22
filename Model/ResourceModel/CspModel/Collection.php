<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */


namespace George\Csp\Model\ResourceModel\CspModel;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName =   'csp_id';

    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('George\Csp\Model\CspModel', 'George\Csp\Model\ResourceModel\CspModel');
    }

}
