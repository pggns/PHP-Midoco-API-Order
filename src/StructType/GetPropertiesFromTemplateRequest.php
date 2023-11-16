<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertiesFromTemplateRequest StructType
 * @subpackage Structs
 */
class GetPropertiesFromTemplateRequest extends AbstractStructBase
{
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The useLocale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $useLocale = null;
    /**
     * Constructor method for GetPropertiesFromTemplateRequest
     * @uses GetPropertiesFromTemplateRequest::setFileName()
     * @uses GetPropertiesFromTemplateRequest::setUnitName()
     * @uses GetPropertiesFromTemplateRequest::setUseLocale()
     * @param string $fileName
     * @param string $unitName
     * @param bool $useLocale
     */
    public function __construct(?string $fileName = null, ?string $unitName = null, ?bool $useLocale = null)
    {
        $this
            ->setFileName($fileName)
            ->setUnitName($unitName)
            ->setUseLocale($useLocale);
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\GetPropertiesFromTemplateRequest
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPropertiesFromTemplateRequest
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
     * Get useLocale value
     * @return bool|null
     */
    public function getUseLocale(): ?bool
    {
        return $this->useLocale;
    }
    /**
     * Set useLocale value
     * @param bool $useLocale
     * @return \Pggns\MidocoApi\Order\StructType\GetPropertiesFromTemplateRequest
     */
    public function setUseLocale(?bool $useLocale = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useLocale) && !is_bool($useLocale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useLocale, true), gettype($useLocale)), __LINE__);
        }
        $this->useLocale = $useLocale;
        
        return $this;
    }
}
