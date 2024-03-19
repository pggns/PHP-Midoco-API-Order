<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossSellingCarInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrossSellingCarInfo extends AbstractStructBase
{
    /**
     * The groupName
     * @var string|null
     */
    protected ?string $groupName = null;
    /**
     * The producer
     * @var string|null
     */
    protected ?string $producer = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The typeId
     * @var int|null
     */
    protected ?int $typeId = null;
    /**
     * The doors
     * @var int|null
     */
    protected ?int $doors = null;
    /**
     * The seats
     * @var int|null
     */
    protected ?int $seats = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The adults
     * @var int|null
     */
    protected ?int $adults = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The bookLink
     * @var string|null
     */
    protected ?string $bookLink = null;
    /**
     * The listLink
     * @var string|null
     */
    protected ?string $listLink = null;
    /**
     * The image
     * @var string|null
     */
    protected ?string $image = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The carInformation
     * @var string|null
     */
    protected ?string $carInformation = null;
    /**
     * The carForm
     * @var string|null
     */
    protected ?string $carForm = null;
    /**
     * Constructor method for CrossSellingCarInfo
     * @uses CrossSellingCarInfo::setGroupName()
     * @uses CrossSellingCarInfo::setProducer()
     * @uses CrossSellingCarInfo::setType()
     * @uses CrossSellingCarInfo::setTypeId()
     * @uses CrossSellingCarInfo::setDoors()
     * @uses CrossSellingCarInfo::setSeats()
     * @uses CrossSellingCarInfo::setPrice()
     * @uses CrossSellingCarInfo::setCurrency()
     * @uses CrossSellingCarInfo::setStatus()
     * @uses CrossSellingCarInfo::setAdults()
     * @uses CrossSellingCarInfo::setSupplierName()
     * @uses CrossSellingCarInfo::setBookLink()
     * @uses CrossSellingCarInfo::setListLink()
     * @uses CrossSellingCarInfo::setImage()
     * @uses CrossSellingCarInfo::setName()
     * @uses CrossSellingCarInfo::setCarInformation()
     * @uses CrossSellingCarInfo::setCarForm()
     * @param string $groupName
     * @param string $producer
     * @param string $type
     * @param int $typeId
     * @param int $doors
     * @param int $seats
     * @param float $price
     * @param string $currency
     * @param int $status
     * @param int $adults
     * @param string $supplierName
     * @param string $bookLink
     * @param string $listLink
     * @param string $image
     * @param string $name
     * @param string $carInformation
     * @param string $carForm
     */
    public function __construct(?string $groupName = null, ?string $producer = null, ?string $type = null, ?int $typeId = null, ?int $doors = null, ?int $seats = null, ?float $price = null, ?string $currency = null, ?int $status = null, ?int $adults = null, ?string $supplierName = null, ?string $bookLink = null, ?string $listLink = null, ?string $image = null, ?string $name = null, ?string $carInformation = null, ?string $carForm = null)
    {
        $this
            ->setGroupName($groupName)
            ->setProducer($producer)
            ->setType($type)
            ->setTypeId($typeId)
            ->setDoors($doors)
            ->setSeats($seats)
            ->setPrice($price)
            ->setCurrency($currency)
            ->setStatus($status)
            ->setAdults($adults)
            ->setSupplierName($supplierName)
            ->setBookLink($bookLink)
            ->setListLink($listLink)
            ->setImage($image)
            ->setName($name)
            ->setCarInformation($carInformation)
            ->setCarForm($carForm);
    }
    /**
     * Get groupName value
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param string $groupName
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setGroupName(?string $groupName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        $this->groupName = $groupName;
        
        return $this;
    }
    /**
     * Get producer value
     * @return string|null
     */
    public function getProducer(): ?string
    {
        return $this->producer;
    }
    /**
     * Set producer value
     * @param string $producer
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setProducer(?string $producer = null): self
    {
        // validation for constraint: string
        if (!is_null($producer) && !is_string($producer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($producer, true), gettype($producer)), __LINE__);
        }
        $this->producer = $producer;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param int $typeId
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setTypeId(?int $typeId = null): self
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get doors value
     * @return int|null
     */
    public function getDoors(): ?int
    {
        return $this->doors;
    }
    /**
     * Set doors value
     * @param int $doors
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setDoors(?int $doors = null): self
    {
        // validation for constraint: int
        if (!is_null($doors) && !(is_int($doors) || ctype_digit($doors))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($doors, true), gettype($doors)), __LINE__);
        }
        $this->doors = $doors;
        
        return $this;
    }
    /**
     * Get seats value
     * @return int|null
     */
    public function getSeats(): ?int
    {
        return $this->seats;
    }
    /**
     * Set seats value
     * @param int $seats
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setSeats(?int $seats = null): self
    {
        // validation for constraint: int
        if (!is_null($seats) && !(is_int($seats) || ctype_digit($seats))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seats, true), gettype($seats)), __LINE__);
        }
        $this->seats = $seats;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
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
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get adults value
     * @return int|null
     */
    public function getAdults(): ?int
    {
        return $this->adults;
    }
    /**
     * Set adults value
     * @param int $adults
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setAdults(?int $adults = null): self
    {
        // validation for constraint: int
        if (!is_null($adults) && !(is_int($adults) || ctype_digit($adults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adults, true), gettype($adults)), __LINE__);
        }
        $this->adults = $adults;
        
        return $this;
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
    /**
     * Get bookLink value
     * @return string|null
     */
    public function getBookLink(): ?string
    {
        return $this->bookLink;
    }
    /**
     * Set bookLink value
     * @param string $bookLink
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setBookLink(?string $bookLink = null): self
    {
        // validation for constraint: string
        if (!is_null($bookLink) && !is_string($bookLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookLink, true), gettype($bookLink)), __LINE__);
        }
        $this->bookLink = $bookLink;
        
        return $this;
    }
    /**
     * Get listLink value
     * @return string|null
     */
    public function getListLink(): ?string
    {
        return $this->listLink;
    }
    /**
     * Set listLink value
     * @param string $listLink
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setListLink(?string $listLink = null): self
    {
        // validation for constraint: string
        if (!is_null($listLink) && !is_string($listLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listLink, true), gettype($listLink)), __LINE__);
        }
        $this->listLink = $listLink;
        
        return $this;
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->image = $image;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get carInformation value
     * @return string|null
     */
    public function getCarInformation(): ?string
    {
        return $this->carInformation;
    }
    /**
     * Set carInformation value
     * @param string $carInformation
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setCarInformation(?string $carInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($carInformation) && !is_string($carInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carInformation, true), gettype($carInformation)), __LINE__);
        }
        $this->carInformation = $carInformation;
        
        return $this;
    }
    /**
     * Get carForm value
     * @return string|null
     */
    public function getCarForm(): ?string
    {
        return $this->carForm;
    }
    /**
     * Set carForm value
     * @param string $carForm
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo
     */
    public function setCarForm(?string $carForm = null): self
    {
        // validation for constraint: string
        if (!is_null($carForm) && !is_string($carForm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carForm, true), gettype($carForm)), __LINE__);
        }
        $this->carForm = $carForm;
        
        return $this;
    }
}
