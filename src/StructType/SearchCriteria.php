<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Her, all the search criteria which lead to the booking in a search engine, should be given.
 * @subpackage Structs
 */
class SearchCriteria extends AbstractStructBase
{
    /**
     * The criteria
     * @var \Pggns\MidocoApi\Order\StructType\Criteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Criteria $criteria = null;
    /**
     * Constructor method for searchCriteria
     * @uses SearchCriteria::setCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\Criteria $criteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Criteria $criteria = null)
    {
        $this
            ->setCriteria($criteria);
    }
    /**
     * Get criteria value
     * @return \Pggns\MidocoApi\Order\StructType\Criteria|null
     */
    public function getCriteria(): ?\Pggns\MidocoApi\Order\StructType\Criteria
    {
        return $this->criteria;
    }
    /**
     * Set criteria value
     * @param \Pggns\MidocoApi\Order\StructType\Criteria $criteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchCriteria
     */
    public function setCriteria(?\Pggns\MidocoApi\Order\StructType\Criteria $criteria = null): self
    {
        $this->criteria = $criteria;
        
        return $this;
    }
}
