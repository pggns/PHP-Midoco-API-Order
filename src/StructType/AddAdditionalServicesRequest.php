<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAdditionalServicesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: if there is additional service included, it should be added here
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddAdditionalServicesRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - documentation: The code representing the supplier (tour operator) of the booking.
     * - use: required
     * @var string
     */
    protected string $supplierId;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $bookingId;
    /**
     * The AdditionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: mbm:AdditionalService
     * @var \Pggns\MidocoApi\Order\StructType\AdditionalService[]
     */
    protected ?array $AdditionalService = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AddAdditionalServicesRequest
     * @uses AddAdditionalServicesRequest::setSupplierId()
     * @uses AddAdditionalServicesRequest::setBookingId()
     * @uses AddAdditionalServicesRequest::setAdditionalService()
     * @uses AddAdditionalServicesRequest::setUnitName()
     * @param string $supplierId
     * @param string $bookingId
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalService[] $additionalService
     * @param string $unitName
     */
    public function __construct(string $supplierId, string $bookingId, ?array $additionalService = null, ?string $unitName = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setAdditionalService($additionalService)
            ->setUnitName($unitName);
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest
     */
    public function setSupplierId(string $supplierId): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string
     */
    public function getBookingId(): string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest
     */
    public function setBookingId(string $bookingId): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get AdditionalService value
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalService[]
     */
    public function getAdditionalService(): ?array
    {
        return $this->AdditionalService;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalService method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalServiceForArrayConstraintFromSetAdditionalService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addAdditionalServicesRequestAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$addAdditionalServicesRequestAdditionalServiceItem instanceof \Pggns\MidocoApi\Order\StructType\AdditionalService) {
                $invalidValues[] = is_object($addAdditionalServicesRequestAdditionalServiceItem) ? get_class($addAdditionalServicesRequestAdditionalServiceItem) : sprintf('%s(%s)', gettype($addAdditionalServicesRequestAdditionalServiceItem), var_export($addAdditionalServicesRequestAdditionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalService[] $additionalService
     * @return \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest
     */
    public function setAdditionalService(?array $additionalService = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalServiceArrayErrorMessage = self::validateAdditionalServiceForArrayConstraintFromSetAdditionalService($additionalService))) {
            throw new InvalidArgumentException($additionalServiceArrayErrorMessage, __LINE__);
        }
        $this->AdditionalService = $additionalService;
        
        return $this;
    }
    /**
     * Add item to AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalService $item
     * @return \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest
     */
    public function addToAdditionalService(\Pggns\MidocoApi\Order\StructType\AdditionalService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdditionalService) {
            throw new InvalidArgumentException(sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalService[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest
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
}
