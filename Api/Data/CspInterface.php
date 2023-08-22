<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 */


namespace George\Csp\Api\Data;


interface CspInterface
{
    /**#@+
     * Constants for keys of data array.
     */
    const CSP_ID    =   'csp_id';
    const POLICY_ID =   'policy_id';
    const VALUE_ID  =   'value_id';
    const VALUE_TYPE=   'value_type';
    const CREATION_TIME = 'created_at';
    const UPDATE_TIME = 'updated_at';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get Policyid
     *
     * @return string
     */
    public function getPolicyId();

    /**
     * Get Value Id
     *
     * @return string|null
     */
    public function getValueId();

    /**
     * Get Value Type
     *
     * @return string|null
     */
    public function getValueType();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();


    /**
     * Set ID
     *
     * @param int $id
     * @return CspInterface
     */
    public function setId($id);

    /**
     * Set policy
     *
     * @param $policyid
     * @return CspInterface
     */
    public function setPolicyId($policyid);

    /**
     * Set value
     *
     * @param string $valueid
     * @return CspInterface
     */
    public function setValueId($valueid);

    /**
     * Set value type
     *
     * @param string $valuetype
     * @return CspInterface
     */
    public function setValueType($valuetype);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return CspInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return CspInterface
     */
    public function setUpdateTime($updateTime);


}
