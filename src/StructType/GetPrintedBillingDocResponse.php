<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintedBillingDocResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintedBillingDocResponse extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The MidocoMailDescription4Inexso
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoMailDescription4Inexso
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $MidocoMailDescription4Inexso = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * Constructor method for GetPrintedBillingDocResponse
     * @uses GetPrintedBillingDocResponse::setData()
     * @uses GetPrintedBillingDocResponse::setMidocoMailMessage()
     * @uses GetPrintedBillingDocResponse::setMidocoMailDescription4Inexso()
     * @uses GetPrintedBillingDocResponse::setFileName()
     * @param string $data
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso
     * @param string $fileName
     */
    public function __construct(?string $data = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso = null, ?string $fileName = null)
    {
        $this
            ->setData($data)
            ->setMidocoMailMessage($midocoMailMessage)
            ->setMidocoMailDescription4Inexso($midocoMailDescription4Inexso)
            ->setFileName($fileName);
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocResponse
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get MidocoMailDescription4Inexso value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso|null
     */
    public function getMidocoMailDescription4Inexso(): ?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso
    {
        return $this->MidocoMailDescription4Inexso;
    }
    /**
     * Set MidocoMailDescription4Inexso value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocResponse
     */
    public function setMidocoMailDescription4Inexso(?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso = null): self
    {
        $this->MidocoMailDescription4Inexso = $midocoMailDescription4Inexso;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocResponse
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
}
