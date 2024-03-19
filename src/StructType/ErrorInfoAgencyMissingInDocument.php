<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorInfoAgencyMissingInDocument StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ErrorInfoAgencyMissingInDocument extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The agencyNo
     * @var string|null
     */
    protected ?string $agencyNo = null;
    /**
     * Constructor method for ErrorInfoAgencyMissingInDocument
     * @uses ErrorInfoAgencyMissingInDocument::setMediatorId()
     * @uses ErrorInfoAgencyMissingInDocument::setStreet()
     * @uses ErrorInfoAgencyMissingInDocument::setName()
     * @uses ErrorInfoAgencyMissingInDocument::setCity()
     * @uses ErrorInfoAgencyMissingInDocument::setAgencyNo()
     * @param string $mediatorId
     * @param string $street
     * @param string $name
     * @param string $city
     * @param string $agencyNo
     */
    public function __construct(?string $mediatorId = null, ?string $street = null, ?string $name = null, ?string $city = null, ?string $agencyNo = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setStreet($street)
            ->setName($name)
            ->setCity($city)
            ->setAgencyNo($agencyNo);
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\ErrorInfoAgencyMissingInDocument
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\ErrorInfoAgencyMissingInDocument
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ErrorInfoAgencyMissingInDocument
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
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\ErrorInfoAgencyMissingInDocument
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get agencyNo value
     * @return string|null
     */
    public function getAgencyNo(): ?string
    {
        return $this->agencyNo;
    }
    /**
     * Set agencyNo value
     * @param string $agencyNo
     * @return \Pggns\MidocoApi\Order\StructType\ErrorInfoAgencyMissingInDocument
     */
    public function setAgencyNo(?string $agencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyNo) && !is_string($agencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyNo, true), gettype($agencyNo)), __LINE__);
        }
        $this->agencyNo = $agencyNo;
        
        return $this;
    }
}
