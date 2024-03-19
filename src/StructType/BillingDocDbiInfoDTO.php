<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDocDbiInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingDocDbiInfoDTO extends AbstractStructBase
{
    /**
     * The dbiInfo
     * @var string|null
     */
    protected ?string $dbiInfo = null;
    /**
     * The dbiKey
     * @var string|null
     */
    protected ?string $dbiKey = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * Constructor method for BillingDocDbiInfoDTO
     * @uses BillingDocDbiInfoDTO::setDbiInfo()
     * @uses BillingDocDbiInfoDTO::setDbiKey()
     * @uses BillingDocDbiInfoDTO::setDocumentId()
     * @uses BillingDocDbiInfoDTO::setItemId()
     * @uses BillingDocDbiInfoDTO::setPassengerAssignment()
     * @param string $dbiInfo
     * @param string $dbiKey
     * @param int $documentId
     * @param int $itemId
     * @param int $passengerAssignment
     */
    public function __construct(?string $dbiInfo = null, ?string $dbiKey = null, ?int $documentId = null, ?int $itemId = null, ?int $passengerAssignment = null)
    {
        $this
            ->setDbiInfo($dbiInfo)
            ->setDbiKey($dbiKey)
            ->setDocumentId($documentId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment);
    }
    /**
     * Get dbiInfo value
     * @return string|null
     */
    public function getDbiInfo(): ?string
    {
        return $this->dbiInfo;
    }
    /**
     * Set dbiInfo value
     * @param string $dbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocDbiInfoDTO
     */
    public function setDbiInfo(?string $dbiInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfo) && !is_string($dbiInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfo, true), gettype($dbiInfo)), __LINE__);
        }
        $this->dbiInfo = $dbiInfo;
        
        return $this;
    }
    /**
     * Get dbiKey value
     * @return string|null
     */
    public function getDbiKey(): ?string
    {
        return $this->dbiKey;
    }
    /**
     * Set dbiKey value
     * @param string $dbiKey
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocDbiInfoDTO
     */
    public function setDbiKey(?string $dbiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiKey) && !is_string($dbiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiKey, true), gettype($dbiKey)), __LINE__);
        }
        $this->dbiKey = $dbiKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocDbiInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocDbiInfoDTO
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
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocDbiInfoDTO
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
}
