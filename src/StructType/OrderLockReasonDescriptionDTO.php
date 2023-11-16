<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLockReasonDescriptionDTO StructType
 * @subpackage Structs
 */
class OrderLockReasonDescriptionDTO extends AbstractStructBase
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
     * The reasonId
     * @var string|null
     */
    protected ?string $reasonId = null;
    /**
     * Constructor method for OrderLockReasonDescriptionDTO
     * @uses OrderLockReasonDescriptionDTO::setCultureId()
     * @uses OrderLockReasonDescriptionDTO::setDescription()
     * @uses OrderLockReasonDescriptionDTO::setReasonId()
     * @param string $cultureId
     * @param string $description
     * @param string $reasonId
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?string $reasonId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setReasonId($reasonId);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockReasonDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockReasonDescriptionDTO
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
     * Get reasonId value
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param string $reasonId
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockReasonDescriptionDTO
     */
    public function setReasonId(?string $reasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonId) && !is_string($reasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonId, true), gettype($reasonId)), __LINE__);
        }
        $this->reasonId = $reasonId;
        
        return $this;
    }
}
