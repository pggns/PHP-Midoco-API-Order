<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfPaidOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: check if an order (identifieb by its order id) is already paid or not
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckIfPaidOrderResponse extends AbstractStructBase
{
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The paid
     * @var bool|null
     */
    protected ?bool $paid = null;
    /**
     * The paidDate
     * @var string|null
     */
    protected ?string $paidDate = null;
    /**
     * Constructor method for CheckIfPaidOrderResponse
     * @uses CheckIfPaidOrderResponse::setInternalVersion()
     * @uses CheckIfPaidOrderResponse::setPaid()
     * @uses CheckIfPaidOrderResponse::setPaidDate()
     * @param int $internalVersion
     * @param bool $paid
     * @param string $paidDate
     */
    public function __construct(?int $internalVersion = null, ?bool $paid = null, ?string $paidDate = null)
    {
        $this
            ->setInternalVersion($internalVersion)
            ->setPaid($paid)
            ->setPaidDate($paidDate);
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\CheckIfPaidOrderResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }
    /**
     * Set paid value
     * @param bool $paid
     * @return \Pggns\MidocoApi\Order\StructType\CheckIfPaidOrderResponse
     */
    public function setPaid(?bool $paid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
        $this->paid = $paid;
        
        return $this;
    }
    /**
     * Get paidDate value
     * @return string|null
     */
    public function getPaidDate(): ?string
    {
        return $this->paidDate;
    }
    /**
     * Set paidDate value
     * @param string $paidDate
     * @return \Pggns\MidocoApi\Order\StructType\CheckIfPaidOrderResponse
     */
    public function setPaidDate(?string $paidDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paidDate) && !is_string($paidDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidDate, true), gettype($paidDate)), __LINE__);
        }
        $this->paidDate = $paidDate;
        
        return $this;
    }
}
