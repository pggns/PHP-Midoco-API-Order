<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateMilesAndMoreTransactionLinkResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateMilesAndMoreTransactionLinkResponse extends AbstractStructBase
{
    /**
     * The unitId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitId = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $signature = null;
    /**
     * The checkoutUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $checkoutUrl = null;
    /**
     * The LocalizableMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:LocalizableMessage
     * @var \Pggns\MidocoApi\Order\StructType\LocalizableMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\LocalizableMessageType $LocalizableMessage = null;
    /**
     * Constructor method for ValidateMilesAndMoreTransactionLinkResponse
     * @uses ValidateMilesAndMoreTransactionLinkResponse::setUnitId()
     * @uses ValidateMilesAndMoreTransactionLinkResponse::setUnitName()
     * @uses ValidateMilesAndMoreTransactionLinkResponse::setLocale()
     * @uses ValidateMilesAndMoreTransactionLinkResponse::setTransactionId()
     * @uses ValidateMilesAndMoreTransactionLinkResponse::setSignature()
     * @uses ValidateMilesAndMoreTransactionLinkResponse::setCheckoutUrl()
     * @uses ValidateMilesAndMoreTransactionLinkResponse::setLocalizableMessage()
     * @param string $unitId
     * @param string $unitName
     * @param string $locale
     * @param string $transactionId
     * @param string $signature
     * @param string $checkoutUrl
     * @param \Pggns\MidocoApi\Order\StructType\LocalizableMessageType $localizableMessage
     */
    public function __construct(?string $unitId = null, ?string $unitName = null, ?string $locale = null, ?string $transactionId = null, ?string $signature = null, ?string $checkoutUrl = null, ?\Pggns\MidocoApi\Order\StructType\LocalizableMessageType $localizableMessage = null)
    {
        $this
            ->setUnitId($unitId)
            ->setUnitName($unitName)
            ->setLocale($locale)
            ->setTransactionId($transactionId)
            ->setSignature($signature)
            ->setCheckoutUrl($checkoutUrl)
            ->setLocalizableMessage($localizableMessage);
    }
    /**
     * Get unitId value
     * @return string|null
     */
    public function getUnitId(): ?string
    {
        return $this->unitId;
    }
    /**
     * Set unitId value
     * @param string $unitId
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkResponse
     */
    public function setUnitId(?string $unitId = null): self
    {
        // validation for constraint: string
        if (!is_null($unitId) && !is_string($unitId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitId, true), gettype($unitId)), __LINE__);
        }
        $this->unitId = $unitId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkResponse
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
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkResponse
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkResponse
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkResponse
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
     * Get checkoutUrl value
     * @return string|null
     */
    public function getCheckoutUrl(): ?string
    {
        return $this->checkoutUrl;
    }
    /**
     * Set checkoutUrl value
     * @param string $checkoutUrl
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkResponse
     */
    public function setCheckoutUrl(?string $checkoutUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($checkoutUrl) && !is_string($checkoutUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkoutUrl, true), gettype($checkoutUrl)), __LINE__);
        }
        $this->checkoutUrl = $checkoutUrl;
        
        return $this;
    }
    /**
     * Get LocalizableMessage value
     * @return \Pggns\MidocoApi\Order\StructType\LocalizableMessageType|null
     */
    public function getLocalizableMessage(): ?\Pggns\MidocoApi\Order\StructType\LocalizableMessageType
    {
        return $this->LocalizableMessage;
    }
    /**
     * Set LocalizableMessage value
     * @param \Pggns\MidocoApi\Order\StructType\LocalizableMessageType $localizableMessage
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkResponse
     */
    public function setLocalizableMessage(?\Pggns\MidocoApi\Order\StructType\LocalizableMessageType $localizableMessage = null): self
    {
        $this->LocalizableMessage = $localizableMessage;
        
        return $this;
    }
}
