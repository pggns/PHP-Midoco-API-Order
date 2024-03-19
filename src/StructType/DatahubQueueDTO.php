<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatahubQueueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DatahubQueueDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The env
     * @var string|null
     */
    protected ?string $env = null;
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The importError
     * @var string|null
     */
    protected ?string $importError = null;
    /**
     * The importUser
     * @var int|null
     */
    protected ?int $importUser = null;
    /**
     * The importableAloneAfter
     * @var string|null
     */
    protected ?string $importableAloneAfter = null;
    /**
     * The isIgnored
     * @var bool|null
     */
    protected ?bool $isIgnored = null;
    /**
     * The isImportableAlone
     * @var bool|null
     */
    protected ?bool $isImportableAlone = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
    /**
     * The isProcessed
     * @var bool|null
     */
    protected ?bool $isProcessed = null;
    /**
     * The messageBytes
     * @var string|null
     */
    protected ?string $messageBytes = null;
    /**
     * The messageType
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The processedTime
     * @var string|null
     */
    protected ?string $processedTime = null;
    /**
     * The processingStart
     * @var string|null
     */
    protected ?string $processingStart = null;
    /**
     * The reservationId
     * @var string|null
     */
    protected ?string $reservationId = null;
    /**
     * The salesChannel
     * @var string|null
     */
    protected ?string $salesChannel = null;
    /**
     * The systemId
     * @var string|null
     */
    protected ?string $systemId = null;
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
     * Constructor method for DatahubQueueDTO
     * @uses DatahubQueueDTO::setCreationTime()
     * @uses DatahubQueueDTO::setEnv()
     * @uses DatahubQueueDTO::setExternalSystem()
     * @uses DatahubQueueDTO::setId()
     * @uses DatahubQueueDTO::setImportError()
     * @uses DatahubQueueDTO::setImportUser()
     * @uses DatahubQueueDTO::setImportableAloneAfter()
     * @uses DatahubQueueDTO::setIsIgnored()
     * @uses DatahubQueueDTO::setIsImportableAlone()
     * @uses DatahubQueueDTO::setIsImported()
     * @uses DatahubQueueDTO::setIsProcessed()
     * @uses DatahubQueueDTO::setMessageBytes()
     * @uses DatahubQueueDTO::setMessageType()
     * @uses DatahubQueueDTO::setOrderId()
     * @uses DatahubQueueDTO::setProcessedTime()
     * @uses DatahubQueueDTO::setProcessingStart()
     * @uses DatahubQueueDTO::setReservationId()
     * @uses DatahubQueueDTO::setSalesChannel()
     * @uses DatahubQueueDTO::setSystemId()
     * @uses DatahubQueueDTO::setTryNo()
     * @uses DatahubQueueDTO::setUnitName()
     * @param string $creationTime
     * @param string $env
     * @param string $externalSystem
     * @param int $id
     * @param string $importError
     * @param int $importUser
     * @param string $importableAloneAfter
     * @param bool $isIgnored
     * @param bool $isImportableAlone
     * @param bool $isImported
     * @param bool $isProcessed
     * @param string $messageBytes
     * @param string $messageType
     * @param int $orderId
     * @param string $processedTime
     * @param string $processingStart
     * @param string $reservationId
     * @param string $salesChannel
     * @param string $systemId
     * @param int $tryNo
     * @param string $unitName
     */
    public function __construct(?string $creationTime = null, ?string $env = null, ?string $externalSystem = null, ?int $id = null, ?string $importError = null, ?int $importUser = null, ?string $importableAloneAfter = null, ?bool $isIgnored = null, ?bool $isImportableAlone = null, ?bool $isImported = null, ?bool $isProcessed = null, ?string $messageBytes = null, ?string $messageType = null, ?int $orderId = null, ?string $processedTime = null, ?string $processingStart = null, ?string $reservationId = null, ?string $salesChannel = null, ?string $systemId = null, ?int $tryNo = null, ?string $unitName = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setEnv($env)
            ->setExternalSystem($externalSystem)
            ->setId($id)
            ->setImportError($importError)
            ->setImportUser($importUser)
            ->setImportableAloneAfter($importableAloneAfter)
            ->setIsIgnored($isIgnored)
            ->setIsImportableAlone($isImportableAlone)
            ->setIsImported($isImported)
            ->setIsProcessed($isProcessed)
            ->setMessageBytes($messageBytes)
            ->setMessageType($messageType)
            ->setOrderId($orderId)
            ->setProcessedTime($processedTime)
            ->setProcessingStart($processingStart)
            ->setReservationId($reservationId)
            ->setSalesChannel($salesChannel)
            ->setSystemId($systemId)
            ->setTryNo($tryNo)
            ->setUnitName($unitName);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
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
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get importError value
     * @return string|null
     */
    public function getImportError(): ?string
    {
        return $this->importError;
    }
    /**
     * Set importError value
     * @param string $importError
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setImportError(?string $importError = null): self
    {
        // validation for constraint: string
        if (!is_null($importError) && !is_string($importError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importError, true), gettype($importError)), __LINE__);
        }
        $this->importError = $importError;
        
        return $this;
    }
    /**
     * Get importUser value
     * @return int|null
     */
    public function getImportUser(): ?int
    {
        return $this->importUser;
    }
    /**
     * Set importUser value
     * @param int $importUser
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setImportUser(?int $importUser = null): self
    {
        // validation for constraint: int
        if (!is_null($importUser) && !(is_int($importUser) || ctype_digit($importUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importUser, true), gettype($importUser)), __LINE__);
        }
        $this->importUser = $importUser;
        
        return $this;
    }
    /**
     * Get importableAloneAfter value
     * @return string|null
     */
    public function getImportableAloneAfter(): ?string
    {
        return $this->importableAloneAfter;
    }
    /**
     * Set importableAloneAfter value
     * @param string $importableAloneAfter
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setImportableAloneAfter(?string $importableAloneAfter = null): self
    {
        // validation for constraint: string
        if (!is_null($importableAloneAfter) && !is_string($importableAloneAfter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importableAloneAfter, true), gettype($importableAloneAfter)), __LINE__);
        }
        $this->importableAloneAfter = $importableAloneAfter;
        
        return $this;
    }
    /**
     * Get isIgnored value
     * @return bool|null
     */
    public function getIsIgnored(): ?bool
    {
        return $this->isIgnored;
    }
    /**
     * Set isIgnored value
     * @param bool $isIgnored
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setIsIgnored(?bool $isIgnored = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIgnored) && !is_bool($isIgnored)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIgnored, true), gettype($isIgnored)), __LINE__);
        }
        $this->isIgnored = $isIgnored;
        
        return $this;
    }
    /**
     * Get isImportableAlone value
     * @return bool|null
     */
    public function getIsImportableAlone(): ?bool
    {
        return $this->isImportableAlone;
    }
    /**
     * Set isImportableAlone value
     * @param bool $isImportableAlone
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setIsImportableAlone(?bool $isImportableAlone = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImportableAlone) && !is_bool($isImportableAlone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImportableAlone, true), gettype($isImportableAlone)), __LINE__);
        }
        $this->isImportableAlone = $isImportableAlone;
        
        return $this;
    }
    /**
     * Get isImported value
     * @return bool|null
     */
    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }
    /**
     * Set isImported value
     * @param bool $isImported
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setIsImported(?bool $isImported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImported) && !is_bool($isImported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImported, true), gettype($isImported)), __LINE__);
        }
        $this->isImported = $isImported;
        
        return $this;
    }
    /**
     * Get isProcessed value
     * @return bool|null
     */
    public function getIsProcessed(): ?bool
    {
        return $this->isProcessed;
    }
    /**
     * Set isProcessed value
     * @param bool $isProcessed
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setIsProcessed(?bool $isProcessed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProcessed) && !is_bool($isProcessed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessed, true), gettype($isProcessed)), __LINE__);
        }
        $this->isProcessed = $isProcessed;
        
        return $this;
    }
    /**
     * Get messageBytes value
     * @return string|null
     */
    public function getMessageBytes(): ?string
    {
        return $this->messageBytes;
    }
    /**
     * Set messageBytes value
     * @param string $messageBytes
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setMessageBytes(?string $messageBytes = null): self
    {
        // validation for constraint: string
        if (!is_null($messageBytes) && !is_string($messageBytes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageBytes, true), gettype($messageBytes)), __LINE__);
        }
        $this->messageBytes = $messageBytes;
        
        return $this;
    }
    /**
     * Get messageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @param string $messageType
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: string
        if (!is_null($messageType) && !is_string($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageType, true), gettype($messageType)), __LINE__);
        }
        $this->messageType = $messageType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
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
     * Get processedTime value
     * @return string|null
     */
    public function getProcessedTime(): ?string
    {
        return $this->processedTime;
    }
    /**
     * Set processedTime value
     * @param string $processedTime
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setProcessedTime(?string $processedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($processedTime) && !is_string($processedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processedTime, true), gettype($processedTime)), __LINE__);
        }
        $this->processedTime = $processedTime;
        
        return $this;
    }
    /**
     * Get processingStart value
     * @return string|null
     */
    public function getProcessingStart(): ?string
    {
        return $this->processingStart;
    }
    /**
     * Set processingStart value
     * @param string $processingStart
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setProcessingStart(?string $processingStart = null): self
    {
        // validation for constraint: string
        if (!is_null($processingStart) && !is_string($processingStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processingStart, true), gettype($processingStart)), __LINE__);
        }
        $this->processingStart = $processingStart;
        
        return $this;
    }
    /**
     * Get reservationId value
     * @return string|null
     */
    public function getReservationId(): ?string
    {
        return $this->reservationId;
    }
    /**
     * Set reservationId value
     * @param string $reservationId
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setReservationId(?string $reservationId = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationId) && !is_string($reservationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationId, true), gettype($reservationId)), __LINE__);
        }
        $this->reservationId = $reservationId;
        
        return $this;
    }
    /**
     * Get salesChannel value
     * @return string|null
     */
    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }
    /**
     * Set salesChannel value
     * @param string $salesChannel
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setSalesChannel(?string $salesChannel = null): self
    {
        // validation for constraint: string
        if (!is_null($salesChannel) && !is_string($salesChannel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesChannel, true), gettype($salesChannel)), __LINE__);
        }
        $this->salesChannel = $salesChannel;
        
        return $this;
    }
    /**
     * Get systemId value
     * @return string|null
     */
    public function getSystemId(): ?string
    {
        return $this->systemId;
    }
    /**
     * Set systemId value
     * @param string $systemId
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
     */
    public function setSystemId(?string $systemId = null): self
    {
        // validation for constraint: string
        if (!is_null($systemId) && !is_string($systemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemId, true), gettype($systemId)), __LINE__);
        }
        $this->systemId = $systemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueDTO
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
}
