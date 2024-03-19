<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookSignatureBalanceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashBookSignatureBalanceRequest extends AbstractStructBase
{
    /**
     * The cashBookId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $cashBookId;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $type;
    /**
     * Constructor method for CashBookSignatureBalanceRequest
     * @uses CashBookSignatureBalanceRequest::setCashBookId()
     * @uses CashBookSignatureBalanceRequest::setType()
     * @param int $cashBookId
     * @param string $type
     */
    public function __construct(int $cashBookId, string $type)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setType($type);
    }
    /**
     * Get cashBookId value
     * @return int
     */
    public function getCashBookId(): int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureBalanceRequest
     */
    public function setCashBookId(int $cashBookId): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureBalanceRequest
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
