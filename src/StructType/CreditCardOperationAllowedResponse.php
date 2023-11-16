<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardOperationAllowedResponse StructType
 * @subpackage Structs
 */
class CreditCardOperationAllowedResponse extends AbstractStructBase
{
    /**
     * The ccOperationAllowed
     * @var bool|null
     */
    protected ?bool $ccOperationAllowed = null;
    /**
     * Constructor method for CreditCardOperationAllowedResponse
     * @uses CreditCardOperationAllowedResponse::setCcOperationAllowed()
     * @param bool $ccOperationAllowed
     */
    public function __construct(?bool $ccOperationAllowed = null)
    {
        $this
            ->setCcOperationAllowed($ccOperationAllowed);
    }
    /**
     * Get ccOperationAllowed value
     * @return bool|null
     */
    public function getCcOperationAllowed(): ?bool
    {
        return $this->ccOperationAllowed;
    }
    /**
     * Set ccOperationAllowed value
     * @param bool $ccOperationAllowed
     * @return \Pggns\MidocoApi\Order\StructType\CreditCardOperationAllowedResponse
     */
    public function setCcOperationAllowed(?bool $ccOperationAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ccOperationAllowed) && !is_bool($ccOperationAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ccOperationAllowed, true), gettype($ccOperationAllowed)), __LINE__);
        }
        $this->ccOperationAllowed = $ccOperationAllowed;
        
        return $this;
    }
}
