<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateCsvForCollectiveBillingRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Deprecated and replaced by GenerateInvoiceFileRequest
 * @subpackage Structs
 */
class GenerateCsvForCollectiveBillingRequest extends AbstractStructBase
{
    /**
     * The MidocoCollectiveBilling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCollectiveBilling
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $MidocoCollectiveBilling = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The sendMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $sendMail = null;
    /**
     * Constructor method for GenerateCsvForCollectiveBillingRequest
     * @uses GenerateCsvForCollectiveBillingRequest::setMidocoCollectiveBilling()
     * @uses GenerateCsvForCollectiveBillingRequest::setMidocoMailMessage()
     * @uses GenerateCsvForCollectiveBillingRequest::setSendMail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param bool $sendMail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, ?bool $sendMail = null)
    {
        $this
            ->setMidocoCollectiveBilling($midocoCollectiveBilling)
            ->setMidocoMailMessage($midocoMailMessage)
            ->setSendMail($sendMail);
    }
    /**
     * Get MidocoCollectiveBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling|null
     */
    public function getMidocoCollectiveBilling(): ?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling
    {
        return $this->MidocoCollectiveBilling;
    }
    /**
     * Set MidocoCollectiveBilling value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling
     * @return \Pggns\MidocoApi\Order\StructType\GenerateCsvForCollectiveBillingRequest
     */
    public function setMidocoCollectiveBilling(?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling = null): self
    {
        $this->MidocoCollectiveBilling = $midocoCollectiveBilling;
        
        return $this;
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Order\StructType\GenerateCsvForCollectiveBillingRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get sendMail value
     * @return bool|null
     */
    public function getSendMail(): ?bool
    {
        return $this->sendMail;
    }
    /**
     * Set sendMail value
     * @param bool $sendMail
     * @return \Pggns\MidocoApi\Order\StructType\GenerateCsvForCollectiveBillingRequest
     */
    public function setSendMail(?bool $sendMail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendMail) && !is_bool($sendMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendMail, true), gettype($sendMail)), __LINE__);
        }
        $this->sendMail = $sendMail;
        
        return $this;
    }
}
