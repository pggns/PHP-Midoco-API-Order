<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetConsentResponse extends AbstractStructBase
{
    /**
     * The MidocoConsent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoConsent
     * @var \Pggns\MidocoApi\Order\StructType\MidocoConsent[]
     */
    protected ?array $MidocoConsent = null;
    /**
     * Constructor method for GetConsentResponse
     * @uses GetConsentResponse::setMidocoConsent()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoConsent[] $midocoConsent
     */
    public function __construct(?array $midocoConsent = null)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsent[]
     */
    public function getMidocoConsent(): ?array
    {
        return $this->MidocoConsent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoConsent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoConsent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoConsentForArrayConstraintFromSetMidocoConsent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getConsentResponseMidocoConsentItem) {
            // validation for constraint: itemType
            if (!$getConsentResponseMidocoConsentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoConsent) {
                $invalidValues[] = is_object($getConsentResponseMidocoConsentItem) ? get_class($getConsentResponseMidocoConsentItem) : sprintf('%s(%s)', gettype($getConsentResponseMidocoConsentItem), var_export($getConsentResponseMidocoConsentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoConsent property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoConsent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoConsent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoConsent[] $midocoConsent
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentResponse
     */
    public function setMidocoConsent(?array $midocoConsent = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoConsentArrayErrorMessage = self::validateMidocoConsentForArrayConstraintFromSetMidocoConsent($midocoConsent))) {
            throw new InvalidArgumentException($midocoConsentArrayErrorMessage, __LINE__);
        }
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
    /**
     * Add item to MidocoConsent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoConsent $item
     * @return \Pggns\MidocoApi\Order\StructType\GetConsentResponse
     */
    public function addToMidocoConsent(\Pggns\MidocoApi\Order\StructType\MidocoConsent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoConsent) {
            throw new InvalidArgumentException(sprintf('The MidocoConsent property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoConsent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoConsent[] = $item;
        
        return $this;
    }
}
