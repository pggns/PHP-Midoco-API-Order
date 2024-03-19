<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirtualCreditCardAccountDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VirtualCreditCardAccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The issuer
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * Constructor method for VirtualCreditCardAccountDTO
     * @uses VirtualCreditCardAccountDTO::setAccountId()
     * @uses VirtualCreditCardAccountDTO::setCustomerId()
     * @uses VirtualCreditCardAccountDTO::setIssuer()
     * @param string $accountId
     * @param int $customerId
     * @param string $issuer
     */
    public function __construct(?string $accountId = null, ?int $customerId = null, ?string $issuer = null)
    {
        $this
            ->setAccountId($accountId)
            ->setCustomerId($customerId)
            ->setIssuer($issuer);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\VirtualCreditCardAccountDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VirtualCreditCardAccountDTO
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
    /**
     * Get issuer value
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \Pggns\MidocoApi\Order\StructType\VirtualCreditCardAccountDTO
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        
        return $this;
    }
}
