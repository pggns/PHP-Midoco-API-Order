<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfBeanNamesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfBeanNamesResponse extends AbstractStructBase
{
    /**
     * The bean
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $bean = null;
    /**
     * Constructor method for GetMfBeanNamesResponse
     * @uses GetMfBeanNamesResponse::setBean()
     * @param string[] $bean
     */
    public function __construct(?array $bean = null)
    {
        $this
            ->setBean($bean);
    }
    /**
     * Get bean value
     * @return string[]
     */
    public function getBean(): ?array
    {
        return $this->bean;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBean method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBean method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBeanForArrayConstraintFromSetBean(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfBeanNamesResponseBeanItem) {
            // validation for constraint: itemType
            if (!is_string($getMfBeanNamesResponseBeanItem)) {
                $invalidValues[] = is_object($getMfBeanNamesResponseBeanItem) ? get_class($getMfBeanNamesResponseBeanItem) : sprintf('%s(%s)', gettype($getMfBeanNamesResponseBeanItem), var_export($getMfBeanNamesResponseBeanItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bean property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bean value
     * @throws InvalidArgumentException
     * @param string[] $bean
     * @return \Pggns\MidocoApi\Order\StructType\GetMfBeanNamesResponse
     */
    public function setBean(?array $bean = null): self
    {
        // validation for constraint: array
        if ('' !== ($beanArrayErrorMessage = self::validateBeanForArrayConstraintFromSetBean($bean))) {
            throw new InvalidArgumentException($beanArrayErrorMessage, __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
    /**
     * Add item to bean value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMfBeanNamesResponse
     */
    public function addToBean(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The bean property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bean[] = $item;
        
        return $this;
    }
}
