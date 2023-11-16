<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeTypeDTO StructType
 * @subpackage Structs
 */
class FeeTypeDTO extends AbstractStructBase
{
    /**
     * The accountNoTax
     * @var string|null
     */
    protected ?string $accountNoTax = null;
    /**
     * The accountRc
     * @var string|null
     */
    protected ?string $accountRc = null;
    /**
     * The accountTax
     * @var string|null
     */
    protected ?string $accountTax = null;
    /**
     * The allowOnlyNegative
     * @var bool|null
     */
    protected ?bool $allowOnlyNegative = null;
    /**
     * The automaticFee
     * @var bool|null
     */
    protected ?bool $automaticFee = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The constraintOrgunit
     * @var bool|null
     */
    protected ?bool $constraintOrgunit = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The feePercent
     * @var float|null
     */
    protected ?float $feePercent = null;
    /**
     * The feeReductionCode
     * @var string|null
     */
    protected ?string $feeReductionCode = null;
    /**
     * The feeReductionCodeNoVat
     * @var string|null
     */
    protected ?string $feeReductionCodeNoVat = null;
    /**
     * The isBonus
     * @var bool|null
     */
    protected ?bool $isBonus = null;
    /**
     * The isNetto
     * @var bool|null
     */
    protected ?bool $isNetto = null;
    /**
     * The isOrderFee
     * @var bool|null
     */
    protected ?bool $isOrderFee = null;
    /**
     * The isPercentValueRounded
     * @var bool|null
     */
    protected ?bool $isPercentValueRounded = null;
    /**
     * The isVisible
     * @var bool|null
     */
    protected ?bool $isVisible = null;
    /**
     * The minvalue
     * @var float|null
     */
    protected ?float $minvalue = null;
    /**
     * The percentPart
     * @var float|null
     */
    protected ?float $percentPart = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The takeParentVat
     * @var bool|null
     */
    protected ?bool $takeParentVat = null;
    /**
     * The taxHandling
     * @var string|null
     */
    protected ?string $taxHandling = null;
    /**
     * The timeBased
     * @var bool|null
     */
    protected ?bool $timeBased = null;
    /**
     * The value
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The verkCode
     * @var int|null
     */
    protected ?int $verkCode = null;
    /**
     * Constructor method for FeeTypeDTO
     * @uses FeeTypeDTO::setAccountNoTax()
     * @uses FeeTypeDTO::setAccountRc()
     * @uses FeeTypeDTO::setAccountTax()
     * @uses FeeTypeDTO::setAllowOnlyNegative()
     * @uses FeeTypeDTO::setAutomaticFee()
     * @uses FeeTypeDTO::setCode()
     * @uses FeeTypeDTO::setConstraintOrgunit()
     * @uses FeeTypeDTO::setDescription()
     * @uses FeeTypeDTO::setFeePercent()
     * @uses FeeTypeDTO::setFeeReductionCode()
     * @uses FeeTypeDTO::setFeeReductionCodeNoVat()
     * @uses FeeTypeDTO::setIsBonus()
     * @uses FeeTypeDTO::setIsNetto()
     * @uses FeeTypeDTO::setIsOrderFee()
     * @uses FeeTypeDTO::setIsPercentValueRounded()
     * @uses FeeTypeDTO::setIsVisible()
     * @uses FeeTypeDTO::setMinvalue()
     * @uses FeeTypeDTO::setPercentPart()
     * @uses FeeTypeDTO::setSupplierId()
     * @uses FeeTypeDTO::setTakeParentVat()
     * @uses FeeTypeDTO::setTaxHandling()
     * @uses FeeTypeDTO::setTimeBased()
     * @uses FeeTypeDTO::setValue()
     * @uses FeeTypeDTO::setVerkCode()
     * @param string $accountNoTax
     * @param string $accountRc
     * @param string $accountTax
     * @param bool $allowOnlyNegative
     * @param bool $automaticFee
     * @param string $code
     * @param bool $constraintOrgunit
     * @param string $description
     * @param float $feePercent
     * @param string $feeReductionCode
     * @param string $feeReductionCodeNoVat
     * @param bool $isBonus
     * @param bool $isNetto
     * @param bool $isOrderFee
     * @param bool $isPercentValueRounded
     * @param bool $isVisible
     * @param float $minvalue
     * @param float $percentPart
     * @param string $supplierId
     * @param bool $takeParentVat
     * @param string $taxHandling
     * @param bool $timeBased
     * @param float $value
     * @param int $verkCode
     */
    public function __construct(?string $accountNoTax = null, ?string $accountRc = null, ?string $accountTax = null, ?bool $allowOnlyNegative = null, ?bool $automaticFee = null, ?string $code = null, ?bool $constraintOrgunit = null, ?string $description = null, ?float $feePercent = null, ?string $feeReductionCode = null, ?string $feeReductionCodeNoVat = null, ?bool $isBonus = null, ?bool $isNetto = null, ?bool $isOrderFee = null, ?bool $isPercentValueRounded = null, ?bool $isVisible = null, ?float $minvalue = null, ?float $percentPart = null, ?string $supplierId = null, ?bool $takeParentVat = null, ?string $taxHandling = null, ?bool $timeBased = null, ?float $value = null, ?int $verkCode = null)
    {
        $this
            ->setAccountNoTax($accountNoTax)
            ->setAccountRc($accountRc)
            ->setAccountTax($accountTax)
            ->setAllowOnlyNegative($allowOnlyNegative)
            ->setAutomaticFee($automaticFee)
            ->setCode($code)
            ->setConstraintOrgunit($constraintOrgunit)
            ->setDescription($description)
            ->setFeePercent($feePercent)
            ->setFeeReductionCode($feeReductionCode)
            ->setFeeReductionCodeNoVat($feeReductionCodeNoVat)
            ->setIsBonus($isBonus)
            ->setIsNetto($isNetto)
            ->setIsOrderFee($isOrderFee)
            ->setIsPercentValueRounded($isPercentValueRounded)
            ->setIsVisible($isVisible)
            ->setMinvalue($minvalue)
            ->setPercentPart($percentPart)
            ->setSupplierId($supplierId)
            ->setTakeParentVat($takeParentVat)
            ->setTaxHandling($taxHandling)
            ->setTimeBased($timeBased)
            ->setValue($value)
            ->setVerkCode($verkCode);
    }
    /**
     * Get accountNoTax value
     * @return string|null
     */
    public function getAccountNoTax(): ?string
    {
        return $this->accountNoTax;
    }
    /**
     * Set accountNoTax value
     * @param string $accountNoTax
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setAccountNoTax(?string $accountNoTax = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNoTax) && !is_string($accountNoTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNoTax, true), gettype($accountNoTax)), __LINE__);
        }
        $this->accountNoTax = $accountNoTax;
        
        return $this;
    }
    /**
     * Get accountRc value
     * @return string|null
     */
    public function getAccountRc(): ?string
    {
        return $this->accountRc;
    }
    /**
     * Set accountRc value
     * @param string $accountRc
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setAccountRc(?string $accountRc = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRc) && !is_string($accountRc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRc, true), gettype($accountRc)), __LINE__);
        }
        $this->accountRc = $accountRc;
        
        return $this;
    }
    /**
     * Get accountTax value
     * @return string|null
     */
    public function getAccountTax(): ?string
    {
        return $this->accountTax;
    }
    /**
     * Set accountTax value
     * @param string $accountTax
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setAccountTax(?string $accountTax = null): self
    {
        // validation for constraint: string
        if (!is_null($accountTax) && !is_string($accountTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountTax, true), gettype($accountTax)), __LINE__);
        }
        $this->accountTax = $accountTax;
        
        return $this;
    }
    /**
     * Get allowOnlyNegative value
     * @return bool|null
     */
    public function getAllowOnlyNegative(): ?bool
    {
        return $this->allowOnlyNegative;
    }
    /**
     * Set allowOnlyNegative value
     * @param bool $allowOnlyNegative
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setAllowOnlyNegative(?bool $allowOnlyNegative = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowOnlyNegative) && !is_bool($allowOnlyNegative)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowOnlyNegative, true), gettype($allowOnlyNegative)), __LINE__);
        }
        $this->allowOnlyNegative = $allowOnlyNegative;
        
        return $this;
    }
    /**
     * Get automaticFee value
     * @return bool|null
     */
    public function getAutomaticFee(): ?bool
    {
        return $this->automaticFee;
    }
    /**
     * Set automaticFee value
     * @param bool $automaticFee
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setAutomaticFee(?bool $automaticFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticFee) && !is_bool($automaticFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticFee, true), gettype($automaticFee)), __LINE__);
        }
        $this->automaticFee = $automaticFee;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get constraintOrgunit value
     * @return bool|null
     */
    public function getConstraintOrgunit(): ?bool
    {
        return $this->constraintOrgunit;
    }
    /**
     * Set constraintOrgunit value
     * @param bool $constraintOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setConstraintOrgunit(?bool $constraintOrgunit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($constraintOrgunit) && !is_bool($constraintOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($constraintOrgunit, true), gettype($constraintOrgunit)), __LINE__);
        }
        $this->constraintOrgunit = $constraintOrgunit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
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
     * Get feePercent value
     * @return float|null
     */
    public function getFeePercent(): ?float
    {
        return $this->feePercent;
    }
    /**
     * Set feePercent value
     * @param float $feePercent
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setFeePercent(?float $feePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($feePercent) && !(is_float($feePercent) || is_numeric($feePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feePercent, true), gettype($feePercent)), __LINE__);
        }
        $this->feePercent = $feePercent;
        
        return $this;
    }
    /**
     * Get feeReductionCode value
     * @return string|null
     */
    public function getFeeReductionCode(): ?string
    {
        return $this->feeReductionCode;
    }
    /**
     * Set feeReductionCode value
     * @param string $feeReductionCode
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setFeeReductionCode(?string $feeReductionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeReductionCode) && !is_string($feeReductionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeReductionCode, true), gettype($feeReductionCode)), __LINE__);
        }
        $this->feeReductionCode = $feeReductionCode;
        
        return $this;
    }
    /**
     * Get feeReductionCodeNoVat value
     * @return string|null
     */
    public function getFeeReductionCodeNoVat(): ?string
    {
        return $this->feeReductionCodeNoVat;
    }
    /**
     * Set feeReductionCodeNoVat value
     * @param string $feeReductionCodeNoVat
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setFeeReductionCodeNoVat(?string $feeReductionCodeNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($feeReductionCodeNoVat) && !is_string($feeReductionCodeNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeReductionCodeNoVat, true), gettype($feeReductionCodeNoVat)), __LINE__);
        }
        $this->feeReductionCodeNoVat = $feeReductionCodeNoVat;
        
        return $this;
    }
    /**
     * Get isBonus value
     * @return bool|null
     */
    public function getIsBonus(): ?bool
    {
        return $this->isBonus;
    }
    /**
     * Set isBonus value
     * @param bool $isBonus
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setIsBonus(?bool $isBonus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBonus) && !is_bool($isBonus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBonus, true), gettype($isBonus)), __LINE__);
        }
        $this->isBonus = $isBonus;
        
        return $this;
    }
    /**
     * Get isNetto value
     * @return bool|null
     */
    public function getIsNetto(): ?bool
    {
        return $this->isNetto;
    }
    /**
     * Set isNetto value
     * @param bool $isNetto
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setIsNetto(?bool $isNetto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNetto) && !is_bool($isNetto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNetto, true), gettype($isNetto)), __LINE__);
        }
        $this->isNetto = $isNetto;
        
        return $this;
    }
    /**
     * Get isOrderFee value
     * @return bool|null
     */
    public function getIsOrderFee(): ?bool
    {
        return $this->isOrderFee;
    }
    /**
     * Set isOrderFee value
     * @param bool $isOrderFee
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setIsOrderFee(?bool $isOrderFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderFee) && !is_bool($isOrderFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderFee, true), gettype($isOrderFee)), __LINE__);
        }
        $this->isOrderFee = $isOrderFee;
        
        return $this;
    }
    /**
     * Get isPercentValueRounded value
     * @return bool|null
     */
    public function getIsPercentValueRounded(): ?bool
    {
        return $this->isPercentValueRounded;
    }
    /**
     * Set isPercentValueRounded value
     * @param bool $isPercentValueRounded
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setIsPercentValueRounded(?bool $isPercentValueRounded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPercentValueRounded) && !is_bool($isPercentValueRounded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPercentValueRounded, true), gettype($isPercentValueRounded)), __LINE__);
        }
        $this->isPercentValueRounded = $isPercentValueRounded;
        
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setIsVisible(?bool $isVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get minvalue value
     * @return float|null
     */
    public function getMinvalue(): ?float
    {
        return $this->minvalue;
    }
    /**
     * Set minvalue value
     * @param float $minvalue
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setMinvalue(?float $minvalue = null): self
    {
        // validation for constraint: float
        if (!is_null($minvalue) && !(is_float($minvalue) || is_numeric($minvalue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minvalue, true), gettype($minvalue)), __LINE__);
        }
        $this->minvalue = $minvalue;
        
        return $this;
    }
    /**
     * Get percentPart value
     * @return float|null
     */
    public function getPercentPart(): ?float
    {
        return $this->percentPart;
    }
    /**
     * Set percentPart value
     * @param float $percentPart
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setPercentPart(?float $percentPart = null): self
    {
        // validation for constraint: float
        if (!is_null($percentPart) && !(is_float($percentPart) || is_numeric($percentPart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentPart, true), gettype($percentPart)), __LINE__);
        }
        $this->percentPart = $percentPart;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get takeParentVat value
     * @return bool|null
     */
    public function getTakeParentVat(): ?bool
    {
        return $this->takeParentVat;
    }
    /**
     * Set takeParentVat value
     * @param bool $takeParentVat
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setTakeParentVat(?bool $takeParentVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($takeParentVat) && !is_bool($takeParentVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($takeParentVat, true), gettype($takeParentVat)), __LINE__);
        }
        $this->takeParentVat = $takeParentVat;
        
        return $this;
    }
    /**
     * Get taxHandling value
     * @return string|null
     */
    public function getTaxHandling(): ?string
    {
        return $this->taxHandling;
    }
    /**
     * Set taxHandling value
     * @param string $taxHandling
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setTaxHandling(?string $taxHandling = null): self
    {
        // validation for constraint: string
        if (!is_null($taxHandling) && !is_string($taxHandling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxHandling, true), gettype($taxHandling)), __LINE__);
        }
        $this->taxHandling = $taxHandling;
        
        return $this;
    }
    /**
     * Get timeBased value
     * @return bool|null
     */
    public function getTimeBased(): ?bool
    {
        return $this->timeBased;
    }
    /**
     * Set timeBased value
     * @param bool $timeBased
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setTimeBased(?bool $timeBased = null): self
    {
        // validation for constraint: boolean
        if (!is_null($timeBased) && !is_bool($timeBased)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($timeBased, true), gettype($timeBased)), __LINE__);
        }
        $this->timeBased = $timeBased;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get verkCode value
     * @return int|null
     */
    public function getVerkCode(): ?int
    {
        return $this->verkCode;
    }
    /**
     * Set verkCode value
     * @param int $verkCode
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeDTO
     */
    public function setVerkCode(?int $verkCode = null): self
    {
        // validation for constraint: int
        if (!is_null($verkCode) && !(is_int($verkCode) || ctype_digit($verkCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verkCode, true), gettype($verkCode)), __LINE__);
        }
        $this->verkCode = $verkCode;
        
        return $this;
    }
}
