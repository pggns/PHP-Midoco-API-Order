<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankLookupDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankLookupDTO extends AbstractStructBase
{
    /**
     * The countryId
     * @var int|null
     */
    protected ?int $countryId = null;
    /**
     * The bankNumber
     * @var string|null
     */
    protected ?string $bankNumber = null;
    /**
     * Constructor method for BankLookupDTO
     * @uses BankLookupDTO::setCountryId()
     * @uses BankLookupDTO::setBankNumber()
     * @param int $countryId
     * @param string $bankNumber
     */
    public function __construct(?int $countryId = null, ?string $bankNumber = null)
    {
        $this
            ->setCountryId($countryId)
            ->setBankNumber($bankNumber);
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $countryId
     * @return \Pggns\MidocoApi\Order\StructType\BankLookupDTO
     */
    public function setCountryId(?int $countryId = null): self
    {
        // validation for constraint: int
        if (!is_null($countryId) && !(is_int($countryId) || ctype_digit($countryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
        return $this;
    }
    /**
     * Get bankNumber value
     * @return string|null
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }
    /**
     * Set bankNumber value
     * @param string $bankNumber
     * @return \Pggns\MidocoApi\Order\StructType\BankLookupDTO
     */
    public function setBankNumber(?string $bankNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNumber) && !is_string($bankNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNumber, true), gettype($bankNumber)), __LINE__);
        }
        $this->bankNumber = $bankNumber;
        
        return $this;
    }
}
