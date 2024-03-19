<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TouroperatorInsurerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TouroperatorInsurerDTO extends AbstractStructBase
{
    /**
     * The assignedInsurer
     * @var string|null
     */
    protected ?string $assignedInsurer = null;
    /**
     * The insurerId
     * @var int|null
     */
    protected ?int $insurerId = null;
    /**
     * The isAssessor
     * @var bool|null
     */
    protected ?bool $isAssessor = null;
    /**
     * The touroperatorId
     * @var int|null
     */
    protected ?int $touroperatorId = null;
    /**
     * The touroperatorInsurerId
     * @var int|null
     */
    protected ?int $touroperatorInsurerId = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for TouroperatorInsurerDTO
     * @uses TouroperatorInsurerDTO::setAssignedInsurer()
     * @uses TouroperatorInsurerDTO::setInsurerId()
     * @uses TouroperatorInsurerDTO::setIsAssessor()
     * @uses TouroperatorInsurerDTO::setTouroperatorId()
     * @uses TouroperatorInsurerDTO::setTouroperatorInsurerId()
     * @uses TouroperatorInsurerDTO::setValidFrom()
     * @uses TouroperatorInsurerDTO::setValidTo()
     * @param string $assignedInsurer
     * @param int $insurerId
     * @param bool $isAssessor
     * @param int $touroperatorId
     * @param int $touroperatorInsurerId
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $assignedInsurer = null, ?int $insurerId = null, ?bool $isAssessor = null, ?int $touroperatorId = null, ?int $touroperatorInsurerId = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setAssignedInsurer($assignedInsurer)
            ->setInsurerId($insurerId)
            ->setIsAssessor($isAssessor)
            ->setTouroperatorId($touroperatorId)
            ->setTouroperatorInsurerId($touroperatorInsurerId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get assignedInsurer value
     * @return string|null
     */
    public function getAssignedInsurer(): ?string
    {
        return $this->assignedInsurer;
    }
    /**
     * Set assignedInsurer value
     * @param string $assignedInsurer
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorInsurerDTO
     */
    public function setAssignedInsurer(?string $assignedInsurer = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedInsurer) && !is_string($assignedInsurer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedInsurer, true), gettype($assignedInsurer)), __LINE__);
        }
        $this->assignedInsurer = $assignedInsurer;
        
        return $this;
    }
    /**
     * Get insurerId value
     * @return int|null
     */
    public function getInsurerId(): ?int
    {
        return $this->insurerId;
    }
    /**
     * Set insurerId value
     * @param int $insurerId
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorInsurerDTO
     */
    public function setInsurerId(?int $insurerId = null): self
    {
        // validation for constraint: int
        if (!is_null($insurerId) && !(is_int($insurerId) || ctype_digit($insurerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insurerId, true), gettype($insurerId)), __LINE__);
        }
        $this->insurerId = $insurerId;
        
        return $this;
    }
    /**
     * Get isAssessor value
     * @return bool|null
     */
    public function getIsAssessor(): ?bool
    {
        return $this->isAssessor;
    }
    /**
     * Set isAssessor value
     * @param bool $isAssessor
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorInsurerDTO
     */
    public function setIsAssessor(?bool $isAssessor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAssessor) && !is_bool($isAssessor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssessor, true), gettype($isAssessor)), __LINE__);
        }
        $this->isAssessor = $isAssessor;
        
        return $this;
    }
    /**
     * Get touroperatorId value
     * @return int|null
     */
    public function getTouroperatorId(): ?int
    {
        return $this->touroperatorId;
    }
    /**
     * Set touroperatorId value
     * @param int $touroperatorId
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorInsurerDTO
     */
    public function setTouroperatorId(?int $touroperatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorId) && !(is_int($touroperatorId) || ctype_digit($touroperatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorId, true), gettype($touroperatorId)), __LINE__);
        }
        $this->touroperatorId = $touroperatorId;
        
        return $this;
    }
    /**
     * Get touroperatorInsurerId value
     * @return int|null
     */
    public function getTouroperatorInsurerId(): ?int
    {
        return $this->touroperatorInsurerId;
    }
    /**
     * Set touroperatorInsurerId value
     * @param int $touroperatorInsurerId
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorInsurerDTO
     */
    public function setTouroperatorInsurerId(?int $touroperatorInsurerId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorInsurerId) && !(is_int($touroperatorInsurerId) || ctype_digit($touroperatorInsurerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorInsurerId, true), gettype($touroperatorInsurerId)), __LINE__);
        }
        $this->touroperatorInsurerId = $touroperatorInsurerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorInsurerDTO
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
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorInsurerDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
