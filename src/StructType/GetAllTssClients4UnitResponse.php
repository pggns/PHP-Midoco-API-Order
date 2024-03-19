<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllTssClients4UnitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllTssClients4UnitResponse extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssClient[]
     */
    protected ?array $MidocoTssClient = null;
    /**
     * Constructor method for GetAllTssClients4UnitResponse
     * @uses GetAllTssClients4UnitResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient[] $midocoTssClient
     */
    public function __construct(?array $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient[]
     */
    public function getMidocoTssClient(): ?array
    {
        return $this->MidocoTssClient;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTssClient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssClient method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssClientForArrayConstraintFromSetMidocoTssClient(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllTssClients4UnitResponseMidocoTssClientItem) {
            // validation for constraint: itemType
            if (!$getAllTssClients4UnitResponseMidocoTssClientItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssClient) {
                $invalidValues[] = is_object($getAllTssClients4UnitResponseMidocoTssClientItem) ? get_class($getAllTssClients4UnitResponseMidocoTssClientItem) : sprintf('%s(%s)', gettype($getAllTssClients4UnitResponseMidocoTssClientItem), var_export($getAllTssClients4UnitResponseMidocoTssClientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssClient property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssClient, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssClient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient[] $midocoTssClient
     * @return \Pggns\MidocoApi\Order\StructType\GetAllTssClients4UnitResponse
     */
    public function setMidocoTssClient(?array $midocoTssClient = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssClientArrayErrorMessage = self::validateMidocoTssClientForArrayConstraintFromSetMidocoTssClient($midocoTssClient))) {
            throw new InvalidArgumentException($midocoTssClientArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
    /**
     * Add item to MidocoTssClient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAllTssClients4UnitResponse
     */
    public function addToMidocoTssClient(\Pggns\MidocoApi\Order\StructType\MidocoTssClient $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssClient) {
            throw new InvalidArgumentException(sprintf('The MidocoTssClient property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssClient, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssClient[] = $item;
        
        return $this;
    }
}
