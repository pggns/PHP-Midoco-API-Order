<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateRedeemVoucherResponse StructType
 * @subpackage Structs
 */
class ValidateRedeemVoucherResponse extends AbstractStructBase
{
    /**
     * The redeemPossible
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $redeemPossible = null;
    /**
     * Constructor method for ValidateRedeemVoucherResponse
     * @uses ValidateRedeemVoucherResponse::setRedeemPossible()
     * @param bool $redeemPossible
     */
    public function __construct(?bool $redeemPossible = true)
    {
        $this
            ->setRedeemPossible($redeemPossible);
    }
    /**
     * Get redeemPossible value
     * @return bool|null
     */
    public function getRedeemPossible(): ?bool
    {
        return $this->redeemPossible;
    }
    /**
     * Set redeemPossible value
     * @param bool $redeemPossible
     * @return \Pggns\MidocoApi\Order\StructType\ValidateRedeemVoucherResponse
     */
    public function setRedeemPossible(?bool $redeemPossible = true): self
    {
        // validation for constraint: boolean
        if (!is_null($redeemPossible) && !is_bool($redeemPossible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($redeemPossible, true), gettype($redeemPossible)), __LINE__);
        }
        $this->redeemPossible = $redeemPossible;
        
        return $this;
    }
}
