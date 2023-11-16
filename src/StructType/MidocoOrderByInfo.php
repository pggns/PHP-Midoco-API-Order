<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderByInfo StructType
 * @subpackage Structs
 */
class MidocoOrderByInfo extends AbstractStructBase
{
    /**
     * The fieldName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $fieldName;
    /**
     * The sortAscending
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $sortAscending = null;
    /**
     * Constructor method for MidocoOrderByInfo
     * @uses MidocoOrderByInfo::setFieldName()
     * @uses MidocoOrderByInfo::setSortAscending()
     * @param string $fieldName
     * @param bool $sortAscending
     */
    public function __construct(string $fieldName, ?bool $sortAscending = true)
    {
        $this
            ->setFieldName($fieldName)
            ->setSortAscending($sortAscending);
    }
    /**
     * Get fieldName value
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo
     */
    public function setFieldName(string $fieldName): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get sortAscending value
     * @return bool|null
     */
    public function getSortAscending(): ?bool
    {
        return $this->sortAscending;
    }
    /**
     * Set sortAscending value
     * @param bool $sortAscending
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo
     */
    public function setSortAscending(?bool $sortAscending = true): self
    {
        // validation for constraint: boolean
        if (!is_null($sortAscending) && !is_bool($sortAscending)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sortAscending, true), gettype($sortAscending)), __LINE__);
        }
        $this->sortAscending = $sortAscending;
        
        return $this;
    }
}
