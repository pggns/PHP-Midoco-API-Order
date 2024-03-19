<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderCustomerType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderCustomerType extends OrderCustomerDTO
{
    /**
     * The MidocoCommunication
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommunication
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCommunication[]
     */
    protected ?array $MidocoCommunication = null;
    /**
     * The overrideExistingOrderCustomer
     * @var bool|null
     */
    protected ?bool $overrideExistingOrderCustomer = null;
    /**
     * Constructor method for MidocoOrderCustomerType
     * @uses MidocoOrderCustomerType::setMidocoCommunication()
     * @uses MidocoOrderCustomerType::setOverrideExistingOrderCustomer()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCommunication[] $midocoCommunication
     * @param bool $overrideExistingOrderCustomer
     */
    public function __construct(?array $midocoCommunication = null, ?bool $overrideExistingOrderCustomer = null)
    {
        $this
            ->setMidocoCommunication($midocoCommunication)
            ->setOverrideExistingOrderCustomer($overrideExistingOrderCustomer);
    }
    /**
     * Get MidocoCommunication value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCommunication[]
     */
    public function getMidocoCommunication(): ?array
    {
        return $this->MidocoCommunication;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCommunication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommunication method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommunicationForArrayConstraintFromSetMidocoCommunication(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderCustomerTypeMidocoCommunicationItem) {
            // validation for constraint: itemType
            if (!$midocoOrderCustomerTypeMidocoCommunicationItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCommunication) {
                $invalidValues[] = is_object($midocoOrderCustomerTypeMidocoCommunicationItem) ? get_class($midocoOrderCustomerTypeMidocoCommunicationItem) : sprintf('%s(%s)', gettype($midocoOrderCustomerTypeMidocoCommunicationItem), var_export($midocoOrderCustomerTypeMidocoCommunicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommunication property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCommunication, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommunication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCommunication[] $midocoCommunication
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomerType
     */
    public function setMidocoCommunication(?array $midocoCommunication = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommunicationArrayErrorMessage = self::validateMidocoCommunicationForArrayConstraintFromSetMidocoCommunication($midocoCommunication))) {
            throw new InvalidArgumentException($midocoCommunicationArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommunication = $midocoCommunication;
        
        return $this;
    }
    /**
     * Add item to MidocoCommunication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCommunication $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomerType
     */
    public function addToMidocoCommunication(\Pggns\MidocoApi\Order\StructType\MidocoCommunication $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCommunication) {
            throw new InvalidArgumentException(sprintf('The MidocoCommunication property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCommunication, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommunication[] = $item;
        
        return $this;
    }
    /**
     * Get overrideExistingOrderCustomer value
     * @return bool|null
     */
    public function getOverrideExistingOrderCustomer(): ?bool
    {
        return $this->overrideExistingOrderCustomer;
    }
    /**
     * Set overrideExistingOrderCustomer value
     * @param bool $overrideExistingOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomerType
     */
    public function setOverrideExistingOrderCustomer(?bool $overrideExistingOrderCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideExistingOrderCustomer) && !is_bool($overrideExistingOrderCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideExistingOrderCustomer, true), gettype($overrideExistingOrderCustomer)), __LINE__);
        }
        $this->overrideExistingOrderCustomer = $overrideExistingOrderCustomer;
        
        return $this;
    }
}
