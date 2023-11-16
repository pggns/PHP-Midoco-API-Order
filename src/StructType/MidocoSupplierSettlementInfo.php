<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierSettlementInfo StructType
 * @subpackage Structs
 */
class MidocoSupplierSettlementInfo extends AbstractStructBase
{
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $itemId;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderNo;
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $accountId;
    /**
     * The itemPrice
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $itemPrice;
    /**
     * The startTravel
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $startTravel;
    /**
     * The noOfPers
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $noOfPers;
    /**
     * The MidocoSellItemError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemError
     * @var \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO[]
     */
    protected array $MidocoSellItemError = [];
    /**
     * The itemDescription
     * @var string|null
     */
    protected ?string $itemDescription = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * Constructor method for MidocoSupplierSettlementInfo
     * @uses MidocoSupplierSettlementInfo::setItemId()
     * @uses MidocoSupplierSettlementInfo::setOrderId()
     * @uses MidocoSupplierSettlementInfo::setOrderNo()
     * @uses MidocoSupplierSettlementInfo::setAccountId()
     * @uses MidocoSupplierSettlementInfo::setItemPrice()
     * @uses MidocoSupplierSettlementInfo::setStartTravel()
     * @uses MidocoSupplierSettlementInfo::setNoOfPers()
     * @uses MidocoSupplierSettlementInfo::setMidocoSellItemError()
     * @uses MidocoSupplierSettlementInfo::setItemDescription()
     * @uses MidocoSupplierSettlementInfo::setEndDate()
     * @uses MidocoSupplierSettlementInfo::setSupplierId()
     * @uses MidocoSupplierSettlementInfo::setGrantedRevenue()
     * @param int $itemId
     * @param int $orderId
     * @param int $orderNo
     * @param string $accountId
     * @param float $itemPrice
     * @param string $startTravel
     * @param int $noOfPers
     * @param \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO[] $midocoSellItemError
     * @param string $itemDescription
     * @param string $endDate
     * @param string $supplierId
     * @param float $grantedRevenue
     */
    public function __construct(int $itemId, int $orderId, int $orderNo, string $accountId, float $itemPrice, string $startTravel, int $noOfPers, array $midocoSellItemError = [], ?string $itemDescription = null, ?string $endDate = null, ?string $supplierId = null, ?float $grantedRevenue = null)
    {
        $this
            ->setItemId($itemId)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setAccountId($accountId)
            ->setItemPrice($itemPrice)
            ->setStartTravel($startTravel)
            ->setNoOfPers($noOfPers)
            ->setMidocoSellItemError($midocoSellItemError)
            ->setItemDescription($itemDescription)
            ->setEndDate($endDate)
            ->setSupplierId($supplierId)
            ->setGrantedRevenue($grantedRevenue);
    }
    /**
     * Get itemId value
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setItemId(int $itemId): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setOrderId(int $orderId): self
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
     * @return int
     */
    public function getOrderNo(): int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setOrderNo(int $orderNo): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setAccountId(string $accountId): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float
     */
    public function getItemPrice(): float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setItemPrice(float $itemPrice): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string
     */
    public function getStartTravel(): string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setStartTravel(string $startTravel): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get noOfPers value
     * @return int
     */
    public function getNoOfPers(): int
    {
        return $this->noOfPers;
    }
    /**
     * Set noOfPers value
     * @param int $noOfPers
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setNoOfPers(int $noOfPers): self
    {
        // validation for constraint: int
        if (!is_null($noOfPers) && !(is_int($noOfPers) || ctype_digit($noOfPers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPers, true), gettype($noOfPers)), __LINE__);
        }
        $this->noOfPers = $noOfPers;
        
        return $this;
    }
    /**
     * Get MidocoSellItemError value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO[]
     */
    public function getMidocoSellItemError(): array
    {
        return $this->MidocoSellItemError;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemErrorForArrayConstraintsFromSetMidocoSellItemError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSupplierSettlementInfoMidocoSellItemErrorItem) {
            // validation for constraint: itemType
            if (!$midocoSupplierSettlementInfoMidocoSellItemErrorItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO) {
                $invalidValues[] = is_object($midocoSupplierSettlementInfoMidocoSellItemErrorItem) ? get_class($midocoSupplierSettlementInfoMidocoSellItemErrorItem) : sprintf('%s(%s)', gettype($midocoSupplierSettlementInfoMidocoSellItemErrorItem), var_export($midocoSupplierSettlementInfoMidocoSellItemErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemError property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO[] $midocoSellItemError
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setMidocoSellItemError(array $midocoSellItemError = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemErrorArrayErrorMessage = self::validateMidocoSellItemErrorForArrayConstraintsFromSetMidocoSellItemError($midocoSellItemError))) {
            throw new InvalidArgumentException($midocoSellItemErrorArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemError = $midocoSellItemError;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function addToMidocoSellItemError(\Pggns\MidocoApi\Order\StructType\SellItemErrorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemError property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemError[] = $item;
        
        return $this;
    }
    /**
     * Get itemDescription value
     * @return string|null
     */
    public function getItemDescription(): ?string
    {
        return $this->itemDescription;
    }
    /**
     * Set itemDescription value
     * @param string $itemDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setItemDescription(?string $itemDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($itemDescription) && !is_string($itemDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemDescription, true), gettype($itemDescription)), __LINE__);
        }
        $this->itemDescription = $itemDescription;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
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
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
}
