<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalutation StructType
 * @subpackage Structs
 */
class MidocoSalutation extends SalutationDTO
{
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The letter
     * @var string|null
     */
    protected ?string $letter = null;
    /**
     * Constructor method for MidocoSalutation
     * @uses MidocoSalutation::setSalutation()
     * @uses MidocoSalutation::setLetter()
     * @param string $salutation
     * @param string $letter
     */
    public function __construct(?string $salutation = null, ?string $letter = null)
    {
        $this
            ->setSalutation($salutation)
            ->setLetter($letter);
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSalutation
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get letter value
     * @return string|null
     */
    public function getLetter(): ?string
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param string $letter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSalutation
     */
    public function setLetter(?string $letter = null): self
    {
        // validation for constraint: string
        if (!is_null($letter) && !is_string($letter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($letter, true), gettype($letter)), __LINE__);
        }
        $this->letter = $letter;
        
        return $this;
    }
}
