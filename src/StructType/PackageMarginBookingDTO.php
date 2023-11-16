<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageMarginBookingDTO StructType
 * @subpackage Structs
 */
class PackageMarginBookingDTO extends AbstractStructBase
{
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
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
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
     * The packageMarginId
     * @var int|null
     */
    protected ?int $packageMarginId = null;
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
     * Constructor method for PackageMarginBookingDTO
     * @uses PackageMarginBookingDTO::setCreationTime()
     * @uses PackageMarginBookingDTO::setCreationUser()
     * @uses PackageMarginBookingDTO::setJournalId()
     * @uses PackageMarginBookingDTO::setMarginNet()
     * @uses PackageMarginBookingDTO::setMarginVat()
     * @uses PackageMarginBookingDTO::setPackageMarginId()
     * @uses PackageMarginBookingDTO::setTentative()
     * @uses PackageMarginBookingDTO::setVoided()
     * @param string $creationTime
     * @param int $creationUser
     * @param int $journalId
     * @param float $marginNet
     * @param float $marginVat
     * @param int $packageMarginId
     * @param bool $tentative
     * @param bool $voided
     */
    public function __construct(?string $creationTime = null, ?int $creationUser = null, ?int $journalId = null, ?float $marginNet = null, ?float $marginVat = null, ?int $packageMarginId = null, ?bool $tentative = null, ?bool $voided = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setJournalId($journalId)
            ->setMarginNet($marginNet)
            ->setMarginVat($marginVat)
            ->setPackageMarginId($packageMarginId)
            ->setTentative($tentative)
            ->setVoided($voided);
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
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
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
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
     * Get packageMarginId value
     * @return int|null
     */
    public function getPackageMarginId(): ?int
    {
        return $this->packageMarginId;
    }
    /**
     * Set packageMarginId value
     * @param int $packageMarginId
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
     */
    public function setPackageMarginId(?int $packageMarginId = null): self
    {
        // validation for constraint: int
        if (!is_null($packageMarginId) && !(is_int($packageMarginId) || ctype_digit($packageMarginId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageMarginId, true), gettype($packageMarginId)), __LINE__);
        }
        $this->packageMarginId = $packageMarginId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginBookingDTO
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
