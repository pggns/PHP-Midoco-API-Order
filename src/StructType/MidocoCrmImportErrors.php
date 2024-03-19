<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmImportErrors StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmImportErrors extends AbstractStructBase
{
    /**
     * The MidocoCrmDetailErrors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDetailErrors
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors[]
     */
    protected ?array $MidocoCrmDetailErrors = null;
    /**
     * The beanName
     * @var string|null
     */
    protected ?string $beanName = null;
    /**
     * Constructor method for MidocoCrmImportErrors
     * @uses MidocoCrmImportErrors::setMidocoCrmDetailErrors()
     * @uses MidocoCrmImportErrors::setBeanName()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors[] $midocoCrmDetailErrors
     * @param string $beanName
     */
    public function __construct(?array $midocoCrmDetailErrors = null, ?string $beanName = null)
    {
        $this
            ->setMidocoCrmDetailErrors($midocoCrmDetailErrors)
            ->setBeanName($beanName);
    }
    /**
     * Get MidocoCrmDetailErrors value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors[]
     */
    public function getMidocoCrmDetailErrors(): ?array
    {
        return $this->MidocoCrmDetailErrors;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmDetailErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDetailErrors method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDetailErrorsForArrayConstraintFromSetMidocoCrmDetailErrors(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportErrorsMidocoCrmDetailErrorsItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportErrorsMidocoCrmDetailErrorsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors) {
                $invalidValues[] = is_object($midocoCrmImportErrorsMidocoCrmDetailErrorsItem) ? get_class($midocoCrmImportErrorsMidocoCrmDetailErrorsItem) : sprintf('%s(%s)', gettype($midocoCrmImportErrorsMidocoCrmDetailErrorsItem), var_export($midocoCrmImportErrorsMidocoCrmDetailErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDetailErrors property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDetailErrors value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors[] $midocoCrmDetailErrors
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImportErrors
     */
    public function setMidocoCrmDetailErrors(?array $midocoCrmDetailErrors = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDetailErrorsArrayErrorMessage = self::validateMidocoCrmDetailErrorsForArrayConstraintFromSetMidocoCrmDetailErrors($midocoCrmDetailErrors))) {
            throw new InvalidArgumentException($midocoCrmDetailErrorsArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDetailErrors = $midocoCrmDetailErrors;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDetailErrors value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImportErrors
     */
    public function addToMidocoCrmDetailErrors(\Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDetailErrors property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDetailErrors[] = $item;
        
        return $this;
    }
    /**
     * Get beanName value
     * @return string|null
     */
    public function getBeanName(): ?string
    {
        return $this->beanName;
    }
    /**
     * Set beanName value
     * @param string $beanName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImportErrors
     */
    public function setBeanName(?string $beanName = null): self
    {
        // validation for constraint: string
        if (!is_null($beanName) && !is_string($beanName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beanName, true), gettype($beanName)), __LINE__);
        }
        $this->beanName = $beanName;
        
        return $this;
    }
}
