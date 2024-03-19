<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShouldRebookOrderPaymentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShouldRebookOrderPaymentsResponse extends AbstractStructBase
{
    /**
     * The shouldRebook
     * @var bool|null
     */
    protected ?bool $shouldRebook = null;
    /**
     * Constructor method for ShouldRebookOrderPaymentsResponse
     * @uses ShouldRebookOrderPaymentsResponse::setShouldRebook()
     * @param bool $shouldRebook
     */
    public function __construct(?bool $shouldRebook = null)
    {
        $this
            ->setShouldRebook($shouldRebook);
    }
    /**
     * Get shouldRebook value
     * @return bool|null
     */
    public function getShouldRebook(): ?bool
    {
        return $this->shouldRebook;
    }
    /**
     * Set shouldRebook value
     * @param bool $shouldRebook
     * @return \Pggns\MidocoApi\Order\StructType\ShouldRebookOrderPaymentsResponse
     */
    public function setShouldRebook(?bool $shouldRebook = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shouldRebook) && !is_bool($shouldRebook)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shouldRebook, true), gettype($shouldRebook)), __LINE__);
        }
        $this->shouldRebook = $shouldRebook;
        
        return $this;
    }
}
