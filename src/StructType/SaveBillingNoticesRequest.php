<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingNoticesRequest StructType
 * @subpackage Structs
 */
class SaveBillingNoticesRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoBillingNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice[]
     */
    protected array $MidocoBillingNotice = [];
    /**
     * The manuallyCreatedTask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveBillingNoticesRequest
     * @uses SaveBillingNoticesRequest::setMidocoBillingNotice()
     * @uses SaveBillingNoticesRequest::setManuallyCreatedTask()
     * @uses SaveBillingNoticesRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice[] $midocoBillingNotice
     * @param bool $manuallyCreatedTask
     * @param int $internalVersion
     */
    public function __construct(array $midocoBillingNotice = [], ?bool $manuallyCreatedTask = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoBillingNotice($midocoBillingNotice)
            ->setManuallyCreatedTask($manuallyCreatedTask)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoBillingNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice[]
     */
    public function getMidocoBillingNotice(): array
    {
        return $this->MidocoBillingNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingNoticeForArrayConstraintsFromSetMidocoBillingNotice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveBillingNoticesRequestMidocoBillingNoticeItem) {
            // validation for constraint: itemType
            if (!$saveBillingNoticesRequestMidocoBillingNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice) {
                $invalidValues[] = is_object($saveBillingNoticesRequestMidocoBillingNoticeItem) ? get_class($saveBillingNoticesRequestMidocoBillingNoticeItem) : sprintf('%s(%s)', gettype($saveBillingNoticesRequestMidocoBillingNoticeItem), var_export($saveBillingNoticesRequestMidocoBillingNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice[] $midocoBillingNotice
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingNoticesRequest
     */
    public function setMidocoBillingNotice(array $midocoBillingNotice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingNoticeArrayErrorMessage = self::validateMidocoBillingNoticeForArrayConstraintsFromSetMidocoBillingNotice($midocoBillingNotice))) {
            throw new InvalidArgumentException($midocoBillingNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingNotice = $midocoBillingNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingNoticesRequest
     */
    public function addToMidocoBillingNotice(\Pggns\MidocoApi\Order\StructType\MidocoBillingNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingNotice[] = $item;
        
        return $this;
    }
    /**
     * Get manuallyCreatedTask value
     * @return bool|null
     */
    public function getManuallyCreatedTask(): ?bool
    {
        return $this->manuallyCreatedTask;
    }
    /**
     * Set manuallyCreatedTask value
     * @param bool $manuallyCreatedTask
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingNoticesRequest
     */
    public function setManuallyCreatedTask(?bool $manuallyCreatedTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyCreatedTask) && !is_bool($manuallyCreatedTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyCreatedTask, true), gettype($manuallyCreatedTask)), __LINE__);
        }
        $this->manuallyCreatedTask = $manuallyCreatedTask;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingNoticesRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
