<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintOrderInvoiceRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: prepared payment for BillingDocument
 * @subpackage Structs
 */
class PrintOrderInvoiceRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
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
     * The MidocoOnlinePaymentHelper
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentHelper
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $MidocoOnlinePaymentHelper = null;
    /**
     * The isPreview
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The printMedia
     * Meta information extracted from the WSDL
     * - default: P
     * @var string|null
     */
    protected ?string $printMedia = null;
    /**
     * The saveToTempTable
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $saveToTempTable = null;
    /**
     * The sendAsEMail
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $sendAsEMail = null;
    /**
     * The calculatedPrintDate
     * @var string|null
     */
    protected ?string $calculatedPrintDate = null;
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The collectivePrint
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $collectivePrint = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * Constructor method for PrintOrderInvoiceRequest
     * @uses PrintOrderInvoiceRequest::setOrderId()
     * @uses PrintOrderInvoiceRequest::setMidocoSellPassenger()
     * @uses PrintOrderInvoiceRequest::setMidocoOnlinePaymentHelper()
     * @uses PrintOrderInvoiceRequest::setIsPreview()
     * @uses PrintOrderInvoiceRequest::setPrintMedia()
     * @uses PrintOrderInvoiceRequest::setSaveToTempTable()
     * @uses PrintOrderInvoiceRequest::setSendAsEMail()
     * @uses PrintOrderInvoiceRequest::setCalculatedPrintDate()
     * @uses PrintOrderInvoiceRequest::setQueueId()
     * @uses PrintOrderInvoiceRequest::setCollectivePrint()
     * @uses PrintOrderInvoiceRequest::setConfirmationGroup()
     * @param int $orderId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper
     * @param bool $isPreview
     * @param string $printMedia
     * @param bool $saveToTempTable
     * @param bool $sendAsEMail
     * @param string $calculatedPrintDate
     * @param int $queueId
     * @param bool $collectivePrint
     * @param string $confirmationGroup
     */
    public function __construct(int $orderId, array $midocoSellPassenger = [], ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper = null, ?bool $isPreview = false, ?string $printMedia = 'P', ?bool $saveToTempTable = false, ?bool $sendAsEMail = false, ?string $calculatedPrintDate = null, ?int $queueId = null, ?bool $collectivePrint = false, ?string $confirmationGroup = null)
    {
        $this
            ->setOrderId($orderId)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setMidocoOnlinePaymentHelper($midocoOnlinePaymentHelper)
            ->setIsPreview($isPreview)
            ->setPrintMedia($printMedia)
            ->setSaveToTempTable($saveToTempTable)
            ->setSendAsEMail($sendAsEMail)
            ->setCalculatedPrintDate($calculatedPrintDate)
            ->setQueueId($queueId)
            ->setCollectivePrint($collectivePrint)
            ->setConfirmationGroup($confirmationGroup);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
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
        foreach ($values as $printOrderInvoiceRequestMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$printOrderInvoiceRequestMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($printOrderInvoiceRequestMidocoSellPassengerItem) ? get_class($printOrderInvoiceRequestMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($printOrderInvoiceRequestMidocoSellPassengerItem), var_export($printOrderInvoiceRequestMidocoSellPassengerItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
     */
    public function setMidocoOnlinePaymentHelper(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper = null): self
    {
        $this->MidocoOnlinePaymentHelper = $midocoOnlinePaymentHelper;
        
        return $this;
    }
    /**
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
     */
    public function setIsPreview(?bool $isPreview = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get printMedia value
     * @return string|null
     */
    public function getPrintMedia(): ?string
    {
        return $this->printMedia;
    }
    /**
     * Set printMedia value
     * @param string $printMedia
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
     */
    public function setPrintMedia(?string $printMedia = 'P'): self
    {
        // validation for constraint: string
        if (!is_null($printMedia) && !is_string($printMedia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printMedia, true), gettype($printMedia)), __LINE__);
        }
        $this->printMedia = $printMedia;
        
        return $this;
    }
    /**
     * Get saveToTempTable value
     * @return bool|null
     */
    public function getSaveToTempTable(): ?bool
    {
        return $this->saveToTempTable;
    }
    /**
     * Set saveToTempTable value
     * @param bool $saveToTempTable
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
     */
    public function setSaveToTempTable(?bool $saveToTempTable = false): self
    {
        // validation for constraint: boolean
        if (!is_null($saveToTempTable) && !is_bool($saveToTempTable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveToTempTable, true), gettype($saveToTempTable)), __LINE__);
        }
        $this->saveToTempTable = $saveToTempTable;
        
        return $this;
    }
    /**
     * Get sendAsEMail value
     * @return bool|null
     */
    public function getSendAsEMail(): ?bool
    {
        return $this->sendAsEMail;
    }
    /**
     * Set sendAsEMail value
     * @param bool $sendAsEMail
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
     */
    public function setSendAsEMail(?bool $sendAsEMail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($sendAsEMail) && !is_bool($sendAsEMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendAsEMail, true), gettype($sendAsEMail)), __LINE__);
        }
        $this->sendAsEMail = $sendAsEMail;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
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
     * Get queueId value
     * @return int|null
     */
    public function getQueueId(): ?int
    {
        return $this->queueId;
    }
    /**
     * Set queueId value
     * @param int $queueId
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
     */
    public function setQueueId(?int $queueId = null): self
    {
        // validation for constraint: int
        if (!is_null($queueId) && !(is_int($queueId) || ctype_digit($queueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueId, true), gettype($queueId)), __LINE__);
        }
        $this->queueId = $queueId;
        
        return $this;
    }
    /**
     * Get collectivePrint value
     * @return bool|null
     */
    public function getCollectivePrint(): ?bool
    {
        return $this->collectivePrint;
    }
    /**
     * Set collectivePrint value
     * @param bool $collectivePrint
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
     */
    public function setCollectivePrint(?bool $collectivePrint = false): self
    {
        // validation for constraint: boolean
        if (!is_null($collectivePrint) && !is_bool($collectivePrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectivePrint, true), gettype($collectivePrint)), __LINE__);
        }
        $this->collectivePrint = $collectivePrint;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest
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
}
