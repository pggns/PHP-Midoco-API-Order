<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for internal_treatment StructType
 * Meta information extracted from the WSDL
 * - documentation: special steering information for midoco to process this message
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Internal_treatment extends AbstractStructBase
{
    /**
     * The lock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Lock|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Lock $lock = null;
    /**
     * The preset_order_no
     * Meta information extracted from the WSDL
     * - documentation: force midoco to use a specific oder_no and not calculate a new one using the oder_no sequence
     * @var int|null
     */
    protected ?int $preset_order_no = null;
    /**
     * The deliveryType
     * Meta information extracted from the WSDL
     * - documentation: declares how midoco should send travel documents, possible: EMAIL or PRINT
     * @var string|null
     */
    protected ?string $deliveryType = null;
    /**
     * The legalCountry
     * Meta information extracted from the WSDL
     * - documentation: country of the order
     * @var string|null
     */
    protected ?string $legalCountry = null;
    /**
     * Constructor method for internal_treatment
     * @uses Internal_treatment::setLock()
     * @uses Internal_treatment::setPreset_order_no()
     * @uses Internal_treatment::setDeliveryType()
     * @uses Internal_treatment::setLegalCountry()
     * @param \Pggns\MidocoApi\Order\StructType\Lock $lock
     * @param int $preset_order_no
     * @param string $deliveryType
     * @param string $legalCountry
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Lock $lock = null, ?int $preset_order_no = null, ?string $deliveryType = null, ?string $legalCountry = null)
    {
        $this
            ->setLock($lock)
            ->setPreset_order_no($preset_order_no)
            ->setDeliveryType($deliveryType)
            ->setLegalCountry($legalCountry);
    }
    /**
     * Get lock value
     * @return \Pggns\MidocoApi\Order\StructType\Lock|null
     */
    public function getLock(): ?\Pggns\MidocoApi\Order\StructType\Lock
    {
        return $this->lock;
    }
    /**
     * Set lock value
     * @param \Pggns\MidocoApi\Order\StructType\Lock $lock
     * @return \Pggns\MidocoApi\Order\StructType\Internal_treatment
     */
    public function setLock(?\Pggns\MidocoApi\Order\StructType\Lock $lock = null): self
    {
        $this->lock = $lock;
        
        return $this;
    }
    /**
     * Get preset_order_no value
     * @return int|null
     */
    public function getPreset_order_no(): ?int
    {
        return $this->preset_order_no;
    }
    /**
     * Set preset_order_no value
     * @param int $preset_order_no
     * @return \Pggns\MidocoApi\Order\StructType\Internal_treatment
     */
    public function setPreset_order_no(?int $preset_order_no = null): self
    {
        // validation for constraint: int
        if (!is_null($preset_order_no) && !(is_int($preset_order_no) || ctype_digit($preset_order_no))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preset_order_no, true), gettype($preset_order_no)), __LINE__);
        }
        $this->preset_order_no = $preset_order_no;
        
        return $this;
    }
    /**
     * Get deliveryType value
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }
    /**
     * Set deliveryType value
     * @param string $deliveryType
     * @return \Pggns\MidocoApi\Order\StructType\Internal_treatment
     */
    public function setDeliveryType(?string $deliveryType = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryType) && !is_string($deliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryType, true), gettype($deliveryType)), __LINE__);
        }
        $this->deliveryType = $deliveryType;
        
        return $this;
    }
    /**
     * Get legalCountry value
     * @return string|null
     */
    public function getLegalCountry(): ?string
    {
        return $this->legalCountry;
    }
    /**
     * Set legalCountry value
     * @param string $legalCountry
     * @return \Pggns\MidocoApi\Order\StructType\Internal_treatment
     */
    public function setLegalCountry(?string $legalCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($legalCountry) && !is_string($legalCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalCountry, true), gettype($legalCountry)), __LINE__);
        }
        $this->legalCountry = $legalCountry;
        
        return $this;
    }
}
