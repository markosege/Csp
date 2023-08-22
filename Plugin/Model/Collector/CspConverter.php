<?php
/**
 *
 * Created by PhpStorm.
 * User: George Markose
 * Date: 9/28/20
 * Time: 10:32 AM
 */

namespace George\Csp\Plugin\Model\Collector;

use George\Csp\Api\CspRepositoryInterface;
use George\Csp\Model\CspModelFactory;
use Magento\Csp\Model\Collector\CspWhitelistXml\Converter;

class CspConverter
{
    protected $cspRepository;

    protected $cspFactory;

    protected $cspConverterFactory;

    public function __construct(
        CspRepositoryInterface $cspRepository,
        CspModelFactory $cspFactory,
        Converter $cspConverterFactory
    ) {
        $this->cspRepository    = $cspRepository;
        $this->cspFactory  =   $cspFactory;
        $this->cspConverterFactory  =   $cspConverterFactory;
    }
    public function afterConvert(\Magento\Csp\Model\Collector\CspWhitelistXml\Converter $converter, $result)
    {
        // White listing host
        $cspCollection  =   $this->cspFactory->create();
        $cspCollectionData  =   $cspCollection->getCollection();
        foreach ($cspCollectionData as $cspCollectionDatum) {
            $policyId   =  $cspCollectionDatum->getPolicyId();
            $policyValue = $cspCollectionDatum->getValueId();
            $policyType =   $cspCollectionDatum->getValueType();

            if (!isset($result[$policyId])) {
                $result[$policyId] = ['hosts'=>[],'hashes' => []];
            }
            $result[$policyId]['hosts'][]= $policyType;
        }

        return $result;
    }
}
