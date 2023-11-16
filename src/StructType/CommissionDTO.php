<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionDTO StructType
 * @subpackage Structs
 */
class CommissionDTO extends AbstractStructBase
{
    /**
     * The commissionId
     * @var string|null
     */
    protected ?string $commissionId = null;
    /**
     * Constructor method for CommissionDTO
     * @uses CommissionDTO::setCommissionId()
     * @param string $commissionId
     */
    public function __construct(?string $commissionId = null)
    {
        $this
            ->setCommissionId($commissionId);
    }
    /**
     * Get commissionId value
     * @return string|null
     */
    public function getCommissionId(): ?string
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param string $commissionId
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDTO
     */
    public function setCommissionId(?string $commissionId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionId) && !is_string($commissionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
        return $this;
    }
}
