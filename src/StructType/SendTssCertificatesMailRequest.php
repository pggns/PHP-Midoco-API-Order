<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTssCertificatesMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendTssCertificatesMailRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The tssSystem
     * @var string|null
     */
    protected ?string $tssSystem = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The emailAddresses
     * @var string|null
     */
    protected ?string $emailAddresses = null;
    /**
     * Constructor method for SendTssCertificatesMailRequest
     * @uses SendTssCertificatesMailRequest::setUnitName()
     * @uses SendTssCertificatesMailRequest::setTssSystem()
     * @uses SendTssCertificatesMailRequest::setTssId()
     * @uses SendTssCertificatesMailRequest::setEmailAddresses()
     * @param string $unitName
     * @param string $tssSystem
     * @param string $tssId
     * @param string $emailAddresses
     */
    public function __construct(?string $unitName = null, ?string $tssSystem = null, ?string $tssId = null, ?string $emailAddresses = null)
    {
        $this
            ->setUnitName($unitName)
            ->setTssSystem($tssSystem)
            ->setTssId($tssId)
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
     * @return \Pggns\MidocoApi\Order\StructType\SendTssCertificatesMailRequest
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
     * Get tssSystem value
     * @return string|null
     */
    public function getTssSystem(): ?string
    {
        return $this->tssSystem;
    }
    /**
     * Set tssSystem value
     * @param string $tssSystem
     * @return \Pggns\MidocoApi\Order\StructType\SendTssCertificatesMailRequest
     */
    public function setTssSystem(?string $tssSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($tssSystem) && !is_string($tssSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssSystem, true), gettype($tssSystem)), __LINE__);
        }
        $this->tssSystem = $tssSystem;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\SendTssCertificatesMailRequest
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SendTssCertificatesMailRequest
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
