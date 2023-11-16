<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportHandlerResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response is only filled in the test system to show the testers where to find the order.
 * @subpackage Structs
 */
class ImportHandlerResponseType extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - documentation: The ID that was assigned to the imported order.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - documentation: The order number that was assigned to the imported order.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - documentation: The name of the org unit to which the order was imported.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The result
     * Meta information extracted from the WSDL
     * - documentation: A forwarded response from an import handler.
     * - minOccurs: 0
     * @var mixed|null
     */
    protected ?mixed $result = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - documentation: An error message or the reason the import was ignored.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for ImportHandlerResponseType
     * @uses ImportHandlerResponseType::setOrderId()
     * @uses ImportHandlerResponseType::setOrderNo()
     * @uses ImportHandlerResponseType::setUnitName()
     * @uses ImportHandlerResponseType::setResult()
     * @uses ImportHandlerResponseType::setError()
     * @param int $orderId
     * @param int $orderNo
     * @param string $unitName
     * @param mixed $result
     * @param string $error
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?string $unitName = null, ?mixed $result = null, ?string $error = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setUnitName($unitName)
            ->setResult($result)
            ->setError($error);
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
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
     * Get result value
     * @return mixed|null
     */
    public function getResult(): ?mixed
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param mixed $result
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
     */
    public function setResult(?mixed $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
}
