<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencySettlementDTO StructType
 * @subpackage Structs
 */
class AgencySettlementDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The endTravelDate
     * @var string|null
     */
    protected ?string $endTravelDate = null;
    /**
     * The isPrinted
     * @var bool|null
     */
    protected ?bool $isPrinted = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The startTravelDate
     * @var string|null
     */
    protected ?string $startTravelDate = null;
    /**
     * Constructor method for AgencySettlementDTO
     * @uses AgencySettlementDTO::setCreationDate()
     * @uses AgencySettlementDTO::setCreationUser()
     * @uses AgencySettlementDTO::setEndTravelDate()
     * @uses AgencySettlementDTO::setIsPrinted()
     * @uses AgencySettlementDTO::setSettlementId()
     * @uses AgencySettlementDTO::setStartTravelDate()
     * @param string $creationDate
     * @param int $creationUser
     * @param string $endTravelDate
     * @param bool $isPrinted
     * @param int $settlementId
     * @param string $startTravelDate
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?string $endTravelDate = null, ?bool $isPrinted = null, ?int $settlementId = null, ?string $startTravelDate = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setEndTravelDate($endTravelDate)
            ->setIsPrinted($isPrinted)
            ->setSettlementId($settlementId)
            ->setStartTravelDate($startTravelDate);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
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
     * Get endTravelDate value
     * @return string|null
     */
    public function getEndTravelDate(): ?string
    {
        return $this->endTravelDate;
    }
    /**
     * Set endTravelDate value
     * @param string $endTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
     */
    public function setEndTravelDate(?string $endTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelDate) && !is_string($endTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelDate, true), gettype($endTravelDate)), __LINE__);
        }
        $this->endTravelDate = $endTravelDate;
        
        return $this;
    }
    /**
     * Get isPrinted value
     * @return bool|null
     */
    public function getIsPrinted(): ?bool
    {
        return $this->isPrinted;
    }
    /**
     * Set isPrinted value
     * @param bool $isPrinted
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
     */
    public function setIsPrinted(?bool $isPrinted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrinted) && !is_bool($isPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrinted, true), gettype($isPrinted)), __LINE__);
        }
        $this->isPrinted = $isPrinted;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get startTravelDate value
     * @return string|null
     */
    public function getStartTravelDate(): ?string
    {
        return $this->startTravelDate;
    }
    /**
     * Set startTravelDate value
     * @param string $startTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
     */
    public function setStartTravelDate(?string $startTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelDate) && !is_string($startTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelDate, true), gettype($startTravelDate)), __LINE__);
        }
        $this->startTravelDate = $startTravelDate;
        
        return $this;
    }
}
