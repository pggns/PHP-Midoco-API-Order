<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVerkDataPrintRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVerkDataPrintRequest extends AbstractStructBase
{
    /**
     * The MidocoVerkDataPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoVerkDataPrint
     * @var \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[]
     */
    protected ?array $MidocoVerkDataPrint = null;
    /**
     * Constructor method for SaveVerkDataPrintRequest
     * @uses SaveVerkDataPrintRequest::setMidocoVerkDataPrint()
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     */
    public function __construct(?array $midocoVerkDataPrint = null)
    {
        $this
            ->setMidocoVerkDataPrint($midocoVerkDataPrint);
    }
    /**
     * Get MidocoVerkDataPrint value
     * @return \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[]
     */
    public function getMidocoVerkDataPrint(): ?array
    {
        return $this->MidocoVerkDataPrint;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVerkDataPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVerkDataPrint method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVerkDataPrintForArrayConstraintFromSetMidocoVerkDataPrint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveVerkDataPrintRequestMidocoVerkDataPrintItem) {
            // validation for constraint: itemType
            if (!$saveVerkDataPrintRequestMidocoVerkDataPrintItem instanceof \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO) {
                $invalidValues[] = is_object($saveVerkDataPrintRequestMidocoVerkDataPrintItem) ? get_class($saveVerkDataPrintRequestMidocoVerkDataPrintItem) : sprintf('%s(%s)', gettype($saveVerkDataPrintRequestMidocoVerkDataPrintItem), var_export($saveVerkDataPrintRequestMidocoVerkDataPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     * @return \Pggns\MidocoApi\Order\StructType\SaveVerkDataPrintRequest
     */
    public function setMidocoVerkDataPrint(?array $midocoVerkDataPrint = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVerkDataPrintArrayErrorMessage = self::validateMidocoVerkDataPrintForArrayConstraintFromSetMidocoVerkDataPrint($midocoVerkDataPrint))) {
            throw new InvalidArgumentException($midocoVerkDataPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoVerkDataPrint = $midocoVerkDataPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveVerkDataPrintRequest
     */
    public function addToMidocoVerkDataPrint(\Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVerkDataPrint[] = $item;
        
        return $this;
    }
}
