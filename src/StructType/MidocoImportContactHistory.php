<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportContactHistory StructType
 * @subpackage Structs
 */
class MidocoImportContactHistory extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The contactTypeId
     * @var string|null
     */
    protected ?string $contactTypeId = null;
    /**
     * The contactDescription
     * @var string|null
     */
    protected ?string $contactDescription = null;
    /**
     * The contactDirection
     * @var string|null
     */
    protected ?string $contactDirection = null;
    /**
     * The userId
     * @var string|null
     */
    protected ?string $userId = null;
    /**
     * Constructor method for MidocoImportContactHistory
     * @uses MidocoImportContactHistory::setCustomerId()
     * @uses MidocoImportContactHistory::setContactTypeId()
     * @uses MidocoImportContactHistory::setContactDescription()
     * @uses MidocoImportContactHistory::setContactDirection()
     * @uses MidocoImportContactHistory::setUserId()
     * @param string $customerId
     * @param string $contactTypeId
     * @param string $contactDescription
     * @param string $contactDirection
     * @param string $userId
     */
    public function __construct(?string $customerId = null, ?string $contactTypeId = null, ?string $contactDescription = null, ?string $contactDirection = null, ?string $userId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setContactTypeId($contactTypeId)
            ->setContactDescription($contactDescription)
            ->setContactDirection($contactDirection)
            ->setUserId($userId);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get contactTypeId value
     * @return string|null
     */
    public function getContactTypeId(): ?string
    {
        return $this->contactTypeId;
    }
    /**
     * Set contactTypeId value
     * @param string $contactTypeId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory
     */
    public function setContactTypeId(?string $contactTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($contactTypeId) && !is_string($contactTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactTypeId, true), gettype($contactTypeId)), __LINE__);
        }
        $this->contactTypeId = $contactTypeId;
        
        return $this;
    }
    /**
     * Get contactDescription value
     * @return string|null
     */
    public function getContactDescription(): ?string
    {
        return $this->contactDescription;
    }
    /**
     * Set contactDescription value
     * @param string $contactDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory
     */
    public function setContactDescription(?string $contactDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($contactDescription) && !is_string($contactDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactDescription, true), gettype($contactDescription)), __LINE__);
        }
        $this->contactDescription = $contactDescription;
        
        return $this;
    }
    /**
     * Get contactDirection value
     * @return string|null
     */
    public function getContactDirection(): ?string
    {
        return $this->contactDirection;
    }
    /**
     * Set contactDirection value
     * @param string $contactDirection
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory
     */
    public function setContactDirection(?string $contactDirection = null): self
    {
        // validation for constraint: string
        if (!is_null($contactDirection) && !is_string($contactDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactDirection, true), gettype($contactDirection)), __LINE__);
        }
        $this->contactDirection = $contactDirection;
        
        return $this;
    }
    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param string $userId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
