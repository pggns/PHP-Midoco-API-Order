<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeTypeGroupsRequest StructType
 * @subpackage Structs
 */
class GetFeeTypeGroupsRequest extends AbstractStructBase
{
    /**
     * The feeType
     * @var string|null
     */
    protected ?string $feeType = null;
    /**
     * Constructor method for GetFeeTypeGroupsRequest
     * @uses GetFeeTypeGroupsRequest::setFeeType()
     * @param string $feeType
     */
    public function __construct(?string $feeType = null)
    {
        $this
            ->setFeeType($feeType);
    }
    /**
     * Get feeType value
     * @return string|null
     */
    public function getFeeType(): ?string
    {
        return $this->feeType;
    }
    /**
     * Set feeType value
     * @param string $feeType
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeTypeGroupsRequest
     */
    public function setFeeType(?string $feeType = null): self
    {
        // validation for constraint: string
        if (!is_null($feeType) && !is_string($feeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeType, true), gettype($feeType)), __LINE__);
        }
        $this->feeType = $feeType;
        
        return $this;
    }
}
