<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateGrantedProvisionForSellItemResponse StructType
 * @subpackage Structs
 */
class UpdateGrantedProvisionForSellItemResponse extends AbstractStructBase
{
    /**
     * The grantedProvision
     * @var float|null
     */
    protected ?float $grantedProvision = null;
    /**
     * Constructor method for UpdateGrantedProvisionForSellItemResponse
     * @uses UpdateGrantedProvisionForSellItemResponse::setGrantedProvision()
     * @param float $grantedProvision
     */
    public function __construct(?float $grantedProvision = null)
    {
        $this
            ->setGrantedProvision($grantedProvision);
    }
    /**
     * Get grantedProvision value
     * @return float|null
     */
    public function getGrantedProvision(): ?float
    {
        return $this->grantedProvision;
    }
    /**
     * Set grantedProvision value
     * @param float $grantedProvision
     * @return \Pggns\MidocoApi\Order\StructType\UpdateGrantedProvisionForSellItemResponse
     */
    public function setGrantedProvision(?float $grantedProvision = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedProvision) && !(is_float($grantedProvision) || is_numeric($grantedProvision))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedProvision, true), gettype($grantedProvision)), __LINE__);
        }
        $this->grantedProvision = $grantedProvision;
        
        return $this;
    }
}
