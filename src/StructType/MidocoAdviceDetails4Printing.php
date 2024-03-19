<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAdviceDetails4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAdviceDetails4Printing extends AbstractStructBase
{
    /**
     * The AdviceDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\AdviceDetails[]
     */
    protected ?array $AdviceDetails = null;
    /**
     * Constructor method for MidocoAdviceDetails4Printing
     * @uses MidocoAdviceDetails4Printing::setAdviceDetails()
     * @param \Pggns\MidocoApi\Order\StructType\AdviceDetails[] $adviceDetails
     */
    public function __construct(?array $adviceDetails = null)
    {
        $this
            ->setAdviceDetails($adviceDetails);
    }
    /**
     * Get AdviceDetails value
     * @return \Pggns\MidocoApi\Order\StructType\AdviceDetails[]
     */
    public function getAdviceDetails(): ?array
    {
        return $this->AdviceDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdviceDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdviceDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdviceDetailsForArrayConstraintFromSetAdviceDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAdviceDetails4PrintingAdviceDetailsItem) {
            // validation for constraint: itemType
            if (!$midocoAdviceDetails4PrintingAdviceDetailsItem instanceof \Pggns\MidocoApi\Order\StructType\AdviceDetails) {
                $invalidValues[] = is_object($midocoAdviceDetails4PrintingAdviceDetailsItem) ? get_class($midocoAdviceDetails4PrintingAdviceDetailsItem) : sprintf('%s(%s)', gettype($midocoAdviceDetails4PrintingAdviceDetailsItem), var_export($midocoAdviceDetails4PrintingAdviceDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdviceDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdviceDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdviceDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdviceDetails[] $adviceDetails
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetails4Printing
     */
    public function setAdviceDetails(?array $adviceDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($adviceDetailsArrayErrorMessage = self::validateAdviceDetailsForArrayConstraintFromSetAdviceDetails($adviceDetails))) {
            throw new InvalidArgumentException($adviceDetailsArrayErrorMessage, __LINE__);
        }
        $this->AdviceDetails = $adviceDetails;
        
        return $this;
    }
    /**
     * Add item to AdviceDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdviceDetails $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceDetails4Printing
     */
    public function addToAdviceDetails(\Pggns\MidocoApi\Order\StructType\AdviceDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdviceDetails) {
            throw new InvalidArgumentException(sprintf('The AdviceDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdviceDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdviceDetails[] = $item;
        
        return $this;
    }
}
