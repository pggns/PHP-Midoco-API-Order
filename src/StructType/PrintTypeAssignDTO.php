<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintTypeAssignDTO StructType
 * @subpackage Structs
 */
class PrintTypeAssignDTO extends AbstractStructBase
{
    /**
     * The isMandatory
     * @var bool|null
     */
    protected ?bool $isMandatory = null;
    /**
     * The noOfCopies
     * @var int|null
     */
    protected ?int $noOfCopies = null;
    /**
     * The printPosition
     * @var int|null
     */
    protected ?int $printPosition = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for PrintTypeAssignDTO
     * @uses PrintTypeAssignDTO::setIsMandatory()
     * @uses PrintTypeAssignDTO::setNoOfCopies()
     * @uses PrintTypeAssignDTO::setPrintPosition()
     * @uses PrintTypeAssignDTO::setTypeId()
     * @uses PrintTypeAssignDTO::setUnitName()
     * @param bool $isMandatory
     * @param int $noOfCopies
     * @param int $printPosition
     * @param string $typeId
     * @param string $unitName
     */
    public function __construct(?bool $isMandatory = null, ?int $noOfCopies = null, ?int $printPosition = null, ?string $typeId = null, ?string $unitName = null)
    {
        $this
            ->setIsMandatory($isMandatory)
            ->setNoOfCopies($noOfCopies)
            ->setPrintPosition($printPosition)
            ->setTypeId($typeId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeAssignDTO
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
     * Get noOfCopies value
     * @return int|null
     */
    public function getNoOfCopies(): ?int
    {
        return $this->noOfCopies;
    }
    /**
     * Set noOfCopies value
     * @param int $noOfCopies
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeAssignDTO
     */
    public function setNoOfCopies(?int $noOfCopies = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfCopies) && !(is_int($noOfCopies) || ctype_digit($noOfCopies))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfCopies, true), gettype($noOfCopies)), __LINE__);
        }
        $this->noOfCopies = $noOfCopies;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeAssignDTO
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
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeAssignDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeAssignDTO
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
