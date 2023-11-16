<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAccomodationCode StructType
 * @subpackage Structs
 */
class MidocoAccomodationCode extends AccomodationDTO
{
    /**
     * The MidocoAccomodationDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccomodationDescription
     * @var \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO[]
     */
    protected array $MidocoAccomodationDescription = [];
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
     * Constructor method for MidocoAccomodationCode
     * @uses MidocoAccomodationCode::setMidocoAccomodationDescription()
     * @uses MidocoAccomodationCode::setUnitName()
     * @uses MidocoAccomodationCode::setDisplayDescription()
     * @param \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO[] $midocoAccomodationDescription
     * @param string $unitName
     * @param string $displayDescription
     */
    public function __construct(array $midocoAccomodationDescription = [], ?string $unitName = null, ?string $displayDescription = null)
    {
        $this
            ->setMidocoAccomodationDescription($midocoAccomodationDescription)
            ->setUnitName($unitName)
            ->setDisplayDescription($displayDescription);
    }
    /**
     * Get MidocoAccomodationDescription value
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO[]
     */
    public function getMidocoAccomodationDescription(): array
    {
        return $this->MidocoAccomodationDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccomodationDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccomodationDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccomodationDescriptionForArrayConstraintsFromSetMidocoAccomodationDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAccomodationCodeMidocoAccomodationDescriptionItem) {
            // validation for constraint: itemType
            if (!$midocoAccomodationCodeMidocoAccomodationDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO) {
                $invalidValues[] = is_object($midocoAccomodationCodeMidocoAccomodationDescriptionItem) ? get_class($midocoAccomodationCodeMidocoAccomodationDescriptionItem) : sprintf('%s(%s)', gettype($midocoAccomodationCodeMidocoAccomodationDescriptionItem), var_export($midocoAccomodationCodeMidocoAccomodationDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccomodationDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccomodationDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO[] $midocoAccomodationDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode
     */
    public function setMidocoAccomodationDescription(array $midocoAccomodationDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccomodationDescriptionArrayErrorMessage = self::validateMidocoAccomodationDescriptionForArrayConstraintsFromSetMidocoAccomodationDescription($midocoAccomodationDescription))) {
            throw new InvalidArgumentException($midocoAccomodationDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccomodationDescription = $midocoAccomodationDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoAccomodationDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode
     */
    public function addToMidocoAccomodationDescription(\Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAccomodationDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccomodationDescription[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode
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
