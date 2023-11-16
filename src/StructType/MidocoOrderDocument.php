<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderDocument StructType
 * @subpackage Structs
 */
class MidocoOrderDocument extends OrderDocumentDTO
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The orgunitDocument
     * @var bool|null
     */
    protected ?bool $orgunitDocument = null;
    /**
     * Constructor method for MidocoOrderDocument
     * @uses MidocoOrderDocument::setUnitName()
     * @uses MidocoOrderDocument::setOrgunitDocument()
     * @param string $unitName
     * @param bool $orgunitDocument
     */
    public function __construct(?string $unitName = null, ?bool $orgunitDocument = null)
    {
        $this
            ->setUnitName($unitName)
            ->setOrgunitDocument($orgunitDocument);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument
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
     * Get orgunitDocument value
     * @return bool|null
     */
    public function getOrgunitDocument(): ?bool
    {
        return $this->orgunitDocument;
    }
    /**
     * Set orgunitDocument value
     * @param bool $orgunitDocument
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument
     */
    public function setOrgunitDocument(?bool $orgunitDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($orgunitDocument) && !is_bool($orgunitDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orgunitDocument, true), gettype($orgunitDocument)), __LINE__);
        }
        $this->orgunitDocument = $orgunitDocument;
        
        return $this;
    }
}
