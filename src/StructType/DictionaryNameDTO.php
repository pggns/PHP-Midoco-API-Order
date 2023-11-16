<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DictionaryNameDTO StructType
 * @subpackage Structs
 */
class DictionaryNameDTO extends AbstractStructBase
{
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The forenameUpper
     * @var string|null
     */
    protected ?string $forenameUpper = null;
    /**
     * Constructor method for DictionaryNameDTO
     * @uses DictionaryNameDTO::setForename()
     * @uses DictionaryNameDTO::setForenameUpper()
     * @param string $forename
     * @param string $forenameUpper
     */
    public function __construct(?string $forename = null, ?string $forenameUpper = null)
    {
        $this
            ->setForename($forename)
            ->setForenameUpper($forenameUpper);
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\DictionaryNameDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get forenameUpper value
     * @return string|null
     */
    public function getForenameUpper(): ?string
    {
        return $this->forenameUpper;
    }
    /**
     * Set forenameUpper value
     * @param string $forenameUpper
     * @return \Pggns\MidocoApi\Order\StructType\DictionaryNameDTO
     */
    public function setForenameUpper(?string $forenameUpper = null): self
    {
        // validation for constraint: string
        if (!is_null($forenameUpper) && !is_string($forenameUpper)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forenameUpper, true), gettype($forenameUpper)), __LINE__);
        }
        $this->forenameUpper = $forenameUpper;
        
        return $this;
    }
}
