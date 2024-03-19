<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBookingJournal StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBookingJournal extends BookingJournalDTO
{
    /**
     * The MidocoJournalAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJournalAttribute
     * @var \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO[]
     */
    protected ?array $MidocoJournalAttribute = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - documentation: optional customerId, for OP booking
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The voidJournalId
     * @var int|null
     */
    protected ?int $voidJournalId = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The displayOrderNo
     * @var int|null
     */
    protected ?int $displayOrderNo = null;
    /**
     * The displayOrderId
     * @var int|null
     */
    protected ?int $displayOrderId = null;
    /**
     * The displayItemId
     * @var int|null
     */
    protected ?int $displayItemId = null;
    /**
     * The accountDescDebit
     * @var string|null
     */
    protected ?string $accountDescDebit = null;
    /**
     * The accountDescCredit
     * @var string|null
     */
    protected ?string $accountDescCredit = null;
    /**
     * Constructor method for MidocoBookingJournal
     * @uses MidocoBookingJournal::setMidocoJournalAttribute()
     * @uses MidocoBookingJournal::setCustomerId()
     * @uses MidocoBookingJournal::setVoidJournalId()
     * @uses MidocoBookingJournal::setInvoiceId()
     * @uses MidocoBookingJournal::setPosition()
     * @uses MidocoBookingJournal::setDisplayOrderNo()
     * @uses MidocoBookingJournal::setDisplayOrderId()
     * @uses MidocoBookingJournal::setDisplayItemId()
     * @uses MidocoBookingJournal::setAccountDescDebit()
     * @uses MidocoBookingJournal::setAccountDescCredit()
     * @param \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO[] $midocoJournalAttribute
     * @param int $customerId
     * @param int $voidJournalId
     * @param int $invoiceId
     * @param int $position
     * @param int $displayOrderNo
     * @param int $displayOrderId
     * @param int $displayItemId
     * @param string $accountDescDebit
     * @param string $accountDescCredit
     */
    public function __construct(?array $midocoJournalAttribute = null, ?int $customerId = null, ?int $voidJournalId = null, ?int $invoiceId = null, ?int $position = null, ?int $displayOrderNo = null, ?int $displayOrderId = null, ?int $displayItemId = null, ?string $accountDescDebit = null, ?string $accountDescCredit = null)
    {
        $this
            ->setMidocoJournalAttribute($midocoJournalAttribute)
            ->setCustomerId($customerId)
            ->setVoidJournalId($voidJournalId)
            ->setInvoiceId($invoiceId)
            ->setPosition($position)
            ->setDisplayOrderNo($displayOrderNo)
            ->setDisplayOrderId($displayOrderId)
            ->setDisplayItemId($displayItemId)
            ->setAccountDescDebit($accountDescDebit)
            ->setAccountDescCredit($accountDescCredit);
    }
    /**
     * Get MidocoJournalAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO[]
     */
    public function getMidocoJournalAttribute(): ?array
    {
        return $this->MidocoJournalAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJournalAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJournalAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJournalAttributeForArrayConstraintFromSetMidocoJournalAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBookingJournalMidocoJournalAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoBookingJournalMidocoJournalAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO) {
                $invalidValues[] = is_object($midocoBookingJournalMidocoJournalAttributeItem) ? get_class($midocoBookingJournalMidocoJournalAttributeItem) : sprintf('%s(%s)', gettype($midocoBookingJournalMidocoJournalAttributeItem), var_export($midocoBookingJournalMidocoJournalAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJournalAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJournalAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO[] $midocoJournalAttribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setMidocoJournalAttribute(?array $midocoJournalAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJournalAttributeArrayErrorMessage = self::validateMidocoJournalAttributeForArrayConstraintFromSetMidocoJournalAttribute($midocoJournalAttribute))) {
            throw new InvalidArgumentException($midocoJournalAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoJournalAttribute = $midocoJournalAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoJournalAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function addToMidocoJournalAttribute(\Pggns\MidocoApi\Order\StructType\JournalAttributeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoJournalAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJournalAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get voidJournalId value
     * @return int|null
     */
    public function getVoidJournalId(): ?int
    {
        return $this->voidJournalId;
    }
    /**
     * Set voidJournalId value
     * @param int $voidJournalId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setVoidJournalId(?int $voidJournalId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidJournalId) && !(is_int($voidJournalId) || ctype_digit($voidJournalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidJournalId, true), gettype($voidJournalId)), __LINE__);
        }
        $this->voidJournalId = $voidJournalId;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get displayOrderNo value
     * @return int|null
     */
    public function getDisplayOrderNo(): ?int
    {
        return $this->displayOrderNo;
    }
    /**
     * Set displayOrderNo value
     * @param int $displayOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setDisplayOrderNo(?int $displayOrderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($displayOrderNo) && !(is_int($displayOrderNo) || ctype_digit($displayOrderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayOrderNo, true), gettype($displayOrderNo)), __LINE__);
        }
        $this->displayOrderNo = $displayOrderNo;
        
        return $this;
    }
    /**
     * Get displayOrderId value
     * @return int|null
     */
    public function getDisplayOrderId(): ?int
    {
        return $this->displayOrderId;
    }
    /**
     * Set displayOrderId value
     * @param int $displayOrderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setDisplayOrderId(?int $displayOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($displayOrderId) && !(is_int($displayOrderId) || ctype_digit($displayOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayOrderId, true), gettype($displayOrderId)), __LINE__);
        }
        $this->displayOrderId = $displayOrderId;
        
        return $this;
    }
    /**
     * Get displayItemId value
     * @return int|null
     */
    public function getDisplayItemId(): ?int
    {
        return $this->displayItemId;
    }
    /**
     * Set displayItemId value
     * @param int $displayItemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setDisplayItemId(?int $displayItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($displayItemId) && !(is_int($displayItemId) || ctype_digit($displayItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayItemId, true), gettype($displayItemId)), __LINE__);
        }
        $this->displayItemId = $displayItemId;
        
        return $this;
    }
    /**
     * Get accountDescDebit value
     * @return string|null
     */
    public function getAccountDescDebit(): ?string
    {
        return $this->accountDescDebit;
    }
    /**
     * Set accountDescDebit value
     * @param string $accountDescDebit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setAccountDescDebit(?string $accountDescDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($accountDescDebit) && !is_string($accountDescDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountDescDebit, true), gettype($accountDescDebit)), __LINE__);
        }
        $this->accountDescDebit = $accountDescDebit;
        
        return $this;
    }
    /**
     * Get accountDescCredit value
     * @return string|null
     */
    public function getAccountDescCredit(): ?string
    {
        return $this->accountDescCredit;
    }
    /**
     * Set accountDescCredit value
     * @param string $accountDescCredit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal
     */
    public function setAccountDescCredit(?string $accountDescCredit = null): self
    {
        // validation for constraint: string
        if (!is_null($accountDescCredit) && !is_string($accountDescCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountDescCredit, true), gettype($accountDescCredit)), __LINE__);
        }
        $this->accountDescCredit = $accountDescCredit;
        
        return $this;
    }
}
