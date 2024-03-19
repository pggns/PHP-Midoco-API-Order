<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForOrderRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: prepared Recipient for BillingDocument | prepared payment for BillingDocument | prepared BillingPositions to create a BillingDocument
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeBillingDocumentForOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * The MidocoDetailedBillingPositionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDetailedBillingPositionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[]
     */
    protected ?array $MidocoDetailedBillingPositionInfo = null;
    /**
     * The MidocoOnlinePaymentHelper
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentHelper
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $MidocoOnlinePaymentHelper = null;
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: crm:MidocoCustomerInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo $MidocoCustomerInfo = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The documentInternalVersion
     * @var int|null
     */
    protected ?int $documentInternalVersion = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The createNewDocument
     * @var bool|null
     */
    protected ?bool $createNewDocument = null;
    /**
     * The deleteExistingDocument
     * @var bool|null
     */
    protected ?bool $deleteExistingDocument = null;
    /**
     * The addToBulkMatchingCCSeetings
     * @var bool|null
     */
    protected ?bool $addToBulkMatchingCCSeetings = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The orderInternalVersion
     * @var int|null
     */
    protected ?int $orderInternalVersion = null;
    /**
     * The calculatedPrintDate
     * @var string|null
     */
    protected ?string $calculatedPrintDate = null;
    /**
     * The partialPayment
     * @var bool|null
     */
    protected ?bool $partialPayment = null;
    /**
     * The partialAmount
     * @var float|null
     */
    protected ?float $partialAmount = null;
    /**
     * The preferredType
     * @var string|null
     */
    protected ?string $preferredType = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The documentType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The collectiveInvoice
     * @var bool|null
     */
    protected ?bool $collectiveInvoice = null;
    /**
     * The printGroupName
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $printGroupName = null;
    /**
     * The printAllTravellersNames
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $printAllTravellersNames = null;
    /**
     * The createITInvoice
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $createITInvoice = null;
    /**
     * The createNormalInvoice
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $createNormalInvoice = null;
    /**
     * The isGdsAutoPrint
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isGdsAutoPrint = null;
    /**
     * Constructor method for MakeBillingDocumentForOrderRequest
     * @uses MakeBillingDocumentForOrderRequest::setMidocoSellPassenger()
     * @uses MakeBillingDocumentForOrderRequest::setMidocoDetailedBillingPositionInfo()
     * @uses MakeBillingDocumentForOrderRequest::setMidocoOnlinePaymentHelper()
     * @uses MakeBillingDocumentForOrderRequest::setMidocoCustomerInfo()
     * @uses MakeBillingDocumentForOrderRequest::setConfirmationGroup()
     * @uses MakeBillingDocumentForOrderRequest::setDocumentInternalVersion()
     * @uses MakeBillingDocumentForOrderRequest::setDocumentId()
     * @uses MakeBillingDocumentForOrderRequest::setCreateNewDocument()
     * @uses MakeBillingDocumentForOrderRequest::setDeleteExistingDocument()
     * @uses MakeBillingDocumentForOrderRequest::setAddToBulkMatchingCCSeetings()
     * @uses MakeBillingDocumentForOrderRequest::setOrderId()
     * @uses MakeBillingDocumentForOrderRequest::setCashBookId()
     * @uses MakeBillingDocumentForOrderRequest::setOrderInternalVersion()
     * @uses MakeBillingDocumentForOrderRequest::setCalculatedPrintDate()
     * @uses MakeBillingDocumentForOrderRequest::setPartialPayment()
     * @uses MakeBillingDocumentForOrderRequest::setPartialAmount()
     * @uses MakeBillingDocumentForOrderRequest::setPreferredType()
     * @uses MakeBillingDocumentForOrderRequest::setPaymentType()
     * @uses MakeBillingDocumentForOrderRequest::setDocumentType()
     * @uses MakeBillingDocumentForOrderRequest::setCollectiveInvoice()
     * @uses MakeBillingDocumentForOrderRequest::setPrintGroupName()
     * @uses MakeBillingDocumentForOrderRequest::setPrintAllTravellersNames()
     * @uses MakeBillingDocumentForOrderRequest::setCreateITInvoice()
     * @uses MakeBillingDocumentForOrderRequest::setCreateNormalInvoice()
     * @uses MakeBillingDocumentForOrderRequest::setIsGdsAutoPrint()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[] $midocoDetailedBillingPositionInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @param string $confirmationGroup
     * @param int $documentInternalVersion
     * @param int $documentId
     * @param bool $createNewDocument
     * @param bool $deleteExistingDocument
     * @param bool $addToBulkMatchingCCSeetings
     * @param int $orderId
     * @param int $cashBookId
     * @param int $orderInternalVersion
     * @param string $calculatedPrintDate
     * @param bool $partialPayment
     * @param float $partialAmount
     * @param string $preferredType
     * @param string $paymentType
     * @param string $documentType
     * @param bool $collectiveInvoice
     * @param bool $printGroupName
     * @param bool $printAllTravellersNames
     * @param bool $createITInvoice
     * @param bool $createNormalInvoice
     * @param bool $isGdsAutoPrint
     */
    public function __construct(?array $midocoSellPassenger = null, ?array $midocoDetailedBillingPositionInfo = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper = null, ?\Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo $midocoCustomerInfo = null, ?string $confirmationGroup = null, ?int $documentInternalVersion = null, ?int $documentId = null, ?bool $createNewDocument = null, ?bool $deleteExistingDocument = null, ?bool $addToBulkMatchingCCSeetings = null, ?int $orderId = null, ?int $cashBookId = null, ?int $orderInternalVersion = null, ?string $calculatedPrintDate = null, ?bool $partialPayment = null, ?float $partialAmount = null, ?string $preferredType = null, ?string $paymentType = null, ?string $documentType = null, ?bool $collectiveInvoice = null, ?bool $printGroupName = false, ?bool $printAllTravellersNames = false, ?bool $createITInvoice = false, ?bool $createNormalInvoice = false, ?bool $isGdsAutoPrint = false)
    {
        $this
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setMidocoDetailedBillingPositionInfo($midocoDetailedBillingPositionInfo)
            ->setMidocoOnlinePaymentHelper($midocoOnlinePaymentHelper)
            ->setMidocoCustomerInfo($midocoCustomerInfo)
            ->setConfirmationGroup($confirmationGroup)
            ->setDocumentInternalVersion($documentInternalVersion)
            ->setDocumentId($documentId)
            ->setCreateNewDocument($createNewDocument)
            ->setDeleteExistingDocument($deleteExistingDocument)
            ->setAddToBulkMatchingCCSeetings($addToBulkMatchingCCSeetings)
            ->setOrderId($orderId)
            ->setCashBookId($cashBookId)
            ->setOrderInternalVersion($orderInternalVersion)
            ->setCalculatedPrintDate($calculatedPrintDate)
            ->setPartialPayment($partialPayment)
            ->setPartialAmount($partialAmount)
            ->setPreferredType($preferredType)
            ->setPaymentType($paymentType)
            ->setDocumentType($documentType)
            ->setCollectiveInvoice($collectiveInvoice)
            ->setPrintGroupName($printGroupName)
            ->setPrintAllTravellersNames($printAllTravellersNames)
            ->setCreateITInvoice($createITInvoice)
            ->setCreateNormalInvoice($createNormalInvoice)
            ->setIsGdsAutoPrint($isGdsAutoPrint);
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeBillingDocumentForOrderRequestMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$makeBillingDocumentForOrderRequestMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($makeBillingDocumentForOrderRequestMidocoSellPassengerItem) ? get_class($makeBillingDocumentForOrderRequestMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($makeBillingDocumentForOrderRequestMidocoSellPassengerItem), var_export($makeBillingDocumentForOrderRequestMidocoSellPassengerItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
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
     * Get MidocoDetailedBillingPositionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[]
     */
    public function getMidocoDetailedBillingPositionInfo(): ?array
    {
        return $this->MidocoDetailedBillingPositionInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDetailedBillingPositionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDetailedBillingPositionInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDetailedBillingPositionInfoForArrayConstraintFromSetMidocoDetailedBillingPositionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeBillingDocumentForOrderRequestMidocoDetailedBillingPositionInfoItem) {
            // validation for constraint: itemType
            if (!$makeBillingDocumentForOrderRequestMidocoDetailedBillingPositionInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo) {
                $invalidValues[] = is_object($makeBillingDocumentForOrderRequestMidocoDetailedBillingPositionInfoItem) ? get_class($makeBillingDocumentForOrderRequestMidocoDetailedBillingPositionInfoItem) : sprintf('%s(%s)', gettype($makeBillingDocumentForOrderRequestMidocoDetailedBillingPositionInfoItem), var_export($makeBillingDocumentForOrderRequestMidocoDetailedBillingPositionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDetailedBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDetailedBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[] $midocoDetailedBillingPositionInfo
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setMidocoDetailedBillingPositionInfo(?array $midocoDetailedBillingPositionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDetailedBillingPositionInfoArrayErrorMessage = self::validateMidocoDetailedBillingPositionInfoForArrayConstraintFromSetMidocoDetailedBillingPositionInfo($midocoDetailedBillingPositionInfo))) {
            throw new InvalidArgumentException($midocoDetailedBillingPositionInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoDetailedBillingPositionInfo = $midocoDetailedBillingPositionInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoDetailedBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function addToMidocoDetailedBillingPositionInfo(\Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoDetailedBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDetailedBillingPositionInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentHelper value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper|null
     */
    public function getMidocoOnlinePaymentHelper(): ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper
    {
        return $this->MidocoOnlinePaymentHelper;
    }
    /**
     * Set MidocoOnlinePaymentHelper value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setMidocoOnlinePaymentHelper(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper = null): self
    {
        $this->MidocoOnlinePaymentHelper = $midocoOnlinePaymentHelper;
        
        return $this;
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo|null
     */
    public function getMidocoCustomerInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * Set MidocoCustomerInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setMidocoCustomerInfo(?\Pggns\MidocoApi\Order\StructType\MidocoCustomerInfo $midocoCustomerInfo = null): self
    {
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
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
     * Get documentInternalVersion value
     * @return int|null
     */
    public function getDocumentInternalVersion(): ?int
    {
        return $this->documentInternalVersion;
    }
    /**
     * Set documentInternalVersion value
     * @param int $documentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setDocumentInternalVersion(?int $documentInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($documentInternalVersion) && !(is_int($documentInternalVersion) || ctype_digit($documentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentInternalVersion, true), gettype($documentInternalVersion)), __LINE__);
        }
        $this->documentInternalVersion = $documentInternalVersion;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get createNewDocument value
     * @return bool|null
     */
    public function getCreateNewDocument(): ?bool
    {
        return $this->createNewDocument;
    }
    /**
     * Set createNewDocument value
     * @param bool $createNewDocument
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setCreateNewDocument(?bool $createNewDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createNewDocument) && !is_bool($createNewDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createNewDocument, true), gettype($createNewDocument)), __LINE__);
        }
        $this->createNewDocument = $createNewDocument;
        
        return $this;
    }
    /**
     * Get deleteExistingDocument value
     * @return bool|null
     */
    public function getDeleteExistingDocument(): ?bool
    {
        return $this->deleteExistingDocument;
    }
    /**
     * Set deleteExistingDocument value
     * @param bool $deleteExistingDocument
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setDeleteExistingDocument(?bool $deleteExistingDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteExistingDocument) && !is_bool($deleteExistingDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteExistingDocument, true), gettype($deleteExistingDocument)), __LINE__);
        }
        $this->deleteExistingDocument = $deleteExistingDocument;
        
        return $this;
    }
    /**
     * Get addToBulkMatchingCCSeetings value
     * @return bool|null
     */
    public function getAddToBulkMatchingCCSeetings(): ?bool
    {
        return $this->addToBulkMatchingCCSeetings;
    }
    /**
     * Set addToBulkMatchingCCSeetings value
     * @param bool $addToBulkMatchingCCSeetings
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setAddToBulkMatchingCCSeetings(?bool $addToBulkMatchingCCSeetings = null): self
    {
        // validation for constraint: boolean
        if (!is_null($addToBulkMatchingCCSeetings) && !is_bool($addToBulkMatchingCCSeetings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addToBulkMatchingCCSeetings, true), gettype($addToBulkMatchingCCSeetings)), __LINE__);
        }
        $this->addToBulkMatchingCCSeetings = $addToBulkMatchingCCSeetings;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
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
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get orderInternalVersion value
     * @return int|null
     */
    public function getOrderInternalVersion(): ?int
    {
        return $this->orderInternalVersion;
    }
    /**
     * Set orderInternalVersion value
     * @param int $orderInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setOrderInternalVersion(?int $orderInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($orderInternalVersion) && !(is_int($orderInternalVersion) || ctype_digit($orderInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderInternalVersion, true), gettype($orderInternalVersion)), __LINE__);
        }
        $this->orderInternalVersion = $orderInternalVersion;
        
        return $this;
    }
    /**
     * Get calculatedPrintDate value
     * @return string|null
     */
    public function getCalculatedPrintDate(): ?string
    {
        return $this->calculatedPrintDate;
    }
    /**
     * Set calculatedPrintDate value
     * @param string $calculatedPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setCalculatedPrintDate(?string $calculatedPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($calculatedPrintDate) && !is_string($calculatedPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedPrintDate, true), gettype($calculatedPrintDate)), __LINE__);
        }
        $this->calculatedPrintDate = $calculatedPrintDate;
        
        return $this;
    }
    /**
     * Get partialPayment value
     * @return bool|null
     */
    public function getPartialPayment(): ?bool
    {
        return $this->partialPayment;
    }
    /**
     * Set partialPayment value
     * @param bool $partialPayment
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setPartialPayment(?bool $partialPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partialPayment) && !is_bool($partialPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partialPayment, true), gettype($partialPayment)), __LINE__);
        }
        $this->partialPayment = $partialPayment;
        
        return $this;
    }
    /**
     * Get partialAmount value
     * @return float|null
     */
    public function getPartialAmount(): ?float
    {
        return $this->partialAmount;
    }
    /**
     * Set partialAmount value
     * @param float $partialAmount
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setPartialAmount(?float $partialAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($partialAmount) && !(is_float($partialAmount) || is_numeric($partialAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($partialAmount, true), gettype($partialAmount)), __LINE__);
        }
        $this->partialAmount = $partialAmount;
        
        return $this;
    }
    /**
     * Get preferredType value
     * @return string|null
     */
    public function getPreferredType(): ?string
    {
        return $this->preferredType;
    }
    /**
     * Set preferredType value
     * @param string $preferredType
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setPreferredType(?string $preferredType = null): self
    {
        // validation for constraint: string
        if (!is_null($preferredType) && !is_string($preferredType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredType, true), gettype($preferredType)), __LINE__);
        }
        $this->preferredType = $preferredType;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get collectiveInvoice value
     * @return bool|null
     */
    public function getCollectiveInvoice(): ?bool
    {
        return $this->collectiveInvoice;
    }
    /**
     * Set collectiveInvoice value
     * @param bool $collectiveInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setCollectiveInvoice(?bool $collectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoice) && !is_bool($collectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoice, true), gettype($collectiveInvoice)), __LINE__);
        }
        $this->collectiveInvoice = $collectiveInvoice;
        
        return $this;
    }
    /**
     * Get printGroupName value
     * @return bool|null
     */
    public function getPrintGroupName(): ?bool
    {
        return $this->printGroupName;
    }
    /**
     * Set printGroupName value
     * @param bool $printGroupName
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setPrintGroupName(?bool $printGroupName = false): self
    {
        // validation for constraint: boolean
        if (!is_null($printGroupName) && !is_bool($printGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printGroupName, true), gettype($printGroupName)), __LINE__);
        }
        $this->printGroupName = $printGroupName;
        
        return $this;
    }
    /**
     * Get printAllTravellersNames value
     * @return bool|null
     */
    public function getPrintAllTravellersNames(): ?bool
    {
        return $this->printAllTravellersNames;
    }
    /**
     * Set printAllTravellersNames value
     * @param bool $printAllTravellersNames
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setPrintAllTravellersNames(?bool $printAllTravellersNames = false): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllTravellersNames) && !is_bool($printAllTravellersNames)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllTravellersNames, true), gettype($printAllTravellersNames)), __LINE__);
        }
        $this->printAllTravellersNames = $printAllTravellersNames;
        
        return $this;
    }
    /**
     * Get createITInvoice value
     * @return bool|null
     */
    public function getCreateITInvoice(): ?bool
    {
        return $this->createITInvoice;
    }
    /**
     * Set createITInvoice value
     * @param bool $createITInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setCreateITInvoice(?bool $createITInvoice = false): self
    {
        // validation for constraint: boolean
        if (!is_null($createITInvoice) && !is_bool($createITInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createITInvoice, true), gettype($createITInvoice)), __LINE__);
        }
        $this->createITInvoice = $createITInvoice;
        
        return $this;
    }
    /**
     * Get createNormalInvoice value
     * @return bool|null
     */
    public function getCreateNormalInvoice(): ?bool
    {
        return $this->createNormalInvoice;
    }
    /**
     * Set createNormalInvoice value
     * @param bool $createNormalInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setCreateNormalInvoice(?bool $createNormalInvoice = false): self
    {
        // validation for constraint: boolean
        if (!is_null($createNormalInvoice) && !is_bool($createNormalInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createNormalInvoice, true), gettype($createNormalInvoice)), __LINE__);
        }
        $this->createNormalInvoice = $createNormalInvoice;
        
        return $this;
    }
    /**
     * Get isGdsAutoPrint value
     * @return bool|null
     */
    public function getIsGdsAutoPrint(): ?bool
    {
        return $this->isGdsAutoPrint;
    }
    /**
     * Set isGdsAutoPrint value
     * @param bool $isGdsAutoPrint
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest
     */
    public function setIsGdsAutoPrint(?bool $isGdsAutoPrint = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isGdsAutoPrint) && !is_bool($isGdsAutoPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGdsAutoPrint, true), gettype($isGdsAutoPrint)), __LINE__);
        }
        $this->isGdsAutoPrint = $isGdsAutoPrint;
        
        return $this;
    }
}
