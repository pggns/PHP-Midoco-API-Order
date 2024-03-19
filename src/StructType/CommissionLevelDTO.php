<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionLevelDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CommissionLevelDTO extends AbstractStructBase
{
    /**
     * The levelId
     * @var string|null
     */
    protected ?string $levelId = null;
    /**
     * Constructor method for CommissionLevelDTO
     * @uses CommissionLevelDTO::setLevelId()
     * @param string $levelId
     */
    public function __construct(?string $levelId = null)
    {
        $this
            ->setLevelId($levelId);
    }
    /**
     * Get levelId value
     * @return string|null
     */
    public function getLevelId(): ?string
    {
        return $this->levelId;
    }
    /**
     * Set levelId value
     * @param string $levelId
     * @return \Pggns\MidocoApi\Order\StructType\CommissionLevelDTO
     */
    public function setLevelId(?string $levelId = null): self
    {
        // validation for constraint: string
        if (!is_null($levelId) && !is_string($levelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($levelId, true), gettype($levelId)), __LINE__);
        }
        $this->levelId = $levelId;
        
        return $this;
    }
}
