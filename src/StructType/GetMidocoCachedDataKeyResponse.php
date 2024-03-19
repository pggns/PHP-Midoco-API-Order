<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCachedDataKeyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoCachedDataKeyResponse extends AbstractStructBase
{
    /**
     * The dataKey
     * @var string|null
     */
    protected ?string $dataKey = null;
    /**
     * Constructor method for GetMidocoCachedDataKeyResponse
     * @uses GetMidocoCachedDataKeyResponse::setDataKey()
     * @param string $dataKey
     */
    public function __construct(?string $dataKey = null)
    {
        $this
            ->setDataKey($dataKey);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCachedDataKeyResponse
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
}
