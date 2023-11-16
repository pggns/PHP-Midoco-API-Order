<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBookingIdRequest StructType
 * @subpackage Structs
 */
class SearchBookingIdRequest extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The checkDates
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $checkDates = null;
    /**
     * Constructor method for SearchBookingIdRequest
     * @uses SearchBookingIdRequest::setBookingId()
     * @uses SearchBookingIdRequest::setSupplierId()
     * @uses SearchBookingIdRequest::setItemId()
     * @uses SearchBookingIdRequest::setStartTravel()
     * @uses SearchBookingIdRequest::setEndTravel()
     * @uses SearchBookingIdRequest::setCheckDates()
     * @param string $bookingId
     * @param string $supplierId
     * @param int $itemId
     * @param string $startTravel
     * @param string $endTravel
     * @param bool $checkDates
     */
    public function __construct(?string $bookingId = null, ?string $supplierId = null, ?int $itemId = null, ?string $startTravel = null, ?string $endTravel = null, ?bool $checkDates = true)
    {
        $this
            ->setBookingId($bookingId)
            ->setSupplierId($supplierId)
            ->setItemId($itemId)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setCheckDates($checkDates);
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get checkDates value
     * @return bool|null
     */
    public function getCheckDates(): ?bool
    {
        return $this->checkDates;
    }
    /**
     * Set checkDates value
     * @param bool $checkDates
     * @return \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest
     */
    public function setCheckDates(?bool $checkDates = true): self
    {
        // validation for constraint: boolean
        if (!is_null($checkDates) && !is_bool($checkDates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkDates, true), gettype($checkDates)), __LINE__);
        }
        $this->checkDates = $checkDates;
        
        return $this;
    }
}
