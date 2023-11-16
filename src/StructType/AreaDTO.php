<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AreaDTO StructType
 * @subpackage Structs
 */
class AreaDTO extends AbstractStructBase
{
    /**
     * The areaCode
     * @var string|null
     */
    protected ?string $areaCode = null;
    /**
     * Constructor method for AreaDTO
     * @uses AreaDTO::setAreaCode()
     * @param string $areaCode
     */
    public function __construct(?string $areaCode = null)
    {
        $this
            ->setAreaCode($areaCode);
    }
    /**
     * Get areaCode value
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param string $areaCode
     * @return \Pggns\MidocoApi\Order\StructType\AreaDTO
     */
    public function setAreaCode(?string $areaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaCode, true), gettype($areaCode)), __LINE__);
        }
        $this->areaCode = $areaCode;
        
        return $this;
    }
}
