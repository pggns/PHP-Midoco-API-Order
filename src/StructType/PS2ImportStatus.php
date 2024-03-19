<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PS2ImportStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PS2ImportStatus extends ImportHandlerResponseType
{
    /**
     * The supplier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The uid
     * @var int|null
     */
    protected ?int $uid = null;
    /**
     * The import_status
     * Meta information extracted from the WSDL
     * - default: unknown
     * @var string|null
     */
    protected ?string $import_status = null;
    /**
     * Constructor method for PS2ImportStatus
     * @uses PS2ImportStatus::setSupplier()
     * @uses PS2ImportStatus::setBookingId()
     * @uses PS2ImportStatus::setUid()
     * @uses PS2ImportStatus::setImport_status()
     * @param string $supplier
     * @param string $bookingId
     * @param int $uid
     * @param string $import_status
     */
    public function __construct(?string $supplier = null, ?string $bookingId = null, ?int $uid = null, ?string $import_status = 'unknown')
    {
        $this
            ->setSupplier($supplier)
            ->setBookingId($bookingId)
            ->setUid($uid)
            ->setImport_status($import_status);
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportStatus
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportStatus
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
     * Get uid value
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }
    /**
     * Set uid value
     * @param int $uid
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportStatus
     */
    public function setUid(?int $uid = null): self
    {
        // validation for constraint: int
        if (!is_null($uid) && !(is_int($uid) || ctype_digit($uid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uid, true), gettype($uid)), __LINE__);
        }
        $this->uid = $uid;
        
        return $this;
    }
    /**
     * Get import_status value
     * @return string|null
     */
    public function getImport_status(): ?string
    {
        return $this->{'import-status'};
    }
    /**
     * Set import_status value
     * @param string $import_status
     * @return \Pggns\MidocoApi\Order\StructType\PS2ImportStatus
     */
    public function setImport_status(?string $import_status = 'unknown'): self
    {
        // validation for constraint: string
        if (!is_null($import_status) && !is_string($import_status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($import_status, true), gettype($import_status)), __LINE__);
        }
        $this->import_status = $this->{'import-status'} = $import_status;
        
        return $this;
    }
}
