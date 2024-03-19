<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelAttrDefDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravelAttrDefDTO extends AbstractStructBase
{
    /**
     * The attrCode
     * @var string|null
     */
    protected ?string $attrCode = null;
    /**
     * The attrDesc
     * @var string|null
     */
    protected ?string $attrDesc = null;
    /**
     * The attrId
     * @var int|null
     */
    protected ?int $attrId = null;
    /**
     * Constructor method for TravelAttrDefDTO
     * @uses TravelAttrDefDTO::setAttrCode()
     * @uses TravelAttrDefDTO::setAttrDesc()
     * @uses TravelAttrDefDTO::setAttrId()
     * @param string $attrCode
     * @param string $attrDesc
     * @param int $attrId
     */
    public function __construct(?string $attrCode = null, ?string $attrDesc = null, ?int $attrId = null)
    {
        $this
            ->setAttrCode($attrCode)
            ->setAttrDesc($attrDesc)
            ->setAttrId($attrId);
    }
    /**
     * Get attrCode value
     * @return string|null
     */
    public function getAttrCode(): ?string
    {
        return $this->attrCode;
    }
    /**
     * Set attrCode value
     * @param string $attrCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelAttrDefDTO
     */
    public function setAttrCode(?string $attrCode = null): self
    {
        // validation for constraint: string
        if (!is_null($attrCode) && !is_string($attrCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrCode, true), gettype($attrCode)), __LINE__);
        }
        $this->attrCode = $attrCode;
        
        return $this;
    }
    /**
     * Get attrDesc value
     * @return string|null
     */
    public function getAttrDesc(): ?string
    {
        return $this->attrDesc;
    }
    /**
     * Set attrDesc value
     * @param string $attrDesc
     * @return \Pggns\MidocoApi\Order\StructType\TravelAttrDefDTO
     */
    public function setAttrDesc(?string $attrDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($attrDesc) && !is_string($attrDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrDesc, true), gettype($attrDesc)), __LINE__);
        }
        $this->attrDesc = $attrDesc;
        
        return $this;
    }
    /**
     * Get attrId value
     * @return int|null
     */
    public function getAttrId(): ?int
    {
        return $this->attrId;
    }
    /**
     * Set attrId value
     * @param int $attrId
     * @return \Pggns\MidocoApi\Order\StructType\TravelAttrDefDTO
     */
    public function setAttrId(?int $attrId = null): self
    {
        // validation for constraint: int
        if (!is_null($attrId) && !(is_int($attrId) || ctype_digit($attrId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attrId, true), gettype($attrId)), __LINE__);
        }
        $this->attrId = $attrId;
        
        return $this;
    }
}
