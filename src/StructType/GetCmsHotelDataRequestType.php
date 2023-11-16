<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCmsHotelDataRequestType StructType
 * @subpackage Structs
 */
class GetCmsHotelDataRequestType extends AbstractStructBase
{
    /**
     * The hotelCodes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $hotelCodes = [];
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The hotelcode
     * @var string|null
     */
    protected ?string $hotelcode = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for GetCmsHotelDataRequestType
     * @uses GetCmsHotelDataRequestType::setHotelCodes()
     * @uses GetCmsHotelDataRequestType::setSupplierId()
     * @uses GetCmsHotelDataRequestType::setHotelcode()
     * @uses GetCmsHotelDataRequestType::setItemId()
     * @param string[] $hotelCodes
     * @param string $supplierId
     * @param string $hotelcode
     * @param int $itemId
     */
    public function __construct(array $hotelCodes = [], ?string $supplierId = null, ?string $hotelcode = null, ?int $itemId = null)
    {
        $this
            ->setHotelCodes($hotelCodes)
            ->setSupplierId($supplierId)
            ->setHotelcode($hotelcode)
            ->setItemId($itemId);
    }
    /**
     * Get hotelCodes value
     * @return string[]
     */
    public function getHotelCodes(): array
    {
        return $this->hotelCodes;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelCodes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelCodes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelCodesForArrayConstraintsFromSetHotelCodes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCmsHotelDataRequestTypeHotelCodesItem) {
            // validation for constraint: itemType
            if (!is_string($getCmsHotelDataRequestTypeHotelCodesItem)) {
                $invalidValues[] = is_object($getCmsHotelDataRequestTypeHotelCodesItem) ? get_class($getCmsHotelDataRequestTypeHotelCodesItem) : sprintf('%s(%s)', gettype($getCmsHotelDataRequestTypeHotelCodesItem), var_export($getCmsHotelDataRequestTypeHotelCodesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The hotelCodes property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set hotelCodes value
     * @throws InvalidArgumentException
     * @param string[] $hotelCodes
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setHotelCodes(array $hotelCodes = []): self
    {
        // validation for constraint: array
        if ('' !== ($hotelCodesArrayErrorMessage = self::validateHotelCodesForArrayConstraintsFromSetHotelCodes($hotelCodes))) {
            throw new InvalidArgumentException($hotelCodesArrayErrorMessage, __LINE__);
        }
        $this->hotelCodes = $hotelCodes;
        
        return $this;
    }
    /**
     * Add item to hotelCodes value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function addToHotelCodes(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The hotelCodes property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->hotelCodes[] = $item;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get hotelcode value
     * @return string|null
     */
    public function getHotelcode(): ?string
    {
        return $this->hotelcode;
    }
    /**
     * Set hotelcode value
     * @param string $hotelcode
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setHotelcode(?string $hotelcode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelcode) && !is_string($hotelcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelcode, true), gettype($hotelcode)), __LINE__);
        }
        $this->hotelcode = $hotelcode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
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
