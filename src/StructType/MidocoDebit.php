<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebit StructType
 * @subpackage Structs
 */
class MidocoDebit extends MidocoOnlinePaymentTransactionPosition
{
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountBlz
     * @var string|null
     */
    protected ?string $accountBlz = null;
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The accountCountry
     * @var string|null
     */
    protected ?string $accountCountry = null;
    /**
     * The transactionType
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The MidocoPaymentOrdersInfos
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentOrdersInfos
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $MidocoPaymentOrdersInfos = null;
    /**
     * Constructor method for MidocoDebit
     * @uses MidocoDebit::setAccountNo()
     * @uses MidocoDebit::setAccountBlz()
     * @uses MidocoDebit::setAccountName()
     * @uses MidocoDebit::setAccountOwner()
     * @uses MidocoDebit::setAccountCountry()
     * @uses MidocoDebit::setTransactionType()
     * @uses MidocoDebit::setMidocoPaymentOrdersInfos()
     * @param string $accountNo
     * @param string $accountBlz
     * @param string $accountName
     * @param string $accountOwner
     * @param string $accountCountry
     * @param string $transactionType
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos
     */
    public function __construct(?string $accountNo = null, ?string $accountBlz = null, ?string $accountName = null, ?string $accountOwner = null, ?string $accountCountry = null, ?string $transactionType = null, ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setAccountBlz($accountBlz)
            ->setAccountName($accountName)
            ->setAccountOwner($accountOwner)
            ->setAccountCountry($accountCountry)
            ->setTransactionType($transactionType)
            ->setMidocoPaymentOrdersInfos($midocoPaymentOrdersInfos);
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebit
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get accountBlz value
     * @return string|null
     */
    public function getAccountBlz(): ?string
    {
        return $this->accountBlz;
    }
    /**
     * Set accountBlz value
     * @param string $accountBlz
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebit
     */
    public function setAccountBlz(?string $accountBlz = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBlz) && !is_string($accountBlz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBlz, true), gettype($accountBlz)), __LINE__);
        }
        $this->accountBlz = $accountBlz;
        
        return $this;
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebit
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get accountOwner value
     * @return string|null
     */
    public function getAccountOwner(): ?string
    {
        return $this->accountOwner;
    }
    /**
     * Set accountOwner value
     * @param string $accountOwner
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebit
     */
    public function setAccountOwner(?string $accountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOwner) && !is_string($accountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOwner, true), gettype($accountOwner)), __LINE__);
        }
        $this->accountOwner = $accountOwner;
        
        return $this;
    }
    /**
     * Get accountCountry value
     * @return string|null
     */
    public function getAccountCountry(): ?string
    {
        return $this->accountCountry;
    }
    /**
     * Set accountCountry value
     * @param string $accountCountry
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebit
     */
    public function setAccountCountry(?string $accountCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCountry) && !is_string($accountCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCountry, true), gettype($accountCountry)), __LINE__);
        }
        $this->accountCountry = $accountCountry;
        
        return $this;
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebit
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get MidocoPaymentOrdersInfos value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos|null
     */
    public function getMidocoPaymentOrdersInfos(): ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
    {
        return $this->MidocoPaymentOrdersInfos;
    }
    /**
     * Set MidocoPaymentOrdersInfos value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebit
     */
    public function setMidocoPaymentOrdersInfos(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos = null): self
    {
        $this->MidocoPaymentOrdersInfos = $midocoPaymentOrdersInfos;
        
        return $this;
    }
}
