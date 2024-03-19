<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExportMessages4OrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExportMessages4OrderRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The messageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * Constructor method for GetExportMessages4OrderRequest
     * @uses GetExportMessages4OrderRequest::setOrderId()
     * @uses GetExportMessages4OrderRequest::setMessageType()
     * @param int $orderId
     * @param string $messageType
     */
    public function __construct(?int $orderId = null, ?string $messageType = null)
    {
        $this
            ->setOrderId($orderId)
            ->setMessageType($messageType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExportMessages4OrderRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExportMessages4OrderRequest
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
}
