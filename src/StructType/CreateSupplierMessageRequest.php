<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateSupplierMessageRequest StructType
 * @subpackage Structs
 */
class CreateSupplierMessageRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $supplierId;
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $itemId;
    /**
     * The subjectType
     * @var string|null
     */
    protected ?string $subjectType = null;
    /**
     * The messageType
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * Constructor method for CreateSupplierMessageRequest
     * @uses CreateSupplierMessageRequest::setSupplierId()
     * @uses CreateSupplierMessageRequest::setItemId()
     * @uses CreateSupplierMessageRequest::setSubjectType()
     * @uses CreateSupplierMessageRequest::setMessageType()
     * @param string $supplierId
     * @param int $itemId
     * @param string $subjectType
     * @param string $messageType
     */
    public function __construct(string $supplierId, int $itemId, ?string $subjectType = null, ?string $messageType = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setItemId($itemId)
            ->setSubjectType($subjectType)
            ->setMessageType($messageType);
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\CreateSupplierMessageRequest
     */
    public function setSupplierId(string $supplierId): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\CreateSupplierMessageRequest
     */
    public function setItemId(int $itemId): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get subjectType value
     * @return string|null
     */
    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }
    /**
     * Set subjectType value
     * @param string $subjectType
     * @return \Pggns\MidocoApi\Order\StructType\CreateSupplierMessageRequest
     */
    public function setSubjectType(?string $subjectType = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectType) && !is_string($subjectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectType, true), gettype($subjectType)), __LINE__);
        }
        $this->subjectType = $subjectType;
        
        return $this;
    }
    /**
     * Get messageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @param string $messageType
     * @return \Pggns\MidocoApi\Order\StructType\CreateSupplierMessageRequest
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: string
        if (!is_null($messageType) && !is_string($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageType, true), gettype($messageType)), __LINE__);
        }
        $this->messageType = $messageType;
        
        return $this;
    }
}
