<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencyDetailDTO extends AbstractStructBase
{
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The invoicingMode
     * @var int|null
     */
    protected ?int $invoicingMode = null;
    /**
     * The midocoOrgUnit
     * @var string|null
     */
    protected ?string $midocoOrgUnit = null;
    /**
     * Constructor method for AgencyDetailDTO
     * @uses AgencyDetailDTO::setCooperationId()
     * @uses AgencyDetailDTO::setCustomerId()
     * @uses AgencyDetailDTO::setExternalSystem()
     * @uses AgencyDetailDTO::setInvoicingMode()
     * @uses AgencyDetailDTO::setMidocoOrgUnit()
     * @param string $cooperationId
     * @param int $customerId
     * @param string $externalSystem
     * @param int $invoicingMode
     * @param string $midocoOrgUnit
     */
    public function __construct(?string $cooperationId = null, ?int $customerId = null, ?string $externalSystem = null, ?int $invoicingMode = null, ?string $midocoOrgUnit = null)
    {
        $this
            ->setCooperationId($cooperationId)
            ->setCustomerId($customerId)
            ->setExternalSystem($externalSystem)
            ->setInvoicingMode($invoicingMode)
            ->setMidocoOrgUnit($midocoOrgUnit);
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyDetailDTO
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyDetailDTO
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
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\Order\StructType\AgencyDetailDTO
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
    /**
     * Get invoicingMode value
     * @return int|null
     */
    public function getInvoicingMode(): ?int
    {
        return $this->invoicingMode;
    }
    /**
     * Set invoicingMode value
     * @param int $invoicingMode
     * @return \Pggns\MidocoApi\Order\StructType\AgencyDetailDTO
     */
    public function setInvoicingMode(?int $invoicingMode = null): self
    {
        // validation for constraint: int
        if (!is_null($invoicingMode) && !(is_int($invoicingMode) || ctype_digit($invoicingMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoicingMode, true), gettype($invoicingMode)), __LINE__);
        }
        $this->invoicingMode = $invoicingMode;
        
        return $this;
    }
    /**
     * Get midocoOrgUnit value
     * @return string|null
     */
    public function getMidocoOrgUnit(): ?string
    {
        return $this->midocoOrgUnit;
    }
    /**
     * Set midocoOrgUnit value
     * @param string $midocoOrgUnit
     * @return \Pggns\MidocoApi\Order\StructType\AgencyDetailDTO
     */
    public function setMidocoOrgUnit(?string $midocoOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrgUnit) && !is_string($midocoOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrgUnit, true), gettype($midocoOrgUnit)), __LINE__);
        }
        $this->midocoOrgUnit = $midocoOrgUnit;
        
        return $this;
    }
}
