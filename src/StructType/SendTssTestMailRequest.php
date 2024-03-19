<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTssTestMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendTssTestMailRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The emailAddresses
     * @var string|null
     */
    protected ?string $emailAddresses = null;
    /**
     * Constructor method for SendTssTestMailRequest
     * @uses SendTssTestMailRequest::setUnitName()
     * @uses SendTssTestMailRequest::setEmailAddresses()
     * @param string $unitName
     * @param string $emailAddresses
     */
    public function __construct(?string $unitName = null, ?string $emailAddresses = null)
    {
        $this
            ->setUnitName($unitName)
            ->setEmailAddresses($emailAddresses);
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
     * @return \Pggns\MidocoApi\Order\StructType\SendTssTestMailRequest
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
     * Get emailAddresses value
     * @return string|null
     */
    public function getEmailAddresses(): ?string
    {
        return $this->emailAddresses;
    }
    /**
     * Set emailAddresses value
     * @param string $emailAddresses
     * @return \Pggns\MidocoApi\Order\StructType\SendTssTestMailRequest
     */
    public function setEmailAddresses(?string $emailAddresses = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddresses) && !is_string($emailAddresses)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddresses, true), gettype($emailAddresses)), __LINE__);
        }
        $this->emailAddresses = $emailAddresses;
        
        return $this;
    }
}
