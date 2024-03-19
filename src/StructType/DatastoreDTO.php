<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatastoreDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DatastoreDTO extends AbstractStructBase
{
    /**
     * The datastoreId
     * @var string|null
     */
    protected ?string $datastoreId = null;
    /**
     * The jndiUri
     * @var string|null
     */
    protected ?string $jndiUri = null;
    /**
     * The sessionUri
     * @var string|null
     */
    protected ?string $sessionUri = null;
    /**
     * Constructor method for DatastoreDTO
     * @uses DatastoreDTO::setDatastoreId()
     * @uses DatastoreDTO::setJndiUri()
     * @uses DatastoreDTO::setSessionUri()
     * @param string $datastoreId
     * @param string $jndiUri
     * @param string $sessionUri
     */
    public function __construct(?string $datastoreId = null, ?string $jndiUri = null, ?string $sessionUri = null)
    {
        $this
            ->setDatastoreId($datastoreId)
            ->setJndiUri($jndiUri)
            ->setSessionUri($sessionUri);
    }
    /**
     * Get datastoreId value
     * @return string|null
     */
    public function getDatastoreId(): ?string
    {
        return $this->datastoreId;
    }
    /**
     * Set datastoreId value
     * @param string $datastoreId
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreDTO
     */
    public function setDatastoreId(?string $datastoreId = null): self
    {
        // validation for constraint: string
        if (!is_null($datastoreId) && !is_string($datastoreId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datastoreId, true), gettype($datastoreId)), __LINE__);
        }
        $this->datastoreId = $datastoreId;
        
        return $this;
    }
    /**
     * Get jndiUri value
     * @return string|null
     */
    public function getJndiUri(): ?string
    {
        return $this->jndiUri;
    }
    /**
     * Set jndiUri value
     * @param string $jndiUri
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreDTO
     */
    public function setJndiUri(?string $jndiUri = null): self
    {
        // validation for constraint: string
        if (!is_null($jndiUri) && !is_string($jndiUri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jndiUri, true), gettype($jndiUri)), __LINE__);
        }
        $this->jndiUri = $jndiUri;
        
        return $this;
    }
    /**
     * Get sessionUri value
     * @return string|null
     */
    public function getSessionUri(): ?string
    {
        return $this->sessionUri;
    }
    /**
     * Set sessionUri value
     * @param string $sessionUri
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreDTO
     */
    public function setSessionUri(?string $sessionUri = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionUri) && !is_string($sessionUri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionUri, true), gettype($sessionUri)), __LINE__);
        }
        $this->sessionUri = $sessionUri;
        
        return $this;
    }
}
