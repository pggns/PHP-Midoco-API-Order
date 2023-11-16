<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemMarginBookingDTO StructType
 * @subpackage Structs
 */
class SellItemMarginBookingDTO extends AbstractStructBase
{
    /**
     * The bookingJournalId
     * @var int|null
     */
    protected ?int $bookingJournalId = null;
    /**
     * The cancelJournalId
     * @var int|null
     */
    protected ?int $cancelJournalId = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The marginNet
     * @var float|null
     */
    protected ?float $marginNet = null;
    /**
     * The marginVat
     * @var float|null
     */
    protected ?float $marginVat = null;
    /**
     * The tentative
     * @var bool|null
     */
    protected ?bool $tentative = null;
    /**
     * The voided
     * @var bool|null
     */
    protected ?bool $voided = null;
    /**
     * Constructor method for SellItemMarginBookingDTO
     * @uses SellItemMarginBookingDTO::setBookingJournalId()
     * @uses SellItemMarginBookingDTO::setCancelJournalId()
     * @uses SellItemMarginBookingDTO::setCreationTime()
     * @uses SellItemMarginBookingDTO::setCreationUser()
     * @uses SellItemMarginBookingDTO::setId()
     * @uses SellItemMarginBookingDTO::setItemId()
     * @uses SellItemMarginBookingDTO::setMarginNet()
     * @uses SellItemMarginBookingDTO::setMarginVat()
     * @uses SellItemMarginBookingDTO::setTentative()
     * @uses SellItemMarginBookingDTO::setVoided()
     * @param int $bookingJournalId
     * @param int $cancelJournalId
     * @param string $creationTime
     * @param int $creationUser
     * @param int $id
     * @param int $itemId
     * @param float $marginNet
     * @param float $marginVat
     * @param bool $tentative
     * @param bool $voided
     */
    public function __construct(?int $bookingJournalId = null, ?int $cancelJournalId = null, ?string $creationTime = null, ?int $creationUser = null, ?int $id = null, ?int $itemId = null, ?float $marginNet = null, ?float $marginVat = null, ?bool $tentative = null, ?bool $voided = null)
    {
        $this
            ->setBookingJournalId($bookingJournalId)
            ->setCancelJournalId($cancelJournalId)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setId($id)
            ->setItemId($itemId)
            ->setMarginNet($marginNet)
            ->setMarginVat($marginVat)
            ->setTentative($tentative)
            ->setVoided($voided);
    }
    /**
     * Get bookingJournalId value
     * @return int|null
     */
    public function getBookingJournalId(): ?int
    {
        return $this->bookingJournalId;
    }
    /**
     * Set bookingJournalId value
     * @param int $bookingJournalId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setBookingJournalId(?int $bookingJournalId = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingJournalId) && !(is_int($bookingJournalId) || ctype_digit($bookingJournalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingJournalId, true), gettype($bookingJournalId)), __LINE__);
        }
        $this->bookingJournalId = $bookingJournalId;
        
        return $this;
    }
    /**
     * Get cancelJournalId value
     * @return int|null
     */
    public function getCancelJournalId(): ?int
    {
        return $this->cancelJournalId;
    }
    /**
     * Set cancelJournalId value
     * @param int $cancelJournalId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setCancelJournalId(?int $cancelJournalId = null): self
    {
        // validation for constraint: int
        if (!is_null($cancelJournalId) && !(is_int($cancelJournalId) || ctype_digit($cancelJournalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cancelJournalId, true), gettype($cancelJournalId)), __LINE__);
        }
        $this->cancelJournalId = $cancelJournalId;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
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
     * Get marginNet value
     * @return float|null
     */
    public function getMarginNet(): ?float
    {
        return $this->marginNet;
    }
    /**
     * Set marginNet value
     * @param float $marginNet
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setMarginNet(?float $marginNet = null): self
    {
        // validation for constraint: float
        if (!is_null($marginNet) && !(is_float($marginNet) || is_numeric($marginNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginNet, true), gettype($marginNet)), __LINE__);
        }
        $this->marginNet = $marginNet;
        
        return $this;
    }
    /**
     * Get marginVat value
     * @return float|null
     */
    public function getMarginVat(): ?float
    {
        return $this->marginVat;
    }
    /**
     * Set marginVat value
     * @param float $marginVat
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setMarginVat(?float $marginVat = null): self
    {
        // validation for constraint: float
        if (!is_null($marginVat) && !(is_float($marginVat) || is_numeric($marginVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginVat, true), gettype($marginVat)), __LINE__);
        }
        $this->marginVat = $marginVat;
        
        return $this;
    }
    /**
     * Get tentative value
     * @return bool|null
     */
    public function getTentative(): ?bool
    {
        return $this->tentative;
    }
    /**
     * Set tentative value
     * @param bool $tentative
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setTentative(?bool $tentative = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tentative) && !is_bool($tentative)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tentative, true), gettype($tentative)), __LINE__);
        }
        $this->tentative = $tentative;
        
        return $this;
    }
    /**
     * Get voided value
     * @return bool|null
     */
    public function getVoided(): ?bool
    {
        return $this->voided;
    }
    /**
     * Set voided value
     * @param bool $voided
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginBookingDTO
     */
    public function setVoided(?bool $voided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($voided) && !is_bool($voided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voided, true), gettype($voided)), __LINE__);
        }
        $this->voided = $voided;
        
        return $this;
    }
}
