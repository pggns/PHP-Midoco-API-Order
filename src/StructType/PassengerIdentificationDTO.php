<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerIdentificationDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PassengerIdentificationDTO extends AbstractStructBase
{
    /**
     * The crmUnitName
     * @var string|null
     */
    protected ?string $crmUnitName = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The fullName
     * @var string|null
     */
    protected ?string $fullName = null;
    /**
     * The paxId
     * @var int|null
     */
    protected ?int $paxId = null;
    /**
     * Constructor method for PassengerIdentificationDTO
     * @uses PassengerIdentificationDTO::setCrmUnitName()
     * @uses PassengerIdentificationDTO::setCustomerId()
     * @uses PassengerIdentificationDTO::setFullName()
     * @uses PassengerIdentificationDTO::setPaxId()
     * @param string $crmUnitName
     * @param int $customerId
     * @param string $fullName
     * @param int $paxId
     */
    public function __construct(?string $crmUnitName = null, ?int $customerId = null, ?string $fullName = null, ?int $paxId = null)
    {
        $this
            ->setCrmUnitName($crmUnitName)
            ->setCustomerId($customerId)
            ->setFullName($fullName)
            ->setPaxId($paxId);
    }
    /**
     * Get crmUnitName value
     * @return string|null
     */
    public function getCrmUnitName(): ?string
    {
        return $this->crmUnitName;
    }
    /**
     * Set crmUnitName value
     * @param string $crmUnitName
     * @return \Pggns\MidocoApi\Order\StructType\PassengerIdentificationDTO
     */
    public function setCrmUnitName(?string $crmUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($crmUnitName) && !is_string($crmUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crmUnitName, true), gettype($crmUnitName)), __LINE__);
        }
        $this->crmUnitName = $crmUnitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PassengerIdentificationDTO
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
     * Get fullName value
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }
    /**
     * Set fullName value
     * @param string $fullName
     * @return \Pggns\MidocoApi\Order\StructType\PassengerIdentificationDTO
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->fullName = $fullName;
        
        return $this;
    }
    /**
     * Get paxId value
     * @return int|null
     */
    public function getPaxId(): ?int
    {
        return $this->paxId;
    }
    /**
     * Set paxId value
     * @param int $paxId
     * @return \Pggns\MidocoApi\Order\StructType\PassengerIdentificationDTO
     */
    public function setPaxId(?int $paxId = null): self
    {
        // validation for constraint: int
        if (!is_null($paxId) && !(is_int($paxId) || ctype_digit($paxId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxId, true), gettype($paxId)), __LINE__);
        }
        $this->paxId = $paxId;
        
        return $this;
    }
}
