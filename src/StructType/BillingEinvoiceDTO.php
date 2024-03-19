<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingEinvoiceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingEinvoiceDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The gateway
     * @var string|null
     */
    protected ?string $gateway = null;
    /**
     * The orderRef
     * @var string|null
     */
    protected ?string $orderRef = null;
    /**
     * The routingId
     * @var string|null
     */
    protected ?string $routingId = null;
    /**
     * The sellerTradeParty
     * @var string|null
     */
    protected ?string $sellerTradeParty = null;
    /**
     * The supplierNo
     * @var string|null
     */
    protected ?string $supplierNo = null;
    /**
     * Constructor method for BillingEinvoiceDTO
     * @uses BillingEinvoiceDTO::setDocumentId()
     * @uses BillingEinvoiceDTO::setEmail()
     * @uses BillingEinvoiceDTO::setGateway()
     * @uses BillingEinvoiceDTO::setOrderRef()
     * @uses BillingEinvoiceDTO::setRoutingId()
     * @uses BillingEinvoiceDTO::setSellerTradeParty()
     * @uses BillingEinvoiceDTO::setSupplierNo()
     * @param int $documentId
     * @param string $email
     * @param string $gateway
     * @param string $orderRef
     * @param string $routingId
     * @param string $sellerTradeParty
     * @param string $supplierNo
     */
    public function __construct(?int $documentId = null, ?string $email = null, ?string $gateway = null, ?string $orderRef = null, ?string $routingId = null, ?string $sellerTradeParty = null, ?string $supplierNo = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setEmail($email)
            ->setGateway($gateway)
            ->setOrderRef($orderRef)
            ->setRoutingId($routingId)
            ->setSellerTradeParty($sellerTradeParty)
            ->setSupplierNo($supplierNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingEinvoiceDTO
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
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\BillingEinvoiceDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get gateway value
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }
    /**
     * Set gateway value
     * @param string $gateway
     * @return \Pggns\MidocoApi\Order\StructType\BillingEinvoiceDTO
     */
    public function setGateway(?string $gateway = null): self
    {
        // validation for constraint: string
        if (!is_null($gateway) && !is_string($gateway)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gateway, true), gettype($gateway)), __LINE__);
        }
        $this->gateway = $gateway;
        
        return $this;
    }
    /**
     * Get orderRef value
     * @return string|null
     */
    public function getOrderRef(): ?string
    {
        return $this->orderRef;
    }
    /**
     * Set orderRef value
     * @param string $orderRef
     * @return \Pggns\MidocoApi\Order\StructType\BillingEinvoiceDTO
     */
    public function setOrderRef(?string $orderRef = null): self
    {
        // validation for constraint: string
        if (!is_null($orderRef) && !is_string($orderRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderRef, true), gettype($orderRef)), __LINE__);
        }
        $this->orderRef = $orderRef;
        
        return $this;
    }
    /**
     * Get routingId value
     * @return string|null
     */
    public function getRoutingId(): ?string
    {
        return $this->routingId;
    }
    /**
     * Set routingId value
     * @param string $routingId
     * @return \Pggns\MidocoApi\Order\StructType\BillingEinvoiceDTO
     */
    public function setRoutingId(?string $routingId = null): self
    {
        // validation for constraint: string
        if (!is_null($routingId) && !is_string($routingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingId, true), gettype($routingId)), __LINE__);
        }
        $this->routingId = $routingId;
        
        return $this;
    }
    /**
     * Get sellerTradeParty value
     * @return string|null
     */
    public function getSellerTradeParty(): ?string
    {
        return $this->sellerTradeParty;
    }
    /**
     * Set sellerTradeParty value
     * @param string $sellerTradeParty
     * @return \Pggns\MidocoApi\Order\StructType\BillingEinvoiceDTO
     */
    public function setSellerTradeParty(?string $sellerTradeParty = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerTradeParty) && !is_string($sellerTradeParty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerTradeParty, true), gettype($sellerTradeParty)), __LINE__);
        }
        $this->sellerTradeParty = $sellerTradeParty;
        
        return $this;
    }
    /**
     * Get supplierNo value
     * @return string|null
     */
    public function getSupplierNo(): ?string
    {
        return $this->supplierNo;
    }
    /**
     * Set supplierNo value
     * @param string $supplierNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingEinvoiceDTO
     */
    public function setSupplierNo(?string $supplierNo = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierNo) && !is_string($supplierNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierNo, true), gettype($supplierNo)), __LINE__);
        }
        $this->supplierNo = $supplierNo;
        
        return $this;
    }
}
