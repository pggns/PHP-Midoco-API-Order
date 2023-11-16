<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalutationTypeExtDTO StructType
 * @subpackage Structs
 */
class SalutationTypeExtDTO extends SalutationTypeDTO
{
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The letter
     * @var string|null
     */
    protected ?string $letter = null;
    /**
     * The forPerson
     * @var bool|null
     */
    protected ?bool $forPerson = null;
    /**
     * The forTraveller
     * @var bool|null
     */
    protected ?bool $forTraveller = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The forCompany
     * @var bool|null
     */
    protected ?bool $forCompany = null;
    /**
     * Constructor method for SalutationTypeExtDTO
     * @uses SalutationTypeExtDTO::setSalutation()
     * @uses SalutationTypeExtDTO::setLetter()
     * @uses SalutationTypeExtDTO::setForPerson()
     * @uses SalutationTypeExtDTO::setForTraveller()
     * @uses SalutationTypeExtDTO::setUnitName()
     * @uses SalutationTypeExtDTO::setForCompany()
     * @param string $salutation
     * @param string $letter
     * @param bool $forPerson
     * @param bool $forTraveller
     * @param string $unitName
     * @param bool $forCompany
     */
    public function __construct(?string $salutation = null, ?string $letter = null, ?bool $forPerson = null, ?bool $forTraveller = null, ?string $unitName = null, ?bool $forCompany = null)
    {
        $this
            ->setSalutation($salutation)
            ->setLetter($letter)
            ->setForPerson($forPerson)
            ->setForTraveller($forTraveller)
            ->setUnitName($unitName)
            ->setForCompany($forCompany);
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeExtDTO
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get letter value
     * @return string|null
     */
    public function getLetter(): ?string
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param string $letter
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeExtDTO
     */
    public function setLetter(?string $letter = null): self
    {
        // validation for constraint: string
        if (!is_null($letter) && !is_string($letter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($letter, true), gettype($letter)), __LINE__);
        }
        $this->letter = $letter;
        
        return $this;
    }
    /**
     * Get forPerson value
     * @return bool|null
     */
    public function getForPerson(): ?bool
    {
        return $this->forPerson;
    }
    /**
     * Set forPerson value
     * @param bool $forPerson
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeExtDTO
     */
    public function setForPerson(?bool $forPerson = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forPerson) && !is_bool($forPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forPerson, true), gettype($forPerson)), __LINE__);
        }
        $this->forPerson = $forPerson;
        
        return $this;
    }
    /**
     * Get forTraveller value
     * @return bool|null
     */
    public function getForTraveller(): ?bool
    {
        return $this->forTraveller;
    }
    /**
     * Set forTraveller value
     * @param bool $forTraveller
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeExtDTO
     */
    public function setForTraveller(?bool $forTraveller = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forTraveller) && !is_bool($forTraveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forTraveller, true), gettype($forTraveller)), __LINE__);
        }
        $this->forTraveller = $forTraveller;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeExtDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get forCompany value
     * @return bool|null
     */
    public function getForCompany(): ?bool
    {
        return $this->forCompany;
    }
    /**
     * Set forCompany value
     * @param bool $forCompany
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeExtDTO
     */
    public function setForCompany(?bool $forCompany = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forCompany) && !is_bool($forCompany)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forCompany, true), gettype($forCompany)), __LINE__);
        }
        $this->forCompany = $forCompany;
        
        return $this;
    }
}
