<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCashBookPrintRequest StructType
 * @subpackage Structs
 */
class SearchCashBookPrintRequest extends AbstractStructBase
{
    /**
     * The SearchCashBookPrintCriteria
     * Meta information extracted from the WSDL
     * - ref: SearchCashBookPrintCriteria
     * @var \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria $SearchCashBookPrintCriteria = null;
    /**
     * Constructor method for SearchCashBookPrintRequest
     * @uses SearchCashBookPrintRequest::setSearchCashBookPrintCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria $searchCashBookPrintCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria $searchCashBookPrintCriteria = null)
    {
        $this
            ->setSearchCashBookPrintCriteria($searchCashBookPrintCriteria);
    }
    /**
     * Get SearchCashBookPrintCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria|null
     */
    public function getSearchCashBookPrintCriteria(): ?\Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria
    {
        return $this->SearchCashBookPrintCriteria;
    }
    /**
     * Set SearchCashBookPrintCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria $searchCashBookPrintCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintRequest
     */
    public function setSearchCashBookPrintCriteria(?\Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria $searchCashBookPrintCriteria = null): self
    {
        $this->SearchCashBookPrintCriteria = $searchCashBookPrintCriteria;
        
        return $this;
    }
}
