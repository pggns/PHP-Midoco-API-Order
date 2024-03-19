<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingInfoType extends AbstractStructBase
{
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The account
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The voidedFlag
     * @var bool|null
     */
    protected ?bool $voidedFlag = null;
    /**
     * The voidPositionId
     * @var int|null
     */
    protected ?int $voidPositionId = null;
    /**
     * The printDate
     * @var string|null
     */
    protected ?string $printDate = null;
    /**
     * Constructor method for MidocoBillingInfoType
     * @uses MidocoBillingInfoType::setPositionId()
     * @uses MidocoBillingInfoType::setDocumentNo()
     * @uses MidocoBillingInfoType::setAccount()
     * @uses MidocoBillingInfoType::setDescription()
     * @uses MidocoBillingInfoType::setPrice()
     * @uses MidocoBillingInfoType::setReferenceNo()
     * @uses MidocoBillingInfoType::setVoidedFlag()
     * @uses MidocoBillingInfoType::setVoidPositionId()
     * @uses MidocoBillingInfoType::setPrintDate()
     * @param int $positionId
     * @param int $documentNo
     * @param string $account
     * @param string $description
     * @param float $price
     * @param string $referenceNo
     * @param bool $voidedFlag
     * @param int $voidPositionId
     * @param string $printDate
     */
    public function __construct(?int $positionId = null, ?int $documentNo = null, ?string $account = null, ?string $description = null, ?float $price = null, ?string $referenceNo = null, ?bool $voidedFlag = null, ?int $voidPositionId = null, ?string $printDate = null)
    {
        $this
            ->setPositionId($positionId)
            ->setDocumentNo($documentNo)
            ->setAccount($account)
            ->setDescription($description)
            ->setPrice($price)
            ->setReferenceNo($referenceNo)
            ->setVoidedFlag($voidedFlag)
            ->setVoidPositionId($voidPositionId)
            ->setPrintDate($printDate);
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get referenceNo value
     * @return string|null
     */
    public function getReferenceNo(): ?string
    {
        return $this->referenceNo;
    }
    /**
     * Set referenceNo value
     * @param string $referenceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setReferenceNo(?string $referenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNo) && !is_string($referenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNo, true), gettype($referenceNo)), __LINE__);
        }
        $this->referenceNo = $referenceNo;
        
        return $this;
    }
    /**
     * Get voidedFlag value
     * @return bool|null
     */
    public function getVoidedFlag(): ?bool
    {
        return $this->voidedFlag;
    }
    /**
     * Set voidedFlag value
     * @param bool $voidedFlag
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setVoidedFlag(?bool $voidedFlag = null): self
    {
        // validation for constraint: boolean
        if (!is_null($voidedFlag) && !is_bool($voidedFlag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voidedFlag, true), gettype($voidedFlag)), __LINE__);
        }
        $this->voidedFlag = $voidedFlag;
        
        return $this;
    }
    /**
     * Get voidPositionId value
     * @return int|null
     */
    public function getVoidPositionId(): ?int
    {
        return $this->voidPositionId;
    }
    /**
     * Set voidPositionId value
     * @param int $voidPositionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setVoidPositionId(?int $voidPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidPositionId) && !(is_int($voidPositionId) || ctype_digit($voidPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidPositionId, true), gettype($voidPositionId)), __LINE__);
        }
        $this->voidPositionId = $voidPositionId;
        
        return $this;
    }
    /**
     * Get printDate value
     * @return string|null
     */
    public function getPrintDate(): ?string
    {
        return $this->printDate;
    }
    /**
     * Set printDate value
     * @param string $printDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingInfoType
     */
    public function setPrintDate(?string $printDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printDate) && !is_string($printDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDate, true), gettype($printDate)), __LINE__);
        }
        $this->printDate = $printDate;
        
        return $this;
    }
}
