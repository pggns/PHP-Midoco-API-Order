<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirtualCreditCardMetaDataDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VirtualCreditCardMetaDataDTO extends AbstractStructBase
{
    /**
     * The metaKey
     * @var string|null
     */
    protected ?string $metaKey = null;
    /**
     * The metaType
     * @var string|null
     */
    protected ?string $metaType = null;
    /**
     * The metaValue
     * @var string|null
     */
    protected ?string $metaValue = null;
    /**
     * The virtualCardId
     * @var int|null
     */
    protected ?int $virtualCardId = null;
    /**
     * Constructor method for VirtualCreditCardMetaDataDTO
     * @uses VirtualCreditCardMetaDataDTO::setMetaKey()
     * @uses VirtualCreditCardMetaDataDTO::setMetaType()
     * @uses VirtualCreditCardMetaDataDTO::setMetaValue()
     * @uses VirtualCreditCardMetaDataDTO::setVirtualCardId()
     * @param string $metaKey
     * @param string $metaType
     * @param string $metaValue
     * @param int $virtualCardId
     */
    public function __construct(?string $metaKey = null, ?string $metaType = null, ?string $metaValue = null, ?int $virtualCardId = null)
    {
        $this
            ->setMetaKey($metaKey)
            ->setMetaType($metaType)
            ->setMetaValue($metaValue)
            ->setVirtualCardId($virtualCardId);
    }
    /**
     * Get metaKey value
     * @return string|null
     */
    public function getMetaKey(): ?string
    {
        return $this->metaKey;
    }
    /**
     * Set metaKey value
     * @param string $metaKey
     * @return \Pggns\MidocoApi\Order\StructType\VirtualCreditCardMetaDataDTO
     */
    public function setMetaKey(?string $metaKey = null): self
    {
        // validation for constraint: string
        if (!is_null($metaKey) && !is_string($metaKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($metaKey, true), gettype($metaKey)), __LINE__);
        }
        $this->metaKey = $metaKey;
        
        return $this;
    }
    /**
     * Get metaType value
     * @return string|null
     */
    public function getMetaType(): ?string
    {
        return $this->metaType;
    }
    /**
     * Set metaType value
     * @param string $metaType
     * @return \Pggns\MidocoApi\Order\StructType\VirtualCreditCardMetaDataDTO
     */
    public function setMetaType(?string $metaType = null): self
    {
        // validation for constraint: string
        if (!is_null($metaType) && !is_string($metaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($metaType, true), gettype($metaType)), __LINE__);
        }
        $this->metaType = $metaType;
        
        return $this;
    }
    /**
     * Get metaValue value
     * @return string|null
     */
    public function getMetaValue(): ?string
    {
        return $this->metaValue;
    }
    /**
     * Set metaValue value
     * @param string $metaValue
     * @return \Pggns\MidocoApi\Order\StructType\VirtualCreditCardMetaDataDTO
     */
    public function setMetaValue(?string $metaValue = null): self
    {
        // validation for constraint: string
        if (!is_null($metaValue) && !is_string($metaValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($metaValue, true), gettype($metaValue)), __LINE__);
        }
        $this->metaValue = $metaValue;
        
        return $this;
    }
    /**
     * Get virtualCardId value
     * @return int|null
     */
    public function getVirtualCardId(): ?int
    {
        return $this->virtualCardId;
    }
    /**
     * Set virtualCardId value
     * @param int $virtualCardId
     * @return \Pggns\MidocoApi\Order\StructType\VirtualCreditCardMetaDataDTO
     */
    public function setVirtualCardId(?int $virtualCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($virtualCardId) && !(is_int($virtualCardId) || ctype_digit($virtualCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($virtualCardId, true), gettype($virtualCardId)), __LINE__);
        }
        $this->virtualCardId = $virtualCardId;
        
        return $this;
    }
}
