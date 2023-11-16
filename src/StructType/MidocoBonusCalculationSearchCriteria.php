<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBonusCalculationSearchCriteria StructType
 * @subpackage Structs
 */
class MidocoBonusCalculationSearchCriteria extends AbstractStructBase
{
    /**
     * The calculationType
     * @var string|null
     */
    protected ?string $calculationType = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for MidocoBonusCalculationSearchCriteria
     * @uses MidocoBonusCalculationSearchCriteria::setCalculationType()
     * @uses MidocoBonusCalculationSearchCriteria::setStartDate()
     * @uses MidocoBonusCalculationSearchCriteria::setEndDate()
     * @param string $calculationType
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(?string $calculationType = null, ?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setCalculationType($calculationType)
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get calculationType value
     * @return string|null
     */
    public function getCalculationType(): ?string
    {
        return $this->calculationType;
    }
    /**
     * Set calculationType value
     * @param string $calculationType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria
     */
    public function setCalculationType(?string $calculationType = null): self
    {
        // validation for constraint: string
        if (!is_null($calculationType) && !is_string($calculationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculationType, true), gettype($calculationType)), __LINE__);
        }
        $this->calculationType = $calculationType;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
}
