<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoEMDSubgroup StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoEMDSubgroup extends AbstractStructBase
{
    /**
     * The subGroupCode
     * @var string|null
     */
    protected ?string $subGroupCode = null;
    /**
     * The emdType
     * @var string|null
     */
    protected ?string $emdType = null;
    /**
     * Constructor method for MidocoEMDSubgroup
     * @uses MidocoEMDSubgroup::setSubGroupCode()
     * @uses MidocoEMDSubgroup::setEmdType()
     * @param string $subGroupCode
     * @param string $emdType
     */
    public function __construct(?string $subGroupCode = null, ?string $emdType = null)
    {
        $this
            ->setSubGroupCode($subGroupCode)
            ->setEmdType($emdType);
    }
    /**
     * Get subGroupCode value
     * @return string|null
     */
    public function getSubGroupCode(): ?string
    {
        return $this->subGroupCode;
    }
    /**
     * Set subGroupCode value
     * @param string $subGroupCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup
     */
    public function setSubGroupCode(?string $subGroupCode = null): self
    {
        // validation for constraint: string
        if (!is_null($subGroupCode) && !is_string($subGroupCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subGroupCode, true), gettype($subGroupCode)), __LINE__);
        }
        $this->subGroupCode = $subGroupCode;
        
        return $this;
    }
    /**
     * Get emdType value
     * @return string|null
     */
    public function getEmdType(): ?string
    {
        return $this->emdType;
    }
    /**
     * Set emdType value
     * @param string $emdType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEMDSubgroup
     */
    public function setEmdType(?string $emdType = null): self
    {
        // validation for constraint: string
        if (!is_null($emdType) && !is_string($emdType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emdType, true), gettype($emdType)), __LINE__);
        }
        $this->emdType = $emdType;
        
        return $this;
    }
}
