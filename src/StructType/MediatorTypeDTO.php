<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorTypeDTO StructType
 * @subpackage Structs
 */
class MediatorTypeDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The flightFeePercent
     * @var float|null
     */
    protected ?float $flightFeePercent = null;
    /**
     * The provisionPercentDefault
     * @var float|null
     */
    protected ?float $provisionPercentDefault = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for MediatorTypeDTO
     * @uses MediatorTypeDTO::setDescription()
     * @uses MediatorTypeDTO::setFlightFeePercent()
     * @uses MediatorTypeDTO::setProvisionPercentDefault()
     * @uses MediatorTypeDTO::setTypeId()
     * @param string $description
     * @param float $flightFeePercent
     * @param float $provisionPercentDefault
     * @param string $typeId
     */
    public function __construct(?string $description = null, ?float $flightFeePercent = null, ?float $provisionPercentDefault = null, ?string $typeId = null)
    {
        $this
            ->setDescription($description)
            ->setFlightFeePercent($flightFeePercent)
            ->setProvisionPercentDefault($provisionPercentDefault)
            ->setTypeId($typeId);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get flightFeePercent value
     * @return float|null
     */
    public function getFlightFeePercent(): ?float
    {
        return $this->flightFeePercent;
    }
    /**
     * Set flightFeePercent value
     * @param float $flightFeePercent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO
     */
    public function setFlightFeePercent(?float $flightFeePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($flightFeePercent) && !(is_float($flightFeePercent) || is_numeric($flightFeePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flightFeePercent, true), gettype($flightFeePercent)), __LINE__);
        }
        $this->flightFeePercent = $flightFeePercent;
        
        return $this;
    }
    /**
     * Get provisionPercentDefault value
     * @return float|null
     */
    public function getProvisionPercentDefault(): ?float
    {
        return $this->provisionPercentDefault;
    }
    /**
     * Set provisionPercentDefault value
     * @param float $provisionPercentDefault
     * @return \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO
     */
    public function setProvisionPercentDefault(?float $provisionPercentDefault = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionPercentDefault) && !(is_float($provisionPercentDefault) || is_numeric($provisionPercentDefault))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionPercentDefault, true), gettype($provisionPercentDefault)), __LINE__);
        }
        $this->provisionPercentDefault = $provisionPercentDefault;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
