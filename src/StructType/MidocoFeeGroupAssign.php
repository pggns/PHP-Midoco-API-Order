<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFeeGroupAssign StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoFeeGroupAssign extends FeeAssignDTO
{
    /**
     * The feeGroupComment
     * @var string|null
     */
    protected ?string $feeGroupComment = null;
    /**
     * Constructor method for MidocoFeeGroupAssign
     * @uses MidocoFeeGroupAssign::setFeeGroupComment()
     * @param string $feeGroupComment
     */
    public function __construct(?string $feeGroupComment = null)
    {
        $this
            ->setFeeGroupComment($feeGroupComment);
    }
    /**
     * Get feeGroupComment value
     * @return string|null
     */
    public function getFeeGroupComment(): ?string
    {
        return $this->feeGroupComment;
    }
    /**
     * Set feeGroupComment value
     * @param string $feeGroupComment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign
     */
    public function setFeeGroupComment(?string $feeGroupComment = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroupComment) && !is_string($feeGroupComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroupComment, true), gettype($feeGroupComment)), __LINE__);
        }
        $this->feeGroupComment = $feeGroupComment;
        
        return $this;
    }
}
