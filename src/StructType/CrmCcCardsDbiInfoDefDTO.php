<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCcCardsDbiInfoDefDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCcCardsDbiInfoDefDTO extends AbstractStructBase
{
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The ccCardId
     * @var int|null
     */
    protected ?int $ccCardId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dbiInfoDefinition
     * @var string|null
     */
    protected ?string $dbiInfoDefinition = null;
    /**
     * The dbiInfoKey
     * @var string|null
     */
    protected ?string $dbiInfoKey = null;
    /**
     * Constructor method for CrmCcCardsDbiInfoDefDTO
     * @uses CrmCcCardsDbiInfoDefDTO::setCardNo()
     * @uses CrmCcCardsDbiInfoDefDTO::setCardType()
     * @uses CrmCcCardsDbiInfoDefDTO::setCcCardId()
     * @uses CrmCcCardsDbiInfoDefDTO::setCustomerId()
     * @uses CrmCcCardsDbiInfoDefDTO::setDbiInfoDefinition()
     * @uses CrmCcCardsDbiInfoDefDTO::setDbiInfoKey()
     * @param string $cardNo
     * @param string $cardType
     * @param int $ccCardId
     * @param int $customerId
     * @param string $dbiInfoDefinition
     * @param string $dbiInfoKey
     */
    public function __construct(?string $cardNo = null, ?string $cardType = null, ?int $ccCardId = null, ?int $customerId = null, ?string $dbiInfoDefinition = null, ?string $dbiInfoKey = null)
    {
        $this
            ->setCardNo($cardNo)
            ->setCardType($cardType)
            ->setCcCardId($ccCardId)
            ->setCustomerId($customerId)
            ->setDbiInfoDefinition($dbiInfoDefinition)
            ->setDbiInfoKey($dbiInfoKey);
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoDefDTO
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoDefDTO
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get ccCardId value
     * @return int|null
     */
    public function getCcCardId(): ?int
    {
        return $this->ccCardId;
    }
    /**
     * Set ccCardId value
     * @param int $ccCardId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoDefDTO
     */
    public function setCcCardId(?int $ccCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($ccCardId) && !(is_int($ccCardId) || ctype_digit($ccCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccCardId, true), gettype($ccCardId)), __LINE__);
        }
        $this->ccCardId = $ccCardId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoDefDTO
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
     * Get dbiInfoDefinition value
     * @return string|null
     */
    public function getDbiInfoDefinition(): ?string
    {
        return $this->dbiInfoDefinition;
    }
    /**
     * Set dbiInfoDefinition value
     * @param string $dbiInfoDefinition
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoDefDTO
     */
    public function setDbiInfoDefinition(?string $dbiInfoDefinition = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfoDefinition) && !is_string($dbiInfoDefinition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfoDefinition, true), gettype($dbiInfoDefinition)), __LINE__);
        }
        $this->dbiInfoDefinition = $dbiInfoDefinition;
        
        return $this;
    }
    /**
     * Get dbiInfoKey value
     * @return string|null
     */
    public function getDbiInfoKey(): ?string
    {
        return $this->dbiInfoKey;
    }
    /**
     * Set dbiInfoKey value
     * @param string $dbiInfoKey
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoDefDTO
     */
    public function setDbiInfoKey(?string $dbiInfoKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfoKey) && !is_string($dbiInfoKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfoKey, true), gettype($dbiInfoKey)), __LINE__);
        }
        $this->dbiInfoKey = $dbiInfoKey;
        
        return $this;
    }
}
