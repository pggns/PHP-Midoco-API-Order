<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForDebitorPageRequest StructType
 * @subpackage Structs
 */
class GetAccountEntriesForDebitorPageRequest extends AbstractStructBase
{
    /**
     * The cacheId
     * @var int|null
     */
    protected ?int $cacheId = null;
    /**
     * The pageNo
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * Constructor method for GetAccountEntriesForDebitorPageRequest
     * @uses GetAccountEntriesForDebitorPageRequest::setCacheId()
     * @uses GetAccountEntriesForDebitorPageRequest::setPageNo()
     * @param int $cacheId
     * @param int $pageNo
     */
    public function __construct(?int $cacheId = null, ?int $pageNo = null)
    {
        $this
            ->setCacheId($cacheId)
            ->setPageNo($pageNo);
    }
    /**
     * Get cacheId value
     * @return int|null
     */
    public function getCacheId(): ?int
    {
        return $this->cacheId;
    }
    /**
     * Set cacheId value
     * @param int $cacheId
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorPageRequest
     */
    public function setCacheId(?int $cacheId = null): self
    {
        // validation for constraint: int
        if (!is_null($cacheId) && !(is_int($cacheId) || ctype_digit($cacheId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cacheId, true), gettype($cacheId)), __LINE__);
        }
        $this->cacheId = $cacheId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorPageRequest
     */
    public function setPageNo(?int $pageNo = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNo) && !(is_int($pageNo) || ctype_digit($pageNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
}
