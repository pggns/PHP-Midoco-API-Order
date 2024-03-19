<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQueryFieldValuesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetQueryFieldValuesRequest extends AbstractStructBase
{
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The queryType
     * @var string|null
     */
    protected ?string $queryType = null;
    /**
     * Constructor method for GetQueryFieldValuesRequest
     * @uses GetQueryFieldValuesRequest::setFieldName()
     * @uses GetQueryFieldValuesRequest::setQueryType()
     * @param string $fieldName
     * @param string $queryType
     */
    public function __construct(?string $fieldName = null, ?string $queryType = null)
    {
        $this
            ->setFieldName($fieldName)
            ->setQueryType($queryType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryFieldValuesRequest
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
     * Get queryType value
     * @return string|null
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }
    /**
     * Set queryType value
     * @param string $queryType
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryFieldValuesRequest
     */
    public function setQueryType(?string $queryType = null): self
    {
        // validation for constraint: string
        if (!is_null($queryType) && !is_string($queryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryType, true), gettype($queryType)), __LINE__);
        }
        $this->queryType = $queryType;
        
        return $this;
    }
}
