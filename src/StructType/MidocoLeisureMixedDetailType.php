<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoLeisureMixedDetailType StructType
 * @subpackage Structs
 */
class MidocoLeisureMixedDetailType extends TravelDetailDTO
{
    /**
     * The MidocoFlightDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail[]
     */
    protected array $MidocoFlightDetail = [];
    /**
     * The MidocoAccomodationDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccomodationDetail
     * @var \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO[]
     */
    protected array $MidocoAccomodationDetail = [];
    /**
     * The MidocoCarDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCarDetail
     * @var \Pggns\MidocoApi\Order\StructType\CarDetailDTO[]
     */
    protected array $MidocoCarDetail = [];
    /**
     * The MidocoCruiseDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCruiseDetail
     * @var \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO[]
     */
    protected array $MidocoCruiseDetail = [];
    /**
     * The MidocoInsuranceDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInsuranceDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail[]
     */
    protected array $MidocoInsuranceDetail = [];
    /**
     * The MidocoBusDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBusDetail
     * @var \Pggns\MidocoApi\Order\StructType\BusDetailDTO[]
     */
    protected array $MidocoBusDetail = [];
    /**
     * The MidocoRailDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRailDetail
     * @var \Pggns\MidocoApi\Order\StructType\RailDetailDTO[]
     */
    protected array $MidocoRailDetail = [];
    /**
     * The MidocoTransferDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTransferDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType[]
     */
    protected array $MidocoTransferDetail = [];
    /**
     * The MidocoGenericDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoGenericDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType[]
     */
    protected array $MidocoGenericDetail = [];
    /**
     * The MidocoEventDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEventDetail
     * @var \Pggns\MidocoApi\Order\StructType\EventDetailDTO[]
     */
    protected array $MidocoEventDetail = [];
    /**
     * Constructor method for MidocoLeisureMixedDetailType
     * @uses MidocoLeisureMixedDetailType::setMidocoFlightDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoAccomodationDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoCarDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoCruiseDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoInsuranceDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoBusDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoRailDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoTransferDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoGenericDetail()
     * @uses MidocoLeisureMixedDetailType::setMidocoEventDetail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail[] $midocoFlightDetail
     * @param \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO[] $midocoAccomodationDetail
     * @param \Pggns\MidocoApi\Order\StructType\CarDetailDTO[] $midocoCarDetail
     * @param \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO[] $midocoCruiseDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail[] $midocoInsuranceDetail
     * @param \Pggns\MidocoApi\Order\StructType\BusDetailDTO[] $midocoBusDetail
     * @param \Pggns\MidocoApi\Order\StructType\RailDetailDTO[] $midocoRailDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType[] $midocoTransferDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType[] $midocoGenericDetail
     * @param \Pggns\MidocoApi\Order\StructType\EventDetailDTO[] $midocoEventDetail
     */
    public function __construct(array $midocoFlightDetail = [], array $midocoAccomodationDetail = [], array $midocoCarDetail = [], array $midocoCruiseDetail = [], array $midocoInsuranceDetail = [], array $midocoBusDetail = [], array $midocoRailDetail = [], array $midocoTransferDetail = [], array $midocoGenericDetail = [], array $midocoEventDetail = [])
    {
        $this
            ->setMidocoFlightDetail($midocoFlightDetail)
            ->setMidocoAccomodationDetail($midocoAccomodationDetail)
            ->setMidocoCarDetail($midocoCarDetail)
            ->setMidocoCruiseDetail($midocoCruiseDetail)
            ->setMidocoInsuranceDetail($midocoInsuranceDetail)
            ->setMidocoBusDetail($midocoBusDetail)
            ->setMidocoRailDetail($midocoRailDetail)
            ->setMidocoTransferDetail($midocoTransferDetail)
            ->setMidocoGenericDetail($midocoGenericDetail)
            ->setMidocoEventDetail($midocoEventDetail);
    }
    /**
     * Get MidocoFlightDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail[]
     */
    public function getMidocoFlightDetail(): array
    {
        return $this->MidocoFlightDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFlightDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightDetailForArrayConstraintsFromSetMidocoFlightDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoFlightDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoFlightDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoFlightDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoFlightDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoFlightDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoFlightDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail[] $midocoFlightDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoFlightDetail(array $midocoFlightDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightDetailArrayErrorMessage = self::validateMidocoFlightDetailForArrayConstraintsFromSetMidocoFlightDetail($midocoFlightDetail))) {
            throw new InvalidArgumentException($midocoFlightDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightDetail = $midocoFlightDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoFlightDetail(\Pggns\MidocoApi\Order\StructType\MidocoFlightDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAccomodationDetail value
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO[]
     */
    public function getMidocoAccomodationDetail(): array
    {
        return $this->MidocoAccomodationDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccomodationDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccomodationDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccomodationDetailForArrayConstraintsFromSetMidocoAccomodationDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoAccomodationDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoAccomodationDetailItem instanceof \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoAccomodationDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoAccomodationDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoAccomodationDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoAccomodationDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccomodationDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccomodationDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO[] $midocoAccomodationDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoAccomodationDetail(array $midocoAccomodationDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccomodationDetailArrayErrorMessage = self::validateMidocoAccomodationDetailForArrayConstraintsFromSetMidocoAccomodationDetail($midocoAccomodationDetail))) {
            throw new InvalidArgumentException($midocoAccomodationDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccomodationDetail = $midocoAccomodationDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoAccomodationDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoAccomodationDetail(\Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAccomodationDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccomodationDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCarDetail value
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO[]
     */
    public function getMidocoCarDetail(): array
    {
        return $this->MidocoCarDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCarDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCarDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCarDetailForArrayConstraintsFromSetMidocoCarDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoCarDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoCarDetailItem instanceof \Pggns\MidocoApi\Order\StructType\CarDetailDTO) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoCarDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoCarDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoCarDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoCarDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCarDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CarDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCarDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CarDetailDTO[] $midocoCarDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoCarDetail(array $midocoCarDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCarDetailArrayErrorMessage = self::validateMidocoCarDetailForArrayConstraintsFromSetMidocoCarDetail($midocoCarDetail))) {
            throw new InvalidArgumentException($midocoCarDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoCarDetail = $midocoCarDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoCarDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CarDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoCarDetail(\Pggns\MidocoApi\Order\StructType\CarDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CarDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCarDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CarDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCarDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCruiseDetail value
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO[]
     */
    public function getMidocoCruiseDetail(): array
    {
        return $this->MidocoCruiseDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCruiseDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCruiseDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCruiseDetailForArrayConstraintsFromSetMidocoCruiseDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoCruiseDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoCruiseDetailItem instanceof \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoCruiseDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoCruiseDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoCruiseDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoCruiseDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCruiseDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCruiseDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO[] $midocoCruiseDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoCruiseDetail(array $midocoCruiseDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCruiseDetailArrayErrorMessage = self::validateMidocoCruiseDetailForArrayConstraintsFromSetMidocoCruiseDetail($midocoCruiseDetail))) {
            throw new InvalidArgumentException($midocoCruiseDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoCruiseDetail = $midocoCruiseDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoCruiseDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoCruiseDetail(\Pggns\MidocoApi\Order\StructType\CruiseDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCruiseDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCruiseDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInsuranceDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail[]
     */
    public function getMidocoInsuranceDetail(): array
    {
        return $this->MidocoInsuranceDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInsuranceDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInsuranceDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInsuranceDetailForArrayConstraintsFromSetMidocoInsuranceDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoInsuranceDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoInsuranceDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoInsuranceDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoInsuranceDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoInsuranceDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoInsuranceDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInsuranceDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInsuranceDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail[] $midocoInsuranceDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoInsuranceDetail(array $midocoInsuranceDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInsuranceDetailArrayErrorMessage = self::validateMidocoInsuranceDetailForArrayConstraintsFromSetMidocoInsuranceDetail($midocoInsuranceDetail))) {
            throw new InvalidArgumentException($midocoInsuranceDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoInsuranceDetail = $midocoInsuranceDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoInsuranceDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoInsuranceDetail(\Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoInsuranceDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInsuranceDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBusDetail value
     * @return \Pggns\MidocoApi\Order\StructType\BusDetailDTO[]
     */
    public function getMidocoBusDetail(): array
    {
        return $this->MidocoBusDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBusDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBusDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBusDetailForArrayConstraintsFromSetMidocoBusDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoBusDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoBusDetailItem instanceof \Pggns\MidocoApi\Order\StructType\BusDetailDTO) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoBusDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoBusDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoBusDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoBusDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBusDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\BusDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBusDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BusDetailDTO[] $midocoBusDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoBusDetail(array $midocoBusDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBusDetailArrayErrorMessage = self::validateMidocoBusDetailForArrayConstraintsFromSetMidocoBusDetail($midocoBusDetail))) {
            throw new InvalidArgumentException($midocoBusDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoBusDetail = $midocoBusDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoBusDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BusDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoBusDetail(\Pggns\MidocoApi\Order\StructType\BusDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BusDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBusDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\BusDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBusDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRailDetail value
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO[]
     */
    public function getMidocoRailDetail(): array
    {
        return $this->MidocoRailDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRailDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRailDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRailDetailForArrayConstraintsFromSetMidocoRailDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoRailDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoRailDetailItem instanceof \Pggns\MidocoApi\Order\StructType\RailDetailDTO) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoRailDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoRailDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoRailDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoRailDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRailDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\RailDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRailDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RailDetailDTO[] $midocoRailDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoRailDetail(array $midocoRailDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRailDetailArrayErrorMessage = self::validateMidocoRailDetailForArrayConstraintsFromSetMidocoRailDetail($midocoRailDetail))) {
            throw new InvalidArgumentException($midocoRailDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoRailDetail = $midocoRailDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoRailDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RailDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoRailDetail(\Pggns\MidocoApi\Order\StructType\RailDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\RailDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRailDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\RailDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRailDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTransferDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType[]
     */
    public function getMidocoTransferDetail(): array
    {
        return $this->MidocoTransferDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTransferDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTransferDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTransferDetailForArrayConstraintsFromSetMidocoTransferDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoTransferDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoTransferDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoTransferDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoTransferDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoTransferDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoTransferDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTransferDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTransferDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType[] $midocoTransferDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoTransferDetail(array $midocoTransferDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTransferDetailArrayErrorMessage = self::validateMidocoTransferDetailForArrayConstraintsFromSetMidocoTransferDetail($midocoTransferDetail))) {
            throw new InvalidArgumentException($midocoTransferDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoTransferDetail = $midocoTransferDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoTransferDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoTransferDetail(\Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoTransferDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTransferDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoGenericDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType[]
     */
    public function getMidocoGenericDetail(): array
    {
        return $this->MidocoGenericDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoGenericDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoGenericDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoGenericDetailForArrayConstraintsFromSetMidocoGenericDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoGenericDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoGenericDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoGenericDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoGenericDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoGenericDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoGenericDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoGenericDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoGenericDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType[] $midocoGenericDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoGenericDetail(array $midocoGenericDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoGenericDetailArrayErrorMessage = self::validateMidocoGenericDetailForArrayConstraintsFromSetMidocoGenericDetail($midocoGenericDetail))) {
            throw new InvalidArgumentException($midocoGenericDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoGenericDetail = $midocoGenericDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoGenericDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoGenericDetail(\Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoGenericDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoGenericDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoEventDetail value
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO[]
     */
    public function getMidocoEventDetail(): array
    {
        return $this->MidocoEventDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEventDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEventDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEventDetailForArrayConstraintsFromSetMidocoEventDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoLeisureMixedDetailTypeMidocoEventDetailItem) {
            // validation for constraint: itemType
            if (!$midocoLeisureMixedDetailTypeMidocoEventDetailItem instanceof \Pggns\MidocoApi\Order\StructType\EventDetailDTO) {
                $invalidValues[] = is_object($midocoLeisureMixedDetailTypeMidocoEventDetailItem) ? get_class($midocoLeisureMixedDetailTypeMidocoEventDetailItem) : sprintf('%s(%s)', gettype($midocoLeisureMixedDetailTypeMidocoEventDetailItem), var_export($midocoLeisureMixedDetailTypeMidocoEventDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEventDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\EventDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEventDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EventDetailDTO[] $midocoEventDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function setMidocoEventDetail(array $midocoEventDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEventDetailArrayErrorMessage = self::validateMidocoEventDetailForArrayConstraintsFromSetMidocoEventDetail($midocoEventDetail))) {
            throw new InvalidArgumentException($midocoEventDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoEventDetail = $midocoEventDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoEventDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EventDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType
     */
    public function addToMidocoEventDetail(\Pggns\MidocoApi\Order\StructType\EventDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\EventDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoEventDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\EventDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEventDetail[] = $item;
        
        return $this;
    }
}
