<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossSellingVersInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrossSellingVersInfo extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for CrossSellingVersInfo
     * @uses CrossSellingVersInfo::setName()
     * @uses CrossSellingVersInfo::setPrice()
     * @uses CrossSellingVersInfo::setLink()
     * @uses CrossSellingVersInfo::setCurrency()
     * @param string $name
     * @param float $price
     * @param string $link
     * @param string $currency
     */
    public function __construct(?string $name = null, ?float $price = null, ?string $link = null, ?string $currency = null)
    {
        $this
            ->setName($name)
            ->setPrice($price)
            ->setLink($link)
            ->setCurrency($currency);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo
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
    /**
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo
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
}
