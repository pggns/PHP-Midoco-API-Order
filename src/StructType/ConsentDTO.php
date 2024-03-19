<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ConsentDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isGroup
     * @var bool|null
     */
    protected ?bool $isGroup = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for ConsentDTO
     * @uses ConsentDTO::setDescription()
     * @uses ConsentDTO::setId()
     * @uses ConsentDTO::setIsActive()
     * @uses ConsentDTO::setIsGroup()
     * @uses ConsentDTO::setType()
     * @uses ConsentDTO::setValidFrom()
     * @uses ConsentDTO::setValidTo()
     * @param string $description
     * @param string $id
     * @param bool $isActive
     * @param bool $isGroup
     * @param string $type
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $description = null, ?string $id = null, ?bool $isActive = null, ?bool $isGroup = null, ?string $type = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setDescription($description)
            ->setId($id)
            ->setIsActive($isActive)
            ->setIsGroup($isGroup)
            ->setType($type)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\ConsentDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ConsentDTO
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
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Order\StructType\ConsentDTO
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get isGroup value
     * @return bool|null
     */
    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }
    /**
     * Set isGroup value
     * @param bool $isGroup
     * @return \Pggns\MidocoApi\Order\StructType\ConsentDTO
     */
    public function setIsGroup(?bool $isGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGroup) && !is_bool($isGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGroup, true), gettype($isGroup)), __LINE__);
        }
        $this->isGroup = $isGroup;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ConsentDTO
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
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\ConsentDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\ConsentDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
