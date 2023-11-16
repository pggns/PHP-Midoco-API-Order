<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubjectDefDTO StructType
 * @subpackage Structs
 */
class SubjectDefDTO extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The subjectText
     * @var string|null
     */
    protected ?string $subjectText = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The useAsDefault
     * @var bool|null
     */
    protected ?bool $useAsDefault = null;
    /**
     * The useInSubject
     * @var string|null
     */
    protected ?string $useInSubject = null;
    /**
     * Constructor method for SubjectDefDTO
     * @uses SubjectDefDTO::setId()
     * @uses SubjectDefDTO::setName()
     * @uses SubjectDefDTO::setPrintType()
     * @uses SubjectDefDTO::setSubjectText()
     * @uses SubjectDefDTO::setUnitName()
     * @uses SubjectDefDTO::setUseAsDefault()
     * @uses SubjectDefDTO::setUseInSubject()
     * @param string $id
     * @param string $name
     * @param string $printType
     * @param string $subjectText
     * @param string $unitName
     * @param bool $useAsDefault
     * @param string $useInSubject
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $printType = null, ?string $subjectText = null, ?string $unitName = null, ?bool $useAsDefault = null, ?string $useInSubject = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setPrintType($printType)
            ->setSubjectText($subjectText)
            ->setUnitName($unitName)
            ->setUseAsDefault($useAsDefault)
            ->setUseInSubject($useInSubject);
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
     * @return \Pggns\MidocoApi\Order\StructType\SubjectDefDTO
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\SubjectDefDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\SubjectDefDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get subjectText value
     * @return string|null
     */
    public function getSubjectText(): ?string
    {
        return $this->subjectText;
    }
    /**
     * Set subjectText value
     * @param string $subjectText
     * @return \Pggns\MidocoApi\Order\StructType\SubjectDefDTO
     */
    public function setSubjectText(?string $subjectText = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectText) && !is_string($subjectText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectText, true), gettype($subjectText)), __LINE__);
        }
        $this->subjectText = $subjectText;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SubjectDefDTO
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
    /**
     * Get useAsDefault value
     * @return bool|null
     */
    public function getUseAsDefault(): ?bool
    {
        return $this->useAsDefault;
    }
    /**
     * Set useAsDefault value
     * @param bool $useAsDefault
     * @return \Pggns\MidocoApi\Order\StructType\SubjectDefDTO
     */
    public function setUseAsDefault(?bool $useAsDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useAsDefault) && !is_bool($useAsDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useAsDefault, true), gettype($useAsDefault)), __LINE__);
        }
        $this->useAsDefault = $useAsDefault;
        
        return $this;
    }
    /**
     * Get useInSubject value
     * @return string|null
     */
    public function getUseInSubject(): ?string
    {
        return $this->useInSubject;
    }
    /**
     * Set useInSubject value
     * @param string $useInSubject
     * @return \Pggns\MidocoApi\Order\StructType\SubjectDefDTO
     */
    public function setUseInSubject(?string $useInSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($useInSubject) && !is_string($useInSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($useInSubject, true), gettype($useInSubject)), __LINE__);
        }
        $this->useInSubject = $useInSubject;
        
        return $this;
    }
}
