<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPrintInfoResponse StructType
 * @subpackage Structs
 */
class GetBillingPrintInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPrintInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPrintInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo[]
     */
    protected array $MidocoBillingPrintInfo = [];
    /**
     * The allowPartialPayments
     * @var bool|null
     */
    protected ?bool $allowPartialPayments = null;
    /**
     * The reachedTotalOrderInkasso
     * @var bool|null
     */
    protected ?bool $reachedTotalOrderInkasso = null;
    /**
     * The allowCollectiveInvoice
     * @var bool|null
     */
    protected ?bool $allowCollectiveInvoice = null;
    /**
     * Constructor method for GetBillingPrintInfoResponse
     * @uses GetBillingPrintInfoResponse::setMidocoBillingPrintInfo()
     * @uses GetBillingPrintInfoResponse::setAllowPartialPayments()
     * @uses GetBillingPrintInfoResponse::setReachedTotalOrderInkasso()
     * @uses GetBillingPrintInfoResponse::setAllowCollectiveInvoice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo[] $midocoBillingPrintInfo
     * @param bool $allowPartialPayments
     * @param bool $reachedTotalOrderInkasso
     * @param bool $allowCollectiveInvoice
     */
    public function __construct(array $midocoBillingPrintInfo = [], ?bool $allowPartialPayments = null, ?bool $reachedTotalOrderInkasso = null, ?bool $allowCollectiveInvoice = null)
    {
        $this
            ->setMidocoBillingPrintInfo($midocoBillingPrintInfo)
            ->setAllowPartialPayments($allowPartialPayments)
            ->setReachedTotalOrderInkasso($reachedTotalOrderInkasso)
            ->setAllowCollectiveInvoice($allowCollectiveInvoice);
    }
    /**
     * Get MidocoBillingPrintInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo[]
     */
    public function getMidocoBillingPrintInfo(): array
    {
        return $this->MidocoBillingPrintInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPrintInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPrintInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPrintInfoForArrayConstraintsFromSetMidocoBillingPrintInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPrintInfoResponseMidocoBillingPrintInfoItem) {
            // validation for constraint: itemType
            if (!$getBillingPrintInfoResponseMidocoBillingPrintInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo) {
                $invalidValues[] = is_object($getBillingPrintInfoResponseMidocoBillingPrintInfoItem) ? get_class($getBillingPrintInfoResponseMidocoBillingPrintInfoItem) : sprintf('%s(%s)', gettype($getBillingPrintInfoResponseMidocoBillingPrintInfoItem), var_export($getBillingPrintInfoResponseMidocoBillingPrintInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPrintInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPrintInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo[] $midocoBillingPrintInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintInfoResponse
     */
    public function setMidocoBillingPrintInfo(array $midocoBillingPrintInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPrintInfoArrayErrorMessage = self::validateMidocoBillingPrintInfoForArrayConstraintsFromSetMidocoBillingPrintInfo($midocoBillingPrintInfo))) {
            throw new InvalidArgumentException($midocoBillingPrintInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPrintInfo = $midocoBillingPrintInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPrintInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintInfoResponse
     */
    public function addToMidocoBillingPrintInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPrintInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPrintInfo[] = $item;
        
        return $this;
    }
    /**
     * Get allowPartialPayments value
     * @return bool|null
     */
    public function getAllowPartialPayments(): ?bool
    {
        return $this->allowPartialPayments;
    }
    /**
     * Set allowPartialPayments value
     * @param bool $allowPartialPayments
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintInfoResponse
     */
    public function setAllowPartialPayments(?bool $allowPartialPayments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowPartialPayments) && !is_bool($allowPartialPayments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowPartialPayments, true), gettype($allowPartialPayments)), __LINE__);
        }
        $this->allowPartialPayments = $allowPartialPayments;
        
        return $this;
    }
    /**
     * Get reachedTotalOrderInkasso value
     * @return bool|null
     */
    public function getReachedTotalOrderInkasso(): ?bool
    {
        return $this->reachedTotalOrderInkasso;
    }
    /**
     * Set reachedTotalOrderInkasso value
     * @param bool $reachedTotalOrderInkasso
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintInfoResponse
     */
    public function setReachedTotalOrderInkasso(?bool $reachedTotalOrderInkasso = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reachedTotalOrderInkasso) && !is_bool($reachedTotalOrderInkasso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reachedTotalOrderInkasso, true), gettype($reachedTotalOrderInkasso)), __LINE__);
        }
        $this->reachedTotalOrderInkasso = $reachedTotalOrderInkasso;
        
        return $this;
    }
    /**
     * Get allowCollectiveInvoice value
     * @return bool|null
     */
    public function getAllowCollectiveInvoice(): ?bool
    {
        return $this->allowCollectiveInvoice;
    }
    /**
     * Set allowCollectiveInvoice value
     * @param bool $allowCollectiveInvoice
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintInfoResponse
     */
    public function setAllowCollectiveInvoice(?bool $allowCollectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowCollectiveInvoice) && !is_bool($allowCollectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowCollectiveInvoice, true), gettype($allowCollectiveInvoice)), __LINE__);
        }
        $this->allowCollectiveInvoice = $allowCollectiveInvoice;
        
        return $this;
    }
}
