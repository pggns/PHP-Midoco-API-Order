<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdapterDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdapterDTO extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The adapterType
     * @var string|null
     */
    protected ?string $adapterType = null;
    /**
     * The classname
     * @var string|null
     */
    protected ?string $classname = null;
    /**
     * The documentationUrl
     * @var string|null
     */
    protected ?string $documentationUrl = null;
    /**
     * The jndiUrl
     * @var string|null
     */
    protected ?string $jndiUrl = null;
    /**
     * The validator
     * @var string|null
     */
    protected ?string $validator = null;
    /**
     * Constructor method for AdapterDTO
     * @uses AdapterDTO::setAdapterId()
     * @uses AdapterDTO::setAdapterType()
     * @uses AdapterDTO::setClassname()
     * @uses AdapterDTO::setDocumentationUrl()
     * @uses AdapterDTO::setJndiUrl()
     * @uses AdapterDTO::setValidator()
     * @param string $adapterId
     * @param string $adapterType
     * @param string $classname
     * @param string $documentationUrl
     * @param string $jndiUrl
     * @param string $validator
     */
    public function __construct(?string $adapterId = null, ?string $adapterType = null, ?string $classname = null, ?string $documentationUrl = null, ?string $jndiUrl = null, ?string $validator = null)
    {
        $this
            ->setAdapterId($adapterId)
            ->setAdapterType($adapterType)
            ->setClassname($classname)
            ->setDocumentationUrl($documentationUrl)
            ->setJndiUrl($jndiUrl)
            ->setValidator($validator);
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDTO
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get adapterType value
     * @return string|null
     */
    public function getAdapterType(): ?string
    {
        return $this->adapterType;
    }
    /**
     * Set adapterType value
     * @param string $adapterType
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDTO
     */
    public function setAdapterType(?string $adapterType = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterType) && !is_string($adapterType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterType, true), gettype($adapterType)), __LINE__);
        }
        $this->adapterType = $adapterType;
        
        return $this;
    }
    /**
     * Get classname value
     * @return string|null
     */
    public function getClassname(): ?string
    {
        return $this->classname;
    }
    /**
     * Set classname value
     * @param string $classname
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDTO
     */
    public function setClassname(?string $classname = null): self
    {
        // validation for constraint: string
        if (!is_null($classname) && !is_string($classname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classname, true), gettype($classname)), __LINE__);
        }
        $this->classname = $classname;
        
        return $this;
    }
    /**
     * Get documentationUrl value
     * @return string|null
     */
    public function getDocumentationUrl(): ?string
    {
        return $this->documentationUrl;
    }
    /**
     * Set documentationUrl value
     * @param string $documentationUrl
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDTO
     */
    public function setDocumentationUrl(?string $documentationUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($documentationUrl) && !is_string($documentationUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentationUrl, true), gettype($documentationUrl)), __LINE__);
        }
        $this->documentationUrl = $documentationUrl;
        
        return $this;
    }
    /**
     * Get jndiUrl value
     * @return string|null
     */
    public function getJndiUrl(): ?string
    {
        return $this->jndiUrl;
    }
    /**
     * Set jndiUrl value
     * @param string $jndiUrl
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDTO
     */
    public function setJndiUrl(?string $jndiUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($jndiUrl) && !is_string($jndiUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jndiUrl, true), gettype($jndiUrl)), __LINE__);
        }
        $this->jndiUrl = $jndiUrl;
        
        return $this;
    }
    /**
     * Get validator value
     * @return string|null
     */
    public function getValidator(): ?string
    {
        return $this->validator;
    }
    /**
     * Set validator value
     * @param string $validator
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDTO
     */
    public function setValidator(?string $validator = null): self
    {
        // validation for constraint: string
        if (!is_null($validator) && !is_string($validator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validator, true), gettype($validator)), __LINE__);
        }
        $this->validator = $validator;
        
        return $this;
    }
}
