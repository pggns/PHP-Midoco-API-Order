<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MfBeanDTO StructType
 * @subpackage Structs
 */
class MfBeanDTO extends AbstractStructBase
{
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * Constructor method for MfBeanDTO
     * @uses MfBeanDTO::setBean()
     * @param string $bean
     */
    public function __construct(?string $bean = null)
    {
        $this
            ->setBean($bean);
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
     * @return \Pggns\MidocoApi\Order\StructType\MfBeanDTO
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
