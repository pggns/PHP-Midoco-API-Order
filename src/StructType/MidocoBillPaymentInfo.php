<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillPaymentInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillPaymentInfo extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The internalVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The paid
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $paid = null;
    /**
     * The paidDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $paidDate = null;
    /**
     * The dunned
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $dunned = null;
    /**
     * The dunningDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $dunningDate = null;
    /**
     * The dunningLevel
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $dunningLevel = null;
    /**
     * Constructor method for MidocoBillPaymentInfo
     * @uses MidocoBillPaymentInfo::setDocumentId()
     * @uses MidocoBillPaymentInfo::setInternalVersion()
     * @uses MidocoBillPaymentInfo::setPaid()
     * @uses MidocoBillPaymentInfo::setPaidDate()
     * @uses MidocoBillPaymentInfo::setDunned()
     * @uses MidocoBillPaymentInfo::setDunningDate()
     * @uses MidocoBillPaymentInfo::setDunningLevel()
     * @param int $documentId
     * @param int $internalVersion
     * @param bool $paid
     * @param string $paidDate
     * @param bool $dunned
     * @param string $dunningDate
     * @param string $dunningLevel
     */
    public function __construct(?int $documentId = null, ?int $internalVersion = null, ?bool $paid = null, ?string $paidDate = null, ?bool $dunned = null, ?string $dunningDate = null, ?string $dunningLevel = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setInternalVersion($internalVersion)
            ->setPaid($paid)
            ->setPaidDate($paidDate)
            ->setDunned($dunned)
            ->setDunningDate($dunningDate)
            ->setDunningLevel($dunningLevel);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillPaymentInfo
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillPaymentInfo
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }
    /**
     * Set paid value
     * @param bool $paid
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillPaymentInfo
     */
    public function setPaid(?bool $paid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
        $this->paid = $paid;
        
        return $this;
    }
    /**
     * Get paidDate value
     * @return string|null
     */
    public function getPaidDate(): ?string
    {
        return $this->paidDate;
    }
    /**
     * Set paidDate value
     * @param string $paidDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillPaymentInfo
     */
    public function setPaidDate(?string $paidDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paidDate) && !is_string($paidDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidDate, true), gettype($paidDate)), __LINE__);
        }
        $this->paidDate = $paidDate;
        
        return $this;
    }
    /**
     * Get dunned value
     * @return bool|null
     */
    public function getDunned(): ?bool
    {
        return $this->dunned;
    }
    /**
     * Set dunned value
     * @param bool $dunned
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillPaymentInfo
     */
    public function setDunned(?bool $dunned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunned) && !is_bool($dunned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunned, true), gettype($dunned)), __LINE__);
        }
        $this->dunned = $dunned;
        
        return $this;
    }
    /**
     * Get dunningDate value
     * @return string|null
     */
    public function getDunningDate(): ?string
    {
        return $this->dunningDate;
    }
    /**
     * Set dunningDate value
     * @param string $dunningDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillPaymentInfo
     */
    public function setDunningDate(?string $dunningDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dunningDate) && !is_string($dunningDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dunningDate, true), gettype($dunningDate)), __LINE__);
        }
        $this->dunningDate = $dunningDate;
        
        return $this;
    }
    /**
     * Get dunningLevel value
     * @return string|null
     */
    public function getDunningLevel(): ?string
    {
        return $this->dunningLevel;
    }
    /**
     * Set dunningLevel value
     * @param string $dunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillPaymentInfo
     */
    public function setDunningLevel(?string $dunningLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($dunningLevel) && !is_string($dunningLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dunningLevel, true), gettype($dunningLevel)), __LINE__);
        }
        $this->dunningLevel = $dunningLevel;
        
        return $this;
    }
}
