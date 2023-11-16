<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VermiLinkAttributes StructType
 * @subpackage Structs
 */
class VermiLinkAttributes extends AbstractStructBase
{
    /**
     * The MidocoOrderCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $MidocoOrderCustomer = null;
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    protected array $MidocoSellPassenger = [];
    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $serviceCode = [];
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The midocoUserId
     * @var int|null
     */
    protected ?int $midocoUserId = null;
    /**
     * The midocoUserName
     * @var string|null
     */
    protected ?string $midocoUserName = null;
    /**
     * The mediator
     * @var string|null
     */
    protected ?string $mediator = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The countryDesc
     * @var string|null
     */
    protected ?string $countryDesc = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * Constructor method for VermiLinkAttributes
     * @uses VermiLinkAttributes::setMidocoOrderCustomer()
     * @uses VermiLinkAttributes::setMidocoSellPassenger()
     * @uses VermiLinkAttributes::setServiceCode()
     * @uses VermiLinkAttributes::setOrderId()
     * @uses VermiLinkAttributes::setOrderNo()
     * @uses VermiLinkAttributes::setItemId()
     * @uses VermiLinkAttributes::setMidocoUserId()
     * @uses VermiLinkAttributes::setMidocoUserName()
     * @uses VermiLinkAttributes::setMediator()
     * @uses VermiLinkAttributes::setExtSystem()
     * @uses VermiLinkAttributes::setExtId()
     * @uses VermiLinkAttributes::setSupplierId()
     * @uses VermiLinkAttributes::setBookingId()
     * @uses VermiLinkAttributes::setStartTravel()
     * @uses VermiLinkAttributes::setEndTravel()
     * @uses VermiLinkAttributes::setCountryCode()
     * @uses VermiLinkAttributes::setCountryDesc()
     * @uses VermiLinkAttributes::setItemPrice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param string[] $serviceCode
     * @param int $orderId
     * @param int $orderNo
     * @param int $itemId
     * @param int $midocoUserId
     * @param string $midocoUserName
     * @param string $mediator
     * @param string $extSystem
     * @param string $extId
     * @param string $supplierId
     * @param string $bookingId
     * @param string $startTravel
     * @param string $endTravel
     * @param string $countryCode
     * @param string $countryDesc
     * @param float $itemPrice
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null, array $midocoSellPassenger = [], array $serviceCode = [], ?int $orderId = null, ?int $orderNo = null, ?int $itemId = null, ?int $midocoUserId = null, ?string $midocoUserName = null, ?string $mediator = null, ?string $extSystem = null, ?string $extId = null, ?string $supplierId = null, ?string $bookingId = null, ?string $startTravel = null, ?string $endTravel = null, ?string $countryCode = null, ?string $countryDesc = null, ?float $itemPrice = null)
    {
        $this
            ->setMidocoOrderCustomer($midocoOrderCustomer)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setServiceCode($serviceCode)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setItemId($itemId)
            ->setMidocoUserId($midocoUserId)
            ->setMidocoUserName($midocoUserName)
            ->setMediator($mediator)
            ->setExtSystem($extSystem)
            ->setExtId($extId)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setCountryCode($countryCode)
            ->setCountryDesc($countryDesc)
            ->setItemPrice($itemPrice);
    }
    /**
     * Get MidocoOrderCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    public function getMidocoOrderCustomer(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer
    {
        return $this->MidocoOrderCustomer;
    }
    /**
     * Set MidocoOrderCustomer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setMidocoOrderCustomer(?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null): self
    {
        $this->MidocoOrderCustomer = $midocoOrderCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $vermiLinkAttributesMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$vermiLinkAttributesMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($vermiLinkAttributesMidocoSellPassengerItem) ? get_class($vermiLinkAttributesMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($vermiLinkAttributesMidocoSellPassengerItem), var_export($vermiLinkAttributesMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setMidocoSellPassenger(array $midocoSellPassenger = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get serviceCode value
     * @return string[]
     */
    public function getServiceCode(): array
    {
        return $this->serviceCode;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceCodeForArrayConstraintsFromSetServiceCode(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $vermiLinkAttributesServiceCodeItem) {
            // validation for constraint: itemType
            if (!is_string($vermiLinkAttributesServiceCodeItem)) {
                $invalidValues[] = is_object($vermiLinkAttributesServiceCodeItem) ? get_class($vermiLinkAttributesServiceCodeItem) : sprintf('%s(%s)', gettype($vermiLinkAttributesServiceCodeItem), var_export($vermiLinkAttributesServiceCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The serviceCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set serviceCode value
     * @throws InvalidArgumentException
     * @param string[] $serviceCode
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setServiceCode(array $serviceCode = []): self
    {
        // validation for constraint: array
        if ('' !== ($serviceCodeArrayErrorMessage = self::validateServiceCodeForArrayConstraintsFromSetServiceCode($serviceCode))) {
            throw new InvalidArgumentException($serviceCodeArrayErrorMessage, __LINE__);
        }
        $this->serviceCode = $serviceCode;
        
        return $this;
    }
    /**
     * Add item to serviceCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function addToServiceCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The serviceCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->serviceCode[] = $item;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
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
     * Get midocoUserId value
     * @return int|null
     */
    public function getMidocoUserId(): ?int
    {
        return $this->midocoUserId;
    }
    /**
     * Set midocoUserId value
     * @param int $midocoUserId
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setMidocoUserId(?int $midocoUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoUserId) && !(is_int($midocoUserId) || ctype_digit($midocoUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoUserId, true), gettype($midocoUserId)), __LINE__);
        }
        $this->midocoUserId = $midocoUserId;
        
        return $this;
    }
    /**
     * Get midocoUserName value
     * @return string|null
     */
    public function getMidocoUserName(): ?string
    {
        return $this->midocoUserName;
    }
    /**
     * Set midocoUserName value
     * @param string $midocoUserName
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setMidocoUserName(?string $midocoUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoUserName) && !is_string($midocoUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoUserName, true), gettype($midocoUserName)), __LINE__);
        }
        $this->midocoUserName = $midocoUserName;
        
        return $this;
    }
    /**
     * Get mediator value
     * @return string|null
     */
    public function getMediator(): ?string
    {
        return $this->mediator;
    }
    /**
     * Set mediator value
     * @param string $mediator
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setMediator(?string $mediator = null): self
    {
        // validation for constraint: string
        if (!is_null($mediator) && !is_string($mediator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediator, true), gettype($mediator)), __LINE__);
        }
        $this->mediator = $mediator;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
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
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get countryDesc value
     * @return string|null
     */
    public function getCountryDesc(): ?string
    {
        return $this->countryDesc;
    }
    /**
     * Set countryDesc value
     * @param string $countryDesc
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setCountryDesc(?string $countryDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($countryDesc) && !is_string($countryDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDesc, true), gettype($countryDesc)), __LINE__);
        }
        $this->countryDesc = $countryDesc;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\VermiLinkAttributes
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
}
