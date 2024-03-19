<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalServiceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdditionalServiceDTO extends AbstractStructBase
{
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The includedInTotal
     * @var bool|null
     */
    protected ?bool $includedInTotal = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * Constructor method for AdditionalServiceDTO
     * @uses AdditionalServiceDTO::setCode()
     * @uses AdditionalServiceDTO::setCurrency()
     * @uses AdditionalServiceDTO::setDescription()
     * @uses AdditionalServiceDTO::setIncludedInTotal()
     * @uses AdditionalServiceDTO::setItemId()
     * @uses AdditionalServiceDTO::setPosition()
     * @uses AdditionalServiceDTO::setPrice()
     * @param string $code
     * @param string $currency
     * @param string $description
     * @param bool $includedInTotal
     * @param int $itemId
     * @param int $position
     * @param float $price
     */
    public function __construct(?string $code = null, ?string $currency = null, ?string $description = null, ?bool $includedInTotal = null, ?int $itemId = null, ?int $position = null, ?float $price = null)
    {
        $this
            ->setCode($code)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setIncludedInTotal($includedInTotal)
            ->setItemId($itemId)
            ->setPosition($position)
            ->setPrice($price);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceDTO
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
     * Get includedInTotal value
     * @return bool|null
     */
    public function getIncludedInTotal(): ?bool
    {
        return $this->includedInTotal;
    }
    /**
     * Set includedInTotal value
     * @param bool $includedInTotal
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceDTO
     */
    public function setIncludedInTotal(?bool $includedInTotal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includedInTotal) && !is_bool($includedInTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includedInTotal, true), gettype($includedInTotal)), __LINE__);
        }
        $this->includedInTotal = $includedInTotal;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceDTO
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
}
