<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendInvoiceByEMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendInvoiceByEMailRequest extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The mailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mailAddress = null;
    /**
     * Constructor method for SendInvoiceByEMailRequest
     * @uses SendInvoiceByEMailRequest::setOrderNo()
     * @uses SendInvoiceByEMailRequest::setMailAddress()
     * @param int $orderNo
     * @param string $mailAddress
     */
    public function __construct(?int $orderNo = null, ?string $mailAddress = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setMailAddress($mailAddress);
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\SendInvoiceByEMailRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get mailAddress value
     * @return string|null
     */
    public function getMailAddress(): ?string
    {
        return $this->mailAddress;
    }
    /**
     * Set mailAddress value
     * @param string $mailAddress
     * @return \Pggns\MidocoApi\Order\StructType\SendInvoiceByEMailRequest
     */
    public function setMailAddress(?string $mailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($mailAddress) && !is_string($mailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailAddress, true), gettype($mailAddress)), __LINE__);
        }
        $this->mailAddress = $mailAddress;
        
        return $this;
    }
}
