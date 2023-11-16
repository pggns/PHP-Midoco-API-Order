<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSwissQrInvoiceInfoRequest StructType
 * @subpackage Structs
 */
class GetSwissQrInvoiceInfoRequest extends AbstractStructBase
{
    /**
     * The checkSum
     * @var string|null
     */
    protected ?string $checkSum = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The adviceSettlementId
     * @var int|null
     */
    protected ?int $adviceSettlementId = null;
    /**
     * The debitor
     * @var string|null
     */
    protected ?string $debitor = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The agencySettlementId
     * @var int|null
     */
    protected ?int $agencySettlementId = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The billingDocumentId
     * @var int|null
     */
    protected ?int $billingDocumentId = null;
    /**
     * Constructor method for GetSwissQrInvoiceInfoRequest
     * @uses GetSwissQrInvoiceInfoRequest::setCheckSum()
     * @uses GetSwissQrInvoiceInfoRequest::setOrderId()
     * @uses GetSwissQrInvoiceInfoRequest::setAdviceSettlementId()
     * @uses GetSwissQrInvoiceInfoRequest::setDebitor()
     * @uses GetSwissQrInvoiceInfoRequest::setCustomerId()
     * @uses GetSwissQrInvoiceInfoRequest::setAgencySettlementId()
     * @uses GetSwissQrInvoiceInfoRequest::setAgencyId()
     * @uses GetSwissQrInvoiceInfoRequest::setBillingDocumentId()
     * @param string $checkSum
     * @param int $orderId
     * @param int $adviceSettlementId
     * @param string $debitor
     * @param int $customerId
     * @param int $agencySettlementId
     * @param string $agencyId
     * @param int $billingDocumentId
     */
    public function __construct(?string $checkSum = null, ?int $orderId = null, ?int $adviceSettlementId = null, ?string $debitor = null, ?int $customerId = null, ?int $agencySettlementId = null, ?string $agencyId = null, ?int $billingDocumentId = null)
    {
        $this
            ->setCheckSum($checkSum)
            ->setOrderId($orderId)
            ->setAdviceSettlementId($adviceSettlementId)
            ->setDebitor($debitor)
            ->setCustomerId($customerId)
            ->setAgencySettlementId($agencySettlementId)
            ->setAgencyId($agencyId)
            ->setBillingDocumentId($billingDocumentId);
    }
    /**
     * Get checkSum value
     * @return string|null
     */
    public function getCheckSum(): ?string
    {
        return $this->checkSum;
    }
    /**
     * Set checkSum value
     * @param string $checkSum
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
     */
    public function setCheckSum(?string $checkSum = null): self
    {
        // validation for constraint: string
        if (!is_null($checkSum) && !is_string($checkSum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkSum, true), gettype($checkSum)), __LINE__);
        }
        $this->checkSum = $checkSum;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
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
     * Get adviceSettlementId value
     * @return int|null
     */
    public function getAdviceSettlementId(): ?int
    {
        return $this->adviceSettlementId;
    }
    /**
     * Set adviceSettlementId value
     * @param int $adviceSettlementId
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
     */
    public function setAdviceSettlementId(?int $adviceSettlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($adviceSettlementId) && !(is_int($adviceSettlementId) || ctype_digit($adviceSettlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adviceSettlementId, true), gettype($adviceSettlementId)), __LINE__);
        }
        $this->adviceSettlementId = $adviceSettlementId;
        
        return $this;
    }
    /**
     * Get debitor value
     * @return string|null
     */
    public function getDebitor(): ?string
    {
        return $this->debitor;
    }
    /**
     * Set debitor value
     * @param string $debitor
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
     */
    public function setDebitor(?string $debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($debitor) && !is_string($debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitor, true), gettype($debitor)), __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get agencySettlementId value
     * @return int|null
     */
    public function getAgencySettlementId(): ?int
    {
        return $this->agencySettlementId;
    }
    /**
     * Set agencySettlementId value
     * @param int $agencySettlementId
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
     */
    public function setAgencySettlementId(?int $agencySettlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencySettlementId) && !(is_int($agencySettlementId) || ctype_digit($agencySettlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencySettlementId, true), gettype($agencySettlementId)), __LINE__);
        }
        $this->agencySettlementId = $agencySettlementId;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoRequest
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
}
