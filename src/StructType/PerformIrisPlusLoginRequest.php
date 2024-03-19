<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformIrisPlusLoginRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PerformIrisPlusLoginRequest extends AbstractStructBase
{
    /**
     * The isExternal
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isExternal = null;
    /**
     * The irisPort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $irisPort = null;
    /**
     * The isUserLogin
     * @var bool|null
     */
    protected ?bool $isUserLogin = null;
    /**
     * The selectedAgencyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $selectedAgencyId = null;
    /**
     * The activeOrgunit
     * @var string|null
     */
    protected ?string $activeOrgunit = null;
    /**
     * The additionalWorkflow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $additionalWorkflow = null;
    /**
     * Constructor method for PerformIrisPlusLoginRequest
     * @uses PerformIrisPlusLoginRequest::setIsExternal()
     * @uses PerformIrisPlusLoginRequest::setIrisPort()
     * @uses PerformIrisPlusLoginRequest::setIsUserLogin()
     * @uses PerformIrisPlusLoginRequest::setSelectedAgencyId()
     * @uses PerformIrisPlusLoginRequest::setActiveOrgunit()
     * @uses PerformIrisPlusLoginRequest::setAdditionalWorkflow()
     * @param bool $isExternal
     * @param string $irisPort
     * @param bool $isUserLogin
     * @param string $selectedAgencyId
     * @param string $activeOrgunit
     * @param string $additionalWorkflow
     */
    public function __construct(?bool $isExternal = false, ?string $irisPort = null, ?bool $isUserLogin = null, ?string $selectedAgencyId = null, ?string $activeOrgunit = null, ?string $additionalWorkflow = null)
    {
        $this
            ->setIsExternal($isExternal)
            ->setIrisPort($irisPort)
            ->setIsUserLogin($isUserLogin)
            ->setSelectedAgencyId($selectedAgencyId)
            ->setActiveOrgunit($activeOrgunit)
            ->setAdditionalWorkflow($additionalWorkflow);
    }
    /**
     * Get isExternal value
     * @return bool|null
     */
    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }
    /**
     * Set isExternal value
     * @param bool $isExternal
     * @return \Pggns\MidocoApi\Order\StructType\PerformIrisPlusLoginRequest
     */
    public function setIsExternal(?bool $isExternal = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isExternal) && !is_bool($isExternal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExternal, true), gettype($isExternal)), __LINE__);
        }
        $this->isExternal = $isExternal;
        
        return $this;
    }
    /**
     * Get irisPort value
     * @return string|null
     */
    public function getIrisPort(): ?string
    {
        return $this->irisPort;
    }
    /**
     * Set irisPort value
     * @param string $irisPort
     * @return \Pggns\MidocoApi\Order\StructType\PerformIrisPlusLoginRequest
     */
    public function setIrisPort(?string $irisPort = null): self
    {
        // validation for constraint: string
        if (!is_null($irisPort) && !is_string($irisPort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($irisPort, true), gettype($irisPort)), __LINE__);
        }
        $this->irisPort = $irisPort;
        
        return $this;
    }
    /**
     * Get isUserLogin value
     * @return bool|null
     */
    public function getIsUserLogin(): ?bool
    {
        return $this->isUserLogin;
    }
    /**
     * Set isUserLogin value
     * @param bool $isUserLogin
     * @return \Pggns\MidocoApi\Order\StructType\PerformIrisPlusLoginRequest
     */
    public function setIsUserLogin(?bool $isUserLogin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUserLogin) && !is_bool($isUserLogin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUserLogin, true), gettype($isUserLogin)), __LINE__);
        }
        $this->isUserLogin = $isUserLogin;
        
        return $this;
    }
    /**
     * Get selectedAgencyId value
     * @return string|null
     */
    public function getSelectedAgencyId(): ?string
    {
        return $this->selectedAgencyId;
    }
    /**
     * Set selectedAgencyId value
     * @param string $selectedAgencyId
     * @return \Pggns\MidocoApi\Order\StructType\PerformIrisPlusLoginRequest
     */
    public function setSelectedAgencyId(?string $selectedAgencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($selectedAgencyId) && !is_string($selectedAgencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectedAgencyId, true), gettype($selectedAgencyId)), __LINE__);
        }
        $this->selectedAgencyId = $selectedAgencyId;
        
        return $this;
    }
    /**
     * Get activeOrgunit value
     * @return string|null
     */
    public function getActiveOrgunit(): ?string
    {
        return $this->activeOrgunit;
    }
    /**
     * Set activeOrgunit value
     * @param string $activeOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\PerformIrisPlusLoginRequest
     */
    public function setActiveOrgunit(?string $activeOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($activeOrgunit) && !is_string($activeOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activeOrgunit, true), gettype($activeOrgunit)), __LINE__);
        }
        $this->activeOrgunit = $activeOrgunit;
        
        return $this;
    }
    /**
     * Get additionalWorkflow value
     * @return string|null
     */
    public function getAdditionalWorkflow(): ?string
    {
        return $this->additionalWorkflow;
    }
    /**
     * Set additionalWorkflow value
     * @param string $additionalWorkflow
     * @return \Pggns\MidocoApi\Order\StructType\PerformIrisPlusLoginRequest
     */
    public function setAdditionalWorkflow(?string $additionalWorkflow = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalWorkflow) && !is_string($additionalWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalWorkflow, true), gettype($additionalWorkflow)), __LINE__);
        }
        $this->additionalWorkflow = $additionalWorkflow;
        
        return $this;
    }
}
