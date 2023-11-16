<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDataSetRequest StructType
 * @subpackage Structs
 */
class UserDataSetRequest extends AbstractStructBase
{
    /**
     * The dataKey
     * @var string|null
     */
    protected ?string $dataKey = null;
    /**
     * The dataValue
     * @var string|null
     */
    protected ?string $dataValue = null;
    /**
     * Constructor method for UserDataSetRequest
     * @uses UserDataSetRequest::setDataKey()
     * @uses UserDataSetRequest::setDataValue()
     * @param string $dataKey
     * @param string $dataValue
     */
    public function __construct(?string $dataKey = null, ?string $dataValue = null)
    {
        $this
            ->setDataKey($dataKey)
            ->setDataValue($dataValue);
    }
    /**
     * Get dataKey value
     * @return string|null
     */
    public function getDataKey(): ?string
    {
        return $this->dataKey;
    }
    /**
     * Set dataKey value
     * @param string $dataKey
     * @return \Pggns\MidocoApi\Order\StructType\UserDataSetRequest
     */
    public function setDataKey(?string $dataKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dataKey) && !is_string($dataKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataKey, true), gettype($dataKey)), __LINE__);
        }
        $this->dataKey = $dataKey;
        
        return $this;
    }
    /**
     * Get dataValue value
     * @return string|null
     */
    public function getDataValue(): ?string
    {
        return $this->dataValue;
    }
    /**
     * Set dataValue value
     * @param string $dataValue
     * @return \Pggns\MidocoApi\Order\StructType\UserDataSetRequest
     */
    public function setDataValue(?string $dataValue = null): self
    {
        // validation for constraint: string
        if (!is_null($dataValue) && !is_string($dataValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataValue, true), gettype($dataValue)), __LINE__);
        }
        $this->dataValue = $dataValue;
        
        return $this;
    }
}
