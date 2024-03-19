<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalutationDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalutationDescriptionDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The letter
     * @var string|null
     */
    protected ?string $letter = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The salutationText
     * @var string|null
     */
    protected ?string $salutationText = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SalutationDescriptionDTO
     * @uses SalutationDescriptionDTO::setCultureId()
     * @uses SalutationDescriptionDTO::setLetter()
     * @uses SalutationDescriptionDTO::setSalutationId()
     * @uses SalutationDescriptionDTO::setSalutationText()
     * @uses SalutationDescriptionDTO::setUnitName()
     * @param string $cultureId
     * @param string $letter
     * @param string $salutationId
     * @param string $salutationText
     * @param string $unitName
     */
    public function __construct(?string $cultureId = null, ?string $letter = null, ?string $salutationId = null, ?string $salutationText = null, ?string $unitName = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setLetter($letter)
            ->setSalutationId($salutationId)
            ->setSalutationText($salutationText)
            ->setUnitName($unitName);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDescriptionDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDescriptionDTO
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
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDescriptionDTO
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
    /**
     * Get salutationText value
     * @return string|null
     */
    public function getSalutationText(): ?string
    {
        return $this->salutationText;
    }
    /**
     * Set salutationText value
     * @param string $salutationText
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDescriptionDTO
     */
    public function setSalutationText(?string $salutationText = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationText) && !is_string($salutationText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationText, true), gettype($salutationText)), __LINE__);
        }
        $this->salutationText = $salutationText;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SalutationDescriptionDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
