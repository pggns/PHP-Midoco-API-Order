<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignPrintTypeToOrgunitRequest StructType
 * @subpackage Structs
 */
class AssignPrintTypeToOrgunitRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The printTypeId
     * @var string|null
     */
    protected ?string $printTypeId = null;
    /**
     * The isMandatory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isMandatory = null;
    /**
     * The printPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $printPosition = null;
    /**
     * Constructor method for AssignPrintTypeToOrgunitRequest
     * @uses AssignPrintTypeToOrgunitRequest::setUnitName()
     * @uses AssignPrintTypeToOrgunitRequest::setPrintTypeId()
     * @uses AssignPrintTypeToOrgunitRequest::setIsMandatory()
     * @uses AssignPrintTypeToOrgunitRequest::setPrintPosition()
     * @param string $unitName
     * @param string $printTypeId
     * @param bool $isMandatory
     * @param int $printPosition
     */
    public function __construct(?string $unitName = null, ?string $printTypeId = null, ?bool $isMandatory = null, ?int $printPosition = null)
    {
        $this
            ->setUnitName($unitName)
            ->setPrintTypeId($printTypeId)
            ->setIsMandatory($isMandatory)
            ->setPrintPosition($printPosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignPrintTypeToOrgunitRequest
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
     * Get printTypeId value
     * @return string|null
     */
    public function getPrintTypeId(): ?string
    {
        return $this->printTypeId;
    }
    /**
     * Set printTypeId value
     * @param string $printTypeId
     * @return \Pggns\MidocoApi\Order\StructType\AssignPrintTypeToOrgunitRequest
     */
    public function setPrintTypeId(?string $printTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($printTypeId) && !is_string($printTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTypeId, true), gettype($printTypeId)), __LINE__);
        }
        $this->printTypeId = $printTypeId;
        
        return $this;
    }
    /**
     * Get isMandatory value
     * @return bool|null
     */
    public function getIsMandatory(): ?bool
    {
        return $this->isMandatory;
    }
    /**
     * Set isMandatory value
     * @param bool $isMandatory
     * @return \Pggns\MidocoApi\Order\StructType\AssignPrintTypeToOrgunitRequest
     */
    public function setIsMandatory(?bool $isMandatory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMandatory) && !is_bool($isMandatory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMandatory, true), gettype($isMandatory)), __LINE__);
        }
        $this->isMandatory = $isMandatory;
        
        return $this;
    }
    /**
     * Get printPosition value
     * @return int|null
     */
    public function getPrintPosition(): ?int
    {
        return $this->printPosition;
    }
    /**
     * Set printPosition value
     * @param int $printPosition
     * @return \Pggns\MidocoApi\Order\StructType\AssignPrintTypeToOrgunitRequest
     */
    public function setPrintPosition(?int $printPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($printPosition) && !(is_int($printPosition) || ctype_digit($printPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printPosition, true), gettype($printPosition)), __LINE__);
        }
        $this->printPosition = $printPosition;
        
        return $this;
    }
}
