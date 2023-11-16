<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalutationDTO StructType
 * @subpackage Structs
 */
class SalutationDTO extends AbstractStructBase
{
    /**
     * The forCompany
     * @var bool|null
     */
    protected ?bool $forCompany = null;
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
     * The printForename
     * @var bool|null
     */
    protected ?bool $printForename = null;
    /**
     * The printName
     * @var bool|null
     */
    protected ?bool $printName = null;
    /**
     * The printTitle
     * @var bool|null
     */
    protected ?bool $printTitle = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SalutationDTO
     * @uses SalutationDTO::setForCompany()
     * @uses SalutationDTO::setForPerson()
     * @uses SalutationDTO::setForTraveller()
     * @uses SalutationDTO::setPrintForename()
     * @uses SalutationDTO::setPrintName()
     * @uses SalutationDTO::setPrintTitle()
     * @uses SalutationDTO::setSalutationId()
     * @uses SalutationDTO::setUnitName()
     * @param bool $forCompany
     * @param bool $forPerson
     * @param bool $forTraveller
     * @param bool $printForename
     * @param bool $printName
     * @param bool $printTitle
     * @param string $salutationId
     * @param string $unitName
     */
    public function __construct(?bool $forCompany = null, ?bool $forPerson = null, ?bool $forTraveller = null, ?bool $printForename = null, ?bool $printName = null, ?bool $printTitle = null, ?string $salutationId = null, ?string $unitName = null)
    {
        $this
            ->setForCompany($forCompany)
            ->setForPerson($forPerson)
            ->setForTraveller($forTraveller)
            ->setPrintForename($printForename)
            ->setPrintName($printName)
            ->setPrintTitle($printTitle)
            ->setSalutationId($salutationId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
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
     * Get printForename value
     * @return bool|null
     */
    public function getPrintForename(): ?bool
    {
        return $this->printForename;
    }
    /**
     * Set printForename value
     * @param bool $printForename
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
     */
    public function setPrintForename(?bool $printForename = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printForename) && !is_bool($printForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printForename, true), gettype($printForename)), __LINE__);
        }
        $this->printForename = $printForename;
        
        return $this;
    }
    /**
     * Get printName value
     * @return bool|null
     */
    public function getPrintName(): ?bool
    {
        return $this->printName;
    }
    /**
     * Set printName value
     * @param bool $printName
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
     */
    public function setPrintName(?bool $printName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printName) && !is_bool($printName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printName, true), gettype($printName)), __LINE__);
        }
        $this->printName = $printName;
        
        return $this;
    }
    /**
     * Get printTitle value
     * @return bool|null
     */
    public function getPrintTitle(): ?bool
    {
        return $this->printTitle;
    }
    /**
     * Set printTitle value
     * @param bool $printTitle
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
     */
    public function setPrintTitle(?bool $printTitle = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printTitle) && !is_bool($printTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printTitle, true), gettype($printTitle)), __LINE__);
        }
        $this->printTitle = $printTitle;
        
        return $this;
    }
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDTO
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
}
