<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencySettlementLevelBilling StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencySettlementLevelBilling extends AgencyStlmntLevelBillDTO
{
    /**
     * The tempRepositoryId
     * @var int|null
     */
    protected ?int $tempRepositoryId = null;
    /**
     * Constructor method for MidocoAgencySettlementLevelBilling
     * @uses MidocoAgencySettlementLevelBilling::setTempRepositoryId()
     * @param int $tempRepositoryId
     */
    public function __construct(?int $tempRepositoryId = null)
    {
        $this
            ->setTempRepositoryId($tempRepositoryId);
    }
    /**
     * Get tempRepositoryId value
     * @return int|null
     */
    public function getTempRepositoryId(): ?int
    {
        return $this->tempRepositoryId;
    }
    /**
     * Set tempRepositoryId value
     * @param int $tempRepositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementLevelBilling
     */
    public function setTempRepositoryId(?int $tempRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($tempRepositoryId) && !(is_int($tempRepositoryId) || ctype_digit($tempRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tempRepositoryId, true), gettype($tempRepositoryId)), __LINE__);
        }
        $this->tempRepositoryId = $tempRepositoryId;
        
        return $this;
    }
}
