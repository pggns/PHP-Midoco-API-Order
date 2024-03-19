<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PseudoRevenueBookingInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PseudoRevenueBookingInfo extends RevenueBookingInfoType
{
    /**
     * The MidocoPseudoRevenueBookingDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPseudoRevenueBookingDetail
     * @var \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[]
     */
    protected ?array $MidocoPseudoRevenueBookingDetail = null;
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[]
     */
    protected ?array $RevenueBookingInfo = null;
    /**
     * The account
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * Constructor method for PseudoRevenueBookingInfo
     * @uses PseudoRevenueBookingInfo::setMidocoPseudoRevenueBookingDetail()
     * @uses PseudoRevenueBookingInfo::setRevenueBookingInfo()
     * @uses PseudoRevenueBookingInfo::setAccount()
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[] $midocoPseudoRevenueBookingDetail
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     * @param string $account
     */
    public function __construct(?array $midocoPseudoRevenueBookingDetail = null, ?array $revenueBookingInfo = null, ?string $account = null)
    {
        $this
            ->setMidocoPseudoRevenueBookingDetail($midocoPseudoRevenueBookingDetail)
            ->setRevenueBookingInfo($revenueBookingInfo)
            ->setAccount($account);
    }
    /**
     * Get MidocoPseudoRevenueBookingDetail value
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[]
     */
    public function getMidocoPseudoRevenueBookingDetail(): ?array
    {
        return $this->MidocoPseudoRevenueBookingDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPseudoRevenueBookingDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPseudoRevenueBookingDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPseudoRevenueBookingDetailForArrayConstraintFromSetMidocoPseudoRevenueBookingDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pseudoRevenueBookingInfoMidocoPseudoRevenueBookingDetailItem) {
            // validation for constraint: itemType
            if (!$pseudoRevenueBookingInfoMidocoPseudoRevenueBookingDetailItem instanceof \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType) {
                $invalidValues[] = is_object($pseudoRevenueBookingInfoMidocoPseudoRevenueBookingDetailItem) ? get_class($pseudoRevenueBookingInfoMidocoPseudoRevenueBookingDetailItem) : sprintf('%s(%s)', gettype($pseudoRevenueBookingInfoMidocoPseudoRevenueBookingDetailItem), var_export($pseudoRevenueBookingInfoMidocoPseudoRevenueBookingDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPseudoRevenueBookingDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPseudoRevenueBookingDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[] $midocoPseudoRevenueBookingDetail
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo
     */
    public function setMidocoPseudoRevenueBookingDetail(?array $midocoPseudoRevenueBookingDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPseudoRevenueBookingDetailArrayErrorMessage = self::validateMidocoPseudoRevenueBookingDetailForArrayConstraintFromSetMidocoPseudoRevenueBookingDetail($midocoPseudoRevenueBookingDetail))) {
            throw new InvalidArgumentException($midocoPseudoRevenueBookingDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoPseudoRevenueBookingDetail = $midocoPseudoRevenueBookingDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoPseudoRevenueBookingDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType $item
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo
     */
    public function addToMidocoPseudoRevenueBookingDetail(\Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoPseudoRevenueBookingDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPseudoRevenueBookingDetail[] = $item;
        
        return $this;
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[]
     */
    public function getRevenueBookingInfo(): ?array
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRevenueBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRevenueBookingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRevenueBookingInfoForArrayConstraintFromSetRevenueBookingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pseudoRevenueBookingInfoRevenueBookingInfoItem) {
            // validation for constraint: itemType
            if (!$pseudoRevenueBookingInfoRevenueBookingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType) {
                $invalidValues[] = is_object($pseudoRevenueBookingInfoRevenueBookingInfoItem) ? get_class($pseudoRevenueBookingInfoRevenueBookingInfoItem) : sprintf('%s(%s)', gettype($pseudoRevenueBookingInfoRevenueBookingInfoItem), var_export($pseudoRevenueBookingInfoRevenueBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo
     */
    public function setRevenueBookingInfo(?array $revenueBookingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($revenueBookingInfoArrayErrorMessage = self::validateRevenueBookingInfoForArrayConstraintFromSetRevenueBookingInfo($revenueBookingInfo))) {
            throw new InvalidArgumentException($revenueBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
    /**
     * Add item to RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo
     */
    public function addToRevenueBookingInfo(\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType) {
            throw new InvalidArgumentException(sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RevenueBookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
}
