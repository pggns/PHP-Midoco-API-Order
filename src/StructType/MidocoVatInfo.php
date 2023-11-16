<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVatInfo StructType
 * @subpackage Structs
 */
class MidocoVatInfo extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The factor
     * @var float|null
     */
    protected ?float $factor = null;
    /**
     * The base
     * @var float|null
     */
    protected ?float $base = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The address
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * Constructor method for MidocoVatInfo
     * @uses MidocoVatInfo::setId()
     * @uses MidocoVatInfo::setDescription()
     * @uses MidocoVatInfo::setPercent()
     * @uses MidocoVatInfo::setFactor()
     * @uses MidocoVatInfo::setBase()
     * @uses MidocoVatInfo::setAmount()
     * @uses MidocoVatInfo::setAddress()
     * @param string $id
     * @param string $description
     * @param float $percent
     * @param float $factor
     * @param float $base
     * @param float $amount
     * @param string $address
     */
    public function __construct(?string $id = null, ?string $description = null, ?float $percent = null, ?float $factor = null, ?float $base = null, ?float $amount = null, ?string $address = null)
    {
        $this
            ->setId($id)
            ->setDescription($description)
            ->setPercent($percent)
            ->setFactor($factor)
            ->setBase($base)
            ->setAmount($amount)
            ->setAddress($address);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatInfo
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
        return $this;
    }
    /**
     * Get factor value
     * @return float|null
     */
    public function getFactor(): ?float
    {
        return $this->factor;
    }
    /**
     * Set factor value
     * @param float $factor
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatInfo
     */
    public function setFactor(?float $factor = null): self
    {
        // validation for constraint: float
        if (!is_null($factor) && !(is_float($factor) || is_numeric($factor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($factor, true), gettype($factor)), __LINE__);
        }
        $this->factor = $factor;
        
        return $this;
    }
    /**
     * Get base value
     * @return float|null
     */
    public function getBase(): ?float
    {
        return $this->base;
    }
    /**
     * Set base value
     * @param float $base
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatInfo
     */
    public function setBase(?float $base = null): self
    {
        // validation for constraint: float
        if (!is_null($base) && !(is_float($base) || is_numeric($base))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($base, true), gettype($base)), __LINE__);
        }
        $this->base = $base;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatInfo
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatInfo
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
}
