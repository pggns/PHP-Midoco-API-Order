<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserQueryDefParamDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserQueryDefParamDTO extends AbstractStructBase
{
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The compareWithField
     * @var bool|null
     */
    protected ?bool $compareWithField = null;
    /**
     * The displayIndex
     * @var int|null
     */
    protected ?int $displayIndex = null;
    /**
     * The existent
     * @var bool|null
     */
    protected ?bool $existent = null;
    /**
     * The fieldDbname
     * @var string|null
     */
    protected ?string $fieldDbname = null;
    /**
     * The inPackage
     * @var bool|null
     */
    protected ?bool $inPackage = null;
    /**
     * The isCaseInsensitive
     * @var bool|null
     */
    protected ?bool $isCaseInsensitive = null;
    /**
     * The operation
     * @var string|null
     */
    protected ?string $operation = null;
    /**
     * The paramValues
     * @var string|null
     */
    protected ?string $paramValues = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * The visible
     * @var bool|null
     */
    protected ?bool $visible = null;
    /**
     * Constructor method for UserQueryDefParamDTO
     * @uses UserQueryDefParamDTO::setCategory()
     * @uses UserQueryDefParamDTO::setCompareWithField()
     * @uses UserQueryDefParamDTO::setDisplayIndex()
     * @uses UserQueryDefParamDTO::setExistent()
     * @uses UserQueryDefParamDTO::setFieldDbname()
     * @uses UserQueryDefParamDTO::setInPackage()
     * @uses UserQueryDefParamDTO::setIsCaseInsensitive()
     * @uses UserQueryDefParamDTO::setOperation()
     * @uses UserQueryDefParamDTO::setParamValues()
     * @uses UserQueryDefParamDTO::setPosition()
     * @uses UserQueryDefParamDTO::setQueryId()
     * @uses UserQueryDefParamDTO::setVisible()
     * @param string $category
     * @param bool $compareWithField
     * @param int $displayIndex
     * @param bool $existent
     * @param string $fieldDbname
     * @param bool $inPackage
     * @param bool $isCaseInsensitive
     * @param string $operation
     * @param string $paramValues
     * @param int $position
     * @param int $queryId
     * @param bool $visible
     */
    public function __construct(?string $category = null, ?bool $compareWithField = null, ?int $displayIndex = null, ?bool $existent = null, ?string $fieldDbname = null, ?bool $inPackage = null, ?bool $isCaseInsensitive = null, ?string $operation = null, ?string $paramValues = null, ?int $position = null, ?int $queryId = null, ?bool $visible = null)
    {
        $this
            ->setCategory($category)
            ->setCompareWithField($compareWithField)
            ->setDisplayIndex($displayIndex)
            ->setExistent($existent)
            ->setFieldDbname($fieldDbname)
            ->setInPackage($inPackage)
            ->setIsCaseInsensitive($isCaseInsensitive)
            ->setOperation($operation)
            ->setParamValues($paramValues)
            ->setPosition($position)
            ->setQueryId($queryId)
            ->setVisible($visible);
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get compareWithField value
     * @return bool|null
     */
    public function getCompareWithField(): ?bool
    {
        return $this->compareWithField;
    }
    /**
     * Set compareWithField value
     * @param bool $compareWithField
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setCompareWithField(?bool $compareWithField = null): self
    {
        // validation for constraint: boolean
        if (!is_null($compareWithField) && !is_bool($compareWithField)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($compareWithField, true), gettype($compareWithField)), __LINE__);
        }
        $this->compareWithField = $compareWithField;
        
        return $this;
    }
    /**
     * Get displayIndex value
     * @return int|null
     */
    public function getDisplayIndex(): ?int
    {
        return $this->displayIndex;
    }
    /**
     * Set displayIndex value
     * @param int $displayIndex
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setDisplayIndex(?int $displayIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($displayIndex) && !(is_int($displayIndex) || ctype_digit($displayIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayIndex, true), gettype($displayIndex)), __LINE__);
        }
        $this->displayIndex = $displayIndex;
        
        return $this;
    }
    /**
     * Get existent value
     * @return bool|null
     */
    public function getExistent(): ?bool
    {
        return $this->existent;
    }
    /**
     * Set existent value
     * @param bool $existent
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setExistent(?bool $existent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existent) && !is_bool($existent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existent, true), gettype($existent)), __LINE__);
        }
        $this->existent = $existent;
        
        return $this;
    }
    /**
     * Get fieldDbname value
     * @return string|null
     */
    public function getFieldDbname(): ?string
    {
        return $this->fieldDbname;
    }
    /**
     * Set fieldDbname value
     * @param string $fieldDbname
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setFieldDbname(?string $fieldDbname = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldDbname) && !is_string($fieldDbname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldDbname, true), gettype($fieldDbname)), __LINE__);
        }
        $this->fieldDbname = $fieldDbname;
        
        return $this;
    }
    /**
     * Get inPackage value
     * @return bool|null
     */
    public function getInPackage(): ?bool
    {
        return $this->inPackage;
    }
    /**
     * Set inPackage value
     * @param bool $inPackage
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setInPackage(?bool $inPackage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inPackage) && !is_bool($inPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPackage, true), gettype($inPackage)), __LINE__);
        }
        $this->inPackage = $inPackage;
        
        return $this;
    }
    /**
     * Get isCaseInsensitive value
     * @return bool|null
     */
    public function getIsCaseInsensitive(): ?bool
    {
        return $this->isCaseInsensitive;
    }
    /**
     * Set isCaseInsensitive value
     * @param bool $isCaseInsensitive
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setIsCaseInsensitive(?bool $isCaseInsensitive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCaseInsensitive) && !is_bool($isCaseInsensitive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCaseInsensitive, true), gettype($isCaseInsensitive)), __LINE__);
        }
        $this->isCaseInsensitive = $isCaseInsensitive;
        
        return $this;
    }
    /**
     * Get operation value
     * @return string|null
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }
    /**
     * Set operation value
     * @param string $operation
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setOperation(?string $operation = null): self
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        $this->operation = $operation;
        
        return $this;
    }
    /**
     * Get paramValues value
     * @return string|null
     */
    public function getParamValues(): ?string
    {
        return $this->paramValues;
    }
    /**
     * Set paramValues value
     * @param string $paramValues
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setParamValues(?string $paramValues = null): self
    {
        // validation for constraint: string
        if (!is_null($paramValues) && !is_string($paramValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramValues, true), gettype($paramValues)), __LINE__);
        }
        $this->paramValues = $paramValues;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
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
     * Get queryId value
     * @return int|null
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param int $queryId
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setQueryId(?int $queryId = null): self
    {
        // validation for constraint: int
        if (!is_null($queryId) && !(is_int($queryId) || ctype_digit($queryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
    /**
     * Get visible value
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefParamDTO
     */
    public function setVisible(?bool $visible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
}
