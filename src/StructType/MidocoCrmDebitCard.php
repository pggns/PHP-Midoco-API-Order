<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmDebitCard StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmDebitCard extends CrmDebitCardDTO
{
    /**
     * The forcedPaymentCard
     * Meta information extracted from the WSDL
     * - documentation: forced payment card in customer Settings
     * @var bool|null
     */
    protected ?bool $forcedPaymentCard = null;
    /**
     * Constructor method for MidocoCrmDebitCard
     * @uses MidocoCrmDebitCard::setForcedPaymentCard()
     * @param bool $forcedPaymentCard
     */
    public function __construct(?bool $forcedPaymentCard = null)
    {
        $this
            ->setForcedPaymentCard($forcedPaymentCard);
    }
    /**
     * Get forcedPaymentCard value
     * @return bool|null
     */
    public function getForcedPaymentCard(): ?bool
    {
        return $this->forcedPaymentCard;
    }
    /**
     * Set forcedPaymentCard value
     * @param bool $forcedPaymentCard
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard
     */
    public function setForcedPaymentCard(?bool $forcedPaymentCard = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forcedPaymentCard) && !is_bool($forcedPaymentCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forcedPaymentCard, true), gettype($forcedPaymentCard)), __LINE__);
        }
        $this->forcedPaymentCard = $forcedPaymentCard;
        
        return $this;
    }
}
