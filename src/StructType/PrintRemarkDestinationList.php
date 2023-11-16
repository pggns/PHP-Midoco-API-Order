<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintRemarkDestinationList StructType
 * @subpackage Structs
 */
class PrintRemarkDestinationList extends AbstractStructBase
{
    /**
     * The MidocoPrintRemarkDestination
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintRemarkDestination
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination[]
     */
    protected array $MidocoPrintRemarkDestination = [];
    /**
     * Constructor method for PrintRemarkDestinationList
     * @uses PrintRemarkDestinationList::setMidocoPrintRemarkDestination()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination[] $midocoPrintRemarkDestination
     */
    public function __construct(array $midocoPrintRemarkDestination = [])
    {
        $this
            ->setMidocoPrintRemarkDestination($midocoPrintRemarkDestination);
    }
    /**
     * Get MidocoPrintRemarkDestination value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination[]
     */
    public function getMidocoPrintRemarkDestination(): array
    {
        return $this->MidocoPrintRemarkDestination;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintRemarkDestination method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintRemarkDestination method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintRemarkDestinationForArrayConstraintsFromSetMidocoPrintRemarkDestination(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $printRemarkDestinationListMidocoPrintRemarkDestinationItem) {
            // validation for constraint: itemType
            if (!$printRemarkDestinationListMidocoPrintRemarkDestinationItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination) {
                $invalidValues[] = is_object($printRemarkDestinationListMidocoPrintRemarkDestinationItem) ? get_class($printRemarkDestinationListMidocoPrintRemarkDestinationItem) : sprintf('%s(%s)', gettype($printRemarkDestinationListMidocoPrintRemarkDestinationItem), var_export($printRemarkDestinationListMidocoPrintRemarkDestinationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintRemarkDestination property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintRemarkDestination value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination[] $midocoPrintRemarkDestination
     * @return \Pggns\MidocoApi\Order\StructType\PrintRemarkDestinationList
     */
    public function setMidocoPrintRemarkDestination(array $midocoPrintRemarkDestination = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintRemarkDestinationArrayErrorMessage = self::validateMidocoPrintRemarkDestinationForArrayConstraintsFromSetMidocoPrintRemarkDestination($midocoPrintRemarkDestination))) {
            throw new InvalidArgumentException($midocoPrintRemarkDestinationArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintRemarkDestination = $midocoPrintRemarkDestination;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintRemarkDestination value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintRemarkDestinationList
     */
    public function addToMidocoPrintRemarkDestination(\Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintRemarkDestination property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintRemarkDestination, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintRemarkDestination[] = $item;
        
        return $this;
    }
}
