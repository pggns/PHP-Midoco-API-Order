<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderCustomer4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderCustomer4Printing extends MidocoOrderCustomerType
{
    /**
     * The addresseeLine1
     * @var string|null
     */
    protected ?string $addresseeLine1 = null;
    /**
     * The addresseeLine2
     * @var string|null
     */
    protected ?string $addresseeLine2 = null;
    /**
     * The mailSalutation
     * @var string|null
     */
    protected ?string $mailSalutation = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for MidocoOrderCustomer4Printing
     * @uses MidocoOrderCustomer4Printing::setAddresseeLine1()
     * @uses MidocoOrderCustomer4Printing::setAddresseeLine2()
     * @uses MidocoOrderCustomer4Printing::setMailSalutation()
     * @uses MidocoOrderCustomer4Printing::setLanguage()
     * @param string $addresseeLine1
     * @param string $addresseeLine2
     * @param string $mailSalutation
     * @param string $language
     */
    public function __construct(?string $addresseeLine1 = null, ?string $addresseeLine2 = null, ?string $mailSalutation = null, ?string $language = null)
    {
        $this
            ->setAddresseeLine1($addresseeLine1)
            ->setAddresseeLine2($addresseeLine2)
            ->setMailSalutation($mailSalutation)
            ->setLanguage($language);
    }
    /**
     * Get addresseeLine1 value
     * @return string|null
     */
    public function getAddresseeLine1(): ?string
    {
        return $this->addresseeLine1;
    }
    /**
     * Set addresseeLine1 value
     * @param string $addresseeLine1
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer4Printing
     */
    public function setAddresseeLine1(?string $addresseeLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeLine1) && !is_string($addresseeLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeLine1, true), gettype($addresseeLine1)), __LINE__);
        }
        $this->addresseeLine1 = $addresseeLine1;
        
        return $this;
    }
    /**
     * Get addresseeLine2 value
     * @return string|null
     */
    public function getAddresseeLine2(): ?string
    {
        return $this->addresseeLine2;
    }
    /**
     * Set addresseeLine2 value
     * @param string $addresseeLine2
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer4Printing
     */
    public function setAddresseeLine2(?string $addresseeLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeLine2) && !is_string($addresseeLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeLine2, true), gettype($addresseeLine2)), __LINE__);
        }
        $this->addresseeLine2 = $addresseeLine2;
        
        return $this;
    }
    /**
     * Get mailSalutation value
     * @return string|null
     */
    public function getMailSalutation(): ?string
    {
        return $this->mailSalutation;
    }
    /**
     * Set mailSalutation value
     * @param string $mailSalutation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer4Printing
     */
    public function setMailSalutation(?string $mailSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($mailSalutation) && !is_string($mailSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailSalutation, true), gettype($mailSalutation)), __LINE__);
        }
        $this->mailSalutation = $mailSalutation;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer4Printing
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
