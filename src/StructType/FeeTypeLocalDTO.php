<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeTypeLocalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FeeTypeLocalDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The feeTypeCode
     * @var string|null
     */
    protected ?string $feeTypeCode = null;
    /**
     * The localization
     * @var string|null
     */
    protected ?string $localization = null;
    /**
     * Constructor method for FeeTypeLocalDTO
     * @uses FeeTypeLocalDTO::setCultureId()
     * @uses FeeTypeLocalDTO::setFeeTypeCode()
     * @uses FeeTypeLocalDTO::setLocalization()
     * @param string $cultureId
     * @param string $feeTypeCode
     * @param string $localization
     */
    public function __construct(?string $cultureId = null, ?string $feeTypeCode = null, ?string $localization = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setFeeTypeCode($feeTypeCode)
            ->setLocalization($localization);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get feeTypeCode value
     * @return string|null
     */
    public function getFeeTypeCode(): ?string
    {
        return $this->feeTypeCode;
    }
    /**
     * Set feeTypeCode value
     * @param string $feeTypeCode
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO
     */
    public function setFeeTypeCode(?string $feeTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeTypeCode) && !is_string($feeTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeTypeCode, true), gettype($feeTypeCode)), __LINE__);
        }
        $this->feeTypeCode = $feeTypeCode;
        
        return $this;
    }
    /**
     * Get localization value
     * @return string|null
     */
    public function getLocalization(): ?string
    {
        return $this->localization;
    }
    /**
     * Set localization value
     * @param string $localization
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO
     */
    public function setLocalization(?string $localization = null): self
    {
        // validation for constraint: string
        if (!is_null($localization) && !is_string($localization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localization, true), gettype($localization)), __LINE__);
        }
        $this->localization = $localization;
        
        return $this;
    }
}
