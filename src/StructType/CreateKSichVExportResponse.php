<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateKSichVExportResponse StructType
 * @subpackage Structs
 */
class CreateKSichVExportResponse extends AbstractStructBase
{
    /**
     * The MidocoTssExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    protected array $MidocoTssExport = [];
    /**
     * Constructor method for CreateKSichVExportResponse
     * @uses CreateKSichVExportResponse::setMidocoTssExport()
     * @param mixed[] $midocoTssExport
     */
    public function __construct(array $midocoTssExport = [])
    {
        $this
            ->setMidocoTssExport($midocoTssExport);
    }
    /**
     * Get MidocoTssExport value
     * @return mixed[]
     */
    public function getMidocoTssExport(): array
    {
        return $this->MidocoTssExport;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTssExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssExport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssExportForArrayConstraintsFromSetMidocoTssExport(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $createKSichVExportResponseMidocoTssExportItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($createKSichVExportResponseMidocoTssExportItem) ? get_class($createKSichVExportResponseMidocoTssExportItem) : sprintf('%s(%s)', gettype($createKSichVExportResponseMidocoTssExportItem), var_export($createKSichVExportResponseMidocoTssExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssExport property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssExport value
     * @throws InvalidArgumentException
     * @param mixed[] $midocoTssExport
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportResponse
     */
    public function setMidocoTssExport(array $midocoTssExport = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssExportArrayErrorMessage = self::validateMidocoTssExportForArrayConstraintsFromSetMidocoTssExport($midocoTssExport))) {
            throw new InvalidArgumentException($midocoTssExportArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssExport = $midocoTssExport;
        
        return $this;
    }
    /**
     * Add item to MidocoTssExport value
     * @throws InvalidArgumentException
     * @param mixed $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportResponse
     */
    public function addToMidocoTssExport(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The MidocoTssExport property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssExport[] = $item;
        
        return $this;
    }
}
