<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAreaCode StructType
 * @subpackage Structs
 */
class MidocoAreaCode extends AreaDTO
{
    /**
     * The MidocoAreaDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAreaDescription
     * @var \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO[]
     */
    protected array $MidocoAreaDescription = [];
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The displayDescription
     * Meta information extracted from the WSDL
     * - documentation: All descriptions are in the MidocoDescription-List, but one is extracted depending on cultureId from a Get-Request, to get the fastest access instead of iterating through the list.
     * @var string|null
     */
    protected ?string $displayDescription = null;
    /**
     * Constructor method for MidocoAreaCode
     * @uses MidocoAreaCode::setMidocoAreaDescription()
     * @uses MidocoAreaCode::setUnitName()
     * @uses MidocoAreaCode::setDisplayDescription()
     * @param \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO[] $midocoAreaDescription
     * @param string $unitName
     * @param string $displayDescription
     */
    public function __construct(array $midocoAreaDescription = [], ?string $unitName = null, ?string $displayDescription = null)
    {
        $this
            ->setMidocoAreaDescription($midocoAreaDescription)
            ->setUnitName($unitName)
            ->setDisplayDescription($displayDescription);
    }
    /**
     * Get MidocoAreaDescription value
     * @return \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO[]
     */
    public function getMidocoAreaDescription(): array
    {
        return $this->MidocoAreaDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAreaDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAreaDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAreaDescriptionForArrayConstraintsFromSetMidocoAreaDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAreaCodeMidocoAreaDescriptionItem) {
            // validation for constraint: itemType
            if (!$midocoAreaCodeMidocoAreaDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO) {
                $invalidValues[] = is_object($midocoAreaCodeMidocoAreaDescriptionItem) ? get_class($midocoAreaCodeMidocoAreaDescriptionItem) : sprintf('%s(%s)', gettype($midocoAreaCodeMidocoAreaDescriptionItem), var_export($midocoAreaCodeMidocoAreaDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAreaDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAreaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO[] $midocoAreaDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAreaCode
     */
    public function setMidocoAreaDescription(array $midocoAreaDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAreaDescriptionArrayErrorMessage = self::validateMidocoAreaDescriptionForArrayConstraintsFromSetMidocoAreaDescription($midocoAreaDescription))) {
            throw new InvalidArgumentException($midocoAreaDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAreaDescription = $midocoAreaDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoAreaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAreaCode
     */
    public function addToMidocoAreaDescription(\Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAreaDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAreaDescription[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAreaCode
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
     * Get displayDescription value
     * @return string|null
     */
    public function getDisplayDescription(): ?string
    {
        return $this->displayDescription;
    }
    /**
     * Set displayDescription value
     * @param string $displayDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAreaCode
     */
    public function setDisplayDescription(?string $displayDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($displayDescription) && !is_string($displayDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayDescription, true), gettype($displayDescription)), __LINE__);
        }
        $this->displayDescription = $displayDescription;
        
        return $this;
    }
}
