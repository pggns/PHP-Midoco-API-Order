<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentAccrualForCreditorRequest StructType
 * @subpackage Structs
 */
class GetPaymentAccrualForCreditorRequest extends AbstractStructBase
{
    /**
     * The PaymentAccrualSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: PaymentAccrualSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria $PaymentAccrualSearchCriteria = null;
    /**
     * The MidocoOrderByInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoOrderByInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[]
     */
    protected array $MidocoOrderByInfo = [];
    /**
     * The beginIndex
     * @var int|null
     */
    protected ?int $beginIndex = null;
    /**
     * The endIndex
     * @var int|null
     */
    protected ?int $endIndex = null;
    /**
     * Constructor method for GetPaymentAccrualForCreditorRequest
     * @uses GetPaymentAccrualForCreditorRequest::setPaymentAccrualSearchCriteria()
     * @uses GetPaymentAccrualForCreditorRequest::setMidocoOrderByInfo()
     * @uses GetPaymentAccrualForCreditorRequest::setBeginIndex()
     * @uses GetPaymentAccrualForCreditorRequest::setEndIndex()
     * @param \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria $paymentAccrualSearchCriteria
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[] $midocoOrderByInfo
     * @param int $beginIndex
     * @param int $endIndex
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria $paymentAccrualSearchCriteria = null, array $midocoOrderByInfo = [], ?int $beginIndex = null, ?int $endIndex = null)
    {
        $this
            ->setPaymentAccrualSearchCriteria($paymentAccrualSearchCriteria)
            ->setMidocoOrderByInfo($midocoOrderByInfo)
            ->setBeginIndex($beginIndex)
            ->setEndIndex($endIndex);
    }
    /**
     * Get PaymentAccrualSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria|null
     */
    public function getPaymentAccrualSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria
    {
        return $this->PaymentAccrualSearchCriteria;
    }
    /**
     * Set PaymentAccrualSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria $paymentAccrualSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorRequest
     */
    public function setPaymentAccrualSearchCriteria(?\Pggns\MidocoApi\Order\StructType\PaymentAccrualSearchCriteria $paymentAccrualSearchCriteria = null): self
    {
        $this->PaymentAccrualSearchCriteria = $paymentAccrualSearchCriteria;
        
        return $this;
    }
    /**
     * Get MidocoOrderByInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[]
     */
    public function getMidocoOrderByInfo(): array
    {
        return $this->MidocoOrderByInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderByInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderByInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderByInfoForArrayConstraintsFromSetMidocoOrderByInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPaymentAccrualForCreditorRequestMidocoOrderByInfoItem) {
            // validation for constraint: itemType
            if (!$getPaymentAccrualForCreditorRequestMidocoOrderByInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo) {
                $invalidValues[] = is_object($getPaymentAccrualForCreditorRequestMidocoOrderByInfoItem) ? get_class($getPaymentAccrualForCreditorRequestMidocoOrderByInfoItem) : sprintf('%s(%s)', gettype($getPaymentAccrualForCreditorRequestMidocoOrderByInfoItem), var_export($getPaymentAccrualForCreditorRequestMidocoOrderByInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderByInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderByInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[] $midocoOrderByInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorRequest
     */
    public function setMidocoOrderByInfo(array $midocoOrderByInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderByInfoArrayErrorMessage = self::validateMidocoOrderByInfoForArrayConstraintsFromSetMidocoOrderByInfo($midocoOrderByInfo))) {
            throw new InvalidArgumentException($midocoOrderByInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderByInfo = $midocoOrderByInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderByInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorRequest
     */
    public function addToMidocoOrderByInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderByInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderByInfo[] = $item;
        
        return $this;
    }
    /**
     * Get beginIndex value
     * @return int|null
     */
    public function getBeginIndex(): ?int
    {
        return $this->beginIndex;
    }
    /**
     * Set beginIndex value
     * @param int $beginIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorRequest
     */
    public function setBeginIndex(?int $beginIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($beginIndex) && !(is_int($beginIndex) || ctype_digit($beginIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($beginIndex, true), gettype($beginIndex)), __LINE__);
        }
        $this->beginIndex = $beginIndex;
        
        return $this;
    }
    /**
     * Get endIndex value
     * @return int|null
     */
    public function getEndIndex(): ?int
    {
        return $this->endIndex;
    }
    /**
     * Set endIndex value
     * @param int $endIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorRequest
     */
    public function setEndIndex(?int $endIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($endIndex) && !(is_int($endIndex) || ctype_digit($endIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endIndex, true), gettype($endIndex)), __LINE__);
        }
        $this->endIndex = $endIndex;
        
        return $this;
    }
}
