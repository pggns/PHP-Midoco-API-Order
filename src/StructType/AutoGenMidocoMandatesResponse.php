<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoGenMidocoMandatesResponse StructType
 * @subpackage Structs
 */
class AutoGenMidocoMandatesResponse extends AbstractStructBase
{
    /**
     * The MidocoMandateGenError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMandateGenError
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError[]
     */
    protected array $MidocoMandateGenError = [];
    /**
     * Constructor method for AutoGenMidocoMandatesResponse
     * @uses AutoGenMidocoMandatesResponse::setMidocoMandateGenError()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError[] $midocoMandateGenError
     */
    public function __construct(array $midocoMandateGenError = [])
    {
        $this
            ->setMidocoMandateGenError($midocoMandateGenError);
    }
    /**
     * Get MidocoMandateGenError value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError[]
     */
    public function getMidocoMandateGenError(): array
    {
        return $this->MidocoMandateGenError;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMandateGenError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMandateGenError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMandateGenErrorForArrayConstraintsFromSetMidocoMandateGenError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $autoGenMidocoMandatesResponseMidocoMandateGenErrorItem) {
            // validation for constraint: itemType
            if (!$autoGenMidocoMandatesResponseMidocoMandateGenErrorItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError) {
                $invalidValues[] = is_object($autoGenMidocoMandatesResponseMidocoMandateGenErrorItem) ? get_class($autoGenMidocoMandatesResponseMidocoMandateGenErrorItem) : sprintf('%s(%s)', gettype($autoGenMidocoMandatesResponseMidocoMandateGenErrorItem), var_export($autoGenMidocoMandatesResponseMidocoMandateGenErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMandateGenError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMandateGenError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError[] $midocoMandateGenError
     * @return \Pggns\MidocoApi\Order\StructType\AutoGenMidocoMandatesResponse
     */
    public function setMidocoMandateGenError(array $midocoMandateGenError = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMandateGenErrorArrayErrorMessage = self::validateMidocoMandateGenErrorForArrayConstraintsFromSetMidocoMandateGenError($midocoMandateGenError))) {
            throw new InvalidArgumentException($midocoMandateGenErrorArrayErrorMessage, __LINE__);
        }
        $this->MidocoMandateGenError = $midocoMandateGenError;
        
        return $this;
    }
    /**
     * Add item to MidocoMandateGenError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError $item
     * @return \Pggns\MidocoApi\Order\StructType\AutoGenMidocoMandatesResponse
     */
    public function addToMidocoMandateGenError(\Pggns\MidocoApi\Order\StructType\MidocoMandateGenError $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError) {
            throw new InvalidArgumentException(sprintf('The MidocoMandateGenError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMandateGenError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMandateGenError[] = $item;
        
        return $this;
    }
}
