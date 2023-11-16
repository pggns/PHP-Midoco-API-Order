<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterFairplaneRequest StructType
 * @subpackage Structs
 */
class RegisterFairplaneRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $unitName = [];
    /**
     * The activate
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $activate = null;
    /**
     * The registerAllAssigned
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $registerAllAssigned = null;
    /**
     * Constructor method for RegisterFairplaneRequest
     * @uses RegisterFairplaneRequest::setUnitName()
     * @uses RegisterFairplaneRequest::setActivate()
     * @uses RegisterFairplaneRequest::setRegisterAllAssigned()
     * @param string[] $unitName
     * @param bool $activate
     * @param bool $registerAllAssigned
     */
    public function __construct(array $unitName = [], ?bool $activate = true, ?bool $registerAllAssigned = false)
    {
        $this
            ->setUnitName($unitName)
            ->setActivate($activate)
            ->setRegisterAllAssigned($registerAllAssigned);
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintsFromSetUnitName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $registerFairplaneRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($registerFairplaneRequestUnitNameItem)) {
                $invalidValues[] = is_object($registerFairplaneRequestUnitNameItem) ? get_class($registerFairplaneRequestUnitNameItem) : sprintf('%s(%s)', gettype($registerFairplaneRequestUnitNameItem), var_export($registerFairplaneRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Order\StructType\RegisterFairplaneRequest
     */
    public function setUnitName(array $unitName = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintsFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\RegisterFairplaneRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get activate value
     * @return bool|null
     */
    public function getActivate(): ?bool
    {
        return $this->activate;
    }
    /**
     * Set activate value
     * @param bool $activate
     * @return \Pggns\MidocoApi\Order\StructType\RegisterFairplaneRequest
     */
    public function setActivate(?bool $activate = true): self
    {
        // validation for constraint: boolean
        if (!is_null($activate) && !is_bool($activate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activate, true), gettype($activate)), __LINE__);
        }
        $this->activate = $activate;
        
        return $this;
    }
    /**
     * Get registerAllAssigned value
     * @return bool|null
     */
    public function getRegisterAllAssigned(): ?bool
    {
        return $this->registerAllAssigned;
    }
    /**
     * Set registerAllAssigned value
     * @param bool $registerAllAssigned
     * @return \Pggns\MidocoApi\Order\StructType\RegisterFairplaneRequest
     */
    public function setRegisterAllAssigned(?bool $registerAllAssigned = false): self
    {
        // validation for constraint: boolean
        if (!is_null($registerAllAssigned) && !is_bool($registerAllAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($registerAllAssigned, true), gettype($registerAllAssigned)), __LINE__);
        }
        $this->registerAllAssigned = $registerAllAssigned;
        
        return $this;
    }
}
