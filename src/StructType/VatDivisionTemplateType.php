<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatDivisionTemplateType StructType
 * @subpackage Structs
 */
class VatDivisionTemplateType extends VatDivisionTemplateDTO
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[]
     */
    protected array $MidocoVatDivision = [];
    /**
     * The isInherited
     * @var bool|null
     */
    protected ?bool $isInherited = null;
    /**
     * The isHistorical
     * @var bool|null
     */
    protected ?bool $isHistorical = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * Constructor method for VatDivisionTemplateType
     * @uses VatDivisionTemplateType::setMidocoVatDivision()
     * @uses VatDivisionTemplateType::setIsInherited()
     * @uses VatDivisionTemplateType::setIsHistorical()
     * @uses VatDivisionTemplateType::setValidDate()
     * @uses VatDivisionTemplateType::setValidCreationTravel()
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[] $midocoVatDivision
     * @param bool $isInherited
     * @param bool $isHistorical
     * @param string $validDate
     * @param string $validCreationTravel
     */
    public function __construct(array $midocoVatDivision = [], ?bool $isInherited = null, ?bool $isHistorical = null, ?string $validDate = null, ?string $validCreationTravel = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision)
            ->setIsInherited($isInherited)
            ->setIsHistorical($isHistorical)
            ->setValidDate($validDate)
            ->setValidCreationTravel($validCreationTravel);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[]
     */
    public function getMidocoVatDivision(): array
    {
        return $this->MidocoVatDivision;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDivision method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDivisionForArrayConstraintsFromSetMidocoVatDivision(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $vatDivisionTemplateTypeMidocoVatDivisionItem) {
            // validation for constraint: itemType
            if (!$vatDivisionTemplateTypeMidocoVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionDTO) {
                $invalidValues[] = is_object($vatDivisionTemplateTypeMidocoVatDivisionItem) ? get_class($vatDivisionTemplateTypeMidocoVatDivisionItem) : sprintf('%s(%s)', gettype($vatDivisionTemplateTypeMidocoVatDivisionItem), var_export($vatDivisionTemplateTypeMidocoVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[] $midocoVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType
     */
    public function setMidocoVatDivision(array $midocoVatDivision = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDivisionArrayErrorMessage = self::validateMidocoVatDivisionForArrayConstraintsFromSetMidocoVatDivision($midocoVatDivision))) {
            throw new InvalidArgumentException($midocoVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType
     */
    public function addToMidocoVatDivision(\Pggns\MidocoApi\Order\StructType\VatDivisionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDivision[] = $item;
        
        return $this;
    }
    /**
     * Get isInherited value
     * @return bool|null
     */
    public function getIsInherited(): ?bool
    {
        return $this->isInherited;
    }
    /**
     * Set isInherited value
     * @param bool $isInherited
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType
     */
    public function setIsInherited(?bool $isInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInherited) && !is_bool($isInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInherited, true), gettype($isInherited)), __LINE__);
        }
        $this->isInherited = $isInherited;
        
        return $this;
    }
    /**
     * Get isHistorical value
     * @return bool|null
     */
    public function getIsHistorical(): ?bool
    {
        return $this->isHistorical;
    }
    /**
     * Set isHistorical value
     * @param bool $isHistorical
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType
     */
    public function setIsHistorical(?bool $isHistorical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHistorical) && !is_bool($isHistorical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHistorical, true), gettype($isHistorical)), __LINE__);
        }
        $this->isHistorical = $isHistorical;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
    /**
     * Get validCreationTravel value
     * @return string|null
     */
    public function getValidCreationTravel(): ?string
    {
        return $this->validCreationTravel;
    }
    /**
     * Set validCreationTravel value
     * @param string $validCreationTravel
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType
     */
    public function setValidCreationTravel(?string $validCreationTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($validCreationTravel) && !is_string($validCreationTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validCreationTravel, true), gettype($validCreationTravel)), __LINE__);
        }
        $this->validCreationTravel = $validCreationTravel;
        
        return $this;
    }
}
