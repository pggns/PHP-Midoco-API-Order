<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupAdviserDTO StructType
 * @subpackage Structs
 */
class GroupAdviserDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The groupAdviserCustomerId
     * @var int|null
     */
    protected ?int $groupAdviserCustomerId = null;
    /**
     * The provisionPercent
     * @var float|null
     */
    protected ?float $provisionPercent = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for GroupAdviserDTO
     * @uses GroupAdviserDTO::setCustomerId()
     * @uses GroupAdviserDTO::setGroupAdviserCustomerId()
     * @uses GroupAdviserDTO::setProvisionPercent()
     * @uses GroupAdviserDTO::setValidFrom()
     * @uses GroupAdviserDTO::setValidUntil()
     * @param int $customerId
     * @param int $groupAdviserCustomerId
     * @param float $provisionPercent
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?int $customerId = null, ?int $groupAdviserCustomerId = null, ?float $provisionPercent = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setGroupAdviserCustomerId($groupAdviserCustomerId)
            ->setProvisionPercent($provisionPercent)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdviserDTO
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
     * Get groupAdviserCustomerId value
     * @return int|null
     */
    public function getGroupAdviserCustomerId(): ?int
    {
        return $this->groupAdviserCustomerId;
    }
    /**
     * Set groupAdviserCustomerId value
     * @param int $groupAdviserCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdviserDTO
     */
    public function setGroupAdviserCustomerId(?int $groupAdviserCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($groupAdviserCustomerId) && !(is_int($groupAdviserCustomerId) || ctype_digit($groupAdviserCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupAdviserCustomerId, true), gettype($groupAdviserCustomerId)), __LINE__);
        }
        $this->groupAdviserCustomerId = $groupAdviserCustomerId;
        
        return $this;
    }
    /**
     * Get provisionPercent value
     * @return float|null
     */
    public function getProvisionPercent(): ?float
    {
        return $this->provisionPercent;
    }
    /**
     * Set provisionPercent value
     * @param float $provisionPercent
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdviserDTO
     */
    public function setProvisionPercent(?float $provisionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionPercent) && !(is_float($provisionPercent) || is_numeric($provisionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionPercent, true), gettype($provisionPercent)), __LINE__);
        }
        $this->provisionPercent = $provisionPercent;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdviserDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdviserDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
