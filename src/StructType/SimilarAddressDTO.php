<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimilarAddressDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SimilarAddressDTO extends CrmAddressDTO
{
    /**
     * The validateEntries
     * @var bool|null
     */
    protected ?bool $validateEntries = null;
    /**
     * Constructor method for SimilarAddressDTO
     * @uses SimilarAddressDTO::setValidateEntries()
     * @param bool $validateEntries
     */
    public function __construct(?bool $validateEntries = null)
    {
        $this
            ->setValidateEntries($validateEntries);
    }
    /**
     * Get validateEntries value
     * @return bool|null
     */
    public function getValidateEntries(): ?bool
    {
        return $this->validateEntries;
    }
    /**
     * Set validateEntries value
     * @param bool $validateEntries
     * @return \Pggns\MidocoApi\Order\StructType\SimilarAddressDTO
     */
    public function setValidateEntries(?bool $validateEntries = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validateEntries) && !is_bool($validateEntries)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validateEntries, true), gettype($validateEntries)), __LINE__);
        }
        $this->validateEntries = $validateEntries;
        
        return $this;
    }
}
