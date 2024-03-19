<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AtolTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AtolTypeDTO extends AbstractStructBase
{
    /**
     * The atolIndex
     * @var int|null
     */
    protected ?int $atolIndex = null;
    /**
     * The atolType
     * @var string|null
     */
    protected ?string $atolType = null;
    /**
     * The wording
     * @var string|null
     */
    protected ?string $wording = null;
    /**
     * Constructor method for AtolTypeDTO
     * @uses AtolTypeDTO::setAtolIndex()
     * @uses AtolTypeDTO::setAtolType()
     * @uses AtolTypeDTO::setWording()
     * @param int $atolIndex
     * @param string $atolType
     * @param string $wording
     */
    public function __construct(?int $atolIndex = null, ?string $atolType = null, ?string $wording = null)
    {
        $this
            ->setAtolIndex($atolIndex)
            ->setAtolType($atolType)
            ->setWording($wording);
    }
    /**
     * Get atolIndex value
     * @return int|null
     */
    public function getAtolIndex(): ?int
    {
        return $this->atolIndex;
    }
    /**
     * Set atolIndex value
     * @param int $atolIndex
     * @return \Pggns\MidocoApi\Order\StructType\AtolTypeDTO
     */
    public function setAtolIndex(?int $atolIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($atolIndex) && !(is_int($atolIndex) || ctype_digit($atolIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($atolIndex, true), gettype($atolIndex)), __LINE__);
        }
        $this->atolIndex = $atolIndex;
        
        return $this;
    }
    /**
     * Get atolType value
     * @return string|null
     */
    public function getAtolType(): ?string
    {
        return $this->atolType;
    }
    /**
     * Set atolType value
     * @param string $atolType
     * @return \Pggns\MidocoApi\Order\StructType\AtolTypeDTO
     */
    public function setAtolType(?string $atolType = null): self
    {
        // validation for constraint: string
        if (!is_null($atolType) && !is_string($atolType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($atolType, true), gettype($atolType)), __LINE__);
        }
        $this->atolType = $atolType;
        
        return $this;
    }
    /**
     * Get wording value
     * @return string|null
     */
    public function getWording(): ?string
    {
        return $this->wording;
    }
    /**
     * Set wording value
     * @param string $wording
     * @return \Pggns\MidocoApi\Order\StructType\AtolTypeDTO
     */
    public function setWording(?string $wording = null): self
    {
        // validation for constraint: string
        if (!is_null($wording) && !is_string($wording)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wording, true), gettype($wording)), __LINE__);
        }
        $this->wording = $wording;
        
        return $this;
    }
}
