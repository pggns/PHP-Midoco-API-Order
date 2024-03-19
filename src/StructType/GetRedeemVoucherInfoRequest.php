<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRedeemVoucherInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRedeemVoucherInfoRequest extends AbstractStructBase
{
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The voucherTypeId
     * @var string|null
     */
    protected ?string $voucherTypeId = null;
    /**
     * The voucherValue
     * @var float|null
     */
    protected ?float $voucherValue = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for GetRedeemVoucherInfoRequest
     * @uses GetRedeemVoucherInfoRequest::setVoucherNo()
     * @uses GetRedeemVoucherInfoRequest::setVoucherTypeId()
     * @uses GetRedeemVoucherInfoRequest::setVoucherValue()
     * @uses GetRedeemVoucherInfoRequest::setItemId()
     * @param string $voucherNo
     * @param string $voucherTypeId
     * @param float $voucherValue
     * @param int $itemId
     */
    public function __construct(?string $voucherNo = null, ?string $voucherTypeId = null, ?float $voucherValue = null, ?int $itemId = null)
    {
        $this
            ->setVoucherNo($voucherNo)
            ->setVoucherTypeId($voucherTypeId)
            ->setVoucherValue($voucherValue)
            ->setItemId($itemId);
    }
    /**
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoRequest
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
    /**
     * Get voucherTypeId value
     * @return string|null
     */
    public function getVoucherTypeId(): ?string
    {
        return $this->voucherTypeId;
    }
    /**
     * Set voucherTypeId value
     * @param string $voucherTypeId
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoRequest
     */
    public function setVoucherTypeId(?string $voucherTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherTypeId) && !is_string($voucherTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherTypeId, true), gettype($voucherTypeId)), __LINE__);
        }
        $this->voucherTypeId = $voucherTypeId;
        
        return $this;
    }
    /**
     * Get voucherValue value
     * @return float|null
     */
    public function getVoucherValue(): ?float
    {
        return $this->voucherValue;
    }
    /**
     * Set voucherValue value
     * @param float $voucherValue
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoRequest
     */
    public function setVoucherValue(?float $voucherValue = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherValue) && !(is_float($voucherValue) || is_numeric($voucherValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherValue, true), gettype($voucherValue)), __LINE__);
        }
        $this->voucherValue = $voucherValue;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
}
