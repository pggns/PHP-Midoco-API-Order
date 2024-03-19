<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencySettlementProcess StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencySettlementProcess extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The isPrinting
     * @var bool|null
     */
    protected ?bool $isPrinting = null;
    /**
     * The isMailing
     * @var bool|null
     */
    protected ?bool $isMailing = null;
    /**
     * The orders
     * @var int|null
     */
    protected ?int $orders = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The containsStorno
     * @var bool|null
     */
    protected ?bool $containsStorno = null;
    /**
     * Constructor method for MidocoAgencySettlementProcess
     * @uses MidocoAgencySettlementProcess::setAgencyId()
     * @uses MidocoAgencySettlementProcess::setIsPrinting()
     * @uses MidocoAgencySettlementProcess::setIsMailing()
     * @uses MidocoAgencySettlementProcess::setOrders()
     * @uses MidocoAgencySettlementProcess::setSettlementId()
     * @uses MidocoAgencySettlementProcess::setContainsStorno()
     * @param string $agencyId
     * @param bool $isPrinting
     * @param bool $isMailing
     * @param int $orders
     * @param int $settlementId
     * @param bool $containsStorno
     */
    public function __construct(?string $agencyId = null, ?bool $isPrinting = null, ?bool $isMailing = null, ?int $orders = null, ?int $settlementId = null, ?bool $containsStorno = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setIsPrinting($isPrinting)
            ->setIsMailing($isMailing)
            ->setOrders($orders)
            ->setSettlementId($settlementId)
            ->setContainsStorno($containsStorno);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementProcess
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get isPrinting value
     * @return bool|null
     */
    public function getIsPrinting(): ?bool
    {
        return $this->isPrinting;
    }
    /**
     * Set isPrinting value
     * @param bool $isPrinting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementProcess
     */
    public function setIsPrinting(?bool $isPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrinting) && !is_bool($isPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrinting, true), gettype($isPrinting)), __LINE__);
        }
        $this->isPrinting = $isPrinting;
        
        return $this;
    }
    /**
     * Get isMailing value
     * @return bool|null
     */
    public function getIsMailing(): ?bool
    {
        return $this->isMailing;
    }
    /**
     * Set isMailing value
     * @param bool $isMailing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementProcess
     */
    public function setIsMailing(?bool $isMailing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMailing) && !is_bool($isMailing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMailing, true), gettype($isMailing)), __LINE__);
        }
        $this->isMailing = $isMailing;
        
        return $this;
    }
    /**
     * Get orders value
     * @return int|null
     */
    public function getOrders(): ?int
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param int $orders
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementProcess
     */
    public function setOrders(?int $orders = null): self
    {
        // validation for constraint: int
        if (!is_null($orders) && !(is_int($orders) || ctype_digit($orders))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orders, true), gettype($orders)), __LINE__);
        }
        $this->orders = $orders;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementProcess
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get containsStorno value
     * @return bool|null
     */
    public function getContainsStorno(): ?bool
    {
        return $this->containsStorno;
    }
    /**
     * Set containsStorno value
     * @param bool $containsStorno
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementProcess
     */
    public function setContainsStorno(?bool $containsStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($containsStorno) && !is_bool($containsStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containsStorno, true), gettype($containsStorno)), __LINE__);
        }
        $this->containsStorno = $containsStorno;
        
        return $this;
    }
}
