<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgencyRequest StructType
 * @subpackage Structs
 */
class GetSupplierAgencyRequest extends AbstractStructBase
{
    /**
     * The agencyNo
     * @var string|null
     */
    protected ?string $agencyNo = null;
    /**
     * Constructor method for GetSupplierAgencyRequest
     * @uses GetSupplierAgencyRequest::setAgencyNo()
     * @param string $agencyNo
     */
    public function __construct(?string $agencyNo = null)
    {
        $this
            ->setAgencyNo($agencyNo);
    }
    /**
     * Get agencyNo value
     * @return string|null
     */
    public function getAgencyNo(): ?string
    {
        return $this->agencyNo;
    }
    /**
     * Set agencyNo value
     * @param string $agencyNo
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencyRequest
     */
    public function setAgencyNo(?string $agencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyNo) && !is_string($agencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyNo, true), gettype($agencyNo)), __LINE__);
        }
        $this->agencyNo = $agencyNo;
        
        return $this;
    }
}
