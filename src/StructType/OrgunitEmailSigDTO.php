<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitEmailSigDTO StructType
 * @subpackage Structs
 */
class OrgunitEmailSigDTO extends AbstractStructBase
{
    /**
     * The defaultSignature
     * @var bool|null
     */
    protected ?bool $defaultSignature = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The signatureId
     * @var int|null
     */
    protected ?int $signatureId = null;
    /**
     * The textSignature
     * @var string|null
     */
    protected ?string $textSignature = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrgunitEmailSigDTO
     * @uses OrgunitEmailSigDTO::setDefaultSignature()
     * @uses OrgunitEmailSigDTO::setDescription()
     * @uses OrgunitEmailSigDTO::setSignatureId()
     * @uses OrgunitEmailSigDTO::setTextSignature()
     * @uses OrgunitEmailSigDTO::setUnitName()
     * @param bool $defaultSignature
     * @param string $description
     * @param int $signatureId
     * @param string $textSignature
     * @param string $unitName
     */
    public function __construct(?bool $defaultSignature = null, ?string $description = null, ?int $signatureId = null, ?string $textSignature = null, ?string $unitName = null)
    {
        $this
            ->setDefaultSignature($defaultSignature)
            ->setDescription($description)
            ->setSignatureId($signatureId)
            ->setTextSignature($textSignature)
            ->setUnitName($unitName);
    }
    /**
     * Get defaultSignature value
     * @return bool|null
     */
    public function getDefaultSignature(): ?bool
    {
        return $this->defaultSignature;
    }
    /**
     * Set defaultSignature value
     * @param bool $defaultSignature
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitEmailSigDTO
     */
    public function setDefaultSignature(?bool $defaultSignature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($defaultSignature) && !is_bool($defaultSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultSignature, true), gettype($defaultSignature)), __LINE__);
        }
        $this->defaultSignature = $defaultSignature;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitEmailSigDTO
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
     * Get signatureId value
     * @return int|null
     */
    public function getSignatureId(): ?int
    {
        return $this->signatureId;
    }
    /**
     * Set signatureId value
     * @param int $signatureId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitEmailSigDTO
     */
    public function setSignatureId(?int $signatureId = null): self
    {
        // validation for constraint: int
        if (!is_null($signatureId) && !(is_int($signatureId) || ctype_digit($signatureId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signatureId, true), gettype($signatureId)), __LINE__);
        }
        $this->signatureId = $signatureId;
        
        return $this;
    }
    /**
     * Get textSignature value
     * @return string|null
     */
    public function getTextSignature(): ?string
    {
        return $this->textSignature;
    }
    /**
     * Set textSignature value
     * @param string $textSignature
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitEmailSigDTO
     */
    public function setTextSignature(?string $textSignature = null): self
    {
        // validation for constraint: string
        if (!is_null($textSignature) && !is_string($textSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textSignature, true), gettype($textSignature)), __LINE__);
        }
        $this->textSignature = $textSignature;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitEmailSigDTO
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
