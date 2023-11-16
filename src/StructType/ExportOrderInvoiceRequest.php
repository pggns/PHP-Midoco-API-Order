<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportOrderInvoiceRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: prepared payment for BillingDocument
 * @subpackage Structs
 */
class ExportOrderInvoiceRequest extends AbstractStructBase
{
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
     * The useNewTransaction
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $useNewTransaction = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * Constructor method for ExportOrderInvoiceRequest
     * @uses ExportOrderInvoiceRequest::setMidocoSellPassenger()
     * @uses ExportOrderInvoiceRequest::setMidocoOnlinePaymentHelper()
     * @uses ExportOrderInvoiceRequest::setOrderId()
     * @uses ExportOrderInvoiceRequest::setOrderNo()
     * @uses ExportOrderInvoiceRequest::setIsPreview()
     * @uses ExportOrderInvoiceRequest::setPrintMedia()
     * @uses ExportOrderInvoiceRequest::setUseNewTransaction()
     * @uses ExportOrderInvoiceRequest::setConfirmationGroup()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper
     * @param int $orderId
     * @param int $orderNo
     * @param bool $isPreview
     * @param string $printMedia
     * @param bool $useNewTransaction
     * @param string $confirmationGroup
     */
    public function __construct(array $midocoSellPassenger = [], ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper = null, ?int $orderId = null, ?int $orderNo = null, ?bool $isPreview = false, ?string $printMedia = 'P', ?bool $useNewTransaction = true, ?string $confirmationGroup = null)
    {
        $this
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setMidocoOnlinePaymentHelper($midocoOnlinePaymentHelper)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setIsPreview($isPreview)
            ->setPrintMedia($printMedia)
            ->setUseNewTransaction($useNewTransaction)
            ->setConfirmationGroup($confirmationGroup);
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
        foreach ($values as $exportOrderInvoiceRequestMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$exportOrderInvoiceRequestMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($exportOrderInvoiceRequestMidocoSellPassengerItem) ? get_class($exportOrderInvoiceRequestMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($exportOrderInvoiceRequestMidocoSellPassengerItem), var_export($exportOrderInvoiceRequestMidocoSellPassengerItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
     */
    public function setMidocoOnlinePaymentHelper(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper $midocoOnlinePaymentHelper = null): self
    {
        $this->MidocoOnlinePaymentHelper = $midocoOnlinePaymentHelper;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
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
     * Get useNewTransaction value
     * @return bool|null
     */
    public function getUseNewTransaction(): ?bool
    {
        return $this->useNewTransaction;
    }
    /**
     * Set useNewTransaction value
     * @param bool $useNewTransaction
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
     */
    public function setUseNewTransaction(?bool $useNewTransaction = true): self
    {
        // validation for constraint: boolean
        if (!is_null($useNewTransaction) && !is_bool($useNewTransaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useNewTransaction, true), gettype($useNewTransaction)), __LINE__);
        }
        $this->useNewTransaction = $useNewTransaction;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest
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
