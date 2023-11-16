<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDatabasesForOrgunitResponse StructType
 * @subpackage Structs
 */
class GetDatabasesForOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoDatabaseType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDatabaseType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType[]
     */
    protected array $MidocoDatabaseType = [];
    /**
     * Constructor method for GetDatabasesForOrgunitResponse
     * @uses GetDatabasesForOrgunitResponse::setMidocoDatabaseType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType[] $midocoDatabaseType
     */
    public function __construct(array $midocoDatabaseType = [])
    {
        $this
            ->setMidocoDatabaseType($midocoDatabaseType);
    }
    /**
     * Get MidocoDatabaseType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType[]
     */
    public function getMidocoDatabaseType(): array
    {
        return $this->MidocoDatabaseType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDatabaseType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDatabaseType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDatabaseTypeForArrayConstraintsFromSetMidocoDatabaseType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDatabasesForOrgunitResponseMidocoDatabaseTypeItem) {
            // validation for constraint: itemType
            if (!$getDatabasesForOrgunitResponseMidocoDatabaseTypeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType) {
                $invalidValues[] = is_object($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem) ? get_class($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem) : sprintf('%s(%s)', gettype($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem), var_export($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDatabaseType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDatabaseType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType[] $midocoDatabaseType
     * @return \Pggns\MidocoApi\Order\StructType\GetDatabasesForOrgunitResponse
     */
    public function setMidocoDatabaseType(array $midocoDatabaseType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDatabaseTypeArrayErrorMessage = self::validateMidocoDatabaseTypeForArrayConstraintsFromSetMidocoDatabaseType($midocoDatabaseType))) {
            throw new InvalidArgumentException($midocoDatabaseTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoDatabaseType = $midocoDatabaseType;
        
        return $this;
    }
    /**
     * Add item to MidocoDatabaseType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDatabasesForOrgunitResponse
     */
    public function addToMidocoDatabaseType(\Pggns\MidocoApi\Order\StructType\MidocoDatabaseType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType) {
            throw new InvalidArgumentException(sprintf('The MidocoDatabaseType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDatabaseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDatabaseType[] = $item;
        
        return $this;
    }
}
