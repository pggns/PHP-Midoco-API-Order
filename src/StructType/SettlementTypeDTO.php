<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SettlementTypeDTO StructType
 * @subpackage Structs
 */
class SettlementTypeDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The hidden
     * @var bool|null
     */
    protected ?bool $hidden = null;
    /**
     * The isCredit
     * @var bool|null
     */
    protected ?bool $isCredit = null;
    /**
     * The isDebit
     * @var bool|null
     */
    protected ?bool $isDebit = null;
    /**
     * The isOwnCc
     * @var bool|null
     */
    protected ?bool $isOwnCc = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The valutaImmediately
     * @var bool|null
     */
    protected ?bool $valutaImmediately = null;
    /**
     * Constructor method for SettlementTypeDTO
     * @uses SettlementTypeDTO::setDescription()
     * @uses SettlementTypeDTO::setHidden()
     * @uses SettlementTypeDTO::setIsCredit()
     * @uses SettlementTypeDTO::setIsDebit()
     * @uses SettlementTypeDTO::setIsOwnCc()
     * @uses SettlementTypeDTO::setSettlementType()
     * @uses SettlementTypeDTO::setValutaImmediately()
     * @param string $description
     * @param bool $hidden
     * @param bool $isCredit
     * @param bool $isDebit
     * @param bool $isOwnCc
     * @param string $settlementType
     * @param bool $valutaImmediately
     */
    public function __construct(?string $description = null, ?bool $hidden = null, ?bool $isCredit = null, ?bool $isDebit = null, ?bool $isOwnCc = null, ?string $settlementType = null, ?bool $valutaImmediately = null)
    {
        $this
            ->setDescription($description)
            ->setHidden($hidden)
            ->setIsCredit($isCredit)
            ->setIsDebit($isDebit)
            ->setIsOwnCc($isOwnCc)
            ->setSettlementType($settlementType)
            ->setValutaImmediately($valutaImmediately);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SettlementTypeDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get hidden value
     * @return bool|null
     */
    public function getHidden(): ?bool
    {
        return $this->hidden;
    }
    /**
     * Set hidden value
     * @param bool $hidden
     * @return \Pggns\MidocoApi\Order\StructType\SettlementTypeDTO
     */
    public function setHidden(?bool $hidden = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hidden) && !is_bool($hidden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hidden, true), gettype($hidden)), __LINE__);
        }
        $this->hidden = $hidden;
        
        return $this;
    }
    /**
     * Get isCredit value
     * @return bool|null
     */
    public function getIsCredit(): ?bool
    {
        return $this->isCredit;
    }
    /**
     * Set isCredit value
     * @param bool $isCredit
     * @return \Pggns\MidocoApi\Order\StructType\SettlementTypeDTO
     */
    public function setIsCredit(?bool $isCredit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCredit) && !is_bool($isCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCredit, true), gettype($isCredit)), __LINE__);
        }
        $this->isCredit = $isCredit;
        
        return $this;
    }
    /**
     * Get isDebit value
     * @return bool|null
     */
    public function getIsDebit(): ?bool
    {
        return $this->isDebit;
    }
    /**
     * Set isDebit value
     * @param bool $isDebit
     * @return \Pggns\MidocoApi\Order\StructType\SettlementTypeDTO
     */
    public function setIsDebit(?bool $isDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDebit) && !is_bool($isDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDebit, true), gettype($isDebit)), __LINE__);
        }
        $this->isDebit = $isDebit;
        
        return $this;
    }
    /**
     * Get isOwnCc value
     * @return bool|null
     */
    public function getIsOwnCc(): ?bool
    {
        return $this->isOwnCc;
    }
    /**
     * Set isOwnCc value
     * @param bool $isOwnCc
     * @return \Pggns\MidocoApi\Order\StructType\SettlementTypeDTO
     */
    public function setIsOwnCc(?bool $isOwnCc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwnCc) && !is_bool($isOwnCc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwnCc, true), gettype($isOwnCc)), __LINE__);
        }
        $this->isOwnCc = $isOwnCc;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\SettlementTypeDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get valutaImmediately value
     * @return bool|null
     */
    public function getValutaImmediately(): ?bool
    {
        return $this->valutaImmediately;
    }
    /**
     * Set valutaImmediately value
     * @param bool $valutaImmediately
     * @return \Pggns\MidocoApi\Order\StructType\SettlementTypeDTO
     */
    public function setValutaImmediately(?bool $valutaImmediately = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valutaImmediately) && !is_bool($valutaImmediately)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valutaImmediately, true), gettype($valutaImmediately)), __LINE__);
        }
        $this->valutaImmediately = $valutaImmediately;
        
        return $this;
    }
}
