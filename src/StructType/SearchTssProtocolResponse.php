<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTssProtocolResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchTssProtocolResponse extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The MidocoTssProtocol
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoTssProtocol
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol[]
     */
    protected ?array $MidocoTssProtocol = null;
    /**
     * Constructor method for SearchTssProtocolResponse
     * @uses SearchTssProtocolResponse::setUnitName()
     * @uses SearchTssProtocolResponse::setMidocoTssProtocol()
     * @param string $unitName
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol[] $midocoTssProtocol
     */
    public function __construct(?string $unitName = null, ?array $midocoTssProtocol = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMidocoTssProtocol($midocoTssProtocol);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolResponse
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get MidocoTssProtocol value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol[]
     */
    public function getMidocoTssProtocol(): ?array
    {
        return $this->MidocoTssProtocol;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTssProtocol method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssProtocol method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssProtocolForArrayConstraintFromSetMidocoTssProtocol(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchTssProtocolResponseMidocoTssProtocolItem) {
            // validation for constraint: itemType
            if (!$searchTssProtocolResponseMidocoTssProtocolItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol) {
                $invalidValues[] = is_object($searchTssProtocolResponseMidocoTssProtocolItem) ? get_class($searchTssProtocolResponseMidocoTssProtocolItem) : sprintf('%s(%s)', gettype($searchTssProtocolResponseMidocoTssProtocolItem), var_export($searchTssProtocolResponseMidocoTssProtocolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssProtocol property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol[] $midocoTssProtocol
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolResponse
     */
    public function setMidocoTssProtocol(?array $midocoTssProtocol = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssProtocolArrayErrorMessage = self::validateMidocoTssProtocolForArrayConstraintFromSetMidocoTssProtocol($midocoTssProtocol))) {
            throw new InvalidArgumentException($midocoTssProtocolArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssProtocol = $midocoTssProtocol;
        
        return $this;
    }
    /**
     * Add item to MidocoTssProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolResponse
     */
    public function addToMidocoTssProtocol(\Pggns\MidocoApi\Order\StructType\MidocoTssProtocol $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol) {
            throw new InvalidArgumentException(sprintf('The MidocoTssProtocol property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssProtocol[] = $item;
        
        return $this;
    }
}
