<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseCashBookSignatureRequest StructType
 * @subpackage Structs
 */
class CloseCashBookSignatureRequest extends AbstractStructBase
{
    /**
     * The cashBookId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $cashBookId;
    /**
     * Constructor method for CloseCashBookSignatureRequest
     * @uses CloseCashBookSignatureRequest::setCashBookId()
     * @param int $cashBookId
     */
    public function __construct(int $cashBookId)
    {
        $this
            ->setCashBookId($cashBookId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CloseCashBookSignatureRequest
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
}
