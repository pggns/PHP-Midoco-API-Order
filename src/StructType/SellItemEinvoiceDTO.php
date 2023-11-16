<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemEinvoiceDTO StructType
 * @subpackage Structs
 */
class SellItemEinvoiceDTO extends AbstractStructBase
{
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
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
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
     * The supplierNo
     * @var string|null
     */
    protected ?string $supplierNo = null;
    /**
     * Constructor method for SellItemEinvoiceDTO
     * @uses SellItemEinvoiceDTO::setEmail()
     * @uses SellItemEinvoiceDTO::setGateway()
     * @uses SellItemEinvoiceDTO::setItemId()
     * @uses SellItemEinvoiceDTO::setOrderRef()
     * @uses SellItemEinvoiceDTO::setRoutingId()
     * @uses SellItemEinvoiceDTO::setSupplierNo()
     * @param string $email
     * @param string $gateway
     * @param int $itemId
     * @param string $orderRef
     * @param string $routingId
     * @param string $supplierNo
     */
    public function __construct(?string $email = null, ?string $gateway = null, ?int $itemId = null, ?string $orderRef = null, ?string $routingId = null, ?string $supplierNo = null)
    {
        $this
            ->setEmail($email)
            ->setGateway($gateway)
            ->setItemId($itemId)
            ->setOrderRef($orderRef)
            ->setRoutingId($routingId)
            ->setSupplierNo($supplierNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO
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
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemEinvoiceDTO
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
