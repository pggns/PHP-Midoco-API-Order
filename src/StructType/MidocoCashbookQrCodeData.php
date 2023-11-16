<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCashbookQrCodeData StructType
 * @subpackage Structs
 */
class MidocoCashbookQrCodeData extends AbstractStructBase
{
    /**
     * The start
     * @var string|null
     */
    protected ?string $start = null;
    /**
     * The end
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The transactionNo
     * @var string|null
     */
    protected ?string $transactionNo = null;
    /**
     * The signatureCounter
     * @var string|null
     */
    protected ?string $signatureCounter = null;
    /**
     * The serialNumber
     * @var string|null
     */
    protected ?string $serialNumber = null;
    /**
     * The algorithmus
     * @var string|null
     */
    protected ?string $algorithmus = null;
    /**
     * The key
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The signature
     * @var string|null
     */
    protected ?string $signature = null;
    /**
     * The processType
     * @var string|null
     */
    protected ?string $processType = null;
    /**
     * The timeFormat
     * @var string|null
     */
    protected ?string $timeFormat = null;
    /**
     * Constructor method for MidocoCashbookQrCodeData
     * @uses MidocoCashbookQrCodeData::setStart()
     * @uses MidocoCashbookQrCodeData::setEnd()
     * @uses MidocoCashbookQrCodeData::setTransactionNo()
     * @uses MidocoCashbookQrCodeData::setSignatureCounter()
     * @uses MidocoCashbookQrCodeData::setSerialNumber()
     * @uses MidocoCashbookQrCodeData::setAlgorithmus()
     * @uses MidocoCashbookQrCodeData::setKey()
     * @uses MidocoCashbookQrCodeData::setSignature()
     * @uses MidocoCashbookQrCodeData::setProcessType()
     * @uses MidocoCashbookQrCodeData::setTimeFormat()
     * @param string $start
     * @param string $end
     * @param string $transactionNo
     * @param string $signatureCounter
     * @param string $serialNumber
     * @param string $algorithmus
     * @param string $key
     * @param string $signature
     * @param string $processType
     * @param string $timeFormat
     */
    public function __construct(?string $start = null, ?string $end = null, ?string $transactionNo = null, ?string $signatureCounter = null, ?string $serialNumber = null, ?string $algorithmus = null, ?string $key = null, ?string $signature = null, ?string $processType = null, ?string $timeFormat = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setTransactionNo($transactionNo)
            ->setSignatureCounter($signatureCounter)
            ->setSerialNumber($serialNumber)
            ->setAlgorithmus($algorithmus)
            ->setKey($key)
            ->setSignature($signature)
            ->setProcessType($processType)
            ->setTimeFormat($timeFormat);
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
        return $this;
    }
    /**
     * Get transactionNo value
     * @return string|null
     */
    public function getTransactionNo(): ?string
    {
        return $this->transactionNo;
    }
    /**
     * Set transactionNo value
     * @param string $transactionNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setTransactionNo(?string $transactionNo = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionNo) && !is_string($transactionNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNo, true), gettype($transactionNo)), __LINE__);
        }
        $this->transactionNo = $transactionNo;
        
        return $this;
    }
    /**
     * Get signatureCounter value
     * @return string|null
     */
    public function getSignatureCounter(): ?string
    {
        return $this->signatureCounter;
    }
    /**
     * Set signatureCounter value
     * @param string $signatureCounter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setSignatureCounter(?string $signatureCounter = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureCounter) && !is_string($signatureCounter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureCounter, true), gettype($signatureCounter)), __LINE__);
        }
        $this->signatureCounter = $signatureCounter;
        
        return $this;
    }
    /**
     * Get serialNumber value
     * @return string|null
     */
    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }
    /**
     * Set serialNumber value
     * @param string $serialNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setSerialNumber(?string $serialNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($serialNumber) && !is_string($serialNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serialNumber, true), gettype($serialNumber)), __LINE__);
        }
        $this->serialNumber = $serialNumber;
        
        return $this;
    }
    /**
     * Get algorithmus value
     * @return string|null
     */
    public function getAlgorithmus(): ?string
    {
        return $this->algorithmus;
    }
    /**
     * Set algorithmus value
     * @param string $algorithmus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setAlgorithmus(?string $algorithmus = null): self
    {
        // validation for constraint: string
        if (!is_null($algorithmus) && !is_string($algorithmus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($algorithmus, true), gettype($algorithmus)), __LINE__);
        }
        $this->algorithmus = $algorithmus;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get signature value
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param string $signature
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->signature = $signature;
        
        return $this;
    }
    /**
     * Get processType value
     * @return string|null
     */
    public function getProcessType(): ?string
    {
        return $this->processType;
    }
    /**
     * Set processType value
     * @param string $processType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setProcessType(?string $processType = null): self
    {
        // validation for constraint: string
        if (!is_null($processType) && !is_string($processType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processType, true), gettype($processType)), __LINE__);
        }
        $this->processType = $processType;
        
        return $this;
    }
    /**
     * Get timeFormat value
     * @return string|null
     */
    public function getTimeFormat(): ?string
    {
        return $this->timeFormat;
    }
    /**
     * Set timeFormat value
     * @param string $timeFormat
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
     */
    public function setTimeFormat(?string $timeFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($timeFormat) && !is_string($timeFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeFormat, true), gettype($timeFormat)), __LINE__);
        }
        $this->timeFormat = $timeFormat;
        
        return $this;
    }
}
