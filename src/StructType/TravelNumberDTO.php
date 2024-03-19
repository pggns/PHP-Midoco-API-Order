<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelNumberDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravelNumberDTO extends AbstractStructBase
{
    /**
     * The accountBuyAcc
     * @var string|null
     */
    protected ?string $accountBuyAcc = null;
    /**
     * The accountBuyBus
     * @var string|null
     */
    protected ?string $accountBuyBus = null;
    /**
     * The accountBuyCar
     * @var string|null
     */
    protected ?string $accountBuyCar = null;
    /**
     * The accountBuyDb
     * @var string|null
     */
    protected ?string $accountBuyDb = null;
    /**
     * The accountBuyDiverse
     * @var string|null
     */
    protected ?string $accountBuyDiverse = null;
    /**
     * The accountBuyFlightBsp
     * @var string|null
     */
    protected ?string $accountBuyFlightBsp = null;
    /**
     * The accountBuyFlightDiverse
     * @var string|null
     */
    protected ?string $accountBuyFlightDiverse = null;
    /**
     * The accountBuyShip
     * @var string|null
     */
    protected ?string $accountBuyShip = null;
    /**
     * The accountBuyTouristic
     * @var string|null
     */
    protected ?string $accountBuyTouristic = null;
    /**
     * The accountSell
     * @var string|null
     */
    protected ?string $accountSell = null;
    /**
     * The accountSupplierInkasso
     * @var string|null
     */
    protected ?string $accountSupplierInkasso = null;
    /**
     * The active
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The b2cPercent
     * @var float|null
     */
    protected ?float $b2cPercent = null;
    /**
     * The calculatedRevenuePercent
     * @var float|null
     */
    protected ?float $calculatedRevenuePercent = null;
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
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The descrLong
     * @var string|null
     */
    protected ?string $descrLong = null;
    /**
     * The descrShort
     * @var string|null
     */
    protected ?string $descrShort = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The enableCommission
     * @var bool|null
     */
    protected ?bool $enableCommission = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The notTakeDates
     * @var bool|null
     */
    protected ?bool $notTakeDates = null;
    /**
     * The regularVat
     * @var bool|null
     */
    protected ?bool $regularVat = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The travelEnd
     * @var string|null
     */
    protected ?string $travelEnd = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for TravelNumberDTO
     * @uses TravelNumberDTO::setAccountBuyAcc()
     * @uses TravelNumberDTO::setAccountBuyBus()
     * @uses TravelNumberDTO::setAccountBuyCar()
     * @uses TravelNumberDTO::setAccountBuyDb()
     * @uses TravelNumberDTO::setAccountBuyDiverse()
     * @uses TravelNumberDTO::setAccountBuyFlightBsp()
     * @uses TravelNumberDTO::setAccountBuyFlightDiverse()
     * @uses TravelNumberDTO::setAccountBuyShip()
     * @uses TravelNumberDTO::setAccountBuyTouristic()
     * @uses TravelNumberDTO::setAccountSell()
     * @uses TravelNumberDTO::setAccountSupplierInkasso()
     * @uses TravelNumberDTO::setActive()
     * @uses TravelNumberDTO::setB2cPercent()
     * @uses TravelNumberDTO::setCalculatedRevenuePercent()
     * @uses TravelNumberDTO::setCreationDate()
     * @uses TravelNumberDTO::setCreationUser()
     * @uses TravelNumberDTO::setDebitorNo()
     * @uses TravelNumberDTO::setDescrLong()
     * @uses TravelNumberDTO::setDescrShort()
     * @uses TravelNumberDTO::setDestination()
     * @uses TravelNumberDTO::setEnableCommission()
     * @uses TravelNumberDTO::setModifyDate()
     * @uses TravelNumberDTO::setModifyUser()
     * @uses TravelNumberDTO::setNotTakeDates()
     * @uses TravelNumberDTO::setRegularVat()
     * @uses TravelNumberDTO::setSupplierId()
     * @uses TravelNumberDTO::setTravelDate()
     * @uses TravelNumberDTO::setTravelEnd()
     * @uses TravelNumberDTO::setTravelNo()
     * @param string $accountBuyAcc
     * @param string $accountBuyBus
     * @param string $accountBuyCar
     * @param string $accountBuyDb
     * @param string $accountBuyDiverse
     * @param string $accountBuyFlightBsp
     * @param string $accountBuyFlightDiverse
     * @param string $accountBuyShip
     * @param string $accountBuyTouristic
     * @param string $accountSell
     * @param string $accountSupplierInkasso
     * @param bool $active
     * @param float $b2cPercent
     * @param float $calculatedRevenuePercent
     * @param string $creationDate
     * @param int $creationUser
     * @param string $debitorNo
     * @param string $descrLong
     * @param string $descrShort
     * @param string $destination
     * @param bool $enableCommission
     * @param string $modifyDate
     * @param int $modifyUser
     * @param bool $notTakeDates
     * @param bool $regularVat
     * @param string $supplierId
     * @param string $travelDate
     * @param string $travelEnd
     * @param string $travelNo
     */
    public function __construct(?string $accountBuyAcc = null, ?string $accountBuyBus = null, ?string $accountBuyCar = null, ?string $accountBuyDb = null, ?string $accountBuyDiverse = null, ?string $accountBuyFlightBsp = null, ?string $accountBuyFlightDiverse = null, ?string $accountBuyShip = null, ?string $accountBuyTouristic = null, ?string $accountSell = null, ?string $accountSupplierInkasso = null, ?bool $active = null, ?float $b2cPercent = null, ?float $calculatedRevenuePercent = null, ?string $creationDate = null, ?int $creationUser = null, ?string $debitorNo = null, ?string $descrLong = null, ?string $descrShort = null, ?string $destination = null, ?bool $enableCommission = null, ?string $modifyDate = null, ?int $modifyUser = null, ?bool $notTakeDates = null, ?bool $regularVat = null, ?string $supplierId = null, ?string $travelDate = null, ?string $travelEnd = null, ?string $travelNo = null)
    {
        $this
            ->setAccountBuyAcc($accountBuyAcc)
            ->setAccountBuyBus($accountBuyBus)
            ->setAccountBuyCar($accountBuyCar)
            ->setAccountBuyDb($accountBuyDb)
            ->setAccountBuyDiverse($accountBuyDiverse)
            ->setAccountBuyFlightBsp($accountBuyFlightBsp)
            ->setAccountBuyFlightDiverse($accountBuyFlightDiverse)
            ->setAccountBuyShip($accountBuyShip)
            ->setAccountBuyTouristic($accountBuyTouristic)
            ->setAccountSell($accountSell)
            ->setAccountSupplierInkasso($accountSupplierInkasso)
            ->setActive($active)
            ->setB2cPercent($b2cPercent)
            ->setCalculatedRevenuePercent($calculatedRevenuePercent)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDebitorNo($debitorNo)
            ->setDescrLong($descrLong)
            ->setDescrShort($descrShort)
            ->setDestination($destination)
            ->setEnableCommission($enableCommission)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setNotTakeDates($notTakeDates)
            ->setRegularVat($regularVat)
            ->setSupplierId($supplierId)
            ->setTravelDate($travelDate)
            ->setTravelEnd($travelEnd)
            ->setTravelNo($travelNo);
    }
    /**
     * Get accountBuyAcc value
     * @return string|null
     */
    public function getAccountBuyAcc(): ?string
    {
        return $this->accountBuyAcc;
    }
    /**
     * Set accountBuyAcc value
     * @param string $accountBuyAcc
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyAcc(?string $accountBuyAcc = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyAcc) && !is_string($accountBuyAcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyAcc, true), gettype($accountBuyAcc)), __LINE__);
        }
        $this->accountBuyAcc = $accountBuyAcc;
        
        return $this;
    }
    /**
     * Get accountBuyBus value
     * @return string|null
     */
    public function getAccountBuyBus(): ?string
    {
        return $this->accountBuyBus;
    }
    /**
     * Set accountBuyBus value
     * @param string $accountBuyBus
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyBus(?string $accountBuyBus = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyBus) && !is_string($accountBuyBus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyBus, true), gettype($accountBuyBus)), __LINE__);
        }
        $this->accountBuyBus = $accountBuyBus;
        
        return $this;
    }
    /**
     * Get accountBuyCar value
     * @return string|null
     */
    public function getAccountBuyCar(): ?string
    {
        return $this->accountBuyCar;
    }
    /**
     * Set accountBuyCar value
     * @param string $accountBuyCar
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyCar(?string $accountBuyCar = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyCar) && !is_string($accountBuyCar)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyCar, true), gettype($accountBuyCar)), __LINE__);
        }
        $this->accountBuyCar = $accountBuyCar;
        
        return $this;
    }
    /**
     * Get accountBuyDb value
     * @return string|null
     */
    public function getAccountBuyDb(): ?string
    {
        return $this->accountBuyDb;
    }
    /**
     * Set accountBuyDb value
     * @param string $accountBuyDb
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyDb(?string $accountBuyDb = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyDb) && !is_string($accountBuyDb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyDb, true), gettype($accountBuyDb)), __LINE__);
        }
        $this->accountBuyDb = $accountBuyDb;
        
        return $this;
    }
    /**
     * Get accountBuyDiverse value
     * @return string|null
     */
    public function getAccountBuyDiverse(): ?string
    {
        return $this->accountBuyDiverse;
    }
    /**
     * Set accountBuyDiverse value
     * @param string $accountBuyDiverse
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyDiverse(?string $accountBuyDiverse = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyDiverse) && !is_string($accountBuyDiverse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyDiverse, true), gettype($accountBuyDiverse)), __LINE__);
        }
        $this->accountBuyDiverse = $accountBuyDiverse;
        
        return $this;
    }
    /**
     * Get accountBuyFlightBsp value
     * @return string|null
     */
    public function getAccountBuyFlightBsp(): ?string
    {
        return $this->accountBuyFlightBsp;
    }
    /**
     * Set accountBuyFlightBsp value
     * @param string $accountBuyFlightBsp
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyFlightBsp(?string $accountBuyFlightBsp = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyFlightBsp) && !is_string($accountBuyFlightBsp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyFlightBsp, true), gettype($accountBuyFlightBsp)), __LINE__);
        }
        $this->accountBuyFlightBsp = $accountBuyFlightBsp;
        
        return $this;
    }
    /**
     * Get accountBuyFlightDiverse value
     * @return string|null
     */
    public function getAccountBuyFlightDiverse(): ?string
    {
        return $this->accountBuyFlightDiverse;
    }
    /**
     * Set accountBuyFlightDiverse value
     * @param string $accountBuyFlightDiverse
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyFlightDiverse(?string $accountBuyFlightDiverse = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyFlightDiverse) && !is_string($accountBuyFlightDiverse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyFlightDiverse, true), gettype($accountBuyFlightDiverse)), __LINE__);
        }
        $this->accountBuyFlightDiverse = $accountBuyFlightDiverse;
        
        return $this;
    }
    /**
     * Get accountBuyShip value
     * @return string|null
     */
    public function getAccountBuyShip(): ?string
    {
        return $this->accountBuyShip;
    }
    /**
     * Set accountBuyShip value
     * @param string $accountBuyShip
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyShip(?string $accountBuyShip = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyShip) && !is_string($accountBuyShip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyShip, true), gettype($accountBuyShip)), __LINE__);
        }
        $this->accountBuyShip = $accountBuyShip;
        
        return $this;
    }
    /**
     * Get accountBuyTouristic value
     * @return string|null
     */
    public function getAccountBuyTouristic(): ?string
    {
        return $this->accountBuyTouristic;
    }
    /**
     * Set accountBuyTouristic value
     * @param string $accountBuyTouristic
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountBuyTouristic(?string $accountBuyTouristic = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBuyTouristic) && !is_string($accountBuyTouristic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBuyTouristic, true), gettype($accountBuyTouristic)), __LINE__);
        }
        $this->accountBuyTouristic = $accountBuyTouristic;
        
        return $this;
    }
    /**
     * Get accountSell value
     * @return string|null
     */
    public function getAccountSell(): ?string
    {
        return $this->accountSell;
    }
    /**
     * Set accountSell value
     * @param string $accountSell
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountSell(?string $accountSell = null): self
    {
        // validation for constraint: string
        if (!is_null($accountSell) && !is_string($accountSell)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountSell, true), gettype($accountSell)), __LINE__);
        }
        $this->accountSell = $accountSell;
        
        return $this;
    }
    /**
     * Get accountSupplierInkasso value
     * @return string|null
     */
    public function getAccountSupplierInkasso(): ?string
    {
        return $this->accountSupplierInkasso;
    }
    /**
     * Set accountSupplierInkasso value
     * @param string $accountSupplierInkasso
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setAccountSupplierInkasso(?string $accountSupplierInkasso = null): self
    {
        // validation for constraint: string
        if (!is_null($accountSupplierInkasso) && !is_string($accountSupplierInkasso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountSupplierInkasso, true), gettype($accountSupplierInkasso)), __LINE__);
        }
        $this->accountSupplierInkasso = $accountSupplierInkasso;
        
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
    /**
     * Get b2cPercent value
     * @return float|null
     */
    public function getB2cPercent(): ?float
    {
        return $this->b2cPercent;
    }
    /**
     * Set b2cPercent value
     * @param float $b2cPercent
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setB2cPercent(?float $b2cPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($b2cPercent) && !(is_float($b2cPercent) || is_numeric($b2cPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($b2cPercent, true), gettype($b2cPercent)), __LINE__);
        }
        $this->b2cPercent = $b2cPercent;
        
        return $this;
    }
    /**
     * Get calculatedRevenuePercent value
     * @return float|null
     */
    public function getCalculatedRevenuePercent(): ?float
    {
        return $this->calculatedRevenuePercent;
    }
    /**
     * Set calculatedRevenuePercent value
     * @param float $calculatedRevenuePercent
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setCalculatedRevenuePercent(?float $calculatedRevenuePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedRevenuePercent) && !(is_float($calculatedRevenuePercent) || is_numeric($calculatedRevenuePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedRevenuePercent, true), gettype($calculatedRevenuePercent)), __LINE__);
        }
        $this->calculatedRevenuePercent = $calculatedRevenuePercent;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
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
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get descrLong value
     * @return string|null
     */
    public function getDescrLong(): ?string
    {
        return $this->descrLong;
    }
    /**
     * Set descrLong value
     * @param string $descrLong
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setDescrLong(?string $descrLong = null): self
    {
        // validation for constraint: string
        if (!is_null($descrLong) && !is_string($descrLong)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descrLong, true), gettype($descrLong)), __LINE__);
        }
        $this->descrLong = $descrLong;
        
        return $this;
    }
    /**
     * Get descrShort value
     * @return string|null
     */
    public function getDescrShort(): ?string
    {
        return $this->descrShort;
    }
    /**
     * Set descrShort value
     * @param string $descrShort
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setDescrShort(?string $descrShort = null): self
    {
        // validation for constraint: string
        if (!is_null($descrShort) && !is_string($descrShort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descrShort, true), gettype($descrShort)), __LINE__);
        }
        $this->descrShort = $descrShort;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get enableCommission value
     * @return bool|null
     */
    public function getEnableCommission(): ?bool
    {
        return $this->enableCommission;
    }
    /**
     * Set enableCommission value
     * @param bool $enableCommission
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setEnableCommission(?bool $enableCommission = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableCommission) && !is_bool($enableCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableCommission, true), gettype($enableCommission)), __LINE__);
        }
        $this->enableCommission = $enableCommission;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get notTakeDates value
     * @return bool|null
     */
    public function getNotTakeDates(): ?bool
    {
        return $this->notTakeDates;
    }
    /**
     * Set notTakeDates value
     * @param bool $notTakeDates
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setNotTakeDates(?bool $notTakeDates = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notTakeDates) && !is_bool($notTakeDates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notTakeDates, true), gettype($notTakeDates)), __LINE__);
        }
        $this->notTakeDates = $notTakeDates;
        
        return $this;
    }
    /**
     * Get regularVat value
     * @return bool|null
     */
    public function getRegularVat(): ?bool
    {
        return $this->regularVat;
    }
    /**
     * Set regularVat value
     * @param bool $regularVat
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setRegularVat(?bool $regularVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($regularVat) && !is_bool($regularVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($regularVat, true), gettype($regularVat)), __LINE__);
        }
        $this->regularVat = $regularVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
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
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get travelEnd value
     * @return string|null
     */
    public function getTravelEnd(): ?string
    {
        return $this->travelEnd;
    }
    /**
     * Set travelEnd value
     * @param string $travelEnd
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setTravelEnd(?string $travelEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($travelEnd) && !is_string($travelEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelEnd, true), gettype($travelEnd)), __LINE__);
        }
        $this->travelEnd = $travelEnd;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
}
