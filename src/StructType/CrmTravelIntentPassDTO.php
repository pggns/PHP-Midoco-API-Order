<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmTravelIntentPassDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmTravelIntentPassDTO extends AbstractStructBase
{
    /**
     * The age
     * @var int|null
     */
    protected ?int $age = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The intentPosition
     * @var int|null
     */
    protected ?int $intentPosition = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * Constructor method for CrmTravelIntentPassDTO
     * @uses CrmTravelIntentPassDTO::setAge()
     * @uses CrmTravelIntentPassDTO::setCustomerId()
     * @uses CrmTravelIntentPassDTO::setForename()
     * @uses CrmTravelIntentPassDTO::setIntentPosition()
     * @uses CrmTravelIntentPassDTO::setName()
     * @uses CrmTravelIntentPassDTO::setPosition()
     * @uses CrmTravelIntentPassDTO::setSalutation()
     * @uses CrmTravelIntentPassDTO::setTitle()
     * @param int $age
     * @param int $customerId
     * @param string $forename
     * @param int $intentPosition
     * @param string $name
     * @param int $position
     * @param string $salutation
     * @param string $title
     */
    public function __construct(?int $age = null, ?int $customerId = null, ?string $forename = null, ?int $intentPosition = null, ?string $name = null, ?int $position = null, ?string $salutation = null, ?string $title = null)
    {
        $this
            ->setAge($age)
            ->setCustomerId($customerId)
            ->setForename($forename)
            ->setIntentPosition($intentPosition)
            ->setName($name)
            ->setPosition($position)
            ->setSalutation($salutation)
            ->setTitle($title);
    }
    /**
     * Get age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }
    /**
     * Set age value
     * @param int $age
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->age = $age;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
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
     * Get intentPosition value
     * @return int|null
     */
    public function getIntentPosition(): ?int
    {
        return $this->intentPosition;
    }
    /**
     * Set intentPosition value
     * @param int $intentPosition
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
     */
    public function setIntentPosition(?int $intentPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($intentPosition) && !(is_int($intentPosition) || ctype_digit($intentPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intentPosition, true), gettype($intentPosition)), __LINE__);
        }
        $this->intentPosition = $intentPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentPassDTO
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
}
