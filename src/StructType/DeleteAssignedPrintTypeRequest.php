<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAssignedPrintTypeRequest StructType
 * @subpackage Structs
 */
class DeleteAssignedPrintTypeRequest extends AbstractStructBase
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
     * Constructor method for DeleteAssignedPrintTypeRequest
     * @uses DeleteAssignedPrintTypeRequest::setUnitName()
     * @uses DeleteAssignedPrintTypeRequest::setPrintTypeId()
     * @param string $unitName
     * @param string $printTypeId
     */
    public function __construct(?string $unitName = null, ?string $printTypeId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setPrintTypeId($printTypeId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAssignedPrintTypeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAssignedPrintTypeRequest
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
}
