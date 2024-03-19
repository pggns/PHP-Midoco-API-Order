<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteChooseOnlinePaymentAdapterRuleResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteChooseOnlinePaymentAdapterRuleResponse extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * Constructor method for ExecuteChooseOnlinePaymentAdapterRuleResponse
     * @uses ExecuteChooseOnlinePaymentAdapterRuleResponse::setAdapterId()
     * @param string $adapterId
     */
    public function __construct(?string $adapterId = null)
    {
        $this
            ->setAdapterId($adapterId);
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteChooseOnlinePaymentAdapterRuleResponse
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
}
