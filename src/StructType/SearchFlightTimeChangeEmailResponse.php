<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFlightTimeChangeEmailResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchFlightTimeChangeEmail --- Search for FlightTimeChange Email records
 * @subpackage Structs
 */
class SearchFlightTimeChangeEmailResponse extends AbstractStructBase
{
    /**
     * The MidocoFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightTimeChangeEmail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType[]
     */
    protected array $MidocoFlightTimeChangeEmail = [];
    /**
     * Constructor method for SearchFlightTimeChangeEmailResponse
     * @uses SearchFlightTimeChangeEmailResponse::setMidocoFlightTimeChangeEmail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType[] $midocoFlightTimeChangeEmail
     */
    public function __construct(array $midocoFlightTimeChangeEmail = [])
    {
        $this
            ->setMidocoFlightTimeChangeEmail($midocoFlightTimeChangeEmail);
    }
    /**
     * Get MidocoFlightTimeChangeEmail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType[]
     */
    public function getMidocoFlightTimeChangeEmail(): array
    {
        return $this->MidocoFlightTimeChangeEmail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFlightTimeChangeEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightTimeChangeEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightTimeChangeEmailForArrayConstraintsFromSetMidocoFlightTimeChangeEmail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchFlightTimeChangeEmailResponseMidocoFlightTimeChangeEmailItem) {
            // validation for constraint: itemType
            if (!$searchFlightTimeChangeEmailResponseMidocoFlightTimeChangeEmailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType) {
                $invalidValues[] = is_object($searchFlightTimeChangeEmailResponseMidocoFlightTimeChangeEmailItem) ? get_class($searchFlightTimeChangeEmailResponseMidocoFlightTimeChangeEmailItem) : sprintf('%s(%s)', gettype($searchFlightTimeChangeEmailResponseMidocoFlightTimeChangeEmailItem), var_export($searchFlightTimeChangeEmailResponseMidocoFlightTimeChangeEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightTimeChangeEmail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightTimeChangeEmail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType[] $midocoFlightTimeChangeEmail
     * @return \Pggns\MidocoApi\Order\StructType\SearchFlightTimeChangeEmailResponse
     */
    public function setMidocoFlightTimeChangeEmail(array $midocoFlightTimeChangeEmail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightTimeChangeEmailArrayErrorMessage = self::validateMidocoFlightTimeChangeEmailForArrayConstraintsFromSetMidocoFlightTimeChangeEmail($midocoFlightTimeChangeEmail))) {
            throw new InvalidArgumentException($midocoFlightTimeChangeEmailArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightTimeChangeEmail = $midocoFlightTimeChangeEmail;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightTimeChangeEmail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchFlightTimeChangeEmailResponse
     */
    public function addToMidocoFlightTimeChangeEmail(\Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightTimeChangeEmail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightTimeChangeEmail[] = $item;
        
        return $this;
    }
}
