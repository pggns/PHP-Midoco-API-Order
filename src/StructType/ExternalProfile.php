<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalProfile StructType
 * @subpackage Structs
 */
class ExternalProfile extends AbstractStructBase
{
    /**
     * The gds
     * @var string|null
     */
    protected ?string $gds = null;
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * Constructor method for ExternalProfile
     * @uses ExternalProfile::setGds()
     * @uses ExternalProfile::setId()
     * @uses ExternalProfile::setVersion()
     * @param string $gds
     * @param string $id
     * @param int $version
     */
    public function __construct(?string $gds = null, ?string $id = null, ?int $version = null)
    {
        $this
            ->setGds($gds)
            ->setId($id)
            ->setVersion($version);
    }
    /**
     * Get gds value
     * @return string|null
     */
    public function getGds(): ?string
    {
        return $this->gds;
    }
    /**
     * Set gds value
     * @param string $gds
     * @return \Pggns\MidocoApi\Order\StructType\ExternalProfile
     */
    public function setGds(?string $gds = null): self
    {
        // validation for constraint: string
        if (!is_null($gds) && !is_string($gds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gds, true), gettype($gds)), __LINE__);
        }
        $this->gds = $gds;
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Order\StructType\ExternalProfile
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Pggns\MidocoApi\Order\StructType\ExternalProfile
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
