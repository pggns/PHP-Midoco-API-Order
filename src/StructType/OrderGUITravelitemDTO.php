<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderGUITravelitemDTO StructType
 * @subpackage Structs
 */
class OrderGUITravelitemDTO extends TravelitemDTO
{
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The user
     * @var string|null
     */
    protected ?string $user = null;
    /**
     * The creationdate
     * @var string|null
     */
    protected ?string $creationdate = null;
    /**
     * Constructor method for OrderGUITravelitemDTO
     * @uses OrderGUITravelitemDTO::setPrice()
     * @uses OrderGUITravelitemDTO::setOrgunit()
     * @uses OrderGUITravelitemDTO::setUser()
     * @uses OrderGUITravelitemDTO::setCreationdate()
     * @param float $price
     * @param string $orgunit
     * @param string $user
     * @param string $creationdate
     */
    public function __construct(?float $price = null, ?string $orgunit = null, ?string $user = null, ?string $creationdate = null)
    {
        $this
            ->setPrice($price)
            ->setOrgunit($orgunit)
            ->setUser($user)
            ->setCreationdate($creationdate);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderGUITravelitemDTO
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
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\OrderGUITravelitemDTO
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Pggns\MidocoApi\Order\StructType\OrderGUITravelitemDTO
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        
        return $this;
    }
    /**
     * Get creationdate value
     * @return string|null
     */
    public function getCreationdate(): ?string
    {
        return $this->creationdate;
    }
    /**
     * Set creationdate value
     * @param string $creationdate
     * @return \Pggns\MidocoApi\Order\StructType\OrderGUITravelitemDTO
     */
    public function setCreationdate(?string $creationdate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationdate) && !is_string($creationdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationdate, true), gettype($creationdate)), __LINE__);
        }
        $this->creationdate = $creationdate;
        
        return $this;
    }
}
