<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InsuranceDetailDTO extends AbstractStructBase
{
    /**
     * The annualValidTo
     * @var string|null
     */
    protected ?string $annualValidTo = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The isAnnual
     * @var bool|null
     */
    protected ?bool $isAnnual = null;
    /**
     * The isGroup
     * @var bool|null
     */
    protected ?bool $isGroup = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The paxAssigned
     * @var string|null
     */
    protected ?string $paxAssigned = null;
    /**
     * The paxPerService
     * @var int|null
     */
    protected ?int $paxPerService = null;
    /**
     * The pibLink
     * @var string|null
     */
    protected ?string $pibLink = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The tariffCode
     * @var string|null
     */
    protected ?string $tariffCode = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for InsuranceDetailDTO
     * @uses InsuranceDetailDTO::setAnnualValidTo()
     * @uses InsuranceDetailDTO::setCurrency()
     * @uses InsuranceDetailDTO::setDescription()
     * @uses InsuranceDetailDTO::setIsAnnual()
     * @uses InsuranceDetailDTO::setIsGroup()
     * @uses InsuranceDetailDTO::setItemId()
     * @uses InsuranceDetailDTO::setPaxAssigned()
     * @uses InsuranceDetailDTO::setPaxPerService()
     * @uses InsuranceDetailDTO::setPibLink()
     * @uses InsuranceDetailDTO::setPositionNo()
     * @uses InsuranceDetailDTO::setReferencePosition()
     * @uses InsuranceDetailDTO::setStatus()
     * @uses InsuranceDetailDTO::setTariffCode()
     * @uses InsuranceDetailDTO::setTotalPrice()
     * @uses InsuranceDetailDTO::setValidFrom()
     * @uses InsuranceDetailDTO::setValidUntil()
     * @param string $annualValidTo
     * @param string $currency
     * @param string $description
     * @param bool $isAnnual
     * @param bool $isGroup
     * @param int $itemId
     * @param string $paxAssigned
     * @param int $paxPerService
     * @param string $pibLink
     * @param int $positionNo
     * @param int $referencePosition
     * @param string $status
     * @param string $tariffCode
     * @param float $totalPrice
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $annualValidTo = null, ?string $currency = null, ?string $description = null, ?bool $isAnnual = null, ?bool $isGroup = null, ?int $itemId = null, ?string $paxAssigned = null, ?int $paxPerService = null, ?string $pibLink = null, ?int $positionNo = null, ?int $referencePosition = null, ?string $status = null, ?string $tariffCode = null, ?float $totalPrice = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setAnnualValidTo($annualValidTo)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setIsAnnual($isAnnual)
            ->setIsGroup($isGroup)
            ->setItemId($itemId)
            ->setPaxAssigned($paxAssigned)
            ->setPaxPerService($paxPerService)
            ->setPibLink($pibLink)
            ->setPositionNo($positionNo)
            ->setReferencePosition($referencePosition)
            ->setStatus($status)
            ->setTariffCode($tariffCode)
            ->setTotalPrice($totalPrice)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get annualValidTo value
     * @return string|null
     */
    public function getAnnualValidTo(): ?string
    {
        return $this->annualValidTo;
    }
    /**
     * Set annualValidTo value
     * @param string $annualValidTo
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setAnnualValidTo(?string $annualValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($annualValidTo) && !is_string($annualValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($annualValidTo, true), gettype($annualValidTo)), __LINE__);
        }
        $this->annualValidTo = $annualValidTo;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
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
     * Get isAnnual value
     * @return bool|null
     */
    public function getIsAnnual(): ?bool
    {
        return $this->isAnnual;
    }
    /**
     * Set isAnnual value
     * @param bool $isAnnual
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setIsAnnual(?bool $isAnnual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAnnual) && !is_bool($isAnnual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAnnual, true), gettype($isAnnual)), __LINE__);
        }
        $this->isAnnual = $isAnnual;
        
        return $this;
    }
    /**
     * Get isGroup value
     * @return bool|null
     */
    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }
    /**
     * Set isGroup value
     * @param bool $isGroup
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setIsGroup(?bool $isGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGroup) && !is_bool($isGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGroup, true), gettype($isGroup)), __LINE__);
        }
        $this->isGroup = $isGroup;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
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
     * Get paxAssigned value
     * @return string|null
     */
    public function getPaxAssigned(): ?string
    {
        return $this->paxAssigned;
    }
    /**
     * Set paxAssigned value
     * @param string $paxAssigned
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setPaxAssigned(?string $paxAssigned = null): self
    {
        // validation for constraint: string
        if (!is_null($paxAssigned) && !is_string($paxAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxAssigned, true), gettype($paxAssigned)), __LINE__);
        }
        $this->paxAssigned = $paxAssigned;
        
        return $this;
    }
    /**
     * Get paxPerService value
     * @return int|null
     */
    public function getPaxPerService(): ?int
    {
        return $this->paxPerService;
    }
    /**
     * Set paxPerService value
     * @param int $paxPerService
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setPaxPerService(?int $paxPerService = null): self
    {
        // validation for constraint: int
        if (!is_null($paxPerService) && !(is_int($paxPerService) || ctype_digit($paxPerService))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxPerService, true), gettype($paxPerService)), __LINE__);
        }
        $this->paxPerService = $paxPerService;
        
        return $this;
    }
    /**
     * Get pibLink value
     * @return string|null
     */
    public function getPibLink(): ?string
    {
        return $this->pibLink;
    }
    /**
     * Set pibLink value
     * @param string $pibLink
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setPibLink(?string $pibLink = null): self
    {
        // validation for constraint: string
        if (!is_null($pibLink) && !is_string($pibLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pibLink, true), gettype($pibLink)), __LINE__);
        }
        $this->pibLink = $pibLink;
        
        return $this;
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
    /**
     * Get referencePosition value
     * @return int|null
     */
    public function getReferencePosition(): ?int
    {
        return $this->referencePosition;
    }
    /**
     * Set referencePosition value
     * @param int $referencePosition
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setReferencePosition(?int $referencePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($referencePosition) && !(is_int($referencePosition) || ctype_digit($referencePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencePosition, true), gettype($referencePosition)), __LINE__);
        }
        $this->referencePosition = $referencePosition;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get tariffCode value
     * @return string|null
     */
    public function getTariffCode(): ?string
    {
        return $this->tariffCode;
    }
    /**
     * Set tariffCode value
     * @param string $tariffCode
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setTariffCode(?string $tariffCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffCode) && !is_string($tariffCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffCode, true), gettype($tariffCode)), __LINE__);
        }
        $this->tariffCode = $tariffCode;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
