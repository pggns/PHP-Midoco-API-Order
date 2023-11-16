<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDSBookingIdentification StructType
 * @subpackage Structs
 */
class GDSBookingIdentification extends AbstractStructBase
{
    /**
     * The gdsName
     * @var string|null
     */
    protected ?string $gdsName = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The gdsAgent
     * @var string|null
     */
    protected ?string $gdsAgent = null;
    /**
     * The gdsAgencyNumber
     * @var string|null
     */
    protected ?string $gdsAgencyNumber = null;
    /**
     * Constructor method for GDSBookingIdentification
     * @uses GDSBookingIdentification::setGdsName()
     * @uses GDSBookingIdentification::setCreationDate()
     * @uses GDSBookingIdentification::setGdsAgent()
     * @uses GDSBookingIdentification::setGdsAgencyNumber()
     * @param string $gdsName
     * @param string $creationDate
     * @param string $gdsAgent
     * @param string $gdsAgencyNumber
     */
    public function __construct(?string $gdsName = null, ?string $creationDate = null, ?string $gdsAgent = null, ?string $gdsAgencyNumber = null)
    {
        $this
            ->setGdsName($gdsName)
            ->setCreationDate($creationDate)
            ->setGdsAgent($gdsAgent)
            ->setGdsAgencyNumber($gdsAgencyNumber);
    }
    /**
     * Get gdsName value
     * @return string|null
     */
    public function getGdsName(): ?string
    {
        return $this->gdsName;
    }
    /**
     * Set gdsName value
     * @param string $gdsName
     * @return \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification
     */
    public function setGdsName(?string $gdsName = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsName) && !is_string($gdsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsName, true), gettype($gdsName)), __LINE__);
        }
        $this->gdsName = $gdsName;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get gdsAgent value
     * @return string|null
     */
    public function getGdsAgent(): ?string
    {
        return $this->gdsAgent;
    }
    /**
     * Set gdsAgent value
     * @param string $gdsAgent
     * @return \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification
     */
    public function setGdsAgent(?string $gdsAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsAgent) && !is_string($gdsAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsAgent, true), gettype($gdsAgent)), __LINE__);
        }
        $this->gdsAgent = $gdsAgent;
        
        return $this;
    }
    /**
     * Get gdsAgencyNumber value
     * @return string|null
     */
    public function getGdsAgencyNumber(): ?string
    {
        return $this->gdsAgencyNumber;
    }
    /**
     * Set gdsAgencyNumber value
     * @param string $gdsAgencyNumber
     * @return \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification
     */
    public function setGdsAgencyNumber(?string $gdsAgencyNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsAgencyNumber) && !is_string($gdsAgencyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsAgencyNumber, true), gettype($gdsAgencyNumber)), __LINE__);
        }
        $this->gdsAgencyNumber = $gdsAgencyNumber;
        
        return $this;
    }
}
