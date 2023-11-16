<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocValueResponse StructType
 * @subpackage Structs
 */
class GetBillingDocValueResponse extends AbstractStructBase
{
    /**
     * The getDebitor
     * @var string|null
     */
    protected ?string $getDebitor = null;
    /**
     * The getValue
     * @var float|null
     */
    protected ?float $getValue = null;
    /**
     * The exist
     * @var bool|null
     */
    protected ?bool $exist = null;
    /**
     * Constructor method for GetBillingDocValueResponse
     * @uses GetBillingDocValueResponse::setGetDebitor()
     * @uses GetBillingDocValueResponse::setGetValue()
     * @uses GetBillingDocValueResponse::setExist()
     * @param string $getDebitor
     * @param float $getValue
     * @param bool $exist
     */
    public function __construct(?string $getDebitor = null, ?float $getValue = null, ?bool $exist = null)
    {
        $this
            ->setGetDebitor($getDebitor)
            ->setGetValue($getValue)
            ->setExist($exist);
    }
    /**
     * Get getDebitor value
     * @return string|null
     */
    public function getGetDebitor(): ?string
    {
        return $this->getDebitor;
    }
    /**
     * Set getDebitor value
     * @param string $getDebitor
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocValueResponse
     */
    public function setGetDebitor(?string $getDebitor = null): self
    {
        // validation for constraint: string
        if (!is_null($getDebitor) && !is_string($getDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getDebitor, true), gettype($getDebitor)), __LINE__);
        }
        $this->getDebitor = $getDebitor;
        
        return $this;
    }
    /**
     * Get getValue value
     * @return float|null
     */
    public function getGetValue(): ?float
    {
        return $this->getValue;
    }
    /**
     * Set getValue value
     * @param float $getValue
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocValueResponse
     */
    public function setGetValue(?float $getValue = null): self
    {
        // validation for constraint: float
        if (!is_null($getValue) && !(is_float($getValue) || is_numeric($getValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($getValue, true), gettype($getValue)), __LINE__);
        }
        $this->getValue = $getValue;
        
        return $this;
    }
    /**
     * Get exist value
     * @return bool|null
     */
    public function getExist(): ?bool
    {
        return $this->exist;
    }
    /**
     * Set exist value
     * @param bool $exist
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocValueResponse
     */
    public function setExist(?bool $exist = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exist) && !is_bool($exist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exist, true), gettype($exist)), __LINE__);
        }
        $this->exist = $exist;
        
        return $this;
    }
}
