<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitDatastoresRequest StructType
 * @subpackage Structs
 */
class SaveOrgunitDatastoresRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitDatastore
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoOrgunitDatastore
     * @var \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO[]
     */
    protected array $MidocoOrgunitDatastore = [];
    /**
     * Constructor method for SaveOrgunitDatastoresRequest
     * @uses SaveOrgunitDatastoresRequest::setMidocoOrgunitDatastore()
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO[] $midocoOrgunitDatastore
     */
    public function __construct(array $midocoOrgunitDatastore = [])
    {
        $this
            ->setMidocoOrgunitDatastore($midocoOrgunitDatastore);
    }
    /**
     * Get MidocoOrgunitDatastore value
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO[]
     */
    public function getMidocoOrgunitDatastore(): array
    {
        return $this->MidocoOrgunitDatastore;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgunitDatastore method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitDatastore method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitDatastoreForArrayConstraintsFromSetMidocoOrgunitDatastore(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveOrgunitDatastoresRequestMidocoOrgunitDatastoreItem) {
            // validation for constraint: itemType
            if (!$saveOrgunitDatastoresRequestMidocoOrgunitDatastoreItem instanceof \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO) {
                $invalidValues[] = is_object($saveOrgunitDatastoresRequestMidocoOrgunitDatastoreItem) ? get_class($saveOrgunitDatastoresRequestMidocoOrgunitDatastoreItem) : sprintf('%s(%s)', gettype($saveOrgunitDatastoresRequestMidocoOrgunitDatastoreItem), var_export($saveOrgunitDatastoresRequestMidocoOrgunitDatastoreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitDatastore property can only contain items of type \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO[] $midocoOrgunitDatastore
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrgunitDatastoresRequest
     */
    public function setMidocoOrgunitDatastore(array $midocoOrgunitDatastore = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitDatastoreArrayErrorMessage = self::validateMidocoOrgunitDatastoreForArrayConstraintsFromSetMidocoOrgunitDatastore($midocoOrgunitDatastore))) {
            throw new InvalidArgumentException($midocoOrgunitDatastoreArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitDatastore = $midocoOrgunitDatastore;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrgunitDatastoresRequest
     */
    public function addToMidocoOrgunitDatastore(\Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitDatastore property can only contain items of type \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitDatastore[] = $item;
        
        return $this;
    }
}
