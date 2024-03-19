<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckQMAnswersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckQMAnswersResponse extends AbstractStructBase
{
    /**
     * The changed
     * @var bool|null
     */
    protected ?bool $changed = null;
    /**
     * Constructor method for CheckQMAnswersResponse
     * @uses CheckQMAnswersResponse::setChanged()
     * @param bool $changed
     */
    public function __construct(?bool $changed = null)
    {
        $this
            ->setChanged($changed);
    }
    /**
     * Get changed value
     * @return bool|null
     */
    public function getChanged(): ?bool
    {
        return $this->changed;
    }
    /**
     * Set changed value
     * @param bool $changed
     * @return \Pggns\MidocoApi\Order\StructType\CheckQMAnswersResponse
     */
    public function setChanged(?bool $changed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($changed) && !is_bool($changed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($changed, true), gettype($changed)), __LINE__);
        }
        $this->changed = $changed;
        
        return $this;
    }
}
