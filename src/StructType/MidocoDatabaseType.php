<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDatabaseType StructType
 * @subpackage Structs
 */
class MidocoDatabaseType extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The host
     * @var string|null
     */
    protected ?string $host = null;
    /**
     * The instance
     * @var string|null
     */
    protected ?string $instance = null;
    /**
     * The port
     * @var string|null
     */
    protected ?string $port = null;
    /**
     * The inherited
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $inherited = null;
    /**
     * The database
     * @var string|null
     */
    protected ?string $database = null;
    /**
     * Constructor method for MidocoDatabaseType
     * @uses MidocoDatabaseType::setType()
     * @uses MidocoDatabaseType::setHost()
     * @uses MidocoDatabaseType::setInstance()
     * @uses MidocoDatabaseType::setPort()
     * @uses MidocoDatabaseType::setInherited()
     * @uses MidocoDatabaseType::setDatabase()
     * @param string $type
     * @param string $host
     * @param string $instance
     * @param string $port
     * @param bool $inherited
     * @param string $database
     */
    public function __construct(?string $type = null, ?string $host = null, ?string $instance = null, ?string $port = null, ?bool $inherited = false, ?string $database = null)
    {
        $this
            ->setType($type)
            ->setHost($host)
            ->setInstance($instance)
            ->setPort($port)
            ->setInherited($inherited)
            ->setDatabase($database);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get host value
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->host;
    }
    /**
     * Set host value
     * @param string $host
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType
     */
    public function setHost(?string $host = null): self
    {
        // validation for constraint: string
        if (!is_null($host) && !is_string($host)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($host, true), gettype($host)), __LINE__);
        }
        $this->host = $host;
        
        return $this;
    }
    /**
     * Get instance value
     * @return string|null
     */
    public function getInstance(): ?string
    {
        return $this->instance;
    }
    /**
     * Set instance value
     * @param string $instance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType
     */
    public function setInstance(?string $instance = null): self
    {
        // validation for constraint: string
        if (!is_null($instance) && !is_string($instance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instance, true), gettype($instance)), __LINE__);
        }
        $this->instance = $instance;
        
        return $this;
    }
    /**
     * Get port value
     * @return string|null
     */
    public function getPort(): ?string
    {
        return $this->port;
    }
    /**
     * Set port value
     * @param string $port
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType
     */
    public function setPort(?string $port = null): self
    {
        // validation for constraint: string
        if (!is_null($port) && !is_string($port)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($port, true), gettype($port)), __LINE__);
        }
        $this->port = $port;
        
        return $this;
    }
    /**
     * Get inherited value
     * @return bool|null
     */
    public function getInherited(): ?bool
    {
        return $this->inherited;
    }
    /**
     * Set inherited value
     * @param bool $inherited
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType
     */
    public function setInherited(?bool $inherited = false): self
    {
        // validation for constraint: boolean
        if (!is_null($inherited) && !is_bool($inherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inherited, true), gettype($inherited)), __LINE__);
        }
        $this->inherited = $inherited;
        
        return $this;
    }
    /**
     * Get database value
     * @return string|null
     */
    public function getDatabase(): ?string
    {
        return $this->database;
    }
    /**
     * Set database value
     * @param string $database
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType
     */
    public function setDatabase(?string $database = null): self
    {
        // validation for constraint: string
        if (!is_null($database) && !is_string($database)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($database, true), gettype($database)), __LINE__);
        }
        $this->database = $database;
        
        return $this;
    }
}
