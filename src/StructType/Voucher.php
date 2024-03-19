<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for voucher StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Voucher extends AbstractStructBase
{
    /**
     * The voucher_no
     * @var string|null
     */
    protected ?string $voucher_no = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The voucher_type
     * @var string|null
     */
    protected ?string $voucher_type = null;
    /**
     * The security_code
     * @var string|null
     */
    protected ?string $security_code = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The voucherType
     * @var string|null
     */
    protected ?string $voucherType = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * Constructor method for voucher
     * @uses Voucher::setVoucher_no()
     * @uses Voucher::setDescription()
     * @uses Voucher::setVoucher_type()
     * @uses Voucher::setSecurity_code()
     * @uses Voucher::setPrice()
     * @uses Voucher::setCurrency()
     * @uses Voucher::setRemark()
     * @uses Voucher::setVoucherNo()
     * @uses Voucher::setVoucherType()
     * @uses Voucher::setSecurityCode()
     * @param string $voucher_no
     * @param string $description
     * @param string $voucher_type
     * @param string $security_code
     * @param float $price
     * @param string $currency
     * @param string $remark
     * @param string $voucherNo
     * @param string $voucherType
     * @param string $securityCode
     */
    public function __construct(?string $voucher_no = null, ?string $description = null, ?string $voucher_type = null, ?string $security_code = null, ?float $price = null, ?string $currency = null, ?string $remark = null, ?string $voucherNo = null, ?string $voucherType = null, ?string $securityCode = null)
    {
        $this
            ->setVoucher_no($voucher_no)
            ->setDescription($description)
            ->setVoucher_type($voucher_type)
            ->setSecurity_code($security_code)
            ->setPrice($price)
            ->setCurrency($currency)
            ->setRemark($remark)
            ->setVoucherNo($voucherNo)
            ->setVoucherType($voucherType)
            ->setSecurityCode($securityCode);
    }
    /**
     * Get voucher_no value
     * @return string|null
     */
    public function getVoucher_no(): ?string
    {
        return $this->{'voucher-no'};
    }
    /**
     * Set voucher_no value
     * @param string $voucher_no
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setVoucher_no(?string $voucher_no = null): self
    {
        // validation for constraint: string
        if (!is_null($voucher_no) && !is_string($voucher_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucher_no, true), gettype($voucher_no)), __LINE__);
        }
        $this->voucher_no = $this->{'voucher-no'} = $voucher_no;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
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
     * Get voucher_type value
     * @return string|null
     */
    public function getVoucher_type(): ?string
    {
        return $this->{'voucher-type'};
    }
    /**
     * Set voucher_type value
     * @param string $voucher_type
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setVoucher_type(?string $voucher_type = null): self
    {
        // validation for constraint: string
        if (!is_null($voucher_type) && !is_string($voucher_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucher_type, true), gettype($voucher_type)), __LINE__);
        }
        $this->voucher_type = $this->{'voucher-type'} = $voucher_type;
        
        return $this;
    }
    /**
     * Get security_code value
     * @return string|null
     */
    public function getSecurity_code(): ?string
    {
        return $this->{'security-code'};
    }
    /**
     * Set security_code value
     * @param string $security_code
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setSecurity_code(?string $security_code = null): self
    {
        // validation for constraint: string
        if (!is_null($security_code) && !is_string($security_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($security_code, true), gettype($security_code)), __LINE__);
        }
        $this->security_code = $this->{'security-code'} = $security_code;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
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
     * Get voucherType value
     * @return string|null
     */
    public function getVoucherType(): ?string
    {
        return $this->voucherType;
    }
    /**
     * Set voucherType value
     * @param string $voucherType
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setVoucherType(?string $voucherType = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherType) && !is_string($voucherType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherType, true), gettype($voucherType)), __LINE__);
        }
        $this->voucherType = $voucherType;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $securityCode
     * @return \Pggns\MidocoApi\Order\StructType\Voucher
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
        return $this;
    }
}
