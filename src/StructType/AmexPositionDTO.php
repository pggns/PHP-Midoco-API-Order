<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmexPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AmexPositionDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * The exportedFileId
     * @var string|null
     */
    protected ?string $exportedFileId = null;
    /**
     * The exportedFileName
     * @var string|null
     */
    protected ?string $exportedFileName = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The merchantId
     * @var string|null
     */
    protected ?string $merchantId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The refBookingId
     * @var string|null
     */
    protected ?string $refBookingId = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The transactionType
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The xml
     * @var string|null
     */
    protected ?string $xml = null;
    /**
     * Constructor method for AmexPositionDTO
     * @uses AmexPositionDTO::setAmount()
     * @uses AmexPositionDTO::setCreationTimestamp()
     * @uses AmexPositionDTO::setCurrency()
     * @uses AmexPositionDTO::setExportTimestamp()
     * @uses AmexPositionDTO::setExportedFileId()
     * @uses AmexPositionDTO::setExportedFileName()
     * @uses AmexPositionDTO::setIsExported()
     * @uses AmexPositionDTO::setMerchantId()
     * @uses AmexPositionDTO::setPosition()
     * @uses AmexPositionDTO::setRefBookingId()
     * @uses AmexPositionDTO::setTransactionId()
     * @uses AmexPositionDTO::setTransactionType()
     * @uses AmexPositionDTO::setUnitName()
     * @uses AmexPositionDTO::setXml()
     * @param float $amount
     * @param string $creationTimestamp
     * @param string $currency
     * @param string $exportTimestamp
     * @param string $exportedFileId
     * @param string $exportedFileName
     * @param bool $isExported
     * @param string $merchantId
     * @param int $position
     * @param string $refBookingId
     * @param int $transactionId
     * @param string $transactionType
     * @param string $unitName
     * @param string $xml
     */
    public function __construct(?float $amount = null, ?string $creationTimestamp = null, ?string $currency = null, ?string $exportTimestamp = null, ?string $exportedFileId = null, ?string $exportedFileName = null, ?bool $isExported = null, ?string $merchantId = null, ?int $position = null, ?string $refBookingId = null, ?int $transactionId = null, ?string $transactionType = null, ?string $unitName = null, ?string $xml = null)
    {
        $this
            ->setAmount($amount)
            ->setCreationTimestamp($creationTimestamp)
            ->setCurrency($currency)
            ->setExportTimestamp($exportTimestamp)
            ->setExportedFileId($exportedFileId)
            ->setExportedFileName($exportedFileName)
            ->setIsExported($isExported)
            ->setMerchantId($merchantId)
            ->setPosition($position)
            ->setRefBookingId($refBookingId)
            ->setTransactionId($transactionId)
            ->setTransactionType($transactionType)
            ->setUnitName($unitName)
            ->setXml($xml);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
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
     * Get exportTimestamp value
     * @return string|null
     */
    public function getExportTimestamp(): ?string
    {
        return $this->exportTimestamp;
    }
    /**
     * Set exportTimestamp value
     * @param string $exportTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setExportTimestamp(?string $exportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimestamp) && !is_string($exportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimestamp, true), gettype($exportTimestamp)), __LINE__);
        }
        $this->exportTimestamp = $exportTimestamp;
        
        return $this;
    }
    /**
     * Get exportedFileId value
     * @return string|null
     */
    public function getExportedFileId(): ?string
    {
        return $this->exportedFileId;
    }
    /**
     * Set exportedFileId value
     * @param string $exportedFileId
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setExportedFileId(?string $exportedFileId = null): self
    {
        // validation for constraint: string
        if (!is_null($exportedFileId) && !is_string($exportedFileId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportedFileId, true), gettype($exportedFileId)), __LINE__);
        }
        $this->exportedFileId = $exportedFileId;
        
        return $this;
    }
    /**
     * Get exportedFileName value
     * @return string|null
     */
    public function getExportedFileName(): ?string
    {
        return $this->exportedFileName;
    }
    /**
     * Set exportedFileName value
     * @param string $exportedFileName
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setExportedFileName(?string $exportedFileName = null): self
    {
        // validation for constraint: string
        if (!is_null($exportedFileName) && !is_string($exportedFileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportedFileName, true), gettype($exportedFileName)), __LINE__);
        }
        $this->exportedFileName = $exportedFileName;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get merchantId value
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }
    /**
     * Set merchantId value
     * @param string $merchantId
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setMerchantId(?string $merchantId = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantId) && !is_string($merchantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantId, true), gettype($merchantId)), __LINE__);
        }
        $this->merchantId = $merchantId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get refBookingId value
     * @return string|null
     */
    public function getRefBookingId(): ?string
    {
        return $this->refBookingId;
    }
    /**
     * Set refBookingId value
     * @param string $refBookingId
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setRefBookingId(?string $refBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($refBookingId) && !is_string($refBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refBookingId, true), gettype($refBookingId)), __LINE__);
        }
        $this->refBookingId = $refBookingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
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
     * Get xml value
     * @return string|null
     */
    public function getXml(): ?string
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param string $xml
     * @return \Pggns\MidocoApi\Order\StructType\AmexPositionDTO
     */
    public function setXml(?string $xml = null): self
    {
        // validation for constraint: string
        if (!is_null($xml) && !is_string($xml)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xml, true), gettype($xml)), __LINE__);
        }
        $this->xml = $xml;
        
        return $this;
    }
}
