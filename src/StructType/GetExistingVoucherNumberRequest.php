<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExistingVoucherNumberRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Searches for voucher by a its voucherNo. If there is no voucherNo in request, it searches for all vouchers. (voucherlisting)
 * @subpackage Structs
 */
class GetExistingVoucherNumberRequest extends AbstractStructBase
{
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The voucherType
     * Meta information extracted from the WSDL
     * - documentation: VoucherType is required if the orgunit uses multiple voucher implementations (Midoco Voucher, Incert,etc). This attribute shall always be used to recognized the actual implementation!
     * @var string|null
     */
    protected ?string $voucherType = null;
    /**
     * The dateFrom
     * @var string|null
     */
    protected ?string $dateFrom = null;
    /**
     * The dateUntil
     * @var string|null
     */
    protected ?string $dateUntil = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * The sellitemId
     * @var int|null
     */
    protected ?int $sellitemId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The showWithZeroPrice
     * Meta information extracted from the WSDL
     * - documentation: Gets also voucher with zero prices for voucherlisting. (MidocoVoucher only)
     * @var bool|null
     */
    protected ?bool $showWithZeroPrice = null;
    /**
     * The extendedInfo
     * Meta information extracted from the WSDL
     * - documentation: Gets additional information (sell_item_id,etc) about the vouchers for voucherlisting. Flag is used to reduce db load. (MidocoVoucher only)
     * @var bool|null
     */
    protected ?bool $extendedInfo = null;
    /**
     * The voucherTypeId
     * Meta information extracted from the WSDL
     * - documentation: Shows vouchers with specific voucherTypes for voucherlisting (MidocoVoucher only)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $voucherTypeId = [];
    /**
     * Constructor method for GetExistingVoucherNumberRequest
     * @uses GetExistingVoucherNumberRequest::setVoucherNo()
     * @uses GetExistingVoucherNumberRequest::setVoucherType()
     * @uses GetExistingVoucherNumberRequest::setDateFrom()
     * @uses GetExistingVoucherNumberRequest::setDateUntil()
     * @uses GetExistingVoucherNumberRequest::setSecurityCode()
     * @uses GetExistingVoucherNumberRequest::setSellitemId()
     * @uses GetExistingVoucherNumberRequest::setUnitName()
     * @uses GetExistingVoucherNumberRequest::setShowWithZeroPrice()
     * @uses GetExistingVoucherNumberRequest::setExtendedInfo()
     * @uses GetExistingVoucherNumberRequest::setVoucherTypeId()
     * @param string $voucherNo
     * @param string $voucherType
     * @param string $dateFrom
     * @param string $dateUntil
     * @param string $securityCode
     * @param int $sellitemId
     * @param string $unitName
     * @param bool $showWithZeroPrice
     * @param bool $extendedInfo
     * @param string[] $voucherTypeId
     */
    public function __construct(?string $voucherNo = null, ?string $voucherType = null, ?string $dateFrom = null, ?string $dateUntil = null, ?string $securityCode = null, ?int $sellitemId = null, ?string $unitName = null, ?bool $showWithZeroPrice = null, ?bool $extendedInfo = null, array $voucherTypeId = [])
    {
        $this
            ->setVoucherNo($voucherNo)
            ->setVoucherType($voucherType)
            ->setDateFrom($dateFrom)
            ->setDateUntil($dateUntil)
            ->setSecurityCode($securityCode)
            ->setSellitemId($sellitemId)
            ->setUnitName($unitName)
            ->setShowWithZeroPrice($showWithZeroPrice)
            ->setExtendedInfo($extendedInfo)
            ->setVoucherTypeId($voucherTypeId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
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
     * Get dateFrom value
     * @return string|null
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }
    /**
     * Set dateFrom value
     * @param string $dateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setDateFrom(?string $dateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFrom, true), gettype($dateFrom)), __LINE__);
        }
        $this->dateFrom = $dateFrom;
        
        return $this;
    }
    /**
     * Get dateUntil value
     * @return string|null
     */
    public function getDateUntil(): ?string
    {
        return $this->dateUntil;
    }
    /**
     * Set dateUntil value
     * @param string $dateUntil
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setDateUntil(?string $dateUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($dateUntil) && !is_string($dateUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateUntil, true), gettype($dateUntil)), __LINE__);
        }
        $this->dateUntil = $dateUntil;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
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
    /**
     * Get sellitemId value
     * @return int|null
     */
    public function getSellitemId(): ?int
    {
        return $this->sellitemId;
    }
    /**
     * Set sellitemId value
     * @param int $sellitemId
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setSellitemId(?int $sellitemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellitemId) && !(is_int($sellitemId) || ctype_digit($sellitemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellitemId, true), gettype($sellitemId)), __LINE__);
        }
        $this->sellitemId = $sellitemId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get showWithZeroPrice value
     * @return bool|null
     */
    public function getShowWithZeroPrice(): ?bool
    {
        return $this->showWithZeroPrice;
    }
    /**
     * Set showWithZeroPrice value
     * @param bool $showWithZeroPrice
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setShowWithZeroPrice(?bool $showWithZeroPrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showWithZeroPrice) && !is_bool($showWithZeroPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showWithZeroPrice, true), gettype($showWithZeroPrice)), __LINE__);
        }
        $this->showWithZeroPrice = $showWithZeroPrice;
        
        return $this;
    }
    /**
     * Get extendedInfo value
     * @return bool|null
     */
    public function getExtendedInfo(): ?bool
    {
        return $this->extendedInfo;
    }
    /**
     * Set extendedInfo value
     * @param bool $extendedInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setExtendedInfo(?bool $extendedInfo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($extendedInfo) && !is_bool($extendedInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extendedInfo, true), gettype($extendedInfo)), __LINE__);
        }
        $this->extendedInfo = $extendedInfo;
        
        return $this;
    }
    /**
     * Get voucherTypeId value
     * @return string[]
     */
    public function getVoucherTypeId(): array
    {
        return $this->voucherTypeId;
    }
    /**
     * This method is responsible for validating the values passed to the setVoucherTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoucherTypeId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoucherTypeIdForArrayConstraintsFromSetVoucherTypeId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExistingVoucherNumberRequestVoucherTypeIdItem) {
            // validation for constraint: itemType
            if (!is_string($getExistingVoucherNumberRequestVoucherTypeIdItem)) {
                $invalidValues[] = is_object($getExistingVoucherNumberRequestVoucherTypeIdItem) ? get_class($getExistingVoucherNumberRequestVoucherTypeIdItem) : sprintf('%s(%s)', gettype($getExistingVoucherNumberRequestVoucherTypeIdItem), var_export($getExistingVoucherNumberRequestVoucherTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The voucherTypeId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set voucherTypeId value
     * @throws InvalidArgumentException
     * @param string[] $voucherTypeId
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setVoucherTypeId(array $voucherTypeId = []): self
    {
        // validation for constraint: array
        if ('' !== ($voucherTypeIdArrayErrorMessage = self::validateVoucherTypeIdForArrayConstraintsFromSetVoucherTypeId($voucherTypeId))) {
            throw new InvalidArgumentException($voucherTypeIdArrayErrorMessage, __LINE__);
        }
        $this->voucherTypeId = $voucherTypeId;
        
        return $this;
    }
    /**
     * Add item to voucherTypeId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function addToVoucherTypeId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The voucherTypeId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->voucherTypeId[] = $item;
        
        return $this;
    }
}
