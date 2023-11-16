<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMdcSettlementBillingResponse StructType
 * @subpackage Structs
 */
class GetMdcSettlementBillingResponse extends AbstractStructBase
{
    /**
     * The MidocoMdcSettlementBillingRevenue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementBillingRevenue
     * @var \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO[]
     */
    protected array $MidocoMdcSettlementBillingRevenue = [];
    /**
     * The MidocoMdcSettlementBillingOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementBillingOrder
     * @var \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO[]
     */
    protected array $MidocoMdcSettlementBillingOrder = [];
    /**
     * The MidocoMdcSettlementBillingBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementBillingBooking
     * @var \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO[]
     */
    protected array $MidocoMdcSettlementBillingBooking = [];
    /**
     * The MidocoMdcSettlementBillingFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementBillingFee
     * @var \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO[]
     */
    protected array $MidocoMdcSettlementBillingFee = [];
    /**
     * The MidocoMdcSettlementBillingMdoc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementBillingMdoc
     * @var \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO[]
     */
    protected array $MidocoMdcSettlementBillingMdoc = [];
    /**
     * The MidocoMdcSettlementCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementCharge
     * @var \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO[]
     */
    protected array $MidocoMdcSettlementCharge = [];
    /**
     * The totalChargeAmount
     * @var float|null
     */
    protected ?float $totalChargeAmount = null;
    /**
     * Constructor method for GetMdcSettlementBillingResponse
     * @uses GetMdcSettlementBillingResponse::setMidocoMdcSettlementBillingRevenue()
     * @uses GetMdcSettlementBillingResponse::setMidocoMdcSettlementBillingOrder()
     * @uses GetMdcSettlementBillingResponse::setMidocoMdcSettlementBillingBooking()
     * @uses GetMdcSettlementBillingResponse::setMidocoMdcSettlementBillingFee()
     * @uses GetMdcSettlementBillingResponse::setMidocoMdcSettlementBillingMdoc()
     * @uses GetMdcSettlementBillingResponse::setMidocoMdcSettlementCharge()
     * @uses GetMdcSettlementBillingResponse::setTotalChargeAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO[] $midocoMdcSettlementBillingRevenue
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO[] $midocoMdcSettlementBillingOrder
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO[] $midocoMdcSettlementBillingBooking
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO[] $midocoMdcSettlementBillingFee
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO[] $midocoMdcSettlementBillingMdoc
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO[] $midocoMdcSettlementCharge
     * @param float $totalChargeAmount
     */
    public function __construct(array $midocoMdcSettlementBillingRevenue = [], array $midocoMdcSettlementBillingOrder = [], array $midocoMdcSettlementBillingBooking = [], array $midocoMdcSettlementBillingFee = [], array $midocoMdcSettlementBillingMdoc = [], array $midocoMdcSettlementCharge = [], ?float $totalChargeAmount = null)
    {
        $this
            ->setMidocoMdcSettlementBillingRevenue($midocoMdcSettlementBillingRevenue)
            ->setMidocoMdcSettlementBillingOrder($midocoMdcSettlementBillingOrder)
            ->setMidocoMdcSettlementBillingBooking($midocoMdcSettlementBillingBooking)
            ->setMidocoMdcSettlementBillingFee($midocoMdcSettlementBillingFee)
            ->setMidocoMdcSettlementBillingMdoc($midocoMdcSettlementBillingMdoc)
            ->setMidocoMdcSettlementCharge($midocoMdcSettlementCharge)
            ->setTotalChargeAmount($totalChargeAmount);
    }
    /**
     * Get MidocoMdcSettlementBillingRevenue value
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO[]
     */
    public function getMidocoMdcSettlementBillingRevenue(): array
    {
        return $this->MidocoMdcSettlementBillingRevenue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementBillingRevenue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementBillingRevenue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementBillingRevenueForArrayConstraintsFromSetMidocoMdcSettlementBillingRevenue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMdcSettlementBillingResponseMidocoMdcSettlementBillingRevenueItem) {
            // validation for constraint: itemType
            if (!$getMdcSettlementBillingResponseMidocoMdcSettlementBillingRevenueItem instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO) {
                $invalidValues[] = is_object($getMdcSettlementBillingResponseMidocoMdcSettlementBillingRevenueItem) ? get_class($getMdcSettlementBillingResponseMidocoMdcSettlementBillingRevenueItem) : sprintf('%s(%s)', gettype($getMdcSettlementBillingResponseMidocoMdcSettlementBillingRevenueItem), var_export($getMdcSettlementBillingResponseMidocoMdcSettlementBillingRevenueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementBillingRevenue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementBillingRevenue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO[] $midocoMdcSettlementBillingRevenue
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function setMidocoMdcSettlementBillingRevenue(array $midocoMdcSettlementBillingRevenue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementBillingRevenueArrayErrorMessage = self::validateMidocoMdcSettlementBillingRevenueForArrayConstraintsFromSetMidocoMdcSettlementBillingRevenue($midocoMdcSettlementBillingRevenue))) {
            throw new InvalidArgumentException($midocoMdcSettlementBillingRevenueArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementBillingRevenue = $midocoMdcSettlementBillingRevenue;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementBillingRevenue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function addToMidocoMdcSettlementBillingRevenue(\Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementBillingRevenue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingRevenueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementBillingRevenue[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMdcSettlementBillingOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO[]
     */
    public function getMidocoMdcSettlementBillingOrder(): array
    {
        return $this->MidocoMdcSettlementBillingOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementBillingOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementBillingOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementBillingOrderForArrayConstraintsFromSetMidocoMdcSettlementBillingOrder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMdcSettlementBillingResponseMidocoMdcSettlementBillingOrderItem) {
            // validation for constraint: itemType
            if (!$getMdcSettlementBillingResponseMidocoMdcSettlementBillingOrderItem instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO) {
                $invalidValues[] = is_object($getMdcSettlementBillingResponseMidocoMdcSettlementBillingOrderItem) ? get_class($getMdcSettlementBillingResponseMidocoMdcSettlementBillingOrderItem) : sprintf('%s(%s)', gettype($getMdcSettlementBillingResponseMidocoMdcSettlementBillingOrderItem), var_export($getMdcSettlementBillingResponseMidocoMdcSettlementBillingOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementBillingOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementBillingOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO[] $midocoMdcSettlementBillingOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function setMidocoMdcSettlementBillingOrder(array $midocoMdcSettlementBillingOrder = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementBillingOrderArrayErrorMessage = self::validateMidocoMdcSettlementBillingOrderForArrayConstraintsFromSetMidocoMdcSettlementBillingOrder($midocoMdcSettlementBillingOrder))) {
            throw new InvalidArgumentException($midocoMdcSettlementBillingOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementBillingOrder = $midocoMdcSettlementBillingOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementBillingOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function addToMidocoMdcSettlementBillingOrder(\Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementBillingOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingOrderDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementBillingOrder[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMdcSettlementBillingBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO[]
     */
    public function getMidocoMdcSettlementBillingBooking(): array
    {
        return $this->MidocoMdcSettlementBillingBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementBillingBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementBillingBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementBillingBookingForArrayConstraintsFromSetMidocoMdcSettlementBillingBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMdcSettlementBillingResponseMidocoMdcSettlementBillingBookingItem) {
            // validation for constraint: itemType
            if (!$getMdcSettlementBillingResponseMidocoMdcSettlementBillingBookingItem instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO) {
                $invalidValues[] = is_object($getMdcSettlementBillingResponseMidocoMdcSettlementBillingBookingItem) ? get_class($getMdcSettlementBillingResponseMidocoMdcSettlementBillingBookingItem) : sprintf('%s(%s)', gettype($getMdcSettlementBillingResponseMidocoMdcSettlementBillingBookingItem), var_export($getMdcSettlementBillingResponseMidocoMdcSettlementBillingBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementBillingBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementBillingBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO[] $midocoMdcSettlementBillingBooking
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function setMidocoMdcSettlementBillingBooking(array $midocoMdcSettlementBillingBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementBillingBookingArrayErrorMessage = self::validateMidocoMdcSettlementBillingBookingForArrayConstraintsFromSetMidocoMdcSettlementBillingBooking($midocoMdcSettlementBillingBooking))) {
            throw new InvalidArgumentException($midocoMdcSettlementBillingBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementBillingBooking = $midocoMdcSettlementBillingBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementBillingBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function addToMidocoMdcSettlementBillingBooking(\Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementBillingBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingBookingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementBillingBooking[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMdcSettlementBillingFee value
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO[]
     */
    public function getMidocoMdcSettlementBillingFee(): array
    {
        return $this->MidocoMdcSettlementBillingFee;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementBillingFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementBillingFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementBillingFeeForArrayConstraintsFromSetMidocoMdcSettlementBillingFee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMdcSettlementBillingResponseMidocoMdcSettlementBillingFeeItem) {
            // validation for constraint: itemType
            if (!$getMdcSettlementBillingResponseMidocoMdcSettlementBillingFeeItem instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO) {
                $invalidValues[] = is_object($getMdcSettlementBillingResponseMidocoMdcSettlementBillingFeeItem) ? get_class($getMdcSettlementBillingResponseMidocoMdcSettlementBillingFeeItem) : sprintf('%s(%s)', gettype($getMdcSettlementBillingResponseMidocoMdcSettlementBillingFeeItem), var_export($getMdcSettlementBillingResponseMidocoMdcSettlementBillingFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementBillingFee property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementBillingFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO[] $midocoMdcSettlementBillingFee
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function setMidocoMdcSettlementBillingFee(array $midocoMdcSettlementBillingFee = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementBillingFeeArrayErrorMessage = self::validateMidocoMdcSettlementBillingFeeForArrayConstraintsFromSetMidocoMdcSettlementBillingFee($midocoMdcSettlementBillingFee))) {
            throw new InvalidArgumentException($midocoMdcSettlementBillingFeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementBillingFee = $midocoMdcSettlementBillingFee;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementBillingFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function addToMidocoMdcSettlementBillingFee(\Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementBillingFee property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingFeeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementBillingFee[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMdcSettlementBillingMdoc value
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO[]
     */
    public function getMidocoMdcSettlementBillingMdoc(): array
    {
        return $this->MidocoMdcSettlementBillingMdoc;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementBillingMdoc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementBillingMdoc method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementBillingMdocForArrayConstraintsFromSetMidocoMdcSettlementBillingMdoc(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMdcSettlementBillingResponseMidocoMdcSettlementBillingMdocItem) {
            // validation for constraint: itemType
            if (!$getMdcSettlementBillingResponseMidocoMdcSettlementBillingMdocItem instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO) {
                $invalidValues[] = is_object($getMdcSettlementBillingResponseMidocoMdcSettlementBillingMdocItem) ? get_class($getMdcSettlementBillingResponseMidocoMdcSettlementBillingMdocItem) : sprintf('%s(%s)', gettype($getMdcSettlementBillingResponseMidocoMdcSettlementBillingMdocItem), var_export($getMdcSettlementBillingResponseMidocoMdcSettlementBillingMdocItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementBillingMdoc property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementBillingMdoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO[] $midocoMdcSettlementBillingMdoc
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function setMidocoMdcSettlementBillingMdoc(array $midocoMdcSettlementBillingMdoc = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementBillingMdocArrayErrorMessage = self::validateMidocoMdcSettlementBillingMdocForArrayConstraintsFromSetMidocoMdcSettlementBillingMdoc($midocoMdcSettlementBillingMdoc))) {
            throw new InvalidArgumentException($midocoMdcSettlementBillingMdocArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementBillingMdoc = $midocoMdcSettlementBillingMdoc;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementBillingMdoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function addToMidocoMdcSettlementBillingMdoc(\Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementBillingMdoc property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementBillingMdoc[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMdcSettlementCharge value
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO[]
     */
    public function getMidocoMdcSettlementCharge(): array
    {
        return $this->MidocoMdcSettlementCharge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementChargeForArrayConstraintsFromSetMidocoMdcSettlementCharge(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMdcSettlementBillingResponseMidocoMdcSettlementChargeItem) {
            // validation for constraint: itemType
            if (!$getMdcSettlementBillingResponseMidocoMdcSettlementChargeItem instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO) {
                $invalidValues[] = is_object($getMdcSettlementBillingResponseMidocoMdcSettlementChargeItem) ? get_class($getMdcSettlementBillingResponseMidocoMdcSettlementChargeItem) : sprintf('%s(%s)', gettype($getMdcSettlementBillingResponseMidocoMdcSettlementChargeItem), var_export($getMdcSettlementBillingResponseMidocoMdcSettlementChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO[] $midocoMdcSettlementCharge
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function setMidocoMdcSettlementCharge(array $midocoMdcSettlementCharge = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementChargeArrayErrorMessage = self::validateMidocoMdcSettlementChargeForArrayConstraintsFromSetMidocoMdcSettlementCharge($midocoMdcSettlementCharge))) {
            throw new InvalidArgumentException($midocoMdcSettlementChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementCharge = $midocoMdcSettlementCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function addToMidocoMdcSettlementCharge(\Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\MdcSettlementChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementCharge[] = $item;
        
        return $this;
    }
    /**
     * Get totalChargeAmount value
     * @return float|null
     */
    public function getTotalChargeAmount(): ?float
    {
        return $this->totalChargeAmount;
    }
    /**
     * Set totalChargeAmount value
     * @param float $totalChargeAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingResponse
     */
    public function setTotalChargeAmount(?float $totalChargeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalChargeAmount) && !(is_float($totalChargeAmount) || is_numeric($totalChargeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalChargeAmount, true), gettype($totalChargeAmount)), __LINE__);
        }
        $this->totalChargeAmount = $totalChargeAmount;
        
        return $this;
    }
}
