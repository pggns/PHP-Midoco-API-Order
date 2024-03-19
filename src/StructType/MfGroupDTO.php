<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MfGroupDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MfGroupDTO extends AbstractStructBase
{
    /**
     * The groupId
     * @var string|null
     */
    protected ?string $groupId = null;
    /**
     * Constructor method for MfGroupDTO
     * @uses MfGroupDTO::setGroupId()
     * @param string $groupId
     */
    public function __construct(?string $groupId = null)
    {
        $this
            ->setGroupId($groupId);
    }
    /**
     * Get groupId value
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $groupId
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupDTO
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
}
