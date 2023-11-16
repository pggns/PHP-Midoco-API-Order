<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDocumentType StructType
 * @subpackage Structs
 */
class MidocoBillingDocumentType extends BillingDocumentDTO
{
    /**
     * The MidocoBillingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingRemark
     * @var \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO[]
     */
    protected array $MidocoBillingRemark = [];
    /**
     * The MidocoBillingAttribute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingAttribute
     * @var \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingAttributeDTO $MidocoBillingAttribute = null;
    /**
     * The MidocoBillingVatCalculation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingVatCalculation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[]
     */
    protected array $MidocoBillingVatCalculation = [];
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[]
     */
    protected array $MidocoBillingPosition = [];
    /**
     * The MidocoBillingOnlinePayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingOnlinePayment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $MidocoBillingOnlinePayment = null;
    /**
     * The MidocoBillingAdvisedPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingAdvisedPayment
     * @var \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $MidocoBillingAdvisedPayment = null;
    /**
     * The MidocoOrderBilling
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderBilling
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling[]
     */
    protected array $MidocoOrderBilling = [];
    /**
     * The MidocoBillingPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPrint
     * @var \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[]
     */
    protected array $MidocoBillingPrint = [];
    /**
     * The MidocoEinvoiceDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoEinvoiceDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $MidocoEinvoiceDocument = null;
    /**
     * The MidocoBillingEinvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoBillingEinvoice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice $MidocoBillingEinvoice = null;
    /**
     * The MidocoCollectiveInvoiceSetting
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: crm:MidocoCollectiveInvoiceSetting
     * @var \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO $MidocoCollectiveInvoiceSetting = null;
    /**
     * The unitAlias
     * @var string|null
     */
    protected ?string $unitAlias = null;
    /**
     * The dbiStatus
     * @var int|null
     */
    protected ?int $dbiStatus = null;
    /**
     * The cancellationDocNo
     * @var int|null
     */
    protected ?int $cancellationDocNo = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The isDraft
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isDraft = null;
    /**
     * The bulkItemTypeSetting
     * @var string|null
     */
    protected ?string $bulkItemTypeSetting = null;
    /**
     * The bulkCostCentreSetting
     * @var string|null
     */
    protected ?string $bulkCostCentreSetting = null;
    /**
     * The bulkUserSplitSetting
     * @var string|null
     */
    protected ?string $bulkUserSplitSetting = null;
    /**
     * The bulkDepartureDateSetting
     * @var string|null
     */
    protected ?string $bulkDepartureDateSetting = null;
    /**
     * Constructor method for MidocoBillingDocumentType
     * @uses MidocoBillingDocumentType::setMidocoBillingRemark()
     * @uses MidocoBillingDocumentType::setMidocoBillingAttribute()
     * @uses MidocoBillingDocumentType::setMidocoBillingVatCalculation()
     * @uses MidocoBillingDocumentType::setMidocoBillingPosition()
     * @uses MidocoBillingDocumentType::setMidocoBillingOnlinePayment()
     * @uses MidocoBillingDocumentType::setMidocoBillingAdvisedPayment()
     * @uses MidocoBillingDocumentType::setMidocoOrderBilling()
     * @uses MidocoBillingDocumentType::setMidocoBillingPrint()
     * @uses MidocoBillingDocumentType::setMidocoEinvoiceDocument()
     * @uses MidocoBillingDocumentType::setMidocoBillingEinvoice()
     * @uses MidocoBillingDocumentType::setMidocoCollectiveInvoiceSetting()
     * @uses MidocoBillingDocumentType::setUnitAlias()
     * @uses MidocoBillingDocumentType::setDbiStatus()
     * @uses MidocoBillingDocumentType::setCancellationDocNo()
     * @uses MidocoBillingDocumentType::setConfirmationGroup()
     * @uses MidocoBillingDocumentType::setStoreUntil()
     * @uses MidocoBillingDocumentType::setIsDraft()
     * @uses MidocoBillingDocumentType::setBulkItemTypeSetting()
     * @uses MidocoBillingDocumentType::setBulkCostCentreSetting()
     * @uses MidocoBillingDocumentType::setBulkUserSplitSetting()
     * @uses MidocoBillingDocumentType::setBulkDepartureDateSetting()
     * @param \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO[] $midocoBillingRemark
     * @param \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO $midocoBillingAttribute
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[] $midocoBillingVatCalculation
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     * @param \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling[] $midocoOrderBilling
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[] $midocoBillingPrint
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice $midocoBillingEinvoice
     * @param \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting
     * @param string $unitAlias
     * @param int $dbiStatus
     * @param int $cancellationDocNo
     * @param string $confirmationGroup
     * @param string $storeUntil
     * @param bool $isDraft
     * @param string $bulkItemTypeSetting
     * @param string $bulkCostCentreSetting
     * @param string $bulkUserSplitSetting
     * @param string $bulkDepartureDateSetting
     */
    public function __construct(array $midocoBillingRemark = [], ?\Pggns\MidocoApi\Order\StructType\BillingAttributeDTO $midocoBillingAttribute = null, array $midocoBillingVatCalculation = [], array $midocoBillingPosition = [], ?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null, ?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment = null, array $midocoOrderBilling = [], array $midocoBillingPrint = [], ?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument = null, ?\Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice $midocoBillingEinvoice = null, ?\Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting = null, ?string $unitAlias = null, ?int $dbiStatus = null, ?int $cancellationDocNo = null, ?string $confirmationGroup = null, ?string $storeUntil = null, ?bool $isDraft = false, ?string $bulkItemTypeSetting = null, ?string $bulkCostCentreSetting = null, ?string $bulkUserSplitSetting = null, ?string $bulkDepartureDateSetting = null)
    {
        $this
            ->setMidocoBillingRemark($midocoBillingRemark)
            ->setMidocoBillingAttribute($midocoBillingAttribute)
            ->setMidocoBillingVatCalculation($midocoBillingVatCalculation)
            ->setMidocoBillingPosition($midocoBillingPosition)
            ->setMidocoBillingOnlinePayment($midocoBillingOnlinePayment)
            ->setMidocoBillingAdvisedPayment($midocoBillingAdvisedPayment)
            ->setMidocoOrderBilling($midocoOrderBilling)
            ->setMidocoBillingPrint($midocoBillingPrint)
            ->setMidocoEinvoiceDocument($midocoEinvoiceDocument)
            ->setMidocoBillingEinvoice($midocoBillingEinvoice)
            ->setMidocoCollectiveInvoiceSetting($midocoCollectiveInvoiceSetting)
            ->setUnitAlias($unitAlias)
            ->setDbiStatus($dbiStatus)
            ->setCancellationDocNo($cancellationDocNo)
            ->setConfirmationGroup($confirmationGroup)
            ->setStoreUntil($storeUntil)
            ->setIsDraft($isDraft)
            ->setBulkItemTypeSetting($bulkItemTypeSetting)
            ->setBulkCostCentreSetting($bulkCostCentreSetting)
            ->setBulkUserSplitSetting($bulkUserSplitSetting)
            ->setBulkDepartureDateSetting($bulkDepartureDateSetting);
    }
    /**
     * Get MidocoBillingRemark value
     * @return \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO[]
     */
    public function getMidocoBillingRemark(): array
    {
        return $this->MidocoBillingRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingRemarkForArrayConstraintsFromSetMidocoBillingRemark(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingRemarkItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingRemarkItem instanceof \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingRemarkItem) ? get_class($midocoBillingDocumentTypeMidocoBillingRemarkItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingRemarkItem), var_export($midocoBillingDocumentTypeMidocoBillingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO[] $midocoBillingRemark
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingRemark(array $midocoBillingRemark = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingRemarkArrayErrorMessage = self::validateMidocoBillingRemarkForArrayConstraintsFromSetMidocoBillingRemark($midocoBillingRemark))) {
            throw new InvalidArgumentException($midocoBillingRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingRemark = $midocoBillingRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingRemark(\Pggns\MidocoApi\Order\StructType\BillingRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO|null
     */
    public function getMidocoBillingAttribute(): ?\Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
    {
        return $this->MidocoBillingAttribute;
    }
    /**
     * Set MidocoBillingAttribute value
     * @param \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO $midocoBillingAttribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingAttribute(?\Pggns\MidocoApi\Order\StructType\BillingAttributeDTO $midocoBillingAttribute = null): self
    {
        $this->MidocoBillingAttribute = $midocoBillingAttribute;
        
        return $this;
    }
    /**
     * Get MidocoBillingVatCalculation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[]
     */
    public function getMidocoBillingVatCalculation(): array
    {
        return $this->MidocoBillingVatCalculation;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingVatCalculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingVatCalculation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingVatCalculationForArrayConstraintsFromSetMidocoBillingVatCalculation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingVatCalculationItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingVatCalculationItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingVatCalculationItem) ? get_class($midocoBillingDocumentTypeMidocoBillingVatCalculationItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingVatCalculationItem), var_export($midocoBillingDocumentTypeMidocoBillingVatCalculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingVatCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation[] $midocoBillingVatCalculation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingVatCalculation(array $midocoBillingVatCalculation = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingVatCalculationArrayErrorMessage = self::validateMidocoBillingVatCalculationForArrayConstraintsFromSetMidocoBillingVatCalculation($midocoBillingVatCalculation))) {
            throw new InvalidArgumentException($midocoBillingVatCalculationArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingVatCalculation = $midocoBillingVatCalculation;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingVatCalculation(\Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingVatCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingVatCalculation[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[]
     */
    public function getMidocoBillingPosition(): array
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionForArrayConstraintsFromSetMidocoBillingPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingPositionItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingPositionItem) ? get_class($midocoBillingDocumentTypeMidocoBillingPositionItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingPositionItem), var_export($midocoBillingDocumentTypeMidocoBillingPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingPosition(array $midocoBillingPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionArrayErrorMessage = self::validateMidocoBillingPositionForArrayConstraintsFromSetMidocoBillingPosition($midocoBillingPosition))) {
            throw new InvalidArgumentException($midocoBillingPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingPosition(\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingOnlinePayment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment|null
     */
    public function getMidocoBillingOnlinePayment(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment
    {
        return $this->MidocoBillingOnlinePayment;
    }
    /**
     * Set MidocoBillingOnlinePayment value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingOnlinePayment(?\Pggns\MidocoApi\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null): self
    {
        $this->MidocoBillingOnlinePayment = $midocoBillingOnlinePayment;
        
        return $this;
    }
    /**
     * Get MidocoBillingAdvisedPayment value
     * @return \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO|null
     */
    public function getMidocoBillingAdvisedPayment(): ?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO
    {
        return $this->MidocoBillingAdvisedPayment;
    }
    /**
     * Set MidocoBillingAdvisedPayment value
     * @param \Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingAdvisedPayment(?\Pggns\MidocoApi\Order\StructType\BillingAdvisedPaymentDTO $midocoBillingAdvisedPayment = null): self
    {
        $this->MidocoBillingAdvisedPayment = $midocoBillingAdvisedPayment;
        
        return $this;
    }
    /**
     * Get MidocoOrderBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling[]
     */
    public function getMidocoOrderBilling(): array
    {
        return $this->MidocoOrderBilling;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderBilling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderBilling method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderBillingForArrayConstraintsFromSetMidocoOrderBilling(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoOrderBillingItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoOrderBillingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoOrderBillingItem) ? get_class($midocoBillingDocumentTypeMidocoOrderBillingItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoOrderBillingItem), var_export($midocoBillingDocumentTypeMidocoOrderBillingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling[] $midocoOrderBilling
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoOrderBilling(array $midocoOrderBilling = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderBillingArrayErrorMessage = self::validateMidocoOrderBillingForArrayConstraintsFromSetMidocoOrderBilling($midocoOrderBilling))) {
            throw new InvalidArgumentException($midocoOrderBillingArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderBilling = $midocoOrderBilling;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoOrderBilling(\Pggns\MidocoApi\Order\StructType\MidocoOrderBilling $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderBilling[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingPrint value
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[]
     */
    public function getMidocoBillingPrint(): array
    {
        return $this->MidocoBillingPrint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPrint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPrintForArrayConstraintsFromSetMidocoBillingPrint(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingDocumentTypeMidocoBillingPrintItem) {
            // validation for constraint: itemType
            if (!$midocoBillingDocumentTypeMidocoBillingPrintItem instanceof \Pggns\MidocoApi\Order\StructType\BillingPrintDTO) {
                $invalidValues[] = is_object($midocoBillingDocumentTypeMidocoBillingPrintItem) ? get_class($midocoBillingDocumentTypeMidocoBillingPrintItem) : sprintf('%s(%s)', gettype($midocoBillingDocumentTypeMidocoBillingPrintItem), var_export($midocoBillingDocumentTypeMidocoBillingPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[] $midocoBillingPrint
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingPrint(array $midocoBillingPrint = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPrintArrayErrorMessage = self::validateMidocoBillingPrintForArrayConstraintsFromSetMidocoBillingPrint($midocoBillingPrint))) {
            throw new InvalidArgumentException($midocoBillingPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPrint = $midocoBillingPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function addToMidocoBillingPrint(\Pggns\MidocoApi\Order\StructType\BillingPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BillingPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPrint[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoEinvoiceDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument|null
     */
    public function getMidocoEinvoiceDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument
    {
        return $this->MidocoEinvoiceDocument;
    }
    /**
     * Set MidocoEinvoiceDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoEinvoiceDocument(?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument = null): self
    {
        $this->MidocoEinvoiceDocument = $midocoEinvoiceDocument;
        
        return $this;
    }
    /**
     * Get MidocoBillingEinvoice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice|null
     */
    public function getMidocoBillingEinvoice(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice
    {
        return $this->MidocoBillingEinvoice;
    }
    /**
     * Set MidocoBillingEinvoice value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice $midocoBillingEinvoice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoBillingEinvoice(?\Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice $midocoBillingEinvoice = null): self
    {
        $this->MidocoBillingEinvoice = $midocoBillingEinvoice;
        
        return $this;
    }
    /**
     * Get MidocoCollectiveInvoiceSetting value
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO|null
     */
    public function getMidocoCollectiveInvoiceSetting(): ?\Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
    {
        return $this->MidocoCollectiveInvoiceSetting;
    }
    /**
     * Set MidocoCollectiveInvoiceSetting value
     * @param \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setMidocoCollectiveInvoiceSetting(?\Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting = null): self
    {
        $this->MidocoCollectiveInvoiceSetting = $midocoCollectiveInvoiceSetting;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
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
     * Get dbiStatus value
     * @return int|null
     */
    public function getDbiStatus(): ?int
    {
        return $this->dbiStatus;
    }
    /**
     * Set dbiStatus value
     * @param int $dbiStatus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setDbiStatus(?int $dbiStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($dbiStatus) && !(is_int($dbiStatus) || ctype_digit($dbiStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dbiStatus, true), gettype($dbiStatus)), __LINE__);
        }
        $this->dbiStatus = $dbiStatus;
        
        return $this;
    }
    /**
     * Get cancellationDocNo value
     * @return int|null
     */
    public function getCancellationDocNo(): ?int
    {
        return $this->cancellationDocNo;
    }
    /**
     * Set cancellationDocNo value
     * @param int $cancellationDocNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setCancellationDocNo(?int $cancellationDocNo = null): self
    {
        // validation for constraint: int
        if (!is_null($cancellationDocNo) && !(is_int($cancellationDocNo) || ctype_digit($cancellationDocNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cancellationDocNo, true), gettype($cancellationDocNo)), __LINE__);
        }
        $this->cancellationDocNo = $cancellationDocNo;
        
        return $this;
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
        return $this;
    }
    /**
     * Get storeUntil value
     * @return string|null
     */
    public function getStoreUntil(): ?string
    {
        return $this->storeUntil;
    }
    /**
     * Set storeUntil value
     * @param string $storeUntil
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setStoreUntil(?string $storeUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($storeUntil) && !is_string($storeUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeUntil, true), gettype($storeUntil)), __LINE__);
        }
        $this->storeUntil = $storeUntil;
        
        return $this;
    }
    /**
     * Get isDraft value
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }
    /**
     * Set isDraft value
     * @param bool $isDraft
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setIsDraft(?bool $isDraft = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isDraft) && !is_bool($isDraft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDraft, true), gettype($isDraft)), __LINE__);
        }
        $this->isDraft = $isDraft;
        
        return $this;
    }
    /**
     * Get bulkItemTypeSetting value
     * @return string|null
     */
    public function getBulkItemTypeSetting(): ?string
    {
        return $this->bulkItemTypeSetting;
    }
    /**
     * Set bulkItemTypeSetting value
     * @param string $bulkItemTypeSetting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setBulkItemTypeSetting(?string $bulkItemTypeSetting = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkItemTypeSetting) && !is_string($bulkItemTypeSetting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkItemTypeSetting, true), gettype($bulkItemTypeSetting)), __LINE__);
        }
        $this->bulkItemTypeSetting = $bulkItemTypeSetting;
        
        return $this;
    }
    /**
     * Get bulkCostCentreSetting value
     * @return string|null
     */
    public function getBulkCostCentreSetting(): ?string
    {
        return $this->bulkCostCentreSetting;
    }
    /**
     * Set bulkCostCentreSetting value
     * @param string $bulkCostCentreSetting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setBulkCostCentreSetting(?string $bulkCostCentreSetting = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkCostCentreSetting) && !is_string($bulkCostCentreSetting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkCostCentreSetting, true), gettype($bulkCostCentreSetting)), __LINE__);
        }
        $this->bulkCostCentreSetting = $bulkCostCentreSetting;
        
        return $this;
    }
    /**
     * Get bulkUserSplitSetting value
     * @return string|null
     */
    public function getBulkUserSplitSetting(): ?string
    {
        return $this->bulkUserSplitSetting;
    }
    /**
     * Set bulkUserSplitSetting value
     * @param string $bulkUserSplitSetting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setBulkUserSplitSetting(?string $bulkUserSplitSetting = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkUserSplitSetting) && !is_string($bulkUserSplitSetting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkUserSplitSetting, true), gettype($bulkUserSplitSetting)), __LINE__);
        }
        $this->bulkUserSplitSetting = $bulkUserSplitSetting;
        
        return $this;
    }
    /**
     * Get bulkDepartureDateSetting value
     * @return string|null
     */
    public function getBulkDepartureDateSetting(): ?string
    {
        return $this->bulkDepartureDateSetting;
    }
    /**
     * Set bulkDepartureDateSetting value
     * @param string $bulkDepartureDateSetting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocumentType
     */
    public function setBulkDepartureDateSetting(?string $bulkDepartureDateSetting = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkDepartureDateSetting) && !is_string($bulkDepartureDateSetting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkDepartureDateSetting, true), gettype($bulkDepartureDateSetting)), __LINE__);
        }
        $this->bulkDepartureDateSetting = $bulkDepartureDateSetting;
        
        return $this;
    }
}
