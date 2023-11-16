<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGdsProfileSearchResult StructType
 * @subpackage Structs
 */
class MidocoGdsProfileSearchResult extends AbstractStructBase
{
    /**
     * The profileNumber
     * @var string|null
     */
    protected ?string $profileNumber = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for MidocoGdsProfileSearchResult
     * @uses MidocoGdsProfileSearchResult::setProfileNumber()
     * @uses MidocoGdsProfileSearchResult::setName()
     * @uses MidocoGdsProfileSearchResult::setForename()
     * @uses MidocoGdsProfileSearchResult::setType()
     * @param string $profileNumber
     * @param string $name
     * @param string $forename
     * @param string $type
     */
    public function __construct(?string $profileNumber = null, ?string $name = null, ?string $forename = null, ?string $type = null)
    {
        $this
            ->setProfileNumber($profileNumber)
            ->setName($name)
            ->setForename($forename)
            ->setType($type);
    }
    /**
     * Get profileNumber value
     * @return string|null
     */
    public function getProfileNumber(): ?string
    {
        return $this->profileNumber;
    }
    /**
     * Set profileNumber value
     * @param string $profileNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGdsProfileSearchResult
     */
    public function setProfileNumber(?string $profileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($profileNumber) && !is_string($profileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileNumber, true), gettype($profileNumber)), __LINE__);
        }
        $this->profileNumber = $profileNumber;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGdsProfileSearchResult
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
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGdsProfileSearchResult
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGdsProfileSearchResult
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
}
