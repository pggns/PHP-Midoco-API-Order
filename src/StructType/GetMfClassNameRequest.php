<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfClassNameRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfClassNameRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * Constructor method for GetMfClassNameRequest
     * @uses GetMfClassNameRequest::setUnitName()
     * @uses GetMfClassNameRequest::setBean()
     * @param string $unitName
     * @param string $bean
     */
    public function __construct(?string $unitName = null, ?string $bean = null)
    {
        $this
            ->setUnitName($unitName)
            ->setBean($bean);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetMfClassNameRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get bean value
     * @return string|null
     */
    public function getBean(): ?string
    {
        return $this->bean;
    }
    /**
     * Set bean value
     * @param string $bean
     * @return \Pggns\MidocoApi\Order\StructType\GetMfClassNameRequest
     */
    public function setBean(?string $bean = null): self
    {
        // validation for constraint: string
        if (!is_null($bean) && !is_string($bean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bean, true), gettype($bean)), __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
}
