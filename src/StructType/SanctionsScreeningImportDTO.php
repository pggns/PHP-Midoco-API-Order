<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SanctionsScreeningImportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SanctionsScreeningImportDTO extends AbstractStructBase
{
    /**
     * The birthdate
     * @var string|null
     */
    protected ?string $birthdate = null;
    /**
     * The internalEntityId
     * @var string|null
     */
    protected ?string $internalEntityId = null;
    /**
     * The sanctionId
     * @var int|null
     */
    protected ?int $sanctionId = null;
    /**
     * The source
     * @var string|null
     */
    protected ?string $source = null;
    /**
     * The subjectType
     * @var string|null
     */
    protected ?string $subjectType = null;
    /**
     * The wholeName
     * @var string|null
     */
    protected ?string $wholeName = null;
    /**
     * Constructor method for SanctionsScreeningImportDTO
     * @uses SanctionsScreeningImportDTO::setBirthdate()
     * @uses SanctionsScreeningImportDTO::setInternalEntityId()
     * @uses SanctionsScreeningImportDTO::setSanctionId()
     * @uses SanctionsScreeningImportDTO::setSource()
     * @uses SanctionsScreeningImportDTO::setSubjectType()
     * @uses SanctionsScreeningImportDTO::setWholeName()
     * @param string $birthdate
     * @param string $internalEntityId
     * @param int $sanctionId
     * @param string $source
     * @param string $subjectType
     * @param string $wholeName
     */
    public function __construct(?string $birthdate = null, ?string $internalEntityId = null, ?int $sanctionId = null, ?string $source = null, ?string $subjectType = null, ?string $wholeName = null)
    {
        $this
            ->setBirthdate($birthdate)
            ->setInternalEntityId($internalEntityId)
            ->setSanctionId($sanctionId)
            ->setSource($source)
            ->setSubjectType($subjectType)
            ->setWholeName($wholeName);
    }
    /**
     * Get birthdate value
     * @return string|null
     */
    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }
    /**
     * Set birthdate value
     * @param string $birthdate
     * @return \Pggns\MidocoApi\Order\StructType\SanctionsScreeningImportDTO
     */
    public function setBirthdate(?string $birthdate = null): self
    {
        // validation for constraint: string
        if (!is_null($birthdate) && !is_string($birthdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthdate, true), gettype($birthdate)), __LINE__);
        }
        $this->birthdate = $birthdate;
        
        return $this;
    }
    /**
     * Get internalEntityId value
     * @return string|null
     */
    public function getInternalEntityId(): ?string
    {
        return $this->internalEntityId;
    }
    /**
     * Set internalEntityId value
     * @param string $internalEntityId
     * @return \Pggns\MidocoApi\Order\StructType\SanctionsScreeningImportDTO
     */
    public function setInternalEntityId(?string $internalEntityId = null): self
    {
        // validation for constraint: string
        if (!is_null($internalEntityId) && !is_string($internalEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalEntityId, true), gettype($internalEntityId)), __LINE__);
        }
        $this->internalEntityId = $internalEntityId;
        
        return $this;
    }
    /**
     * Get sanctionId value
     * @return int|null
     */
    public function getSanctionId(): ?int
    {
        return $this->sanctionId;
    }
    /**
     * Set sanctionId value
     * @param int $sanctionId
     * @return \Pggns\MidocoApi\Order\StructType\SanctionsScreeningImportDTO
     */
    public function setSanctionId(?int $sanctionId = null): self
    {
        // validation for constraint: int
        if (!is_null($sanctionId) && !(is_int($sanctionId) || ctype_digit($sanctionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sanctionId, true), gettype($sanctionId)), __LINE__);
        }
        $this->sanctionId = $sanctionId;
        
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Pggns\MidocoApi\Order\StructType\SanctionsScreeningImportDTO
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->source = $source;
        
        return $this;
    }
    /**
     * Get subjectType value
     * @return string|null
     */
    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }
    /**
     * Set subjectType value
     * @param string $subjectType
     * @return \Pggns\MidocoApi\Order\StructType\SanctionsScreeningImportDTO
     */
    public function setSubjectType(?string $subjectType = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectType) && !is_string($subjectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectType, true), gettype($subjectType)), __LINE__);
        }
        $this->subjectType = $subjectType;
        
        return $this;
    }
    /**
     * Get wholeName value
     * @return string|null
     */
    public function getWholeName(): ?string
    {
        return $this->wholeName;
    }
    /**
     * Set wholeName value
     * @param string $wholeName
     * @return \Pggns\MidocoApi\Order\StructType\SanctionsScreeningImportDTO
     */
    public function setWholeName(?string $wholeName = null): self
    {
        // validation for constraint: string
        if (!is_null($wholeName) && !is_string($wholeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wholeName, true), gettype($wholeName)), __LINE__);
        }
        $this->wholeName = $wholeName;
        
        return $this;
    }
}
