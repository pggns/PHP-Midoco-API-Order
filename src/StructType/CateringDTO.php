<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CateringDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CateringDTO extends AbstractStructBase
{
    /**
     * The cateringCode
     * @var string|null
     */
    protected ?string $cateringCode = null;
    /**
     * Constructor method for CateringDTO
     * @uses CateringDTO::setCateringCode()
     * @param string $cateringCode
     */
    public function __construct(?string $cateringCode = null)
    {
        $this
            ->setCateringCode($cateringCode);
    }
    /**
     * Get cateringCode value
     * @return string|null
     */
    public function getCateringCode(): ?string
    {
        return $this->cateringCode;
    }
    /**
     * Set cateringCode value
     * @param string $cateringCode
     * @return \Pggns\MidocoApi\Order\StructType\CateringDTO
     */
    public function setCateringCode(?string $cateringCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringCode) && !is_string($cateringCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringCode, true), gettype($cateringCode)), __LINE__);
        }
        $this->cateringCode = $cateringCode;
        
        return $this;
    }
}
