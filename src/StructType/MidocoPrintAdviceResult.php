<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPrintAdviceResult StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPrintAdviceResult extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The isMailing
     * @var bool|null
     */
    protected ?bool $isMailing = null;
    /**
     * The isPrinting
     * @var bool|null
     */
    protected ?bool $isPrinting = null;
    /**
     * Constructor method for MidocoPrintAdviceResult
     * @uses MidocoPrintAdviceResult::setId()
     * @uses MidocoPrintAdviceResult::setIsMailing()
     * @uses MidocoPrintAdviceResult::setIsPrinting()
     * @param string $id
     * @param bool $isMailing
     * @param bool $isPrinting
     */
    public function __construct(?string $id = null, ?bool $isMailing = null, ?bool $isPrinting = null)
    {
        $this
            ->setId($id)
            ->setIsMailing($isMailing)
            ->setIsPrinting($isPrinting);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintAdviceResult
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get isMailing value
     * @return bool|null
     */
    public function getIsMailing(): ?bool
    {
        return $this->isMailing;
    }
    /**
     * Set isMailing value
     * @param bool $isMailing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintAdviceResult
     */
    public function setIsMailing(?bool $isMailing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMailing) && !is_bool($isMailing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMailing, true), gettype($isMailing)), __LINE__);
        }
        $this->isMailing = $isMailing;
        
        return $this;
    }
    /**
     * Get isPrinting value
     * @return bool|null
     */
    public function getIsPrinting(): ?bool
    {
        return $this->isPrinting;
    }
    /**
     * Set isPrinting value
     * @param bool $isPrinting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintAdviceResult
     */
    public function setIsPrinting(?bool $isPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrinting) && !is_bool($isPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrinting, true), gettype($isPrinting)), __LINE__);
        }
        $this->isPrinting = $isPrinting;
        
        return $this;
    }
}
