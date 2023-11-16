<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserattribDTO StructType
 * @subpackage Structs
 */
class UserattribDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The isSecret
     * @var bool|null
     */
    protected ?bool $isSecret = null;
    /**
     * Constructor method for UserattribDTO
     * @uses UserattribDTO::setAttribName()
     * @uses UserattribDTO::setIsSecret()
     * @param string $attribName
     * @param bool $isSecret
     */
    public function __construct(?string $attribName = null, ?bool $isSecret = null)
    {
        $this
            ->setAttribName($attribName)
            ->setIsSecret($isSecret);
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName(): ?string
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $attribName
     * @return \Pggns\MidocoApi\Order\StructType\UserattribDTO
     */
    public function setAttribName(?string $attribName = null): self
    {
        // validation for constraint: string
        if (!is_null($attribName) && !is_string($attribName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribName, true), gettype($attribName)), __LINE__);
        }
        $this->attribName = $attribName;
        
        return $this;
    }
    /**
     * Get isSecret value
     * @return bool|null
     */
    public function getIsSecret(): ?bool
    {
        return $this->isSecret;
    }
    /**
     * Set isSecret value
     * @param bool $isSecret
     * @return \Pggns\MidocoApi\Order\StructType\UserattribDTO
     */
    public function setIsSecret(?bool $isSecret = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSecret) && !is_bool($isSecret)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSecret, true), gettype($isSecret)), __LINE__);
        }
        $this->isSecret = $isSecret;
        
        return $this;
    }
}
