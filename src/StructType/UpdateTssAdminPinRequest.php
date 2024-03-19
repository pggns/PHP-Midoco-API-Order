<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTssAdminPinRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateTssAdminPinRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The tssSystem
     * Meta information extracted from the WSDL
     * - default: FISKALY
     * @var string|null
     */
    protected ?string $tssSystem = null;
    /**
     * The tssId
     * Meta information extracted from the WSDL
     * - documentation: The TSS id.
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The adminPuk
     * Meta information extracted from the WSDL
     * - documentation: The admin puk - just in case.
     * @var string|null
     */
    protected ?string $adminPuk = null;
    /**
     * The adminPin
     * Meta information extracted from the WSDL
     * - documentation: The new admin pin.
     * @var string|null
     */
    protected ?string $adminPin = null;
    /**
     * Constructor method for UpdateTssAdminPinRequest
     * @uses UpdateTssAdminPinRequest::setUnitName()
     * @uses UpdateTssAdminPinRequest::setTssSystem()
     * @uses UpdateTssAdminPinRequest::setTssId()
     * @uses UpdateTssAdminPinRequest::setAdminPuk()
     * @uses UpdateTssAdminPinRequest::setAdminPin()
     * @param string $unitName
     * @param string $tssSystem
     * @param string $tssId
     * @param string $adminPuk
     * @param string $adminPin
     */
    public function __construct(?string $unitName = null, ?string $tssSystem = 'FISKALY', ?string $tssId = null, ?string $adminPuk = null, ?string $adminPin = null)
    {
        $this
            ->setUnitName($unitName)
            ->setTssSystem($tssSystem)
            ->setTssId($tssId)
            ->setAdminPuk($adminPuk)
            ->setAdminPin($adminPin);
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
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTssAdminPinRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTssAdminPinRequest
     */
    public function setTssSystem(?string $tssSystem = 'FISKALY'): self
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
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTssAdminPinRequest
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
     * Get adminPuk value
     * @return string|null
     */
    public function getAdminPuk(): ?string
    {
        return $this->adminPuk;
    }
    /**
     * Set adminPuk value
     * @param string $adminPuk
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTssAdminPinRequest
     */
    public function setAdminPuk(?string $adminPuk = null): self
    {
        // validation for constraint: string
        if (!is_null($adminPuk) && !is_string($adminPuk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminPuk, true), gettype($adminPuk)), __LINE__);
        }
        $this->adminPuk = $adminPuk;
        
        return $this;
    }
    /**
     * Get adminPin value
     * @return string|null
     */
    public function getAdminPin(): ?string
    {
        return $this->adminPin;
    }
    /**
     * Set adminPin value
     * @param string $adminPin
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTssAdminPinRequest
     */
    public function setAdminPin(?string $adminPin = null): self
    {
        // validation for constraint: string
        if (!is_null($adminPin) && !is_string($adminPin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminPin, true), gettype($adminPin)), __LINE__);
        }
        $this->adminPin = $adminPin;
        
        return $this;
    }
}
