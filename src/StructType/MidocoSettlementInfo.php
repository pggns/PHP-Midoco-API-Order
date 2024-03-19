<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSettlementInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSettlementInfo extends MediatorSettlementDTO
{
    /**
     * The mediatorName
     * @var string|null
     */
    protected ?string $mediatorName = null;
    /**
     * The creatingUserName
     * @var string|null
     */
    protected ?string $creatingUserName = null;
    /**
     * The creditDocRepositoryId
     * @var int|null
     */
    protected ?int $creditDocRepositoryId = null;
    /**
     * The debitDocRepositoryId
     * @var int|null
     */
    protected ?int $debitDocRepositoryId = null;
    /**
     * The detailsDocRepositoryId
     * @var int|null
     */
    protected ?int $detailsDocRepositoryId = null;
    /**
     * Constructor method for MidocoSettlementInfo
     * @uses MidocoSettlementInfo::setMediatorName()
     * @uses MidocoSettlementInfo::setCreatingUserName()
     * @uses MidocoSettlementInfo::setCreditDocRepositoryId()
     * @uses MidocoSettlementInfo::setDebitDocRepositoryId()
     * @uses MidocoSettlementInfo::setDetailsDocRepositoryId()
     * @param string $mediatorName
     * @param string $creatingUserName
     * @param int $creditDocRepositoryId
     * @param int $debitDocRepositoryId
     * @param int $detailsDocRepositoryId
     */
    public function __construct(?string $mediatorName = null, ?string $creatingUserName = null, ?int $creditDocRepositoryId = null, ?int $debitDocRepositoryId = null, ?int $detailsDocRepositoryId = null)
    {
        $this
            ->setMediatorName($mediatorName)
            ->setCreatingUserName($creatingUserName)
            ->setCreditDocRepositoryId($creditDocRepositoryId)
            ->setDebitDocRepositoryId($debitDocRepositoryId)
            ->setDetailsDocRepositoryId($detailsDocRepositoryId);
    }
    /**
     * Get mediatorName value
     * @return string|null
     */
    public function getMediatorName(): ?string
    {
        return $this->mediatorName;
    }
    /**
     * Set mediatorName value
     * @param string $mediatorName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo
     */
    public function setMediatorName(?string $mediatorName = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorName) && !is_string($mediatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorName, true), gettype($mediatorName)), __LINE__);
        }
        $this->mediatorName = $mediatorName;
        
        return $this;
    }
    /**
     * Get creatingUserName value
     * @return string|null
     */
    public function getCreatingUserName(): ?string
    {
        return $this->creatingUserName;
    }
    /**
     * Set creatingUserName value
     * @param string $creatingUserName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo
     */
    public function setCreatingUserName(?string $creatingUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($creatingUserName) && !is_string($creatingUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creatingUserName, true), gettype($creatingUserName)), __LINE__);
        }
        $this->creatingUserName = $creatingUserName;
        
        return $this;
    }
    /**
     * Get creditDocRepositoryId value
     * @return int|null
     */
    public function getCreditDocRepositoryId(): ?int
    {
        return $this->creditDocRepositoryId;
    }
    /**
     * Set creditDocRepositoryId value
     * @param int $creditDocRepositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo
     */
    public function setCreditDocRepositoryId(?int $creditDocRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($creditDocRepositoryId) && !(is_int($creditDocRepositoryId) || ctype_digit($creditDocRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creditDocRepositoryId, true), gettype($creditDocRepositoryId)), __LINE__);
        }
        $this->creditDocRepositoryId = $creditDocRepositoryId;
        
        return $this;
    }
    /**
     * Get debitDocRepositoryId value
     * @return int|null
     */
    public function getDebitDocRepositoryId(): ?int
    {
        return $this->debitDocRepositoryId;
    }
    /**
     * Set debitDocRepositoryId value
     * @param int $debitDocRepositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo
     */
    public function setDebitDocRepositoryId(?int $debitDocRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($debitDocRepositoryId) && !(is_int($debitDocRepositoryId) || ctype_digit($debitDocRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($debitDocRepositoryId, true), gettype($debitDocRepositoryId)), __LINE__);
        }
        $this->debitDocRepositoryId = $debitDocRepositoryId;
        
        return $this;
    }
    /**
     * Get detailsDocRepositoryId value
     * @return int|null
     */
    public function getDetailsDocRepositoryId(): ?int
    {
        return $this->detailsDocRepositoryId;
    }
    /**
     * Set detailsDocRepositoryId value
     * @param int $detailsDocRepositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo
     */
    public function setDetailsDocRepositoryId(?int $detailsDocRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($detailsDocRepositoryId) && !(is_int($detailsDocRepositoryId) || ctype_digit($detailsDocRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailsDocRepositoryId, true), gettype($detailsDocRepositoryId)), __LINE__);
        }
        $this->detailsDocRepositoryId = $detailsDocRepositoryId;
        
        return $this;
    }
}
