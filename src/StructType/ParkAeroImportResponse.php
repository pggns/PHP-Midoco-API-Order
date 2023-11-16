<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkAeroImportResponse StructType
 * @subpackage Structs
 */
class ParkAeroImportResponse extends AbstractStructBase
{
    /**
     * The ParkAeroImportStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus[]
     */
    protected array $ParkAeroImportStatus = [];
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for ParkAeroImportResponse
     * @uses ParkAeroImportResponse::setParkAeroImportStatus()
     * @uses ParkAeroImportResponse::setError()
     * @param \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus[] $parkAeroImportStatus
     * @param string $error
     */
    public function __construct(array $parkAeroImportStatus = [], ?string $error = null)
    {
        $this
            ->setParkAeroImportStatus($parkAeroImportStatus)
            ->setError($error);
    }
    /**
     * Get ParkAeroImportStatus value
     * @return \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus[]
     */
    public function getParkAeroImportStatus(): array
    {
        return $this->ParkAeroImportStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setParkAeroImportStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParkAeroImportStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParkAeroImportStatusForArrayConstraintsFromSetParkAeroImportStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $parkAeroImportResponseParkAeroImportStatusItem) {
            // validation for constraint: itemType
            if (!$parkAeroImportResponseParkAeroImportStatusItem instanceof \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus) {
                $invalidValues[] = is_object($parkAeroImportResponseParkAeroImportStatusItem) ? get_class($parkAeroImportResponseParkAeroImportStatusItem) : sprintf('%s(%s)', gettype($parkAeroImportResponseParkAeroImportStatusItem), var_export($parkAeroImportResponseParkAeroImportStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParkAeroImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ParkAeroImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus[] $parkAeroImportStatus
     * @return \Pggns\MidocoApi\Order\StructType\ParkAeroImportResponse
     */
    public function setParkAeroImportStatus(array $parkAeroImportStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($parkAeroImportStatusArrayErrorMessage = self::validateParkAeroImportStatusForArrayConstraintsFromSetParkAeroImportStatus($parkAeroImportStatus))) {
            throw new InvalidArgumentException($parkAeroImportStatusArrayErrorMessage, __LINE__);
        }
        $this->ParkAeroImportStatus = $parkAeroImportStatus;
        
        return $this;
    }
    /**
     * Add item to ParkAeroImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\ParkAeroImportResponse
     */
    public function addToParkAeroImportStatus(\Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus) {
            throw new InvalidArgumentException(sprintf('The ParkAeroImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ParkAeroImportStatus[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ParkAeroImportResponse
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
