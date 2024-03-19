<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintUserBonusCalculationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintUserBonusCalculationRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusEmployee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoBonusEmployee
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee[]
     */
    protected ?array $MidocoBonusEmployee = null;
    /**
     * The isPreview
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The test
     * @var bool|null
     */
    protected ?bool $test = null;
    /**
     * Constructor method for PrintUserBonusCalculationRequest
     * @uses PrintUserBonusCalculationRequest::setMidocoBonusEmployee()
     * @uses PrintUserBonusCalculationRequest::setIsPreview()
     * @uses PrintUserBonusCalculationRequest::setTest()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee[] $midocoBonusEmployee
     * @param bool $isPreview
     * @param bool $test
     */
    public function __construct(?array $midocoBonusEmployee = null, ?bool $isPreview = null, ?bool $test = null)
    {
        $this
            ->setMidocoBonusEmployee($midocoBonusEmployee)
            ->setIsPreview($isPreview)
            ->setTest($test);
    }
    /**
     * Get MidocoBonusEmployee value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee[]
     */
    public function getMidocoBonusEmployee(): ?array
    {
        return $this->MidocoBonusEmployee;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBonusEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusEmployee method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusEmployeeForArrayConstraintFromSetMidocoBonusEmployee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printUserBonusCalculationRequestMidocoBonusEmployeeItem) {
            // validation for constraint: itemType
            if (!$printUserBonusCalculationRequestMidocoBonusEmployeeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee) {
                $invalidValues[] = is_object($printUserBonusCalculationRequestMidocoBonusEmployeeItem) ? get_class($printUserBonusCalculationRequestMidocoBonusEmployeeItem) : sprintf('%s(%s)', gettype($printUserBonusCalculationRequestMidocoBonusEmployeeItem), var_export($printUserBonusCalculationRequestMidocoBonusEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusEmployee property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee[] $midocoBonusEmployee
     * @return \Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationRequest
     */
    public function setMidocoBonusEmployee(?array $midocoBonusEmployee = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusEmployeeArrayErrorMessage = self::validateMidocoBonusEmployeeForArrayConstraintFromSetMidocoBonusEmployee($midocoBonusEmployee))) {
            throw new InvalidArgumentException($midocoBonusEmployeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusEmployee = $midocoBonusEmployee;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationRequest
     */
    public function addToMidocoBonusEmployee(\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusEmployee property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusEmployee[] = $item;
        
        return $this;
    }
    /**
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationRequest
     */
    public function setIsPreview(?bool $isPreview = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get test value
     * @return bool|null
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }
    /**
     * Set test value
     * @param bool $test
     * @return \Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationRequest
     */
    public function setTest(?bool $test = null): self
    {
        // validation for constraint: boolean
        if (!is_null($test) && !is_bool($test)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($test, true), gettype($test)), __LINE__);
        }
        $this->test = $test;
        
        return $this;
    }
}
