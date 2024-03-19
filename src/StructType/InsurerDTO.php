<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsurerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InsurerDTO extends AbstractStructBase
{
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The insurerId
     * @var int|null
     */
    protected ?int $insurerId = null;
    /**
     * The insurerName
     * @var string|null
     */
    protected ?string $insurerName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for InsurerDTO
     * @uses InsurerDTO::setExternalId()
     * @uses InsurerDTO::setInsurerId()
     * @uses InsurerDTO::setInsurerName()
     * @uses InsurerDTO::setUnitName()
     * @param string $externalId
     * @param int $insurerId
     * @param string $insurerName
     * @param string $unitName
     */
    public function __construct(?string $externalId = null, ?int $insurerId = null, ?string $insurerName = null, ?string $unitName = null)
    {
        $this
            ->setExternalId($externalId)
            ->setInsurerId($insurerId)
            ->setInsurerName($insurerName)
            ->setUnitName($unitName);
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Pggns\MidocoApi\Order\StructType\InsurerDTO
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InsurerDTO
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
     * Get insurerName value
     * @return string|null
     */
    public function getInsurerName(): ?string
    {
        return $this->insurerName;
    }
    /**
     * Set insurerName value
     * @param string $insurerName
     * @return \Pggns\MidocoApi\Order\StructType\InsurerDTO
     */
    public function setInsurerName(?string $insurerName = null): self
    {
        // validation for constraint: string
        if (!is_null($insurerName) && !is_string($insurerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurerName, true), gettype($insurerName)), __LINE__);
        }
        $this->insurerName = $insurerName;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\InsurerDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
