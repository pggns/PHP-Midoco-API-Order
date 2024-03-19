<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellPassengerInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSellPassengerInfo extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The crsImportedName
     * @var string|null
     */
    protected ?string $crsImportedName = null;
    /**
     * The crsImportedSalutation
     * @var string|null
     */
    protected ?string $crsImportedSalutation = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * Constructor method for MidocoSellPassengerInfo
     * @uses MidocoSellPassengerInfo::setName()
     * @uses MidocoSellPassengerInfo::setForename()
     * @uses MidocoSellPassengerInfo::setSalutation()
     * @uses MidocoSellPassengerInfo::setCrsImportedName()
     * @uses MidocoSellPassengerInfo::setCrsImportedSalutation()
     * @uses MidocoSellPassengerInfo::setTitle()
     * @param string $name
     * @param string $forename
     * @param string $salutation
     * @param string $crsImportedName
     * @param string $crsImportedSalutation
     * @param string $title
     */
    public function __construct(?string $name = null, ?string $forename = null, ?string $salutation = null, ?string $crsImportedName = null, ?string $crsImportedSalutation = null, ?string $title = null)
    {
        $this
            ->setName($name)
            ->setForename($forename)
            ->setSalutation($salutation)
            ->setCrsImportedName($crsImportedName)
            ->setCrsImportedSalutation($crsImportedSalutation)
            ->setTitle($title);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassengerInfo
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
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassengerInfo
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassengerInfo
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
     * Get crsImportedName value
     * @return string|null
     */
    public function getCrsImportedName(): ?string
    {
        return $this->crsImportedName;
    }
    /**
     * Set crsImportedName value
     * @param string $crsImportedName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassengerInfo
     */
    public function setCrsImportedName(?string $crsImportedName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsImportedName) && !is_string($crsImportedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsImportedName, true), gettype($crsImportedName)), __LINE__);
        }
        $this->crsImportedName = $crsImportedName;
        
        return $this;
    }
    /**
     * Get crsImportedSalutation value
     * @return string|null
     */
    public function getCrsImportedSalutation(): ?string
    {
        return $this->crsImportedSalutation;
    }
    /**
     * Set crsImportedSalutation value
     * @param string $crsImportedSalutation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassengerInfo
     */
    public function setCrsImportedSalutation(?string $crsImportedSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($crsImportedSalutation) && !is_string($crsImportedSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsImportedSalutation, true), gettype($crsImportedSalutation)), __LINE__);
        }
        $this->crsImportedSalutation = $crsImportedSalutation;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassengerInfo
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
}
