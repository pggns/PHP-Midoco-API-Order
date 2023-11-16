<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateOrderResponse StructType
 * @subpackage Structs
 */
class DuplicateOrderResponse extends AbstractStructBase
{
    /**
     * The sourceOrderId
     * Meta information extracted from the WSDL
     * - documentation: Repeats the sourceOrderId of the request.
     * @var int|null
     */
    protected ?int $sourceOrderId = null;
    /**
     * The sourceOrderNo
     * Meta information extracted from the WSDL
     * - documentation: The orderNo of the source order, if it exists and is not empty.
     * @var int|null
     */
    protected ?int $sourceOrderNo = null;
    /**
     * The sourceOrgunit
     * Meta information extracted from the WSDL
     * - documentation: Contains the sessions orgunit.
     * @var string|null
     */
    protected ?string $sourceOrgunit = null;
    /**
     * The targetOrderId
     * Meta information extracted from the WSDL
     * - documentation: The orderId of the copied order.
     * @var int|null
     */
    protected ?int $targetOrderId = null;
    /**
     * The targetOrderNo
     * Meta information extracted from the WSDL
     * - documentation: The orderNo of the copied order.
     * @var int|null
     */
    protected ?int $targetOrderNo = null;
    /**
     * The targetOrgunit
     * Meta information extracted from the WSDL
     * - documentation: Repeats the targetOrgunit of the request.
     * @var string|null
     */
    protected ?string $targetOrgunit = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - documentation: A reason why the order is not copied.
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The imported
     * Meta information extracted from the WSDL
     * - documentation: true, if the order was successfully copied.
     * @var bool|null
     */
    protected ?bool $imported = null;
    /**
     * Constructor method for DuplicateOrderResponse
     * @uses DuplicateOrderResponse::setSourceOrderId()
     * @uses DuplicateOrderResponse::setSourceOrderNo()
     * @uses DuplicateOrderResponse::setSourceOrgunit()
     * @uses DuplicateOrderResponse::setTargetOrderId()
     * @uses DuplicateOrderResponse::setTargetOrderNo()
     * @uses DuplicateOrderResponse::setTargetOrgunit()
     * @uses DuplicateOrderResponse::setMessage()
     * @uses DuplicateOrderResponse::setImported()
     * @param int $sourceOrderId
     * @param int $sourceOrderNo
     * @param string $sourceOrgunit
     * @param int $targetOrderId
     * @param int $targetOrderNo
     * @param string $targetOrgunit
     * @param string $message
     * @param bool $imported
     */
    public function __construct(?int $sourceOrderId = null, ?int $sourceOrderNo = null, ?string $sourceOrgunit = null, ?int $targetOrderId = null, ?int $targetOrderNo = null, ?string $targetOrgunit = null, ?string $message = null, ?bool $imported = null)
    {
        $this
            ->setSourceOrderId($sourceOrderId)
            ->setSourceOrderNo($sourceOrderNo)
            ->setSourceOrgunit($sourceOrgunit)
            ->setTargetOrderId($targetOrderId)
            ->setTargetOrderNo($targetOrderNo)
            ->setTargetOrgunit($targetOrgunit)
            ->setMessage($message)
            ->setImported($imported);
    }
    /**
     * Get sourceOrderId value
     * @return int|null
     */
    public function getSourceOrderId(): ?int
    {
        return $this->sourceOrderId;
    }
    /**
     * Set sourceOrderId value
     * @param int $sourceOrderId
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setSourceOrderId(?int $sourceOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($sourceOrderId) && !(is_int($sourceOrderId) || ctype_digit($sourceOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourceOrderId, true), gettype($sourceOrderId)), __LINE__);
        }
        $this->sourceOrderId = $sourceOrderId;
        
        return $this;
    }
    /**
     * Get sourceOrderNo value
     * @return int|null
     */
    public function getSourceOrderNo(): ?int
    {
        return $this->sourceOrderNo;
    }
    /**
     * Set sourceOrderNo value
     * @param int $sourceOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setSourceOrderNo(?int $sourceOrderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($sourceOrderNo) && !(is_int($sourceOrderNo) || ctype_digit($sourceOrderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourceOrderNo, true), gettype($sourceOrderNo)), __LINE__);
        }
        $this->sourceOrderNo = $sourceOrderNo;
        
        return $this;
    }
    /**
     * Get sourceOrgunit value
     * @return string|null
     */
    public function getSourceOrgunit(): ?string
    {
        return $this->sourceOrgunit;
    }
    /**
     * Set sourceOrgunit value
     * @param string $sourceOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setSourceOrgunit(?string $sourceOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceOrgunit) && !is_string($sourceOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceOrgunit, true), gettype($sourceOrgunit)), __LINE__);
        }
        $this->sourceOrgunit = $sourceOrgunit;
        
        return $this;
    }
    /**
     * Get targetOrderId value
     * @return int|null
     */
    public function getTargetOrderId(): ?int
    {
        return $this->targetOrderId;
    }
    /**
     * Set targetOrderId value
     * @param int $targetOrderId
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setTargetOrderId(?int $targetOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($targetOrderId) && !(is_int($targetOrderId) || ctype_digit($targetOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($targetOrderId, true), gettype($targetOrderId)), __LINE__);
        }
        $this->targetOrderId = $targetOrderId;
        
        return $this;
    }
    /**
     * Get targetOrderNo value
     * @return int|null
     */
    public function getTargetOrderNo(): ?int
    {
        return $this->targetOrderNo;
    }
    /**
     * Set targetOrderNo value
     * @param int $targetOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setTargetOrderNo(?int $targetOrderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($targetOrderNo) && !(is_int($targetOrderNo) || ctype_digit($targetOrderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($targetOrderNo, true), gettype($targetOrderNo)), __LINE__);
        }
        $this->targetOrderNo = $targetOrderNo;
        
        return $this;
    }
    /**
     * Get targetOrgunit value
     * @return string|null
     */
    public function getTargetOrgunit(): ?string
    {
        return $this->targetOrgunit;
    }
    /**
     * Set targetOrgunit value
     * @param string $targetOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setTargetOrgunit(?string $targetOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($targetOrgunit) && !is_string($targetOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetOrgunit, true), gettype($targetOrgunit)), __LINE__);
        }
        $this->targetOrgunit = $targetOrgunit;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get imported value
     * @return bool|null
     */
    public function getImported(): ?bool
    {
        return $this->imported;
    }
    /**
     * Set imported value
     * @param bool $imported
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderResponse
     */
    public function setImported(?bool $imported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($imported) && !is_bool($imported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($imported, true), gettype($imported)), __LINE__);
        }
        $this->imported = $imported;
        
        return $this;
    }
}
