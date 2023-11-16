<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Door2GateImportResponse StructType
 * @subpackage Structs
 */
class Door2GateImportResponse extends AbstractStructBase
{
    /**
     * The Door2GateImportStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus[]
     */
    protected array $Door2GateImportStatus = [];
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for Door2GateImportResponse
     * @uses Door2GateImportResponse::setDoor2GateImportStatus()
     * @uses Door2GateImportResponse::setError()
     * @param \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus[] $door2GateImportStatus
     * @param string $error
     */
    public function __construct(array $door2GateImportStatus = [], ?string $error = null)
    {
        $this
            ->setDoor2GateImportStatus($door2GateImportStatus)
            ->setError($error);
    }
    /**
     * Get Door2GateImportStatus value
     * @return \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus[]
     */
    public function getDoor2GateImportStatus(): array
    {
        return $this->Door2GateImportStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setDoor2GateImportStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDoor2GateImportStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDoor2GateImportStatusForArrayConstraintsFromSetDoor2GateImportStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $door2GateImportResponseDoor2GateImportStatusItem) {
            // validation for constraint: itemType
            if (!$door2GateImportResponseDoor2GateImportStatusItem instanceof \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus) {
                $invalidValues[] = is_object($door2GateImportResponseDoor2GateImportStatusItem) ? get_class($door2GateImportResponseDoor2GateImportStatusItem) : sprintf('%s(%s)', gettype($door2GateImportResponseDoor2GateImportStatusItem), var_export($door2GateImportResponseDoor2GateImportStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Door2GateImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Door2GateImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus[] $door2GateImportStatus
     * @return \Pggns\MidocoApi\Order\StructType\Door2GateImportResponse
     */
    public function setDoor2GateImportStatus(array $door2GateImportStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($door2GateImportStatusArrayErrorMessage = self::validateDoor2GateImportStatusForArrayConstraintsFromSetDoor2GateImportStatus($door2GateImportStatus))) {
            throw new InvalidArgumentException($door2GateImportStatusArrayErrorMessage, __LINE__);
        }
        $this->Door2GateImportStatus = $door2GateImportStatus;
        
        return $this;
    }
    /**
     * Add item to Door2GateImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\Door2GateImportResponse
     */
    public function addToDoor2GateImportStatus(\Pggns\MidocoApi\Order\StructType\Door2GateImportStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus) {
            throw new InvalidArgumentException(sprintf('The Door2GateImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Door2GateImportStatus[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\Door2GateImportResponse
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
}
