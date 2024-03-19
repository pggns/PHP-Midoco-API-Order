<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MfGroupLocalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MfGroupLocalDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The groupId
     * @var string|null
     */
    protected ?string $groupId = null;
    /**
     * The locale
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for MfGroupLocalDTO
     * @uses MfGroupLocalDTO::setDescription()
     * @uses MfGroupLocalDTO::setGroupId()
     * @uses MfGroupLocalDTO::setLocale()
     * @uses MfGroupLocalDTO::setName()
     * @param string $description
     * @param string $groupId
     * @param string $locale
     * @param string $name
     */
    public function __construct(?string $description = null, ?string $groupId = null, ?string $locale = null, ?string $name = null)
    {
        $this
            ->setDescription($description)
            ->setGroupId($groupId)
            ->setLocale($locale)
            ->setName($name);
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
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupLocalDTO
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
     * Get groupId value
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $groupId
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupLocalDTO
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupLocalDTO
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupLocalDTO
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
}
