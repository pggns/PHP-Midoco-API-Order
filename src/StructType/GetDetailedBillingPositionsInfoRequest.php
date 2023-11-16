<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDetailedBillingPositionsInfoRequest StructType
 * @subpackage Structs
 */
class GetDetailedBillingPositionsInfoRequest extends AbstractStructBase
{
    /**
     * The billingDocumentId
     * @var int|null
     */
    protected ?int $billingDocumentId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The calculatedPrintDate
     * Meta information extracted from the WSDL
     * - documentation: return only Billing Positions where the calculatedPrintDate of Billing Position is before calculatedPrintDate of request
     * @var string|null
     */
    protected ?string $calculatedPrintDate = null;
    /**
     * The onlyUnprinted
     * Meta information extracted from the WSDL
     * - documentation: return only Billing Positions without the Billing Document
     * @var bool|null
     */
    protected ?bool $onlyUnprinted = null;
    /**
     * The markCalculatedPrintDate
     * Meta information extracted from the WSDL
     * - documentation: mark the return Billing Positions as selected (the field isBillingPosSelected will be true) where the calculatedPrintDate of Billing Position is before markCalculatedPrintDate. default is today
     * @var string|null
     */
    protected ?string $markCalculatedPrintDate = null;
    /**
     * Constructor method for GetDetailedBillingPositionsInfoRequest
     * @uses GetDetailedBillingPositionsInfoRequest::setBillingDocumentId()
     * @uses GetDetailedBillingPositionsInfoRequest::setOrderId()
     * @uses GetDetailedBillingPositionsInfoRequest::setCalculatedPrintDate()
     * @uses GetDetailedBillingPositionsInfoRequest::setOnlyUnprinted()
     * @uses GetDetailedBillingPositionsInfoRequest::setMarkCalculatedPrintDate()
     * @param int $billingDocumentId
     * @param int $orderId
     * @param string $calculatedPrintDate
     * @param bool $onlyUnprinted
     * @param string $markCalculatedPrintDate
     */
    public function __construct(?int $billingDocumentId = null, ?int $orderId = null, ?string $calculatedPrintDate = null, ?bool $onlyUnprinted = null, ?string $markCalculatedPrintDate = null)
    {
        $this
            ->setBillingDocumentId($billingDocumentId)
            ->setOrderId($orderId)
            ->setCalculatedPrintDate($calculatedPrintDate)
            ->setOnlyUnprinted($onlyUnprinted)
            ->setMarkCalculatedPrintDate($markCalculatedPrintDate);
    }
    /**
     * Get billingDocumentId value
     * @return int|null
     */
    public function getBillingDocumentId(): ?int
    {
        return $this->billingDocumentId;
    }
    /**
     * Set billingDocumentId value
     * @param int $billingDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoRequest
     */
    public function setBillingDocumentId(?int $billingDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingDocumentId) && !(is_int($billingDocumentId) || ctype_digit($billingDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingDocumentId, true), gettype($billingDocumentId)), __LINE__);
        }
        $this->billingDocumentId = $billingDocumentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoRequest
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
     * Get onlyUnprinted value
     * @return bool|null
     */
    public function getOnlyUnprinted(): ?bool
    {
        return $this->onlyUnprinted;
    }
    /**
     * Set onlyUnprinted value
     * @param bool $onlyUnprinted
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoRequest
     */
    public function setOnlyUnprinted(?bool $onlyUnprinted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyUnprinted) && !is_bool($onlyUnprinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyUnprinted, true), gettype($onlyUnprinted)), __LINE__);
        }
        $this->onlyUnprinted = $onlyUnprinted;
        
        return $this;
    }
    /**
     * Get markCalculatedPrintDate value
     * @return string|null
     */
    public function getMarkCalculatedPrintDate(): ?string
    {
        return $this->markCalculatedPrintDate;
    }
    /**
     * Set markCalculatedPrintDate value
     * @param string $markCalculatedPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoRequest
     */
    public function setMarkCalculatedPrintDate(?string $markCalculatedPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($markCalculatedPrintDate) && !is_string($markCalculatedPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($markCalculatedPrintDate, true), gettype($markCalculatedPrintDate)), __LINE__);
        }
        $this->markCalculatedPrintDate = $markCalculatedPrintDate;
        
        return $this;
    }
}
