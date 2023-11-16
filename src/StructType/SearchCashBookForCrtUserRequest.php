<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCashBookForCrtUserRequest StructType
 * @subpackage Structs
 */
class SearchCashBookForCrtUserRequest extends AbstractStructBase
{
    /**
     * The SearchCashBookForCrtUserCriteria
     * Meta information extracted from the WSDL
     * - ref: SearchCashBookForCrtUserCriteria
     * @var \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria $SearchCashBookForCrtUserCriteria = null;
    /**
     * Constructor method for SearchCashBookForCrtUserRequest
     * @uses SearchCashBookForCrtUserRequest::setSearchCashBookForCrtUserCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria $searchCashBookForCrtUserCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria $searchCashBookForCrtUserCriteria = null)
    {
        $this
            ->setSearchCashBookForCrtUserCriteria($searchCashBookForCrtUserCriteria);
    }
    /**
     * Get SearchCashBookForCrtUserCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria|null
     */
    public function getSearchCashBookForCrtUserCriteria(): ?\Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria
    {
        return $this->SearchCashBookForCrtUserCriteria;
    }
    /**
     * Set SearchCashBookForCrtUserCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria $searchCashBookForCrtUserCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserRequest
     */
    public function setSearchCashBookForCrtUserCriteria(?\Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria $searchCashBookForCrtUserCriteria = null): self
    {
        $this->SearchCashBookForCrtUserCriteria = $searchCashBookForCrtUserCriteria;
        
        return $this;
    }
}
