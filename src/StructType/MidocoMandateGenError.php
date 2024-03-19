<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMandateGenError StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMandateGenError extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * Constructor method for MidocoMandateGenError
     * @uses MidocoMandateGenError::setOrderNo()
     * @uses MidocoMandateGenError::setErrorText()
     * @param int $orderNo
     * @param string $errorText
     */
    public function __construct(?int $orderNo = null, ?string $errorText = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setErrorText($errorText);
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
        return $this;
    }
}
