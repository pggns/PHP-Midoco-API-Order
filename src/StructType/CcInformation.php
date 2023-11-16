<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ccInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: In case there is CCInformation present, the ticket is treated as already paid over BSP
 * @subpackage Structs
 */
class CcInformation extends AbstractStructBase
{
    /**
     * The cc_type
     * Meta information extracted from the WSDL
     * - documentation: Code for used CC card (AX, VI, EC, TP etc.)
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $cc_type = null;
    /**
     * The cc_number
     * Meta information extracted from the WSDL
     * - documentation: The ccNumber which was used
     * @var string|null
     */
    protected ?string $cc_number = null;
    /**
     * The cc_valid
     * Meta information extracted from the WSDL
     * - documentation: month/year, e.g. 02/07
     * @var string|null
     */
    protected ?string $cc_valid = null;
    /**
     * The ccPaidAmount
     * Meta information extracted from the WSDL
     * - documentation: It contains the amount paid with the credit card. This field should be filled only if the amount paid with the credit card is smaller than the ticket's total price. Default, it is the ticket's total price.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ccPaidAmount = null;
    /**
     * Constructor method for ccInformation
     * @uses CcInformation::setCc_type()
     * @uses CcInformation::setCc_number()
     * @uses CcInformation::setCc_valid()
     * @uses CcInformation::setCcPaidAmount()
     * @param string $cc_type
     * @param string $cc_number
     * @param string $cc_valid
     * @param float $ccPaidAmount
     */
    public function __construct(?string $cc_type = null, ?string $cc_number = null, ?string $cc_valid = null, ?float $ccPaidAmount = null)
    {
        $this
            ->setCc_type($cc_type)
            ->setCc_number($cc_number)
            ->setCc_valid($cc_valid)
            ->setCcPaidAmount($ccPaidAmount);
    }
    /**
     * Get cc_type value
     * @return string|null
     */
    public function getCc_type(): ?string
    {
        return $this->cc_type;
    }
    /**
     * Set cc_type value
     * @param string $cc_type
     * @return \Pggns\MidocoApi\Order\StructType\CcInformation
     */
    public function setCc_type(?string $cc_type = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_type) && !is_string($cc_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_type, true), gettype($cc_type)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($cc_type) && mb_strlen((string) $cc_type) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $cc_type)), __LINE__);
        }
        $this->cc_type = $cc_type;
        
        return $this;
    }
    /**
     * Get cc_number value
     * @return string|null
     */
    public function getCc_number(): ?string
    {
        return $this->cc_number;
    }
    /**
     * Set cc_number value
     * @param string $cc_number
     * @return \Pggns\MidocoApi\Order\StructType\CcInformation
     */
    public function setCc_number(?string $cc_number = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_number) && !is_string($cc_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_number, true), gettype($cc_number)), __LINE__);
        }
        $this->cc_number = $cc_number;
        
        return $this;
    }
    /**
     * Get cc_valid value
     * @return string|null
     */
    public function getCc_valid(): ?string
    {
        return $this->cc_valid;
    }
    /**
     * Set cc_valid value
     * @param string $cc_valid
     * @return \Pggns\MidocoApi\Order\StructType\CcInformation
     */
    public function setCc_valid(?string $cc_valid = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_valid) && !is_string($cc_valid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_valid, true), gettype($cc_valid)), __LINE__);
        }
        $this->cc_valid = $cc_valid;
        
        return $this;
    }
    /**
     * Get ccPaidAmount value
     * @return float|null
     */
    public function getCcPaidAmount(): ?float
    {
        return $this->ccPaidAmount;
    }
    /**
     * Set ccPaidAmount value
     * @param float $ccPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\CcInformation
     */
    public function setCcPaidAmount(?float $ccPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ccPaidAmount) && !(is_float($ccPaidAmount) || is_numeric($ccPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ccPaidAmount, true), gettype($ccPaidAmount)), __LINE__);
        }
        $this->ccPaidAmount = $ccPaidAmount;
        
        return $this;
    }
}
