<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintDetailsForUsersRequest StructType
 * @subpackage Structs
 */
class GetPrintDetailsForUsersRequest extends AbstractStructBase
{
    /**
     * The PrintDetailsForBonusEmployee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: PrintDetailsForBonusEmployee
     * @var \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee[]
     */
    protected array $PrintDetailsForBonusEmployee = [];
    /**
     * Constructor method for GetPrintDetailsForUsersRequest
     * @uses GetPrintDetailsForUsersRequest::setPrintDetailsForBonusEmployee()
     * @param \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee[] $printDetailsForBonusEmployee
     */
    public function __construct(array $printDetailsForBonusEmployee = [])
    {
        $this
            ->setPrintDetailsForBonusEmployee($printDetailsForBonusEmployee);
    }
    /**
     * Get PrintDetailsForBonusEmployee value
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee[]
     */
    public function getPrintDetailsForBonusEmployee(): array
    {
        return $this->PrintDetailsForBonusEmployee;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintDetailsForBonusEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintDetailsForBonusEmployee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintDetailsForBonusEmployeeForArrayConstraintsFromSetPrintDetailsForBonusEmployee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintDetailsForUsersRequestPrintDetailsForBonusEmployeeItem) {
            // validation for constraint: itemType
            if (!$getPrintDetailsForUsersRequestPrintDetailsForBonusEmployeeItem instanceof \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee) {
                $invalidValues[] = is_object($getPrintDetailsForUsersRequestPrintDetailsForBonusEmployeeItem) ? get_class($getPrintDetailsForUsersRequestPrintDetailsForBonusEmployeeItem) : sprintf('%s(%s)', gettype($getPrintDetailsForUsersRequestPrintDetailsForBonusEmployeeItem), var_export($getPrintDetailsForUsersRequestPrintDetailsForBonusEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PrintDetailsForBonusEmployee property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PrintDetailsForBonusEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee[] $printDetailsForBonusEmployee
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintDetailsForUsersRequest
     */
    public function setPrintDetailsForBonusEmployee(array $printDetailsForBonusEmployee = []): self
    {
        // validation for constraint: array
        if ('' !== ($printDetailsForBonusEmployeeArrayErrorMessage = self::validatePrintDetailsForBonusEmployeeForArrayConstraintsFromSetPrintDetailsForBonusEmployee($printDetailsForBonusEmployee))) {
            throw new InvalidArgumentException($printDetailsForBonusEmployeeArrayErrorMessage, __LINE__);
        }
        $this->PrintDetailsForBonusEmployee = $printDetailsForBonusEmployee;
        
        return $this;
    }
    /**
     * Add item to PrintDetailsForBonusEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintDetailsForUsersRequest
     */
    public function addToPrintDetailsForBonusEmployee(\Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee) {
            throw new InvalidArgumentException(sprintf('The PrintDetailsForBonusEmployee property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PrintDetailsForBonusEmployee[] = $item;
        
        return $this;
    }
}
