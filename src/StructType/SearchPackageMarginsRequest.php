<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPackageMarginsRequest StructType
 * @subpackage Structs
 */
class SearchPackageMarginsRequest extends AbstractStructBase
{
    /**
     * The PackageMarginsSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: PackageMarginsSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType $PackageMarginsSearchCriteria = null;
    /**
     * Constructor method for SearchPackageMarginsRequest
     * @uses SearchPackageMarginsRequest::setPackageMarginsSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria = null)
    {
        $this
            ->setPackageMarginsSearchCriteria($packageMarginsSearchCriteria);
    }
    /**
     * Get PackageMarginsSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType|null
     */
    public function getPackageMarginsSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
    {
        return $this->PackageMarginsSearchCriteria;
    }
    /**
     * Set PackageMarginsSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchPackageMarginsRequest
     */
    public function setPackageMarginsSearchCriteria(?\Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType $packageMarginsSearchCriteria = null): self
    {
        $this->PackageMarginsSearchCriteria = $packageMarginsSearchCriteria;
        
        return $this;
    }
}
