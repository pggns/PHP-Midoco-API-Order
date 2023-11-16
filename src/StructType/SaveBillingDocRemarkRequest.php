<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocRemarkRequest StructType
 * @subpackage Structs
 */
class SaveBillingDocRemarkRequest extends AbstractStructBase
{
    /**
     * The remark
     * @var \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingRemarkDTO $remark = null;
    /**
     * The parentInternalVersion
     * @var int|null
     */
    protected ?int $parentInternalVersion = null;
    /**
     * Constructor method for SaveBillingDocRemarkRequest
     * @uses SaveBillingDocRemarkRequest::setRemark()
     * @uses SaveBillingDocRemarkRequest::setParentInternalVersion()
     * @param \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO $remark
     * @param int $parentInternalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingRemarkDTO $remark = null, ?int $parentInternalVersion = null)
    {
        $this
            ->setRemark($remark)
            ->setParentInternalVersion($parentInternalVersion);
    }
    /**
     * Get remark value
     * @return \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO|null
     */
    public function getRemark(): ?\Pggns\MidocoApi\Order\StructType\BillingRemarkDTO
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO $remark
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocRemarkRequest
     */
    public function setRemark(?\Pggns\MidocoApi\Order\StructType\BillingRemarkDTO $remark = null): self
    {
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Get parentInternalVersion value
     * @return int|null
     */
    public function getParentInternalVersion(): ?int
    {
        return $this->parentInternalVersion;
    }
    /**
     * Set parentInternalVersion value
     * @param int $parentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocRemarkRequest
     */
    public function setParentInternalVersion(?int $parentInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($parentInternalVersion) && !(is_int($parentInternalVersion) || ctype_digit($parentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentInternalVersion, true), gettype($parentInternalVersion)), __LINE__);
        }
        $this->parentInternalVersion = $parentInternalVersion;
        
        return $this;
    }
}
