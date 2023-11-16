<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAmwayMediatorBookingsRequest StructType
 * @subpackage Structs
 */
class GetAmwayMediatorBookingsRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $unitName = [];
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The month
     * @var int|null
     */
    protected ?int $month = null;
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * The listStornos
     * @var bool|null
     */
    protected ?bool $listStornos = null;
    /**
     * Constructor method for GetAmwayMediatorBookingsRequest
     * @uses GetAmwayMediatorBookingsRequest::setUnitName()
     * @uses GetAmwayMediatorBookingsRequest::setMediatorId()
     * @uses GetAmwayMediatorBookingsRequest::setMonth()
     * @uses GetAmwayMediatorBookingsRequest::setYear()
     * @uses GetAmwayMediatorBookingsRequest::setListStornos()
     * @param string[] $unitName
     * @param string $mediatorId
     * @param int $month
     * @param int $year
     * @param bool $listStornos
     */
    public function __construct(array $unitName = [], ?string $mediatorId = null, ?int $month = null, ?int $year = null, ?bool $listStornos = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMediatorId($mediatorId)
            ->setMonth($month)
            ->setYear($year)
            ->setListStornos($listStornos);
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
        foreach ($values as $getAmwayMediatorBookingsRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getAmwayMediatorBookingsRequestUnitNameItem)) {
                $invalidValues[] = is_object($getAmwayMediatorBookingsRequestUnitNameItem) ? get_class($getAmwayMediatorBookingsRequestUnitNameItem) : sprintf('%s(%s)', gettype($getAmwayMediatorBookingsRequestUnitNameItem), var_export($getAmwayMediatorBookingsRequestUnitNameItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsRequest
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
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsRequest
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsRequest
     */
    public function setYear(?int $year = null): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
    /**
     * Get listStornos value
     * @return bool|null
     */
    public function getListStornos(): ?bool
    {
        return $this->listStornos;
    }
    /**
     * Set listStornos value
     * @param bool $listStornos
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsRequest
     */
    public function setListStornos(?bool $listStornos = null): self
    {
        // validation for constraint: boolean
        if (!is_null($listStornos) && !is_bool($listStornos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($listStornos, true), gettype($listStornos)), __LINE__);
        }
        $this->listStornos = $listStornos;
        
        return $this;
    }
}
