<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelAttrDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravelAttrDTO extends AbstractStructBase
{
    /**
     * The attrId
     * @var int|null
     */
    protected ?int $attrId = null;
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
     * Constructor method for TravelAttrDTO
     * @uses TravelAttrDTO::setAttrId()
     * @uses TravelAttrDTO::setHotelCode()
     * @uses TravelAttrDTO::setItemId()
     * @param int $attrId
     * @param string $hotelCode
     * @param int $itemId
     */
    public function __construct(?int $attrId = null, ?string $hotelCode = null, ?int $itemId = null)
    {
        $this
            ->setAttrId($attrId)
            ->setHotelCode($hotelCode)
            ->setItemId($itemId);
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelAttrDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelAttrDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelAttrDTO
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
}
