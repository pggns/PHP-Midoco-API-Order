<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoItemSellingModeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoItemSellingModeType extends AbstractStructBase
{
    /**
     * The abtaSection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\ISectionFieldType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ISectionFieldType $abtaSection = null;
    /**
     * The atolClassificationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\IAtolClassType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\IAtolClassType $atolClassificationType = null;
    /**
     * The abtaClassificationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\IAbtaClassType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\IAbtaClassType $abtaClassificationType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
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
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The sellingMode
     * @var int|null
     */
    protected ?int $sellingMode = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The atolIndex
     * @var int|null
     */
    protected ?int $atolIndex = null;
    /**
     * The atolPeriod
     * @var string|null
     */
    protected ?string $atolPeriod = null;
    /**
     * The sellingModeDetermination
     * @var string|null
     */
    protected ?string $sellingModeDetermination = null;
    /**
     * Constructor method for MidocoItemSellingModeType
     * @uses MidocoItemSellingModeType::setAbtaSection()
     * @uses MidocoItemSellingModeType::setAtolClassificationType()
     * @uses MidocoItemSellingModeType::setAbtaClassificationType()
     * @uses MidocoItemSellingModeType::setItemId()
     * @uses MidocoItemSellingModeType::setItemType()
     * @uses MidocoItemSellingModeType::setSupplierId()
     * @uses MidocoItemSellingModeType::setBookingId()
     * @uses MidocoItemSellingModeType::setStartTravel()
     * @uses MidocoItemSellingModeType::setEndTravel()
     * @uses MidocoItemSellingModeType::setStatus()
     * @uses MidocoItemSellingModeType::setPrice()
     * @uses MidocoItemSellingModeType::setSellingMode()
     * @uses MidocoItemSellingModeType::setConfirmationGroup()
     * @uses MidocoItemSellingModeType::setAtolIndex()
     * @uses MidocoItemSellingModeType::setAtolPeriod()
     * @uses MidocoItemSellingModeType::setSellingModeDetermination()
     * @param \Pggns\MidocoApi\Order\StructType\ISectionFieldType $abtaSection
     * @param \Pggns\MidocoApi\Order\StructType\IAtolClassType $atolClassificationType
     * @param \Pggns\MidocoApi\Order\StructType\IAbtaClassType $abtaClassificationType
     * @param int $itemId
     * @param string $itemType
     * @param string $supplierId
     * @param string $bookingId
     * @param string $startTravel
     * @param string $endTravel
     * @param string $status
     * @param float $price
     * @param int $sellingMode
     * @param string $confirmationGroup
     * @param int $atolIndex
     * @param string $atolPeriod
     * @param string $sellingModeDetermination
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\ISectionFieldType $abtaSection = null, ?\Pggns\MidocoApi\Order\StructType\IAtolClassType $atolClassificationType = null, ?\Pggns\MidocoApi\Order\StructType\IAbtaClassType $abtaClassificationType = null, ?int $itemId = null, ?string $itemType = null, ?string $supplierId = null, ?string $bookingId = null, ?string $startTravel = null, ?string $endTravel = null, ?string $status = null, ?float $price = null, ?int $sellingMode = null, ?string $confirmationGroup = null, ?int $atolIndex = null, ?string $atolPeriod = null, ?string $sellingModeDetermination = null)
    {
        $this
            ->setAbtaSection($abtaSection)
            ->setAtolClassificationType($atolClassificationType)
            ->setAbtaClassificationType($abtaClassificationType)
            ->setItemId($itemId)
            ->setItemType($itemType)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setStatus($status)
            ->setPrice($price)
            ->setSellingMode($sellingMode)
            ->setConfirmationGroup($confirmationGroup)
            ->setAtolIndex($atolIndex)
            ->setAtolPeriod($atolPeriod)
            ->setSellingModeDetermination($sellingModeDetermination);
    }
    /**
     * Get abtaSection value
     * @return \Pggns\MidocoApi\Order\StructType\ISectionFieldType|null
     */
    public function getAbtaSection(): ?\Pggns\MidocoApi\Order\StructType\ISectionFieldType
    {
        return $this->abtaSection;
    }
    /**
     * Set abtaSection value
     * @param \Pggns\MidocoApi\Order\StructType\ISectionFieldType $abtaSection
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setAbtaSection(?\Pggns\MidocoApi\Order\StructType\ISectionFieldType $abtaSection = null): self
    {
        $this->abtaSection = $abtaSection;
        
        return $this;
    }
    /**
     * Get atolClassificationType value
     * @return \Pggns\MidocoApi\Order\StructType\IAtolClassType|null
     */
    public function getAtolClassificationType(): ?\Pggns\MidocoApi\Order\StructType\IAtolClassType
    {
        return $this->atolClassificationType;
    }
    /**
     * Set atolClassificationType value
     * @param \Pggns\MidocoApi\Order\StructType\IAtolClassType $atolClassificationType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setAtolClassificationType(?\Pggns\MidocoApi\Order\StructType\IAtolClassType $atolClassificationType = null): self
    {
        $this->atolClassificationType = $atolClassificationType;
        
        return $this;
    }
    /**
     * Get abtaClassificationType value
     * @return \Pggns\MidocoApi\Order\StructType\IAbtaClassType|null
     */
    public function getAbtaClassificationType(): ?\Pggns\MidocoApi\Order\StructType\IAbtaClassType
    {
        return $this->abtaClassificationType;
    }
    /**
     * Set abtaClassificationType value
     * @param \Pggns\MidocoApi\Order\StructType\IAbtaClassType $abtaClassificationType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setAbtaClassificationType(?\Pggns\MidocoApi\Order\StructType\IAbtaClassType $abtaClassificationType = null): self
    {
        $this->abtaClassificationType = $abtaClassificationType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
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
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
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
     * Get sellingMode value
     * @return int|null
     */
    public function getSellingMode(): ?int
    {
        return $this->sellingMode;
    }
    /**
     * Set sellingMode value
     * @param int $sellingMode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setSellingMode(?int $sellingMode = null): self
    {
        // validation for constraint: int
        if (!is_null($sellingMode) && !(is_int($sellingMode) || ctype_digit($sellingMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellingMode, true), gettype($sellingMode)), __LINE__);
        }
        $this->sellingMode = $sellingMode;
        
        return $this;
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
        return $this;
    }
    /**
     * Get atolIndex value
     * @return int|null
     */
    public function getAtolIndex(): ?int
    {
        return $this->atolIndex;
    }
    /**
     * Set atolIndex value
     * @param int $atolIndex
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setAtolIndex(?int $atolIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($atolIndex) && !(is_int($atolIndex) || ctype_digit($atolIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($atolIndex, true), gettype($atolIndex)), __LINE__);
        }
        $this->atolIndex = $atolIndex;
        
        return $this;
    }
    /**
     * Get atolPeriod value
     * @return string|null
     */
    public function getAtolPeriod(): ?string
    {
        return $this->atolPeriod;
    }
    /**
     * Set atolPeriod value
     * @param string $atolPeriod
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setAtolPeriod(?string $atolPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($atolPeriod) && !is_string($atolPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($atolPeriod, true), gettype($atolPeriod)), __LINE__);
        }
        $this->atolPeriod = $atolPeriod;
        
        return $this;
    }
    /**
     * Get sellingModeDetermination value
     * @return string|null
     */
    public function getSellingModeDetermination(): ?string
    {
        return $this->sellingModeDetermination;
    }
    /**
     * Set sellingModeDetermination value
     * @param string $sellingModeDetermination
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeType
     */
    public function setSellingModeDetermination(?string $sellingModeDetermination = null): self
    {
        // validation for constraint: string
        if (!is_null($sellingModeDetermination) && !is_string($sellingModeDetermination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellingModeDetermination, true), gettype($sellingModeDetermination)), __LINE__);
        }
        $this->sellingModeDetermination = $sellingModeDetermination;
        
        return $this;
    }
}
