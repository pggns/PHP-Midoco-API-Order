<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPersonalNo StructType
 * @subpackage Structs
 */
class MidocoPersonalNo extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId;
    /**
     * The personalNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $personalNo;
    /**
     * Constructor method for MidocoPersonalNo
     * @uses MidocoPersonalNo::setCustomerId()
     * @uses MidocoPersonalNo::setPersonalNo()
     * @param int $customerId
     * @param string $personalNo
     */
    public function __construct(int $customerId, string $personalNo)
    {
        $this
            ->setCustomerId($customerId)
            ->setPersonalNo($personalNo);
    }
    /**
     * Get customerId value
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPersonalNo
     */
    public function setCustomerId(int $customerId): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get personalNo value
     * @return string
     */
    public function getPersonalNo(): string
    {
        return $this->personalNo;
    }
    /**
     * Set personalNo value
     * @param string $personalNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPersonalNo
     */
    public function setPersonalNo(string $personalNo): self
    {
        // validation for constraint: string
        if (!is_null($personalNo) && !is_string($personalNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personalNo, true), gettype($personalNo)), __LINE__);
        }
        $this->personalNo = $personalNo;
        
        return $this;
    }
}
