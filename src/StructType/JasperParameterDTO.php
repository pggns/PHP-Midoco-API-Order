<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JasperParameterDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JasperParameterDTO extends AbstractStructBase
{
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
     * The isStdParam
     * @var bool|null
     */
    protected ?bool $isStdParam = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The paramId
     * @var int|null
     */
    protected ?int $paramId = null;
    /**
     * The tableName
     * @var string|null
     */
    protected ?string $tableName = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for JasperParameterDTO
     * @uses JasperParameterDTO::setDescription()
     * @uses JasperParameterDTO::setFieldName()
     * @uses JasperParameterDTO::setIsStdParam()
     * @uses JasperParameterDTO::setName()
     * @uses JasperParameterDTO::setParamId()
     * @uses JasperParameterDTO::setTableName()
     * @uses JasperParameterDTO::setType()
     * @param string $description
     * @param string $fieldName
     * @param bool $isStdParam
     * @param string $name
     * @param int $paramId
     * @param string $tableName
     * @param string $type
     */
    public function __construct(?string $description = null, ?string $fieldName = null, ?bool $isStdParam = null, ?string $name = null, ?int $paramId = null, ?string $tableName = null, ?string $type = null)
    {
        $this
            ->setDescription($description)
            ->setFieldName($fieldName)
            ->setIsStdParam($isStdParam)
            ->setName($name)
            ->setParamId($paramId)
            ->setTableName($tableName)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperParameterDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperParameterDTO
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
     * Get isStdParam value
     * @return bool|null
     */
    public function getIsStdParam(): ?bool
    {
        return $this->isStdParam;
    }
    /**
     * Set isStdParam value
     * @param bool $isStdParam
     * @return \Pggns\MidocoApi\Order\StructType\JasperParameterDTO
     */
    public function setIsStdParam(?bool $isStdParam = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStdParam) && !is_bool($isStdParam)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStdParam, true), gettype($isStdParam)), __LINE__);
        }
        $this->isStdParam = $isStdParam;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperParameterDTO
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
     * Get paramId value
     * @return int|null
     */
    public function getParamId(): ?int
    {
        return $this->paramId;
    }
    /**
     * Set paramId value
     * @param int $paramId
     * @return \Pggns\MidocoApi\Order\StructType\JasperParameterDTO
     */
    public function setParamId(?int $paramId = null): self
    {
        // validation for constraint: int
        if (!is_null($paramId) && !(is_int($paramId) || ctype_digit($paramId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paramId, true), gettype($paramId)), __LINE__);
        }
        $this->paramId = $paramId;
        
        return $this;
    }
    /**
     * Get tableName value
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }
    /**
     * Set tableName value
     * @param string $tableName
     * @return \Pggns\MidocoApi\Order\StructType\JasperParameterDTO
     */
    public function setTableName(?string $tableName = null): self
    {
        // validation for constraint: string
        if (!is_null($tableName) && !is_string($tableName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableName, true), gettype($tableName)), __LINE__);
        }
        $this->tableName = $tableName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JasperParameterDTO
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
