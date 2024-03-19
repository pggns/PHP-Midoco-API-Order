<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IbanBic StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IbanBic extends AbstractStructBase
{
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The bic
     * @var string|null
     */
    protected ?string $bic = null;
    /**
     * Constructor method for IbanBic
     * @uses IbanBic::setIban()
     * @uses IbanBic::setBic()
     * @param string $iban
     * @param string $bic
     */
    public function __construct(?string $iban = null, ?string $bic = null)
    {
        $this
            ->setIban($iban)
            ->setBic($bic);
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Order\StructType\IbanBic
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get bic value
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \Pggns\MidocoApi\Order\StructType\IbanBic
     */
    public function setBic(?string $bic = null): self
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic, true), gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        
        return $this;
    }
}
