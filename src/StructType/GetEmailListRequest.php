<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailListRequest StructType
 * @subpackage Structs
 */
class GetEmailListRequest extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The agencyId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for GetEmailListRequest
     * @uses GetEmailListRequest::setCustomerId()
     * @uses GetEmailListRequest::setAgencyId()
     * @uses GetEmailListRequest::setMediatorId()
     * @uses GetEmailListRequest::setOrderId()
     * @uses GetEmailListRequest::setDocumentId()
     * @param int $customerId
     * @param string $agencyId
     * @param string $mediatorId
     * @param int $orderId
     * @param int $documentId
     */
    public function __construct(?int $customerId = null, ?string $agencyId = null, ?string $mediatorId = null, ?int $orderId = null, ?int $documentId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setAgencyId($agencyId)
            ->setMediatorId($mediatorId)
            ->setOrderId($orderId)
            ->setDocumentId($documentId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailListRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailListRequest
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
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailListRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailListRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailListRequest
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
}
