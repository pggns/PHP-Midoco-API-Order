<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelExtraDataDTO StructType
 * @subpackage Structs
 */
class TravelExtraDataDTO extends AbstractStructBase
{
    /**
     * The attribute
     * @var string|null
     */
    protected ?string $attribute = null;
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for TravelExtraDataDTO
     * @uses TravelExtraDataDTO::setAttribute()
     * @uses TravelExtraDataDTO::setHotelCode()
     * @uses TravelExtraDataDTO::setItemId()
     * @uses TravelExtraDataDTO::setValue()
     * @param string $attribute
     * @param string $hotelCode
     * @param int $itemId
     * @param string $value
     */
    public function __construct(?string $attribute = null, ?string $hotelCode = null, ?int $itemId = null, ?string $value = null)
    {
        $this
            ->setAttribute($attribute)
            ->setHotelCode($hotelCode)
            ->setItemId($itemId)
            ->setValue($value);
    }
    /**
     * Get attribute value
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * Set attribute value
     * @param string $attribute
     * @return \Pggns\MidocoApi\Order\StructType\TravelExtraDataDTO
     */
    public function setAttribute(?string $attribute = null): self
    {
        // validation for constraint: string
        if (!is_null($attribute) && !is_string($attribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribute, true), gettype($attribute)), __LINE__);
        }
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * Get hotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->hotelCode;
    }
    /**
     * Set hotelCode value
     * @param string $hotelCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelExtraDataDTO
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        $this->hotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\TravelExtraDataDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\TravelExtraDataDTO
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
