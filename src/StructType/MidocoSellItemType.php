<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only included if the MILES_AND_MORE adapter is assigned to the org.-unit and this detail is requested.
 * @subpackage Structs
 */
class MidocoSellItemType extends SellItemDTO
{
    /**
     * The MidocoPriceDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPriceDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType[]
     */
    protected array $MidocoPriceDetail = [];
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[]
     */
    protected array $MidocoOnlinePaymentTransaction = [];
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
     * The MidocoSellRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellRemark
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[]
     */
    protected array $MidocoSellRemark = [];
    /**
     * The MidocoDocumentItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDocumentItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $MidocoDocumentItem = null;
    /**
     * The MidocoTravelItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $MidocoTravelItem = null;
    /**
     * The MidocoManualItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoManualItem
     * @var \Pggns\MidocoApi\Order\StructType\ManualitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ManualitemDTO $MidocoManualItem = null;
    /**
     * The MidocoCalcItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCalcItem
     * @var \Pggns\MidocoApi\Order\StructType\CalcitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CalcitemDTO $MidocoCalcItem = null;
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * The MidocoSellItemPricing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItemPricing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $MidocoSellItemPricing = null;
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
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[]
     */
    protected array $MidocoSellItem = [];
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[]
     */
    protected array $RevenueBookingInfo = [];
    /**
     * The MidocoSellItemAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemAttribute
     * @var \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO[]
     */
    protected array $MidocoSellItemAttribute = [];
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    protected array $MidocoSellItemVatDivision = [];
    /**
     * The MidocoSellDetailsPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellDetailsPrice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[]
     */
    protected array $MidocoSellDetailsPrice = [];
    /**
     * The MidocoSellItemItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItemItem
     * @var \Pggns\MidocoApi\Order\StructType\SellItemItemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SellItemItemDTO $MidocoSellItemItem = null;
    /**
     * The MidocoSellItemSaving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemSaving
     * @var \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[]
     */
    protected array $MidocoSellItemSaving = [];
    /**
     * The MidocoSellItemEinvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoSellItemEinvoice
     * @var \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO $MidocoSellItemEinvoice = null;
    /**
     * The MidocoEnrichmentCreditCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoEnrichmentCreditCard
     * @var \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO $MidocoEnrichmentCreditCard = null;
    /**
     * The MidocoMilesAndMoreEarnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreEarnInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $MidocoMilesAndMoreEarnInfo = null;
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    protected array $MidocoOrderNotice = [];
    /**
     * The unitAlias
     * @var string|null
     */
    protected ?string $unitAlias = null;
    /**
     * The isPackageChild
     * Meta information extracted from the WSDL
     * - documentation: true = is child of a package Warning! This is new since 14.7.1, rarely used. Maybe there is a better solution to extends the MidocoSellItem with ParentMidocoSellItem?
     * @var bool|null
     */
    protected ?bool $isPackageChild = null;
    /**
     * The billingStatus
     * @var int|null
     */
    protected ?int $billingStatus = null;
    /**
     * The incomingInvoiceStatus
     * @var int|null
     */
    protected ?int $incomingInvoiceStatus = null;
    /**
     * The is_deletable
     * @var bool|null
     */
    protected ?bool $is_deletable = null;
    /**
     * The displayedItemPrice
     * @var float|null
     */
    protected ?float $displayedItemPrice = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * Constructor method for MidocoSellItemType
     * @uses MidocoSellItemType::setMidocoPriceDetail()
     * @uses MidocoSellItemType::setMidocoOnlinePaymentTransaction()
     * @uses MidocoSellItemType::setMidocoSellPassenger()
     * @uses MidocoSellItemType::setMidocoSellRemark()
     * @uses MidocoSellItemType::setMidocoDocumentItem()
     * @uses MidocoSellItemType::setMidocoTravelItem()
     * @uses MidocoSellItemType::setMidocoManualItem()
     * @uses MidocoSellItemType::setMidocoCalcItem()
     * @uses MidocoSellItemType::setMidocoPackageInfo()
     * @uses MidocoSellItemType::setMidocoSellItemPricing()
     * @uses MidocoSellItemType::setMidocoSellItemError()
     * @uses MidocoSellItemType::setMidocoSellItem()
     * @uses MidocoSellItemType::setRevenueBookingInfo()
     * @uses MidocoSellItemType::setMidocoSellItemAttribute()
     * @uses MidocoSellItemType::setMidocoSellItemVatDivision()
     * @uses MidocoSellItemType::setMidocoSellDetailsPrice()
     * @uses MidocoSellItemType::setMidocoSellItemItem()
     * @uses MidocoSellItemType::setMidocoSellItemSaving()
     * @uses MidocoSellItemType::setMidocoSellItemEinvoice()
     * @uses MidocoSellItemType::setMidocoEnrichmentCreditCard()
     * @uses MidocoSellItemType::setMidocoMilesAndMoreEarnInfo()
     * @uses MidocoSellItemType::setMidocoOrderNotice()
     * @uses MidocoSellItemType::setUnitAlias()
     * @uses MidocoSellItemType::setIsPackageChild()
     * @uses MidocoSellItemType::setBillingStatus()
     * @uses MidocoSellItemType::setIncomingInvoiceStatus()
     * @uses MidocoSellItemType::setIs_deletable()
     * @uses MidocoSellItemType::setDisplayedItemPrice()
     * @uses MidocoSellItemType::setDisplayedCurrency()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType[] $midocoPriceDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[] $midocoSellRemark
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @param \Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem
     * @param \Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @param \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO[] $midocoSellItemError
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[] $midocoSellItem
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     * @param \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO[] $midocoSellItemAttribute
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[] $midocoSellDetailsPrice
     * @param \Pggns\MidocoApi\Order\StructType\SellItemItemDTO $midocoSellItemItem
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     * @param \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice
     * @param \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO $midocoEnrichmentCreditCard
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $midocoMilesAndMoreEarnInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @param string $unitAlias
     * @param bool $isPackageChild
     * @param int $billingStatus
     * @param int $incomingInvoiceStatus
     * @param bool $is_deletable
     * @param float $displayedItemPrice
     * @param string $displayedCurrency
     */
    public function __construct(array $midocoPriceDetail = [], array $midocoOnlinePaymentTransaction = [], array $midocoSellPassenger = [], array $midocoSellRemark = [], ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem = null, ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null, ?\Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem = null, ?\Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem = null, ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null, array $midocoSellItemError = [], array $midocoSellItem = [], array $revenueBookingInfo = [], array $midocoSellItemAttribute = [], array $midocoSellItemVatDivision = [], array $midocoSellDetailsPrice = [], ?\Pggns\MidocoApi\Order\StructType\SellItemItemDTO $midocoSellItemItem = null, array $midocoSellItemSaving = [], ?\Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice = null, ?\Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO $midocoEnrichmentCreditCard = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $midocoMilesAndMoreEarnInfo = null, array $midocoOrderNotice = [], ?string $unitAlias = null, ?bool $isPackageChild = null, ?int $billingStatus = null, ?int $incomingInvoiceStatus = null, ?bool $is_deletable = null, ?float $displayedItemPrice = null, ?string $displayedCurrency = null)
    {
        $this
            ->setMidocoPriceDetail($midocoPriceDetail)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setMidocoSellRemark($midocoSellRemark)
            ->setMidocoDocumentItem($midocoDocumentItem)
            ->setMidocoTravelItem($midocoTravelItem)
            ->setMidocoManualItem($midocoManualItem)
            ->setMidocoCalcItem($midocoCalcItem)
            ->setMidocoPackageInfo($midocoPackageInfo)
            ->setMidocoSellItemPricing($midocoSellItemPricing)
            ->setMidocoSellItemError($midocoSellItemError)
            ->setMidocoSellItem($midocoSellItem)
            ->setRevenueBookingInfo($revenueBookingInfo)
            ->setMidocoSellItemAttribute($midocoSellItemAttribute)
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision)
            ->setMidocoSellDetailsPrice($midocoSellDetailsPrice)
            ->setMidocoSellItemItem($midocoSellItemItem)
            ->setMidocoSellItemSaving($midocoSellItemSaving)
            ->setMidocoSellItemEinvoice($midocoSellItemEinvoice)
            ->setMidocoEnrichmentCreditCard($midocoEnrichmentCreditCard)
            ->setMidocoMilesAndMoreEarnInfo($midocoMilesAndMoreEarnInfo)
            ->setMidocoOrderNotice($midocoOrderNotice)
            ->setUnitAlias($unitAlias)
            ->setIsPackageChild($isPackageChild)
            ->setBillingStatus($billingStatus)
            ->setIncomingInvoiceStatus($incomingInvoiceStatus)
            ->setIs_deletable($is_deletable)
            ->setDisplayedItemPrice($displayedItemPrice)
            ->setDisplayedCurrency($displayedCurrency);
    }
    /**
     * Get MidocoPriceDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType[]
     */
    public function getMidocoPriceDetail(): array
    {
        return $this->MidocoPriceDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPriceDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPriceDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPriceDetailForArrayConstraintsFromSetMidocoPriceDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoPriceDetailItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoPriceDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoPriceDetailItem) ? get_class($midocoSellItemTypeMidocoPriceDetailItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoPriceDetailItem), var_export($midocoSellItemTypeMidocoPriceDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPriceDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPriceDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType[] $midocoPriceDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoPriceDetail(array $midocoPriceDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPriceDetailArrayErrorMessage = self::validateMidocoPriceDetailForArrayConstraintsFromSetMidocoPriceDetail($midocoPriceDetail))) {
            throw new InvalidArgumentException($midocoPriceDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoPriceDetail = $midocoPriceDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoPriceDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoPriceDetail(\Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoPriceDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPriceDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPriceDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[]
     */
    public function getMidocoOnlinePaymentTransaction(): array
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOnlinePaymentTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOnlinePaymentTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoOnlinePaymentTransactionItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoOnlinePaymentTransactionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoOnlinePaymentTransactionItem) ? get_class($midocoSellItemTypeMidocoOnlinePaymentTransactionItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoOnlinePaymentTransactionItem), var_export($midocoSellItemTypeMidocoOnlinePaymentTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoOnlinePaymentTransaction(array $midocoOnlinePaymentTransaction = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOnlinePaymentTransactionArrayErrorMessage = self::validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction))) {
            throw new InvalidArgumentException($midocoOnlinePaymentTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoOnlinePaymentTransaction(\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction[] = $item;
        
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
        foreach ($values as $midocoSellItemTypeMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellPassengerItem) ? get_class($midocoSellItemTypeMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellPassengerItem), var_export($midocoSellItemTypeMidocoSellPassengerItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
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
     * Get MidocoSellRemark value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[]
     */
    public function getMidocoSellRemark(): array
    {
        return $this->MidocoSellRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellRemarkForArrayConstraintsFromSetMidocoSellRemark(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellRemarkItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellRemarkItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellRemark) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellRemarkItem) ? get_class($midocoSellItemTypeMidocoSellRemarkItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellRemarkItem), var_export($midocoSellItemTypeMidocoSellRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[] $midocoSellRemark
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellRemark(array $midocoSellRemark = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellRemarkArrayErrorMessage = self::validateMidocoSellRemarkForArrayConstraintsFromSetMidocoSellRemark($midocoSellRemark))) {
            throw new InvalidArgumentException($midocoSellRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellRemark = $midocoSellRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoSellRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoSellRemark(\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellRemark) {
            throw new InvalidArgumentException(sprintf('The MidocoSellRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellRemark[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDocumentItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem|null
     */
    public function getMidocoDocumentItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem
    {
        return $this->MidocoDocumentItem;
    }
    /**
     * Set MidocoDocumentItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoDocumentItem(?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem = null): self
    {
        $this->MidocoDocumentItem = $midocoDocumentItem;
        
        return $this;
    }
    /**
     * Get MidocoTravelItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    public function getMidocoTravelItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
    {
        return $this->MidocoTravelItem;
    }
    /**
     * Set MidocoTravelItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoTravelItem(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null): self
    {
        $this->MidocoTravelItem = $midocoTravelItem;
        
        return $this;
    }
    /**
     * Get MidocoManualItem value
     * @return \Pggns\MidocoApi\Order\StructType\ManualitemDTO|null
     */
    public function getMidocoManualItem(): ?\Pggns\MidocoApi\Order\StructType\ManualitemDTO
    {
        return $this->MidocoManualItem;
    }
    /**
     * Set MidocoManualItem value
     * @param \Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoManualItem(?\Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem = null): self
    {
        $this->MidocoManualItem = $midocoManualItem;
        
        return $this;
    }
    /**
     * Get MidocoCalcItem value
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO|null
     */
    public function getMidocoCalcItem(): ?\Pggns\MidocoApi\Order\StructType\CalcitemDTO
    {
        return $this->MidocoCalcItem;
    }
    /**
     * Set MidocoCalcItem value
     * @param \Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoCalcItem(?\Pggns\MidocoApi\Order\StructType\CalcitemDTO $midocoCalcItem = null): self
    {
        $this->MidocoCalcItem = $midocoCalcItem;
        
        return $this;
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
    /**
     * Get MidocoSellItemPricing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing|null
     */
    public function getMidocoSellItemPricing(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
    {
        return $this->MidocoSellItemPricing;
    }
    /**
     * Set MidocoSellItemPricing value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemPricing(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null): self
    {
        $this->MidocoSellItemPricing = $midocoSellItemPricing;
        
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
        foreach ($values as $midocoSellItemTypeMidocoSellItemErrorItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemErrorItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemErrorDTO) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemErrorItem) ? get_class($midocoSellItemTypeMidocoSellItemErrorItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemErrorItem), var_export($midocoSellItemTypeMidocoSellItemErrorItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
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
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[]
     */
    public function getMidocoSellItem(): array
    {
        return $this->MidocoSellItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemForArrayConstraintsFromSetMidocoSellItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemType) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemItem) ? get_class($midocoSellItemTypeMidocoSellItemItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemItem), var_export($midocoSellItemTypeMidocoSellItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[] $midocoSellItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellItem(array $midocoSellItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemArrayErrorMessage = self::validateMidocoSellItemForArrayConstraintsFromSetMidocoSellItem($midocoSellItem))) {
            throw new InvalidArgumentException($midocoSellItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItem(\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemType) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItem[] = $item;
        
        return $this;
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[]
     */
    public function getRevenueBookingInfo(): array
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setRevenueBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRevenueBookingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRevenueBookingInfoForArrayConstraintsFromSetRevenueBookingInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeRevenueBookingInfoItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeRevenueBookingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType) {
                $invalidValues[] = is_object($midocoSellItemTypeRevenueBookingInfoItem) ? get_class($midocoSellItemTypeRevenueBookingInfoItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeRevenueBookingInfoItem), var_export($midocoSellItemTypeRevenueBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setRevenueBookingInfo(array $revenueBookingInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($revenueBookingInfoArrayErrorMessage = self::validateRevenueBookingInfoForArrayConstraintsFromSetRevenueBookingInfo($revenueBookingInfo))) {
            throw new InvalidArgumentException($revenueBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
    /**
     * Add item to RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToRevenueBookingInfo(\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType) {
            throw new InvalidArgumentException(sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RevenueBookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO[]
     */
    public function getMidocoSellItemAttribute(): array
    {
        return $this->MidocoSellItemAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemAttributeForArrayConstraintsFromSetMidocoSellItemAttribute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemAttributeItem) ? get_class($midocoSellItemTypeMidocoSellItemAttributeItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemAttributeItem), var_export($midocoSellItemTypeMidocoSellItemAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO[] $midocoSellItemAttribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemAttribute(array $midocoSellItemAttribute = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemAttributeArrayErrorMessage = self::validateMidocoSellItemAttributeForArrayConstraintsFromSetMidocoSellItemAttribute($midocoSellItemAttribute))) {
            throw new InvalidArgumentException($midocoSellItemAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemAttribute = $midocoSellItemAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItemAttribute(\Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemAttributeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    public function getMidocoSellItemVatDivision(): array
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemVatDivision method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemVatDivisionForArrayConstraintsFromSetMidocoSellItemVatDivision(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemVatDivisionItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemVatDivisionItem) ? get_class($midocoSellItemTypeMidocoSellItemVatDivisionItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemVatDivisionItem), var_export($midocoSellItemTypeMidocoSellItemVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemVatDivision(array $midocoSellItemVatDivision = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemVatDivisionArrayErrorMessage = self::validateMidocoSellItemVatDivisionForArrayConstraintsFromSetMidocoSellItemVatDivision($midocoSellItemVatDivision))) {
            throw new InvalidArgumentException($midocoSellItemVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItemVatDivision(\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemVatDivision[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellDetailsPrice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[]
     */
    public function getMidocoSellDetailsPrice(): array
    {
        return $this->MidocoSellDetailsPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellDetailsPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellDetailsPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellDetailsPriceForArrayConstraintsFromSetMidocoSellDetailsPrice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellDetailsPriceItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellDetailsPriceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellDetailsPriceItem) ? get_class($midocoSellItemTypeMidocoSellDetailsPriceItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellDetailsPriceItem), var_export($midocoSellItemTypeMidocoSellDetailsPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellDetailsPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellDetailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[] $midocoSellDetailsPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellDetailsPrice(array $midocoSellDetailsPrice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellDetailsPriceArrayErrorMessage = self::validateMidocoSellDetailsPriceForArrayConstraintsFromSetMidocoSellDetailsPrice($midocoSellDetailsPrice))) {
            throw new InvalidArgumentException($midocoSellDetailsPriceArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellDetailsPrice = $midocoSellDetailsPrice;
        
        return $this;
    }
    /**
     * Add item to MidocoSellDetailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoSellDetailsPrice(\Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice) {
            throw new InvalidArgumentException(sprintf('The MidocoSellDetailsPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellDetailsPrice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemItem value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemItemDTO|null
     */
    public function getMidocoSellItemItem(): ?\Pggns\MidocoApi\Order\StructType\SellItemItemDTO
    {
        return $this->MidocoSellItemItem;
    }
    /**
     * Set MidocoSellItemItem value
     * @param \Pggns\MidocoApi\Order\StructType\SellItemItemDTO $midocoSellItemItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemItem(?\Pggns\MidocoApi\Order\StructType\SellItemItemDTO $midocoSellItemItem = null): self
    {
        $this->MidocoSellItemItem = $midocoSellItemItem;
        
        return $this;
    }
    /**
     * Get MidocoSellItemSaving value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[]
     */
    public function getMidocoSellItemSaving(): array
    {
        return $this->MidocoSellItemSaving;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemSaving method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemSavingForArrayConstraintsFromSetMidocoSellItemSaving(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemSavingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemSavingItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemSavingItem) ? get_class($midocoSellItemTypeMidocoSellItemSavingItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemSavingItem), var_export($midocoSellItemTypeMidocoSellItemSavingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemSaving(array $midocoSellItemSaving = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemSavingArrayErrorMessage = self::validateMidocoSellItemSavingForArrayConstraintsFromSetMidocoSellItemSaving($midocoSellItemSaving))) {
            throw new InvalidArgumentException($midocoSellItemSavingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemSaving = $midocoSellItemSaving;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItemSaving(\Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemSaving[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemEinvoice value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO|null
     */
    public function getMidocoSellItemEinvoice(): ?\Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO
    {
        return $this->MidocoSellItemEinvoice;
    }
    /**
     * Set MidocoSellItemEinvoice value
     * @param \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemEinvoice(?\Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice = null): self
    {
        $this->MidocoSellItemEinvoice = $midocoSellItemEinvoice;
        
        return $this;
    }
    /**
     * Get MidocoEnrichmentCreditCard value
     * @return \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO|null
     */
    public function getMidocoEnrichmentCreditCard(): ?\Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO
    {
        return $this->MidocoEnrichmentCreditCard;
    }
    /**
     * Set MidocoEnrichmentCreditCard value
     * @param \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO $midocoEnrichmentCreditCard
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoEnrichmentCreditCard(?\Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO $midocoEnrichmentCreditCard = null): self
    {
        $this->MidocoEnrichmentCreditCard = $midocoEnrichmentCreditCard;
        
        return $this;
    }
    /**
     * Get MidocoMilesAndMoreEarnInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType|null
     */
    public function getMidocoMilesAndMoreEarnInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
    {
        return $this->MidocoMilesAndMoreEarnInfo;
    }
    /**
     * Set MidocoMilesAndMoreEarnInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $midocoMilesAndMoreEarnInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoMilesAndMoreEarnInfo(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $midocoMilesAndMoreEarnInfo = null): self
    {
        $this->MidocoMilesAndMoreEarnInfo = $midocoMilesAndMoreEarnInfo;
        
        return $this;
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    public function getMidocoOrderNotice(): array
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoticeForArrayConstraintsFromSetMidocoOrderNotice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoOrderNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoOrderNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoOrderNoticeItem) ? get_class($midocoSellItemTypeMidocoOrderNoticeItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoOrderNoticeItem), var_export($midocoSellItemTypeMidocoOrderNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setMidocoOrderNotice(array $midocoOrderNotice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoticeArrayErrorMessage = self::validateMidocoOrderNoticeForArrayConstraintsFromSetMidocoOrderNotice($midocoOrderNotice))) {
            throw new InvalidArgumentException($midocoOrderNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function addToMidocoOrderNotice(\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderNotice[] = $item;
        
        return $this;
    }
    /**
     * Get unitAlias value
     * @return string|null
     */
    public function getUnitAlias(): ?string
    {
        return $this->unitAlias;
    }
    /**
     * Set unitAlias value
     * @param string $unitAlias
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setUnitAlias(?string $unitAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($unitAlias) && !is_string($unitAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitAlias, true), gettype($unitAlias)), __LINE__);
        }
        $this->unitAlias = $unitAlias;
        
        return $this;
    }
    /**
     * Get isPackageChild value
     * @return bool|null
     */
    public function getIsPackageChild(): ?bool
    {
        return $this->isPackageChild;
    }
    /**
     * Set isPackageChild value
     * @param bool $isPackageChild
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setIsPackageChild(?bool $isPackageChild = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPackageChild) && !is_bool($isPackageChild)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPackageChild, true), gettype($isPackageChild)), __LINE__);
        }
        $this->isPackageChild = $isPackageChild;
        
        return $this;
    }
    /**
     * Get billingStatus value
     * @return int|null
     */
    public function getBillingStatus(): ?int
    {
        return $this->billingStatus;
    }
    /**
     * Set billingStatus value
     * @param int $billingStatus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setBillingStatus(?int $billingStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($billingStatus) && !(is_int($billingStatus) || ctype_digit($billingStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingStatus, true), gettype($billingStatus)), __LINE__);
        }
        $this->billingStatus = $billingStatus;
        
        return $this;
    }
    /**
     * Get incomingInvoiceStatus value
     * @return int|null
     */
    public function getIncomingInvoiceStatus(): ?int
    {
        return $this->incomingInvoiceStatus;
    }
    /**
     * Set incomingInvoiceStatus value
     * @param int $incomingInvoiceStatus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setIncomingInvoiceStatus(?int $incomingInvoiceStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($incomingInvoiceStatus) && !(is_int($incomingInvoiceStatus) || ctype_digit($incomingInvoiceStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($incomingInvoiceStatus, true), gettype($incomingInvoiceStatus)), __LINE__);
        }
        $this->incomingInvoiceStatus = $incomingInvoiceStatus;
        
        return $this;
    }
    /**
     * Get is_deletable value
     * @return bool|null
     */
    public function getIs_deletable(): ?bool
    {
        return $this->is_deletable;
    }
    /**
     * Set is_deletable value
     * @param bool $is_deletable
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setIs_deletable(?bool $is_deletable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($is_deletable) && !is_bool($is_deletable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_deletable, true), gettype($is_deletable)), __LINE__);
        }
        $this->is_deletable = $is_deletable;
        
        return $this;
    }
    /**
     * Get displayedItemPrice value
     * @return float|null
     */
    public function getDisplayedItemPrice(): ?float
    {
        return $this->displayedItemPrice;
    }
    /**
     * Set displayedItemPrice value
     * @param float $displayedItemPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setDisplayedItemPrice(?float $displayedItemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedItemPrice) && !(is_float($displayedItemPrice) || is_numeric($displayedItemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedItemPrice, true), gettype($displayedItemPrice)), __LINE__);
        }
        $this->displayedItemPrice = $displayedItemPrice;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
}
