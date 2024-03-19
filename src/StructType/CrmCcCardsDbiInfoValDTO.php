<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCcCardsDbiInfoValDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCcCardsDbiInfoValDTO extends AbstractStructBase
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
     * The dbiInfoKey
     * @var string|null
     */
    protected ?string $dbiInfoKey = null;
    /**
     * The dbiInfoValue
     * @var string|null
     */
    protected ?string $dbiInfoValue = null;
    /**
     * Constructor method for CrmCcCardsDbiInfoValDTO
     * @uses CrmCcCardsDbiInfoValDTO::setCardNo()
     * @uses CrmCcCardsDbiInfoValDTO::setCardType()
     * @uses CrmCcCardsDbiInfoValDTO::setCcCardId()
     * @uses CrmCcCardsDbiInfoValDTO::setCustomerId()
     * @uses CrmCcCardsDbiInfoValDTO::setDbiInfoKey()
     * @uses CrmCcCardsDbiInfoValDTO::setDbiInfoValue()
     * @param string $cardNo
     * @param string $cardType
     * @param int $ccCardId
     * @param int $customerId
     * @param string $dbiInfoKey
     * @param string $dbiInfoValue
     */
    public function __construct(?string $cardNo = null, ?string $cardType = null, ?int $ccCardId = null, ?int $customerId = null, ?string $dbiInfoKey = null, ?string $dbiInfoValue = null)
    {
        $this
            ->setCardNo($cardNo)
            ->setCardType($cardType)
            ->setCcCardId($ccCardId)
            ->setCustomerId($customerId)
            ->setDbiInfoKey($dbiInfoKey)
            ->setDbiInfoValue($dbiInfoValue);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoValDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoValDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoValDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoValDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoValDTO
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
    /**
     * Get dbiInfoValue value
     * @return string|null
     */
    public function getDbiInfoValue(): ?string
    {
        return $this->dbiInfoValue;
    }
    /**
     * Set dbiInfoValue value
     * @param string $dbiInfoValue
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardsDbiInfoValDTO
     */
    public function setDbiInfoValue(?string $dbiInfoValue = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfoValue) && !is_string($dbiInfoValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfoValue, true), gettype($dbiInfoValue)), __LINE__);
        }
        $this->dbiInfoValue = $dbiInfoValue;
        
        return $this;
    }
}
