<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDataGetResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserDataGetResponse extends AbstractStructBase
{
    /**
     * The dataValue
     * @var string|null
     */
    protected ?string $dataValue = null;
    /**
     * Constructor method for UserDataGetResponse
     * @uses UserDataGetResponse::setDataValue()
     * @param string $dataValue
     */
    public function __construct(?string $dataValue = null)
    {
        $this
            ->setDataValue($dataValue);
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
     * @return \Pggns\MidocoApi\Order\StructType\UserDataGetResponse
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
