<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDuplicateRoleInfo StructType
 * @subpackage Structs
 */
class MidocoDuplicateRoleInfo extends AbstractStructBase
{
    /**
     * The srcRoleId
     * @var int|null
     */
    protected ?int $srcRoleId = null;
    /**
     * The srcRoleName
     * @var string|null
     */
    protected ?string $srcRoleName = null;
    /**
     * The destRoleId
     * @var int|null
     */
    protected ?int $destRoleId = null;
    /**
     * The destRoleName
     * @var string|null
     */
    protected ?string $destRoleName = null;
    /**
     * Constructor method for MidocoDuplicateRoleInfo
     * @uses MidocoDuplicateRoleInfo::setSrcRoleId()
     * @uses MidocoDuplicateRoleInfo::setSrcRoleName()
     * @uses MidocoDuplicateRoleInfo::setDestRoleId()
     * @uses MidocoDuplicateRoleInfo::setDestRoleName()
     * @param int $srcRoleId
     * @param string $srcRoleName
     * @param int $destRoleId
     * @param string $destRoleName
     */
    public function __construct(?int $srcRoleId = null, ?string $srcRoleName = null, ?int $destRoleId = null, ?string $destRoleName = null)
    {
        $this
            ->setSrcRoleId($srcRoleId)
            ->setSrcRoleName($srcRoleName)
            ->setDestRoleId($destRoleId)
            ->setDestRoleName($destRoleName);
    }
    /**
     * Get srcRoleId value
     * @return int|null
     */
    public function getSrcRoleId(): ?int
    {
        return $this->srcRoleId;
    }
    /**
     * Set srcRoleId value
     * @param int $srcRoleId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateRoleInfo
     */
    public function setSrcRoleId(?int $srcRoleId = null): self
    {
        // validation for constraint: int
        if (!is_null($srcRoleId) && !(is_int($srcRoleId) || ctype_digit($srcRoleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($srcRoleId, true), gettype($srcRoleId)), __LINE__);
        }
        $this->srcRoleId = $srcRoleId;
        
        return $this;
    }
    /**
     * Get srcRoleName value
     * @return string|null
     */
    public function getSrcRoleName(): ?string
    {
        return $this->srcRoleName;
    }
    /**
     * Set srcRoleName value
     * @param string $srcRoleName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateRoleInfo
     */
    public function setSrcRoleName(?string $srcRoleName = null): self
    {
        // validation for constraint: string
        if (!is_null($srcRoleName) && !is_string($srcRoleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($srcRoleName, true), gettype($srcRoleName)), __LINE__);
        }
        $this->srcRoleName = $srcRoleName;
        
        return $this;
    }
    /**
     * Get destRoleId value
     * @return int|null
     */
    public function getDestRoleId(): ?int
    {
        return $this->destRoleId;
    }
    /**
     * Set destRoleId value
     * @param int $destRoleId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateRoleInfo
     */
    public function setDestRoleId(?int $destRoleId = null): self
    {
        // validation for constraint: int
        if (!is_null($destRoleId) && !(is_int($destRoleId) || ctype_digit($destRoleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destRoleId, true), gettype($destRoleId)), __LINE__);
        }
        $this->destRoleId = $destRoleId;
        
        return $this;
    }
    /**
     * Get destRoleName value
     * @return string|null
     */
    public function getDestRoleName(): ?string
    {
        return $this->destRoleName;
    }
    /**
     * Set destRoleName value
     * @param string $destRoleName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateRoleInfo
     */
    public function setDestRoleName(?string $destRoleName = null): self
    {
        // validation for constraint: string
        if (!is_null($destRoleName) && !is_string($destRoleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destRoleName, true), gettype($destRoleName)), __LINE__);
        }
        $this->destRoleName = $destRoleName;
        
        return $this;
    }
}
