<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TssClientDTO StructType
 * @subpackage Structs
 */
class TssClientDTO extends AbstractStructBase
{
    /**
     * The adminMail
     * @var string|null
     */
    protected ?string $adminMail = null;
    /**
     * The adminName
     * @var string|null
     */
    protected ?string $adminName = null;
    /**
     * The adminPin
     * @var string|null
     */
    protected ?string $adminPin = null;
    /**
     * The adminPuk
     * @var string|null
     */
    protected ?string $adminPuk = null;
    /**
     * The cancelReason
     * @var string|null
     */
    protected ?string $cancelReason = null;
    /**
     * The cancelTimestamp
     * @var string|null
     */
    protected ?string $cancelTimestamp = null;
    /**
     * The cancelUser
     * @var int|null
     */
    protected ?int $cancelUser = null;
    /**
     * The certificate
     * @var string|null
     */
    protected ?string $certificate = null;
    /**
     * The certificateSerial
     * @var string|null
     */
    protected ?string $certificateSerial = null;
    /**
     * The clientId
     * @var string|null
     */
    protected ?string $clientId = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The env
     * @var string|null
     */
    protected ?string $env = null;
    /**
     * The initTimestamp
     * @var string|null
     */
    protected ?string $initTimestamp = null;
    /**
     * The lastContractDate
     * @var string|null
     */
    protected ?string $lastContractDate = null;
    /**
     * The lastTxNumber
     * @var int|null
     */
    protected ?int $lastTxNumber = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The publicKey
     * @var string|null
     */
    protected ?string $publicKey = null;
    /**
     * The signatureAlgorithm
     * @var string|null
     */
    protected ?string $signatureAlgorithm = null;
    /**
     * The signatureCounter
     * @var int|null
     */
    protected ?int $signatureCounter = null;
    /**
     * The signatureTimestampFormat
     * @var string|null
     */
    protected ?string $signatureTimestampFormat = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The transactionCounter
     * @var int|null
     */
    protected ?int $transactionCounter = null;
    /**
     * The transactionDataEncoding
     * @var string|null
     */
    protected ?string $transactionDataEncoding = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The tssSystem
     * @var string|null
     */
    protected ?string $tssSystem = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The uninitTimestamp
     * @var string|null
     */
    protected ?string $uninitTimestamp = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The version
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * Constructor method for TssClientDTO
     * @uses TssClientDTO::setAdminMail()
     * @uses TssClientDTO::setAdminName()
     * @uses TssClientDTO::setAdminPin()
     * @uses TssClientDTO::setAdminPuk()
     * @uses TssClientDTO::setCancelReason()
     * @uses TssClientDTO::setCancelTimestamp()
     * @uses TssClientDTO::setCancelUser()
     * @uses TssClientDTO::setCertificate()
     * @uses TssClientDTO::setCertificateSerial()
     * @uses TssClientDTO::setClientId()
     * @uses TssClientDTO::setCreationTimestamp()
     * @uses TssClientDTO::setCreationUser()
     * @uses TssClientDTO::setEnv()
     * @uses TssClientDTO::setInitTimestamp()
     * @uses TssClientDTO::setLastContractDate()
     * @uses TssClientDTO::setLastTxNumber()
     * @uses TssClientDTO::setModifyTimestamp()
     * @uses TssClientDTO::setModifyUser()
     * @uses TssClientDTO::setPublicKey()
     * @uses TssClientDTO::setSignatureAlgorithm()
     * @uses TssClientDTO::setSignatureCounter()
     * @uses TssClientDTO::setSignatureTimestampFormat()
     * @uses TssClientDTO::setStatus()
     * @uses TssClientDTO::setTransactionCounter()
     * @uses TssClientDTO::setTransactionDataEncoding()
     * @uses TssClientDTO::setTssId()
     * @uses TssClientDTO::setTssSystem()
     * @uses TssClientDTO::setType()
     * @uses TssClientDTO::setUninitTimestamp()
     * @uses TssClientDTO::setUnitName()
     * @uses TssClientDTO::setVersion()
     * @param string $adminMail
     * @param string $adminName
     * @param string $adminPin
     * @param string $adminPuk
     * @param string $cancelReason
     * @param string $cancelTimestamp
     * @param int $cancelUser
     * @param string $certificate
     * @param string $certificateSerial
     * @param string $clientId
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $env
     * @param string $initTimestamp
     * @param string $lastContractDate
     * @param int $lastTxNumber
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param string $publicKey
     * @param string $signatureAlgorithm
     * @param int $signatureCounter
     * @param string $signatureTimestampFormat
     * @param string $status
     * @param int $transactionCounter
     * @param string $transactionDataEncoding
     * @param string $tssId
     * @param string $tssSystem
     * @param string $type
     * @param string $uninitTimestamp
     * @param string $unitName
     * @param string $version
     */
    public function __construct(?string $adminMail = null, ?string $adminName = null, ?string $adminPin = null, ?string $adminPuk = null, ?string $cancelReason = null, ?string $cancelTimestamp = null, ?int $cancelUser = null, ?string $certificate = null, ?string $certificateSerial = null, ?string $clientId = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $env = null, ?string $initTimestamp = null, ?string $lastContractDate = null, ?int $lastTxNumber = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?string $publicKey = null, ?string $signatureAlgorithm = null, ?int $signatureCounter = null, ?string $signatureTimestampFormat = null, ?string $status = null, ?int $transactionCounter = null, ?string $transactionDataEncoding = null, ?string $tssId = null, ?string $tssSystem = null, ?string $type = null, ?string $uninitTimestamp = null, ?string $unitName = null, ?string $version = null)
    {
        $this
            ->setAdminMail($adminMail)
            ->setAdminName($adminName)
            ->setAdminPin($adminPin)
            ->setAdminPuk($adminPuk)
            ->setCancelReason($cancelReason)
            ->setCancelTimestamp($cancelTimestamp)
            ->setCancelUser($cancelUser)
            ->setCertificate($certificate)
            ->setCertificateSerial($certificateSerial)
            ->setClientId($clientId)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setEnv($env)
            ->setInitTimestamp($initTimestamp)
            ->setLastContractDate($lastContractDate)
            ->setLastTxNumber($lastTxNumber)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setPublicKey($publicKey)
            ->setSignatureAlgorithm($signatureAlgorithm)
            ->setSignatureCounter($signatureCounter)
            ->setSignatureTimestampFormat($signatureTimestampFormat)
            ->setStatus($status)
            ->setTransactionCounter($transactionCounter)
            ->setTransactionDataEncoding($transactionDataEncoding)
            ->setTssId($tssId)
            ->setTssSystem($tssSystem)
            ->setType($type)
            ->setUninitTimestamp($uninitTimestamp)
            ->setUnitName($unitName)
            ->setVersion($version);
    }
    /**
     * Get adminMail value
     * @return string|null
     */
    public function getAdminMail(): ?string
    {
        return $this->adminMail;
    }
    /**
     * Set adminMail value
     * @param string $adminMail
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setAdminMail(?string $adminMail = null): self
    {
        // validation for constraint: string
        if (!is_null($adminMail) && !is_string($adminMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminMail, true), gettype($adminMail)), __LINE__);
        }
        $this->adminMail = $adminMail;
        
        return $this;
    }
    /**
     * Get adminName value
     * @return string|null
     */
    public function getAdminName(): ?string
    {
        return $this->adminName;
    }
    /**
     * Set adminName value
     * @param string $adminName
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setAdminName(?string $adminName = null): self
    {
        // validation for constraint: string
        if (!is_null($adminName) && !is_string($adminName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminName, true), gettype($adminName)), __LINE__);
        }
        $this->adminName = $adminName;
        
        return $this;
    }
    /**
     * Get adminPin value
     * @return string|null
     */
    public function getAdminPin(): ?string
    {
        return $this->adminPin;
    }
    /**
     * Set adminPin value
     * @param string $adminPin
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setAdminPin(?string $adminPin = null): self
    {
        // validation for constraint: string
        if (!is_null($adminPin) && !is_string($adminPin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminPin, true), gettype($adminPin)), __LINE__);
        }
        $this->adminPin = $adminPin;
        
        return $this;
    }
    /**
     * Get adminPuk value
     * @return string|null
     */
    public function getAdminPuk(): ?string
    {
        return $this->adminPuk;
    }
    /**
     * Set adminPuk value
     * @param string $adminPuk
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setAdminPuk(?string $adminPuk = null): self
    {
        // validation for constraint: string
        if (!is_null($adminPuk) && !is_string($adminPuk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminPuk, true), gettype($adminPuk)), __LINE__);
        }
        $this->adminPuk = $adminPuk;
        
        return $this;
    }
    /**
     * Get cancelReason value
     * @return string|null
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }
    /**
     * Set cancelReason value
     * @param string $cancelReason
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setCancelReason(?string $cancelReason = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelReason) && !is_string($cancelReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelReason, true), gettype($cancelReason)), __LINE__);
        }
        $this->cancelReason = $cancelReason;
        
        return $this;
    }
    /**
     * Get cancelTimestamp value
     * @return string|null
     */
    public function getCancelTimestamp(): ?string
    {
        return $this->cancelTimestamp;
    }
    /**
     * Set cancelTimestamp value
     * @param string $cancelTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setCancelTimestamp(?string $cancelTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelTimestamp) && !is_string($cancelTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelTimestamp, true), gettype($cancelTimestamp)), __LINE__);
        }
        $this->cancelTimestamp = $cancelTimestamp;
        
        return $this;
    }
    /**
     * Get cancelUser value
     * @return int|null
     */
    public function getCancelUser(): ?int
    {
        return $this->cancelUser;
    }
    /**
     * Set cancelUser value
     * @param int $cancelUser
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setCancelUser(?int $cancelUser = null): self
    {
        // validation for constraint: int
        if (!is_null($cancelUser) && !(is_int($cancelUser) || ctype_digit($cancelUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cancelUser, true), gettype($cancelUser)), __LINE__);
        }
        $this->cancelUser = $cancelUser;
        
        return $this;
    }
    /**
     * Get certificate value
     * @return string|null
     */
    public function getCertificate(): ?string
    {
        return $this->certificate;
    }
    /**
     * Set certificate value
     * @param string $certificate
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setCertificate(?string $certificate = null): self
    {
        // validation for constraint: string
        if (!is_null($certificate) && !is_string($certificate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificate, true), gettype($certificate)), __LINE__);
        }
        $this->certificate = $certificate;
        
        return $this;
    }
    /**
     * Get certificateSerial value
     * @return string|null
     */
    public function getCertificateSerial(): ?string
    {
        return $this->certificateSerial;
    }
    /**
     * Set certificateSerial value
     * @param string $certificateSerial
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setCertificateSerial(?string $certificateSerial = null): self
    {
        // validation for constraint: string
        if (!is_null($certificateSerial) && !is_string($certificateSerial)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificateSerial, true), gettype($certificateSerial)), __LINE__);
        }
        $this->certificateSerial = $certificateSerial;
        
        return $this;
    }
    /**
     * Get clientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param string $clientId
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientId) && !is_string($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), gettype($clientId)), __LINE__);
        }
        $this->clientId = $clientId;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
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
     * Get env value
     * @return string|null
     */
    public function getEnv(): ?string
    {
        return $this->env;
    }
    /**
     * Set env value
     * @param string $env
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setEnv(?string $env = null): self
    {
        // validation for constraint: string
        if (!is_null($env) && !is_string($env)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($env, true), gettype($env)), __LINE__);
        }
        $this->env = $env;
        
        return $this;
    }
    /**
     * Get initTimestamp value
     * @return string|null
     */
    public function getInitTimestamp(): ?string
    {
        return $this->initTimestamp;
    }
    /**
     * Set initTimestamp value
     * @param string $initTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setInitTimestamp(?string $initTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($initTimestamp) && !is_string($initTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initTimestamp, true), gettype($initTimestamp)), __LINE__);
        }
        $this->initTimestamp = $initTimestamp;
        
        return $this;
    }
    /**
     * Get lastContractDate value
     * @return string|null
     */
    public function getLastContractDate(): ?string
    {
        return $this->lastContractDate;
    }
    /**
     * Set lastContractDate value
     * @param string $lastContractDate
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setLastContractDate(?string $lastContractDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastContractDate) && !is_string($lastContractDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastContractDate, true), gettype($lastContractDate)), __LINE__);
        }
        $this->lastContractDate = $lastContractDate;
        
        return $this;
    }
    /**
     * Get lastTxNumber value
     * @return int|null
     */
    public function getLastTxNumber(): ?int
    {
        return $this->lastTxNumber;
    }
    /**
     * Set lastTxNumber value
     * @param int $lastTxNumber
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setLastTxNumber(?int $lastTxNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($lastTxNumber) && !(is_int($lastTxNumber) || ctype_digit($lastTxNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastTxNumber, true), gettype($lastTxNumber)), __LINE__);
        }
        $this->lastTxNumber = $lastTxNumber;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
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
     * Get publicKey value
     * @return string|null
     */
    public function getPublicKey(): ?string
    {
        return $this->publicKey;
    }
    /**
     * Set publicKey value
     * @param string $publicKey
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setPublicKey(?string $publicKey = null): self
    {
        // validation for constraint: string
        if (!is_null($publicKey) && !is_string($publicKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publicKey, true), gettype($publicKey)), __LINE__);
        }
        $this->publicKey = $publicKey;
        
        return $this;
    }
    /**
     * Get signatureAlgorithm value
     * @return string|null
     */
    public function getSignatureAlgorithm(): ?string
    {
        return $this->signatureAlgorithm;
    }
    /**
     * Set signatureAlgorithm value
     * @param string $signatureAlgorithm
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setSignatureAlgorithm(?string $signatureAlgorithm = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureAlgorithm) && !is_string($signatureAlgorithm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureAlgorithm, true), gettype($signatureAlgorithm)), __LINE__);
        }
        $this->signatureAlgorithm = $signatureAlgorithm;
        
        return $this;
    }
    /**
     * Get signatureCounter value
     * @return int|null
     */
    public function getSignatureCounter(): ?int
    {
        return $this->signatureCounter;
    }
    /**
     * Set signatureCounter value
     * @param int $signatureCounter
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setSignatureCounter(?int $signatureCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($signatureCounter) && !(is_int($signatureCounter) || ctype_digit($signatureCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signatureCounter, true), gettype($signatureCounter)), __LINE__);
        }
        $this->signatureCounter = $signatureCounter;
        
        return $this;
    }
    /**
     * Get signatureTimestampFormat value
     * @return string|null
     */
    public function getSignatureTimestampFormat(): ?string
    {
        return $this->signatureTimestampFormat;
    }
    /**
     * Set signatureTimestampFormat value
     * @param string $signatureTimestampFormat
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setSignatureTimestampFormat(?string $signatureTimestampFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureTimestampFormat) && !is_string($signatureTimestampFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureTimestampFormat, true), gettype($signatureTimestampFormat)), __LINE__);
        }
        $this->signatureTimestampFormat = $signatureTimestampFormat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
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
     * Get transactionCounter value
     * @return int|null
     */
    public function getTransactionCounter(): ?int
    {
        return $this->transactionCounter;
    }
    /**
     * Set transactionCounter value
     * @param int $transactionCounter
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setTransactionCounter(?int $transactionCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionCounter) && !(is_int($transactionCounter) || ctype_digit($transactionCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionCounter, true), gettype($transactionCounter)), __LINE__);
        }
        $this->transactionCounter = $transactionCounter;
        
        return $this;
    }
    /**
     * Get transactionDataEncoding value
     * @return string|null
     */
    public function getTransactionDataEncoding(): ?string
    {
        return $this->transactionDataEncoding;
    }
    /**
     * Set transactionDataEncoding value
     * @param string $transactionDataEncoding
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setTransactionDataEncoding(?string $transactionDataEncoding = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDataEncoding) && !is_string($transactionDataEncoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDataEncoding, true), gettype($transactionDataEncoding)), __LINE__);
        }
        $this->transactionDataEncoding = $transactionDataEncoding;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
    /**
     * Get tssSystem value
     * @return string|null
     */
    public function getTssSystem(): ?string
    {
        return $this->tssSystem;
    }
    /**
     * Set tssSystem value
     * @param string $tssSystem
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setTssSystem(?string $tssSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($tssSystem) && !is_string($tssSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssSystem, true), gettype($tssSystem)), __LINE__);
        }
        $this->tssSystem = $tssSystem;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
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
     * Get uninitTimestamp value
     * @return string|null
     */
    public function getUninitTimestamp(): ?string
    {
        return $this->uninitTimestamp;
    }
    /**
     * Set uninitTimestamp value
     * @param string $uninitTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setUninitTimestamp(?string $uninitTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($uninitTimestamp) && !is_string($uninitTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uninitTimestamp, true), gettype($uninitTimestamp)), __LINE__);
        }
        $this->uninitTimestamp = $uninitTimestamp;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Pggns\MidocoApi\Order\StructType\TssClientDTO
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
