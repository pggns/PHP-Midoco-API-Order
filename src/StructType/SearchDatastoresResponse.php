<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDatastoresResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDatastoresResponse extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Order\StructType\DatastoreDTO[]
     */
    protected ?array $MidocoDatastore = null;
    /**
     * Constructor method for SearchDatastoresResponse
     * @uses SearchDatastoresResponse::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreDTO[] $midocoDatastore
     */
    public function __construct(?array $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreDTO[]
     */
    public function getMidocoDatastore(): ?array
    {
        return $this->MidocoDatastore;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDatastore method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDatastore method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDatastoreForArrayConstraintFromSetMidocoDatastore(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDatastoresResponseMidocoDatastoreItem) {
            // validation for constraint: itemType
            if (!$searchDatastoresResponseMidocoDatastoreItem instanceof \Pggns\MidocoApi\Order\StructType\DatastoreDTO) {
                $invalidValues[] = is_object($searchDatastoresResponseMidocoDatastoreItem) ? get_class($searchDatastoresResponseMidocoDatastoreItem) : sprintf('%s(%s)', gettype($searchDatastoresResponseMidocoDatastoreItem), var_export($searchDatastoresResponseMidocoDatastoreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDatastore property can only contain items of type \Pggns\MidocoApi\Order\StructType\DatastoreDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreDTO[] $midocoDatastore
     * @return \Pggns\MidocoApi\Order\StructType\SearchDatastoresResponse
     */
    public function setMidocoDatastore(?array $midocoDatastore = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDatastoreArrayErrorMessage = self::validateMidocoDatastoreForArrayConstraintFromSetMidocoDatastore($midocoDatastore))) {
            throw new InvalidArgumentException($midocoDatastoreArrayErrorMessage, __LINE__);
        }
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
    /**
     * Add item to MidocoDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchDatastoresResponse
     */
    public function addToMidocoDatastore(\Pggns\MidocoApi\Order\StructType\DatastoreDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DatastoreDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDatastore property can only contain items of type \Pggns\MidocoApi\Order\StructType\DatastoreDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDatastore[] = $item;
        
        return $this;
    }
}
