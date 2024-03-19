<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditorDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreditorDTO extends AbstractStructBase
{
    /**
     * The creditorNo
     * @var string|null
     */
    protected ?string $creditorNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for CreditorDTO
     * @uses CreditorDTO::setCreditorNo()
     * @uses CreditorDTO::setCustomerId()
     * @param string $creditorNo
     * @param int $customerId
     */
    public function __construct(?string $creditorNo = null, ?int $customerId = null)
    {
        $this
            ->setCreditorNo($creditorNo)
            ->setCustomerId($customerId);
    }
    /**
     * Get creditorNo value
     * @return string|null
     */
    public function getCreditorNo(): ?string
    {
        return $this->creditorNo;
    }
    /**
     * Set creditorNo value
     * @param string $creditorNo
     * @return \Pggns\MidocoApi\Order\StructType\CreditorDTO
     */
    public function setCreditorNo(?string $creditorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorNo) && !is_string($creditorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorNo, true), gettype($creditorNo)), __LINE__);
        }
        $this->creditorNo = $creditorNo;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CreditorDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
}
