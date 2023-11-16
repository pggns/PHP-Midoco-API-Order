<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerSearch StructType
 * @subpackage Structs
 */
class MidocoCustomerSearch extends CustomerSearchDTO
{
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The isCrmPersonTraveller
     * @var bool|null
     */
    protected ?bool $isCrmPersonTraveller = null;
    /**
     * Constructor method for MidocoCustomerSearch
     * @uses MidocoCustomerSearch::setIsSpecialCustomer()
     * @uses MidocoCustomerSearch::setIsCrmPersonTraveller()
     * @param bool $isSpecialCustomer
     * @param bool $isCrmPersonTraveller
     */
    public function __construct(?bool $isSpecialCustomer = null, ?bool $isCrmPersonTraveller = null)
    {
        $this
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setIsCrmPersonTraveller($isCrmPersonTraveller);
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerSearch
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get isCrmPersonTraveller value
     * @return bool|null
     */
    public function getIsCrmPersonTraveller(): ?bool
    {
        return $this->isCrmPersonTraveller;
    }
    /**
     * Set isCrmPersonTraveller value
     * @param bool $isCrmPersonTraveller
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerSearch
     */
    public function setIsCrmPersonTraveller(?bool $isCrmPersonTraveller = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCrmPersonTraveller) && !is_bool($isCrmPersonTraveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCrmPersonTraveller, true), gettype($isCrmPersonTraveller)), __LINE__);
        }
        $this->isCrmPersonTraveller = $isCrmPersonTraveller;
        
        return $this;
    }
}
