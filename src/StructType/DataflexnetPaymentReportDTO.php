<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataflexnetPaymentReportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DataflexnetPaymentReportDTO extends AbstractStructBase
{
    /**
     * The apiVersion
     * @var string|null
     */
    protected ?string $apiVersion = null;
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The created
     * @var string|null
     */
    protected ?string $created = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The finished
     * @var bool|null
     */
    protected ?bool $finished = null;
    /**
     * The json
     * @var string|null
     */
    protected ?string $json = null;
    /**
     * The lastError
     * @var string|null
     */
    protected ?string $lastError = null;
    /**
     * The lastTry
     * @var string|null
     */
    protected ?string $lastTry = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The paymentReportId
     * @var string|null
     */
    protected ?string $paymentReportId = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The tryNo
     * @var int|null
     */
    protected ?int $tryNo = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * Constructor method for DataflexnetPaymentReportDTO
     * @uses DataflexnetPaymentReportDTO::setApiVersion()
     * @uses DataflexnetPaymentReportDTO::setCcToken()
     * @uses DataflexnetPaymentReportDTO::setCreated()
     * @uses DataflexnetPaymentReportDTO::setDocumentId()
     * @uses DataflexnetPaymentReportDTO::setFinished()
     * @uses DataflexnetPaymentReportDTO::setJson()
     * @uses DataflexnetPaymentReportDTO::setLastError()
     * @uses DataflexnetPaymentReportDTO::setLastTry()
     * @uses DataflexnetPaymentReportDTO::setOrderId()
     * @uses DataflexnetPaymentReportDTO::setPaymentReportId()
     * @uses DataflexnetPaymentReportDTO::setPositionId()
     * @uses DataflexnetPaymentReportDTO::setTransactionId()
     * @uses DataflexnetPaymentReportDTO::setTryNo()
     * @uses DataflexnetPaymentReportDTO::setUnitName()
     * @uses DataflexnetPaymentReportDTO::setVersion()
     * @param string $apiVersion
     * @param string $ccToken
     * @param string $created
     * @param int $documentId
     * @param bool $finished
     * @param string $json
     * @param string $lastError
     * @param string $lastTry
     * @param int $orderId
     * @param string $paymentReportId
     * @param int $positionId
     * @param int $transactionId
     * @param int $tryNo
     * @param string $unitName
     * @param int $version
     */
    public function __construct(?string $apiVersion = null, ?string $ccToken = null, ?string $created = null, ?int $documentId = null, ?bool $finished = null, ?string $json = null, ?string $lastError = null, ?string $lastTry = null, ?int $orderId = null, ?string $paymentReportId = null, ?int $positionId = null, ?int $transactionId = null, ?int $tryNo = null, ?string $unitName = null, ?int $version = null)
    {
        $this
            ->setApiVersion($apiVersion)
            ->setCcToken($ccToken)
            ->setCreated($created)
            ->setDocumentId($documentId)
            ->setFinished($finished)
            ->setJson($json)
            ->setLastError($lastError)
            ->setLastTry($lastTry)
            ->setOrderId($orderId)
            ->setPaymentReportId($paymentReportId)
            ->setPositionId($positionId)
            ->setTransactionId($transactionId)
            ->setTryNo($tryNo)
            ->setUnitName($unitName)
            ->setVersion($version);
    }
    /**
     * Get apiVersion value
     * @return string|null
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }
    /**
     * Set apiVersion value
     * @param string $apiVersion
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setApiVersion(?string $apiVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($apiVersion) && !is_string($apiVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiVersion, true), gettype($apiVersion)), __LINE__);
        }
        $this->apiVersion = $apiVersion;
        
        return $this;
    }
    /**
     * Get ccToken value
     * @return string|null
     */
    public function getCcToken(): ?string
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param string $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setCcToken(?string $ccToken = null): self
    {
        // validation for constraint: string
        if (!is_null($ccToken) && !is_string($ccToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccToken, true), gettype($ccToken)), __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get finished value
     * @return bool|null
     */
    public function getFinished(): ?bool
    {
        return $this->finished;
    }
    /**
     * Set finished value
     * @param bool $finished
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setFinished(?bool $finished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($finished) && !is_bool($finished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finished, true), gettype($finished)), __LINE__);
        }
        $this->finished = $finished;
        
        return $this;
    }
    /**
     * Get json value
     * @return string|null
     */
    public function getJson(): ?string
    {
        return $this->json;
    }
    /**
     * Set json value
     * @param string $json
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setJson(?string $json = null): self
    {
        // validation for constraint: string
        if (!is_null($json) && !is_string($json)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($json, true), gettype($json)), __LINE__);
        }
        $this->json = $json;
        
        return $this;
    }
    /**
     * Get lastError value
     * @return string|null
     */
    public function getLastError(): ?string
    {
        return $this->lastError;
    }
    /**
     * Set lastError value
     * @param string $lastError
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setLastError(?string $lastError = null): self
    {
        // validation for constraint: string
        if (!is_null($lastError) && !is_string($lastError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastError, true), gettype($lastError)), __LINE__);
        }
        $this->lastError = $lastError;
        
        return $this;
    }
    /**
     * Get lastTry value
     * @return string|null
     */
    public function getLastTry(): ?string
    {
        return $this->lastTry;
    }
    /**
     * Set lastTry value
     * @param string $lastTry
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setLastTry(?string $lastTry = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTry) && !is_string($lastTry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTry, true), gettype($lastTry)), __LINE__);
        }
        $this->lastTry = $lastTry;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get paymentReportId value
     * @return string|null
     */
    public function getPaymentReportId(): ?string
    {
        return $this->paymentReportId;
    }
    /**
     * Set paymentReportId value
     * @param string $paymentReportId
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setPaymentReportId(?string $paymentReportId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentReportId) && !is_string($paymentReportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentReportId, true), gettype($paymentReportId)), __LINE__);
        }
        $this->paymentReportId = $paymentReportId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
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
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get tryNo value
     * @return int|null
     */
    public function getTryNo(): ?int
    {
        return $this->tryNo;
    }
    /**
     * Set tryNo value
     * @param int $tryNo
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setTryNo(?int $tryNo = null): self
    {
        // validation for constraint: int
        if (!is_null($tryNo) && !(is_int($tryNo) || ctype_digit($tryNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tryNo, true), gettype($tryNo)), __LINE__);
        }
        $this->tryNo = $tryNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
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
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Pggns\MidocoApi\Order\StructType\DataflexnetPaymentReportDTO
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
