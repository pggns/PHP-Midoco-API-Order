<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersFromBonusCalculationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUsersFromBonusCalculationRequest extends AbstractStructBase
{
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * Constructor method for GetUsersFromBonusCalculationRequest
     * @uses GetUsersFromBonusCalculationRequest::setBonusId()
     * @param int $bonusId
     */
    public function __construct(?int $bonusId = null)
    {
        $this
            ->setBonusId($bonusId);
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\GetUsersFromBonusCalculationRequest
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
        return $this;
    }
}
