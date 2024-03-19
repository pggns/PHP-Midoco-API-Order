<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerDefinedFieldDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerDefinedFieldDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The remarkMapping
     * @var string|null
     */
    protected ?string $remarkMapping = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for CustomerDefinedFieldDTO
     * @uses CustomerDefinedFieldDTO::setCreationDate()
     * @uses CustomerDefinedFieldDTO::setCreationUser()
     * @uses CustomerDefinedFieldDTO::setDescription()
     * @uses CustomerDefinedFieldDTO::setFieldName()
     * @uses CustomerDefinedFieldDTO::setModifyDate()
     * @uses CustomerDefinedFieldDTO::setModifyUser()
     * @uses CustomerDefinedFieldDTO::setRemarkMapping()
     * @uses CustomerDefinedFieldDTO::setUnitName()
     * @param string $creationDate
     * @param int $creationUser
     * @param string $description
     * @param string $fieldName
     * @param string $modifyDate
     * @param int $modifyUser
     * @param string $remarkMapping
     * @param string $unitName
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?string $description = null, ?string $fieldName = null, ?string $modifyDate = null, ?int $modifyUser = null, ?string $remarkMapping = null, ?string $unitName = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setFieldName($fieldName)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setRemarkMapping($remarkMapping)
            ->setUnitName($unitName);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
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
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get remarkMapping value
     * @return string|null
     */
    public function getRemarkMapping(): ?string
    {
        return $this->remarkMapping;
    }
    /**
     * Set remarkMapping value
     * @param string $remarkMapping
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
     */
    public function setRemarkMapping(?string $remarkMapping = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkMapping) && !is_string($remarkMapping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkMapping, true), gettype($remarkMapping)), __LINE__);
        }
        $this->remarkMapping = $remarkMapping;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDefinedFieldDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
