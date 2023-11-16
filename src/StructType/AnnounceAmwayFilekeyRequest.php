<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceAmwayFilekeyRequest StructType
 * @subpackage Structs
 */
class AnnounceAmwayFilekeyRequest extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The filekey
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The flightService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Order\StructType\FlightService[]
     */
    protected array $flightService = [];
    /**
     * Constructor method for AnnounceAmwayFilekeyRequest
     * @uses AnnounceAmwayFilekeyRequest::setOrderNo()
     * @uses AnnounceAmwayFilekeyRequest::setFilekey()
     * @uses AnnounceAmwayFilekeyRequest::setFlightService()
     * @param int $orderNo
     * @param string $filekey
     * @param \Pggns\MidocoApi\Order\StructType\FlightService[] $flightService
     */
    public function __construct(?int $orderNo = null, ?string $filekey = null, array $flightService = [])
    {
        $this
            ->setOrderNo($orderNo)
            ->setFilekey($filekey)
            ->setFlightService($flightService);
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyRequest
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get flightService value
     * @return \Pggns\MidocoApi\Order\StructType\FlightService[]
     */
    public function getFlightService(): array
    {
        return $this->flightService;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightServiceForArrayConstraintsFromSetFlightService(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceAmwayFilekeyRequestFlightServiceItem) {
            // validation for constraint: itemType
            if (!$announceAmwayFilekeyRequestFlightServiceItem instanceof \Pggns\MidocoApi\Order\StructType\FlightService) {
                $invalidValues[] = is_object($announceAmwayFilekeyRequestFlightServiceItem) ? get_class($announceAmwayFilekeyRequestFlightServiceItem) : sprintf('%s(%s)', gettype($announceAmwayFilekeyRequestFlightServiceItem), var_export($announceAmwayFilekeyRequestFlightServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The flightService property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set flightService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightService[] $flightService
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyRequest
     */
    public function setFlightService(array $flightService = []): self
    {
        // validation for constraint: array
        if ('' !== ($flightServiceArrayErrorMessage = self::validateFlightServiceForArrayConstraintsFromSetFlightService($flightService))) {
            throw new InvalidArgumentException($flightServiceArrayErrorMessage, __LINE__);
        }
        $this->flightService = $flightService;
        
        return $this;
    }
    /**
     * Add item to flightService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightService $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyRequest
     */
    public function addToFlightService(\Pggns\MidocoApi\Order\StructType\FlightService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FlightService) {
            throw new InvalidArgumentException(sprintf('The flightService property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->flightService[] = $item;
        
        return $this;
    }
}
