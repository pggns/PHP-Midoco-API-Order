<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentProviderSettlement StructType
 * @subpackage Structs
 */
class MidocoPaymentProviderSettlement extends PaymentProviderSettlementDTO
{
    /**
     * The statusChecked
     * @var string|null
     */
    protected ?string $statusChecked = null;
    /**
     * The statusBooked
     * @var string|null
     */
    protected ?string $statusBooked = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * Constructor method for MidocoPaymentProviderSettlement
     * @uses MidocoPaymentProviderSettlement::setStatusChecked()
     * @uses MidocoPaymentProviderSettlement::setStatusBooked()
     * @uses MidocoPaymentProviderSettlement::setChecked()
     * @param string $statusChecked
     * @param string $statusBooked
     * @param bool $checked
     */
    public function __construct(?string $statusChecked = null, ?string $statusBooked = null, ?bool $checked = null)
    {
        $this
            ->setStatusChecked($statusChecked)
            ->setStatusBooked($statusBooked)
            ->setChecked($checked);
    }
    /**
     * Get statusChecked value
     * @return string|null
     */
    public function getStatusChecked(): ?string
    {
        return $this->statusChecked;
    }
    /**
     * Set statusChecked value
     * @param string $statusChecked
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement
     */
    public function setStatusChecked(?string $statusChecked = null): self
    {
        // validation for constraint: string
        if (!is_null($statusChecked) && !is_string($statusChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusChecked, true), gettype($statusChecked)), __LINE__);
        }
        $this->statusChecked = $statusChecked;
        
        return $this;
    }
    /**
     * Get statusBooked value
     * @return string|null
     */
    public function getStatusBooked(): ?string
    {
        return $this->statusBooked;
    }
    /**
     * Set statusBooked value
     * @param string $statusBooked
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement
     */
    public function setStatusBooked(?string $statusBooked = null): self
    {
        // validation for constraint: string
        if (!is_null($statusBooked) && !is_string($statusBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusBooked, true), gettype($statusBooked)), __LINE__);
        }
        $this->statusBooked = $statusBooked;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
}
