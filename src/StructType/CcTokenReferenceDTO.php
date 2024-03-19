<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcTokenReferenceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcTokenReferenceDTO extends AbstractStructBase
{
    /**
     * The ccMask
     * @var string|null
     */
    protected ?string $ccMask = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * Constructor method for CcTokenReferenceDTO
     * @uses CcTokenReferenceDTO::setCcMask()
     * @uses CcTokenReferenceDTO::setId()
     * @param string $ccMask
     * @param int $id
     */
    public function __construct(?string $ccMask = null, ?int $id = null)
    {
        $this
            ->setCcMask($ccMask)
            ->setId($id);
    }
    /**
     * Get ccMask value
     * @return string|null
     */
    public function getCcMask(): ?string
    {
        return $this->ccMask;
    }
    /**
     * Set ccMask value
     * @param string $ccMask
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenReferenceDTO
     */
    public function setCcMask(?string $ccMask = null): self
    {
        // validation for constraint: string
        if (!is_null($ccMask) && !is_string($ccMask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccMask, true), gettype($ccMask)), __LINE__);
        }
        $this->ccMask = $ccMask;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenReferenceDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
