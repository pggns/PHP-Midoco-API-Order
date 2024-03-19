<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExtendedOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExtendedOrderRequest extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The includeMidocoMandate
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $includeMidocoMandate = null;
    /**
     * The includeOrderAttributes
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $includeOrderAttributes = null;
    /**
     * The includeOrderInvoices
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $includeOrderInvoices = null;
    /**
     * The includeOrderMargin
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $includeOrderMargin = null;
    /**
     * The includeOrderNotices
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $includeOrderNotices = null;
    /**
     * The includeSellItemAttributes
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $includeSellItemAttributes = null;
    /**
     * Constructor method for GetExtendedOrderRequest
     * @uses GetExtendedOrderRequest::setOrderNo()
     * @uses GetExtendedOrderRequest::setOrderId()
     * @uses GetExtendedOrderRequest::setIncludeMidocoMandate()
     * @uses GetExtendedOrderRequest::setIncludeOrderAttributes()
     * @uses GetExtendedOrderRequest::setIncludeOrderInvoices()
     * @uses GetExtendedOrderRequest::setIncludeOrderMargin()
     * @uses GetExtendedOrderRequest::setIncludeOrderNotices()
     * @uses GetExtendedOrderRequest::setIncludeSellItemAttributes()
     * @param int $orderNo
     * @param int $orderId
     * @param bool $includeMidocoMandate
     * @param bool $includeOrderAttributes
     * @param bool $includeOrderInvoices
     * @param bool $includeOrderMargin
     * @param bool $includeOrderNotices
     * @param bool $includeSellItemAttributes
     */
    public function __construct(?int $orderNo = null, ?int $orderId = null, ?bool $includeMidocoMandate = true, ?bool $includeOrderAttributes = true, ?bool $includeOrderInvoices = true, ?bool $includeOrderMargin = true, ?bool $includeOrderNotices = true, ?bool $includeSellItemAttributes = true)
    {
        $this
            ->setOrderNo($orderNo)
            ->setOrderId($orderId)
            ->setIncludeMidocoMandate($includeMidocoMandate)
            ->setIncludeOrderAttributes($includeOrderAttributes)
            ->setIncludeOrderInvoices($includeOrderInvoices)
            ->setIncludeOrderMargin($includeOrderMargin)
            ->setIncludeOrderNotices($includeOrderNotices)
            ->setIncludeSellItemAttributes($includeSellItemAttributes);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
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
     * Get includeMidocoMandate value
     * @return bool|null
     */
    public function getIncludeMidocoMandate(): ?bool
    {
        return $this->includeMidocoMandate;
    }
    /**
     * Set includeMidocoMandate value
     * @param bool $includeMidocoMandate
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
     */
    public function setIncludeMidocoMandate(?bool $includeMidocoMandate = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeMidocoMandate) && !is_bool($includeMidocoMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeMidocoMandate, true), gettype($includeMidocoMandate)), __LINE__);
        }
        $this->includeMidocoMandate = $includeMidocoMandate;
        
        return $this;
    }
    /**
     * Get includeOrderAttributes value
     * @return bool|null
     */
    public function getIncludeOrderAttributes(): ?bool
    {
        return $this->includeOrderAttributes;
    }
    /**
     * Set includeOrderAttributes value
     * @param bool $includeOrderAttributes
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
     */
    public function setIncludeOrderAttributes(?bool $includeOrderAttributes = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeOrderAttributes) && !is_bool($includeOrderAttributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeOrderAttributes, true), gettype($includeOrderAttributes)), __LINE__);
        }
        $this->includeOrderAttributes = $includeOrderAttributes;
        
        return $this;
    }
    /**
     * Get includeOrderInvoices value
     * @return bool|null
     */
    public function getIncludeOrderInvoices(): ?bool
    {
        return $this->includeOrderInvoices;
    }
    /**
     * Set includeOrderInvoices value
     * @param bool $includeOrderInvoices
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
     */
    public function setIncludeOrderInvoices(?bool $includeOrderInvoices = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeOrderInvoices) && !is_bool($includeOrderInvoices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeOrderInvoices, true), gettype($includeOrderInvoices)), __LINE__);
        }
        $this->includeOrderInvoices = $includeOrderInvoices;
        
        return $this;
    }
    /**
     * Get includeOrderMargin value
     * @return bool|null
     */
    public function getIncludeOrderMargin(): ?bool
    {
        return $this->includeOrderMargin;
    }
    /**
     * Set includeOrderMargin value
     * @param bool $includeOrderMargin
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
     */
    public function setIncludeOrderMargin(?bool $includeOrderMargin = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeOrderMargin) && !is_bool($includeOrderMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeOrderMargin, true), gettype($includeOrderMargin)), __LINE__);
        }
        $this->includeOrderMargin = $includeOrderMargin;
        
        return $this;
    }
    /**
     * Get includeOrderNotices value
     * @return bool|null
     */
    public function getIncludeOrderNotices(): ?bool
    {
        return $this->includeOrderNotices;
    }
    /**
     * Set includeOrderNotices value
     * @param bool $includeOrderNotices
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
     */
    public function setIncludeOrderNotices(?bool $includeOrderNotices = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeOrderNotices) && !is_bool($includeOrderNotices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeOrderNotices, true), gettype($includeOrderNotices)), __LINE__);
        }
        $this->includeOrderNotices = $includeOrderNotices;
        
        return $this;
    }
    /**
     * Get includeSellItemAttributes value
     * @return bool|null
     */
    public function getIncludeSellItemAttributes(): ?bool
    {
        return $this->includeSellItemAttributes;
    }
    /**
     * Set includeSellItemAttributes value
     * @param bool $includeSellItemAttributes
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest
     */
    public function setIncludeSellItemAttributes(?bool $includeSellItemAttributes = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeSellItemAttributes) && !is_bool($includeSellItemAttributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSellItemAttributes, true), gettype($includeSellItemAttributes)), __LINE__);
        }
        $this->includeSellItemAttributes = $includeSellItemAttributes;
        
        return $this;
    }
}
