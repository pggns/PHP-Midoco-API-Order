<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatAccountRequest extends AbstractStructBase
{
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * Constructor method for GetVatAccountRequest
     * @uses GetVatAccountRequest::setVatCode()
     * @uses GetVatAccountRequest::setValidDate()
     * @param string $vatCode
     * @param string $validDate
     */
    public function __construct(?string $vatCode = null, ?string $validDate = null)
    {
        $this
            ->setVatCode($vatCode)
            ->setValidDate($validDate);
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\GetVatAccountRequest
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\GetVatAccountRequest
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
}
