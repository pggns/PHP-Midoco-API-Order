<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSelectedCrmPersonTraveller StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSelectedCrmPersonTraveller extends CrmPersonTravellerDTO
{
    /**
     * The isAdditionalForenameSelected
     * @var bool|null
     */
    protected ?bool $isAdditionalForenameSelected = null;
    /**
     * Constructor method for MidocoSelectedCrmPersonTraveller
     * @uses MidocoSelectedCrmPersonTraveller::setIsAdditionalForenameSelected()
     * @param bool $isAdditionalForenameSelected
     */
    public function __construct(?bool $isAdditionalForenameSelected = null)
    {
        $this
            ->setIsAdditionalForenameSelected($isAdditionalForenameSelected);
    }
    /**
     * Get isAdditionalForenameSelected value
     * @return bool|null
     */
    public function getIsAdditionalForenameSelected(): ?bool
    {
        return $this->isAdditionalForenameSelected;
    }
    /**
     * Set isAdditionalForenameSelected value
     * @param bool $isAdditionalForenameSelected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSelectedCrmPersonTraveller
     */
    public function setIsAdditionalForenameSelected(?bool $isAdditionalForenameSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAdditionalForenameSelected) && !is_bool($isAdditionalForenameSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdditionalForenameSelected, true), gettype($isAdditionalForenameSelected)), __LINE__);
        }
        $this->isAdditionalForenameSelected = $isAdditionalForenameSelected;
        
        return $this;
    }
}
