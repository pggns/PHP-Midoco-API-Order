<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDocumentNatureRetentionType StructType
 * @subpackage Structs
 */
class MidocoDocumentNatureRetentionType extends DocumentNatureRetentionDTO
{
    /**
     * The inherited
     * @var bool|null
     */
    protected ?bool $inherited = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The isMeasuringInMonthsOtherwiseYears
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isMeasuringInMonthsOtherwiseYears = null;
    /**
     * The systemOnly
     * @var bool|null
     */
    protected ?bool $systemOnly = null;
    /**
     * Constructor method for MidocoDocumentNatureRetentionType
     * @uses MidocoDocumentNatureRetentionType::setInherited()
     * @uses MidocoDocumentNatureRetentionType::setDescription()
     * @uses MidocoDocumentNatureRetentionType::setDocumentNatureId()
     * @uses MidocoDocumentNatureRetentionType::setIsMeasuringInMonthsOtherwiseYears()
     * @uses MidocoDocumentNatureRetentionType::setSystemOnly()
     * @param bool $inherited
     * @param string $description
     * @param string $documentNatureId
     * @param bool $isMeasuringInMonthsOtherwiseYears
     * @param bool $systemOnly
     */
    public function __construct(?bool $inherited = null, ?string $description = null, ?string $documentNatureId = null, ?bool $isMeasuringInMonthsOtherwiseYears = true, ?bool $systemOnly = null)
    {
        $this
            ->setInherited($inherited)
            ->setDescription($description)
            ->setDocumentNatureId($documentNatureId)
            ->setIsMeasuringInMonthsOtherwiseYears($isMeasuringInMonthsOtherwiseYears)
            ->setSystemOnly($systemOnly);
    }
    /**
     * Get inherited value
     * @return bool|null
     */
    public function getInherited(): ?bool
    {
        return $this->inherited;
    }
    /**
     * Set inherited value
     * @param bool $inherited
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType
     */
    public function setInherited(?bool $inherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inherited) && !is_bool($inherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inherited, true), gettype($inherited)), __LINE__);
        }
        $this->inherited = $inherited;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get documentNatureId value
     * @return string|null
     */
    public function getDocumentNatureId(): ?string
    {
        return $this->documentNatureId;
    }
    /**
     * Set documentNatureId value
     * @param string $documentNatureId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType
     */
    public function setDocumentNatureId(?string $documentNatureId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNatureId) && !is_string($documentNatureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNatureId, true), gettype($documentNatureId)), __LINE__);
        }
        $this->documentNatureId = $documentNatureId;
        
        return $this;
    }
    /**
     * Get isMeasuringInMonthsOtherwiseYears value
     * @return bool|null
     */
    public function getIsMeasuringInMonthsOtherwiseYears(): ?bool
    {
        return $this->isMeasuringInMonthsOtherwiseYears;
    }
    /**
     * Set isMeasuringInMonthsOtherwiseYears value
     * @param bool $isMeasuringInMonthsOtherwiseYears
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType
     */
    public function setIsMeasuringInMonthsOtherwiseYears(?bool $isMeasuringInMonthsOtherwiseYears = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isMeasuringInMonthsOtherwiseYears) && !is_bool($isMeasuringInMonthsOtherwiseYears)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMeasuringInMonthsOtherwiseYears, true), gettype($isMeasuringInMonthsOtherwiseYears)), __LINE__);
        }
        $this->isMeasuringInMonthsOtherwiseYears = $isMeasuringInMonthsOtherwiseYears;
        
        return $this;
    }
    /**
     * Get systemOnly value
     * @return bool|null
     */
    public function getSystemOnly(): ?bool
    {
        return $this->systemOnly;
    }
    /**
     * Set systemOnly value
     * @param bool $systemOnly
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType
     */
    public function setSystemOnly(?bool $systemOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($systemOnly) && !is_bool($systemOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($systemOnly, true), gettype($systemOnly)), __LINE__);
        }
        $this->systemOnly = $systemOnly;
        
        return $this;
    }
}
