<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCateringCode StructType
 * @subpackage Structs
 */
class MidocoCateringCode extends CateringDTO
{
    /**
     * The MidocoCateringDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCateringDescription
     * @var \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO[]
     */
    protected array $MidocoCateringDescription = [];
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
     * Constructor method for MidocoCateringCode
     * @uses MidocoCateringCode::setMidocoCateringDescription()
     * @uses MidocoCateringCode::setUnitName()
     * @uses MidocoCateringCode::setDisplayDescription()
     * @param \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO[] $midocoCateringDescription
     * @param string $unitName
     * @param string $displayDescription
     */
    public function __construct(array $midocoCateringDescription = [], ?string $unitName = null, ?string $displayDescription = null)
    {
        $this
            ->setMidocoCateringDescription($midocoCateringDescription)
            ->setUnitName($unitName)
            ->setDisplayDescription($displayDescription);
    }
    /**
     * Get MidocoCateringDescription value
     * @return \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO[]
     */
    public function getMidocoCateringDescription(): array
    {
        return $this->MidocoCateringDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCateringDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCateringDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCateringDescriptionForArrayConstraintsFromSetMidocoCateringDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCateringCodeMidocoCateringDescriptionItem) {
            // validation for constraint: itemType
            if (!$midocoCateringCodeMidocoCateringDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO) {
                $invalidValues[] = is_object($midocoCateringCodeMidocoCateringDescriptionItem) ? get_class($midocoCateringCodeMidocoCateringDescriptionItem) : sprintf('%s(%s)', gettype($midocoCateringCodeMidocoCateringDescriptionItem), var_export($midocoCateringCodeMidocoCateringDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCateringDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCateringDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO[] $midocoCateringDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCateringCode
     */
    public function setMidocoCateringDescription(array $midocoCateringDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCateringDescriptionArrayErrorMessage = self::validateMidocoCateringDescriptionForArrayConstraintsFromSetMidocoCateringDescription($midocoCateringDescription))) {
            throw new InvalidArgumentException($midocoCateringDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCateringDescription = $midocoCateringDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCateringDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCateringCode
     */
    public function addToMidocoCateringDescription(\Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCateringDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCateringDescription[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCateringCode
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCateringCode
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
