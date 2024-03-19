<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCustomer4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmCustomer4Printing extends CrmCustomerDTO
{
    /**
     * The lockReasonDesc
     * @var string|null
     */
    protected ?string $lockReasonDesc = null;
    /**
     * Constructor method for MidocoCrmCustomer4Printing
     * @uses MidocoCrmCustomer4Printing::setLockReasonDesc()
     * @param string $lockReasonDesc
     */
    public function __construct(?string $lockReasonDesc = null)
    {
        $this
            ->setLockReasonDesc($lockReasonDesc);
    }
    /**
     * Get lockReasonDesc value
     * @return string|null
     */
    public function getLockReasonDesc(): ?string
    {
        return $this->lockReasonDesc;
    }
    /**
     * Set lockReasonDesc value
     * @param string $lockReasonDesc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer4Printing
     */
    public function setLockReasonDesc(?string $lockReasonDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReasonDesc) && !is_string($lockReasonDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReasonDesc, true), gettype($lockReasonDesc)), __LINE__);
        }
        $this->lockReasonDesc = $lockReasonDesc;
        
        return $this;
    }
}
