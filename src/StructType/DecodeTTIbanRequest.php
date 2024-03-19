<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DecodeTTIbanRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DecodeTTIbanRequest extends AbstractStructBase
{
    /**
     * The iban
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * Constructor method for DecodeTTIbanRequest
     * @uses DecodeTTIbanRequest::setIban()
     * @param string $iban
     */
    public function __construct(?string $iban = null)
    {
        $this
            ->setIban($iban);
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
     * @return \Pggns\MidocoApi\Order\StructType\DecodeTTIbanRequest
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
}
