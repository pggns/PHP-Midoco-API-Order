<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfPaidBillingDocResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: check if a billing document (identifieb by its document id) is already paid or not
 * @subpackage Structs
 */
class CheckIfPaidBillingDocResponse extends AbstractStructBase
{
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
     * Constructor method for CheckIfPaidBillingDocResponse
     * @uses CheckIfPaidBillingDocResponse::setPaid()
     * @uses CheckIfPaidBillingDocResponse::setPaidDate()
     * @param bool $paid
     * @param string $paidDate
     */
    public function __construct(?bool $paid = null, ?string $paidDate = null)
    {
        $this
            ->setPaid($paid)
            ->setPaidDate($paidDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckIfPaidBillingDocResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckIfPaidBillingDocResponse
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
