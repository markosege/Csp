<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */


namespace George\Csp\Model;


use George\Csp\Api\Data\CspInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class CspModel extends AbstractModel implements CspInterface, IdentityInterface
{
    const CACHE_TAG =   'george_csp';

    /**
     * @var string
     */
    protected $_cacheTag    =   'george_csp';

    /**
     * Prefix of model event name
     *
     * @var string
     */

    protected $_eventPrefix =   'george_csp';

    protected function _construct()
    {
        $this->_init('George\Csp\Model\ResourceModel\CspModel');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values =   [];
        return $values;
    }

    /**
     * Retrieve csp id
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::CSP_ID);
    }

    /**
     * Retrieve Polocyid
     *
     * @return string
     */
    public function getPolicyId()
    {
        return (string)$this->getData(self::POLICY_ID);
    }

    /**
     * Retrieve Value id
     *
     * @return string
     */
    public function getValueId()
    {
        return $this->getData(self::VALUE_ID);
    }

    /**
     * Retrieve value type
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->getData(self::VALUE_TYPE);
    }

    /**
     * Retrieve csp creation time
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Retrieve csp update time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }


    /**
     * Set ID
     *
     * @param int $id
     * @return CspInterface
     */
    public function setId($id)
    {
        return $this->setData(self::CSP_ID, $id);
    }

    /**
     * Set Policyid
     *
     * @param string $policyid
     * @return CspInterface
     */
    public function setPolicyId($policyid)
    {
        return $this->setData(self::POLICY_ID, $policyid);
    }

    /**
     * Set ValueId
     *
     * @param string $valueid
     * @return CspInterface
     */
    public function setValueId($valueid)
    {
        return $this->setData(self::VALUE_ID, $valueid);
    }

    /**
     * Set value type
     *
     * @param string $valuetype
     * @return CspInterface
     */
    public function setValueType($valuetype)
    {
        return $this->setData(self::VALUE_TYPE, $valuetype);
    }

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return CspInterface
     */
    public function setCreationTime($creationTime)
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return CspInterface
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

}
