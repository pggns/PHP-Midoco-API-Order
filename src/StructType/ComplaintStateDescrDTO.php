<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintStateDescrDTO StructType
 * @subpackage Structs
 */
class ComplaintStateDescrDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The stateId
     * @var string|null
     */
    protected ?string $stateId = null;
    /**
     * Constructor method for ComplaintStateDescrDTO
     * @uses ComplaintStateDescrDTO::setCultureId()
     * @uses ComplaintStateDescrDTO::setDescription()
     * @uses ComplaintStateDescrDTO::setStateId()
     * @param string $cultureId
     * @param string $description
     * @param string $stateId
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?string $stateId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setStateId($stateId);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintStateDescrDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintStateDescrDTO
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
     * Get stateId value
     * @return string|null
     */
    public function getStateId(): ?string
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param string $stateId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintStateDescrDTO
     */
    public function setStateId(?string $stateId = null): self
    {
        // validation for constraint: string
        if (!is_null($stateId) && !is_string($stateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateId, true), gettype($stateId)), __LINE__);
        }
        $this->stateId = $stateId;
        
        return $this;
    }
}
