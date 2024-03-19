<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQueryPageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetQueryPageRequest extends AbstractStructBase
{
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * The pageNo
     * Meta information extracted from the WSDL
     * - default: 1
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * Constructor method for GetQueryPageRequest
     * @uses GetQueryPageRequest::setQueryId()
     * @uses GetQueryPageRequest::setPageNo()
     * @param int $queryId
     * @param int $pageNo
     */
    public function __construct(?int $queryId = null, ?int $pageNo = 1)
    {
        $this
            ->setQueryId($queryId)
            ->setPageNo($pageNo);
    }
    /**
     * Get queryId value
     * @return int|null
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param int $queryId
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryPageRequest
     */
    public function setQueryId(?int $queryId = null): self
    {
        // validation for constraint: int
        if (!is_null($queryId) && !(is_int($queryId) || ctype_digit($queryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return int|null
     */
    public function getPageNo(): ?int
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param int $pageNo
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryPageRequest
     */
    public function setPageNo(?int $pageNo = 1): self
    {
        // validation for constraint: int
        if (!is_null($pageNo) && !(is_int($pageNo) || ctype_digit($pageNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
}
