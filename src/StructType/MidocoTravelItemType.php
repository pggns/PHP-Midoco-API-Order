<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelItemType StructType
 * @subpackage Structs
 */
class MidocoTravelItemType extends TravelitemDTO
{
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
     * The MidocoAccomodationDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccomodationDetail
     * @var \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO[]
     */
    protected array $MidocoAccomodationDetail = [];
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
     * The MidocoInsuranceDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInsuranceDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail[]
     */
    protected array $MidocoInsuranceDetail = [];
    /**
     * The MidocoTravelDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelDetail
     * @var \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[]
     */
    protected array $MidocoTravelDetail = [];
    /**
     * The MidocoTravelSupplierInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelSupplierInfo
     * @var \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $MidocoTravelSupplierInfo = null;
    /**
     * The MidocoHint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoHint
     * @var \Pggns\MidocoApi\Order\StructType\MidocoHintType[]
     */
    protected array $MidocoHint = [];
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
     * The MidocoLeisureMixedDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoLeisureMixedDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType[]
     */
    protected array $MidocoLeisureMixedDetail = [];
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
     * The MidocoAdditionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdditionalService
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[]
     */
    protected array $MidocoAdditionalService = [];
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
     * The MidocoTransferDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTransferDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType[]
     */
    protected array $MidocoTransferDetail = [];
    /**
     * The MidocoTouchedCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTouchedCountry
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry[]
     */
    protected array $MidocoTouchedCountry = [];
    /**
     * Constructor method for MidocoTravelItemType
     * @uses MidocoTravelItemType::setMidocoCarDetail()
     * @uses MidocoTravelItemType::setMidocoAccomodationDetail()
     * @uses MidocoTravelItemType::setMidocoFlightDetail()
     * @uses MidocoTravelItemType::setMidocoInsuranceDetail()
     * @uses MidocoTravelItemType::setMidocoTravelDetail()
     * @uses MidocoTravelItemType::setMidocoTravelSupplierInfo()
     * @uses MidocoTravelItemType::setMidocoHint()
     * @uses MidocoTravelItemType::setMidocoCruiseDetail()
     * @uses MidocoTravelItemType::setMidocoLeisureMixedDetail()
     * @uses MidocoTravelItemType::setMidocoBusDetail()
     * @uses MidocoTravelItemType::setMidocoRailDetail()
     * @uses MidocoTravelItemType::setMidocoAdditionalService()
     * @uses MidocoTravelItemType::setMidocoEventDetail()
     * @uses MidocoTravelItemType::setMidocoTransferDetail()
     * @uses MidocoTravelItemType::setMidocoTouchedCountry()
     * @param \Pggns\MidocoApi\Order\StructType\CarDetailDTO[] $midocoCarDetail
     * @param \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO[] $midocoAccomodationDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail[] $midocoFlightDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail[] $midocoInsuranceDetail
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[] $midocoTravelDetail
     * @param \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHintType[] $midocoHint
     * @param \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO[] $midocoCruiseDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType[] $midocoLeisureMixedDetail
     * @param \Pggns\MidocoApi\Order\StructType\BusDetailDTO[] $midocoBusDetail
     * @param \Pggns\MidocoApi\Order\StructType\RailDetailDTO[] $midocoRailDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[] $midocoAdditionalService
     * @param \Pggns\MidocoApi\Order\StructType\EventDetailDTO[] $midocoEventDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType[] $midocoTransferDetail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry[] $midocoTouchedCountry
     */
    public function __construct(array $midocoCarDetail = [], array $midocoAccomodationDetail = [], array $midocoFlightDetail = [], array $midocoInsuranceDetail = [], array $midocoTravelDetail = [], ?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo = null, array $midocoHint = [], array $midocoCruiseDetail = [], array $midocoLeisureMixedDetail = [], array $midocoBusDetail = [], array $midocoRailDetail = [], array $midocoAdditionalService = [], array $midocoEventDetail = [], array $midocoTransferDetail = [], array $midocoTouchedCountry = [])
    {
        $this
            ->setMidocoCarDetail($midocoCarDetail)
            ->setMidocoAccomodationDetail($midocoAccomodationDetail)
            ->setMidocoFlightDetail($midocoFlightDetail)
            ->setMidocoInsuranceDetail($midocoInsuranceDetail)
            ->setMidocoTravelDetail($midocoTravelDetail)
            ->setMidocoTravelSupplierInfo($midocoTravelSupplierInfo)
            ->setMidocoHint($midocoHint)
            ->setMidocoCruiseDetail($midocoCruiseDetail)
            ->setMidocoLeisureMixedDetail($midocoLeisureMixedDetail)
            ->setMidocoBusDetail($midocoBusDetail)
            ->setMidocoRailDetail($midocoRailDetail)
            ->setMidocoAdditionalService($midocoAdditionalService)
            ->setMidocoEventDetail($midocoEventDetail)
            ->setMidocoTransferDetail($midocoTransferDetail)
            ->setMidocoTouchedCountry($midocoTouchedCountry);
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
        foreach ($values as $midocoTravelItemTypeMidocoCarDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoCarDetailItem instanceof \Pggns\MidocoApi\Order\StructType\CarDetailDTO) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoCarDetailItem) ? get_class($midocoTravelItemTypeMidocoCarDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoCarDetailItem), var_export($midocoTravelItemTypeMidocoCarDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
        foreach ($values as $midocoTravelItemTypeMidocoAccomodationDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoAccomodationDetailItem instanceof \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoAccomodationDetailItem) ? get_class($midocoTravelItemTypeMidocoAccomodationDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoAccomodationDetailItem), var_export($midocoTravelItemTypeMidocoAccomodationDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
        foreach ($values as $midocoTravelItemTypeMidocoFlightDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoFlightDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoFlightDetailItem) ? get_class($midocoTravelItemTypeMidocoFlightDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoFlightDetailItem), var_export($midocoTravelItemTypeMidocoFlightDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
        foreach ($values as $midocoTravelItemTypeMidocoInsuranceDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoInsuranceDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoInsuranceDetailItem) ? get_class($midocoTravelItemTypeMidocoInsuranceDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoInsuranceDetailItem), var_export($midocoTravelItemTypeMidocoInsuranceDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * Get MidocoTravelDetail value
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[]
     */
    public function getMidocoTravelDetail(): array
    {
        return $this->MidocoTravelDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelDetailForArrayConstraintsFromSetMidocoTravelDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelItemTypeMidocoTravelDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoTravelDetailItem instanceof \Pggns\MidocoApi\Order\StructType\TravelDetailDTO) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoTravelDetailItem) ? get_class($midocoTravelItemTypeMidocoTravelDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoTravelDetailItem), var_export($midocoTravelItemTypeMidocoTravelDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[] $midocoTravelDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function setMidocoTravelDetail(array $midocoTravelDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelDetailArrayErrorMessage = self::validateMidocoTravelDetailForArrayConstraintsFromSetMidocoTravelDetail($midocoTravelDetail))) {
            throw new InvalidArgumentException($midocoTravelDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelDetail = $midocoTravelDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function addToMidocoTravelDetail(\Pggns\MidocoApi\Order\StructType\TravelDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TravelDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTravelSupplierInfo value
     * @return \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO|null
     */
    public function getMidocoTravelSupplierInfo(): ?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO
    {
        return $this->MidocoTravelSupplierInfo;
    }
    /**
     * Set MidocoTravelSupplierInfo value
     * @param \Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function setMidocoTravelSupplierInfo(?\Pggns\MidocoApi\Order\StructType\TravelSupplierInfoDTO $midocoTravelSupplierInfo = null): self
    {
        $this->MidocoTravelSupplierInfo = $midocoTravelSupplierInfo;
        
        return $this;
    }
    /**
     * Get MidocoHint value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoHintType[]
     */
    public function getMidocoHint(): array
    {
        return $this->MidocoHint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoHint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoHint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoHintForArrayConstraintsFromSetMidocoHint(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelItemTypeMidocoHintItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoHintItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoHintType) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoHintItem) ? get_class($midocoTravelItemTypeMidocoHintItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoHintItem), var_export($midocoTravelItemTypeMidocoHintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoHint property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoHintType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoHint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHintType[] $midocoHint
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function setMidocoHint(array $midocoHint = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoHintArrayErrorMessage = self::validateMidocoHintForArrayConstraintsFromSetMidocoHint($midocoHint))) {
            throw new InvalidArgumentException($midocoHintArrayErrorMessage, __LINE__);
        }
        $this->MidocoHint = $midocoHint;
        
        return $this;
    }
    /**
     * Add item to MidocoHint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHintType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function addToMidocoHint(\Pggns\MidocoApi\Order\StructType\MidocoHintType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoHintType) {
            throw new InvalidArgumentException(sprintf('The MidocoHint property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoHintType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoHint[] = $item;
        
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
        foreach ($values as $midocoTravelItemTypeMidocoCruiseDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoCruiseDetailItem instanceof \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoCruiseDetailItem) ? get_class($midocoTravelItemTypeMidocoCruiseDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoCruiseDetailItem), var_export($midocoTravelItemTypeMidocoCruiseDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * Get MidocoLeisureMixedDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType[]
     */
    public function getMidocoLeisureMixedDetail(): array
    {
        return $this->MidocoLeisureMixedDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoLeisureMixedDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoLeisureMixedDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoLeisureMixedDetailForArrayConstraintsFromSetMidocoLeisureMixedDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelItemTypeMidocoLeisureMixedDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoLeisureMixedDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoLeisureMixedDetailItem) ? get_class($midocoTravelItemTypeMidocoLeisureMixedDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoLeisureMixedDetailItem), var_export($midocoTravelItemTypeMidocoLeisureMixedDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoLeisureMixedDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoLeisureMixedDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType[] $midocoLeisureMixedDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function setMidocoLeisureMixedDetail(array $midocoLeisureMixedDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoLeisureMixedDetailArrayErrorMessage = self::validateMidocoLeisureMixedDetailForArrayConstraintsFromSetMidocoLeisureMixedDetail($midocoLeisureMixedDetail))) {
            throw new InvalidArgumentException($midocoLeisureMixedDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoLeisureMixedDetail = $midocoLeisureMixedDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoLeisureMixedDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function addToMidocoLeisureMixedDetail(\Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoLeisureMixedDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoLeisureMixedDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoLeisureMixedDetail[] = $item;
        
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
        foreach ($values as $midocoTravelItemTypeMidocoBusDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoBusDetailItem instanceof \Pggns\MidocoApi\Order\StructType\BusDetailDTO) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoBusDetailItem) ? get_class($midocoTravelItemTypeMidocoBusDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoBusDetailItem), var_export($midocoTravelItemTypeMidocoBusDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
        foreach ($values as $midocoTravelItemTypeMidocoRailDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoRailDetailItem instanceof \Pggns\MidocoApi\Order\StructType\RailDetailDTO) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoRailDetailItem) ? get_class($midocoTravelItemTypeMidocoRailDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoRailDetailItem), var_export($midocoTravelItemTypeMidocoRailDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * Get MidocoAdditionalService value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[]
     */
    public function getMidocoAdditionalService(): array
    {
        return $this->MidocoAdditionalService;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdditionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdditionalService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdditionalServiceForArrayConstraintsFromSetMidocoAdditionalService(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelItemTypeMidocoAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoAdditionalServiceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoAdditionalServiceItem) ? get_class($midocoTravelItemTypeMidocoAdditionalServiceItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoAdditionalServiceItem), var_export($midocoTravelItemTypeMidocoAdditionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[] $midocoAdditionalService
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function setMidocoAdditionalService(array $midocoAdditionalService = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdditionalServiceArrayErrorMessage = self::validateMidocoAdditionalServiceForArrayConstraintsFromSetMidocoAdditionalService($midocoAdditionalService))) {
            throw new InvalidArgumentException($midocoAdditionalServiceArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdditionalService = $midocoAdditionalService;
        
        return $this;
    }
    /**
     * Add item to MidocoAdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function addToMidocoAdditionalService(\Pggns\MidocoApi\Order\StructType\MidocoAdditionalService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService) {
            throw new InvalidArgumentException(sprintf('The MidocoAdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdditionalService[] = $item;
        
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
        foreach ($values as $midocoTravelItemTypeMidocoEventDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoEventDetailItem instanceof \Pggns\MidocoApi\Order\StructType\EventDetailDTO) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoEventDetailItem) ? get_class($midocoTravelItemTypeMidocoEventDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoEventDetailItem), var_export($midocoTravelItemTypeMidocoEventDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
        foreach ($values as $midocoTravelItemTypeMidocoTransferDetailItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoTransferDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailType) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoTransferDetailItem) ? get_class($midocoTravelItemTypeMidocoTransferDetailItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoTransferDetailItem), var_export($midocoTravelItemTypeMidocoTransferDetailItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
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
     * Get MidocoTouchedCountry value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry[]
     */
    public function getMidocoTouchedCountry(): array
    {
        return $this->MidocoTouchedCountry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTouchedCountry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTouchedCountry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTouchedCountryForArrayConstraintsFromSetMidocoTouchedCountry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelItemTypeMidocoTouchedCountryItem) {
            // validation for constraint: itemType
            if (!$midocoTravelItemTypeMidocoTouchedCountryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry) {
                $invalidValues[] = is_object($midocoTravelItemTypeMidocoTouchedCountryItem) ? get_class($midocoTravelItemTypeMidocoTouchedCountryItem) : sprintf('%s(%s)', gettype($midocoTravelItemTypeMidocoTouchedCountryItem), var_export($midocoTravelItemTypeMidocoTouchedCountryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTouchedCountry property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTouchedCountry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry[] $midocoTouchedCountry
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function setMidocoTouchedCountry(array $midocoTouchedCountry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTouchedCountryArrayErrorMessage = self::validateMidocoTouchedCountryForArrayConstraintsFromSetMidocoTouchedCountry($midocoTouchedCountry))) {
            throw new InvalidArgumentException($midocoTouchedCountryArrayErrorMessage, __LINE__);
        }
        $this->MidocoTouchedCountry = $midocoTouchedCountry;
        
        return $this;
    }
    /**
     * Add item to MidocoTouchedCountry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
     */
    public function addToMidocoTouchedCountry(\Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry) {
            throw new InvalidArgumentException(sprintf('The MidocoTouchedCountry property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTouchedCountry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTouchedCountry[] = $item;
        
        return $this;
    }
}
