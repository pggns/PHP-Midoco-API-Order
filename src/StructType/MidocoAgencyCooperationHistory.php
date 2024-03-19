<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencyCooperationHistory StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencyCooperationHistory extends AgencyCooperationHistoryDTO
{
    /**
     * The cooperationName
     * @var string|null
     */
    protected ?string $cooperationName = null;
    /**
     * Constructor method for MidocoAgencyCooperationHistory
     * @uses MidocoAgencyCooperationHistory::setCooperationName()
     * @param string $cooperationName
     */
    public function __construct(?string $cooperationName = null)
    {
        $this
            ->setCooperationName($cooperationName);
    }
    /**
     * Get cooperationName value
     * @return string|null
     */
    public function getCooperationName(): ?string
    {
        return $this->cooperationName;
    }
    /**
     * Set cooperationName value
     * @param string $cooperationName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyCooperationHistory
     */
    public function setCooperationName(?string $cooperationName = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationName) && !is_string($cooperationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationName, true), gettype($cooperationName)), __LINE__);
        }
        $this->cooperationName = $cooperationName;
        
        return $this;
    }
}
