<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingNoticesResponse StructType
 * @subpackage Structs
 */
class GetBillingNoticesResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice[]
     */
    protected array $MidocoBillingNotice = [];
    /**
     * The sortOrder
     * @var string|null
     */
    protected ?string $sortOrder = null;
    /**
     * The orgunitName
     * @var string|null
     */
    protected ?string $orgunitName = null;
    /**
     * The selection
     * @var string|null
     */
    protected ?string $selection = null;
    /**
     * The fromFinishTimestamp
     * @var string|null
     */
    protected ?string $fromFinishTimestamp = null;
    /**
     * The untilFinishTimestamp
     * @var string|null
     */
    protected ?string $untilFinishTimestamp = null;
    /**
     * The fromCreationTimestamp
     * @var string|null
     */
    protected ?string $fromCreationTimestamp = null;
    /**
     * The untilCreationTimestamp
     * @var string|null
     */
    protected ?string $untilCreationTimestamp = null;
    /**
     * The notice
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The finishUser
     * @var int|null
     */
    protected ?int $finishUser = null;
    /**
     * Constructor method for GetBillingNoticesResponse
     * @uses GetBillingNoticesResponse::setMidocoBillingNotice()
     * @uses GetBillingNoticesResponse::setSortOrder()
     * @uses GetBillingNoticesResponse::setOrgunitName()
     * @uses GetBillingNoticesResponse::setSelection()
     * @uses GetBillingNoticesResponse::setFromFinishTimestamp()
     * @uses GetBillingNoticesResponse::setUntilFinishTimestamp()
     * @uses GetBillingNoticesResponse::setFromCreationTimestamp()
     * @uses GetBillingNoticesResponse::setUntilCreationTimestamp()
     * @uses GetBillingNoticesResponse::setNotice()
     * @uses GetBillingNoticesResponse::setTaskType()
     * @uses GetBillingNoticesResponse::setFinishUser()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice[] $midocoBillingNotice
     * @param string $sortOrder
     * @param string $orgunitName
     * @param string $selection
     * @param string $fromFinishTimestamp
     * @param string $untilFinishTimestamp
     * @param string $fromCreationTimestamp
     * @param string $untilCreationTimestamp
     * @param string $notice
     * @param string $taskType
     * @param int $finishUser
     */
    public function __construct(array $midocoBillingNotice = [], ?string $sortOrder = null, ?string $orgunitName = null, ?string $selection = null, ?string $fromFinishTimestamp = null, ?string $untilFinishTimestamp = null, ?string $fromCreationTimestamp = null, ?string $untilCreationTimestamp = null, ?string $notice = null, ?string $taskType = null, ?int $finishUser = null)
    {
        $this
            ->setMidocoBillingNotice($midocoBillingNotice)
            ->setSortOrder($sortOrder)
            ->setOrgunitName($orgunitName)
            ->setSelection($selection)
            ->setFromFinishTimestamp($fromFinishTimestamp)
            ->setUntilFinishTimestamp($untilFinishTimestamp)
            ->setFromCreationTimestamp($fromCreationTimestamp)
            ->setUntilCreationTimestamp($untilCreationTimestamp)
            ->setNotice($notice)
            ->setTaskType($taskType)
            ->setFinishUser($finishUser);
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
        foreach ($values as $getBillingNoticesResponseMidocoBillingNoticeItem) {
            // validation for constraint: itemType
            if (!$getBillingNoticesResponseMidocoBillingNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingNotice) {
                $invalidValues[] = is_object($getBillingNoticesResponseMidocoBillingNoticeItem) ? get_class($getBillingNoticesResponseMidocoBillingNoticeItem) : sprintf('%s(%s)', gettype($getBillingNoticesResponseMidocoBillingNoticeItem), var_export($getBillingNoticesResponseMidocoBillingNoticeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
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
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param string $sortOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        
        return $this;
    }
    /**
     * Get orgunitName value
     * @return string|null
     */
    public function getOrgunitName(): ?string
    {
        return $this->orgunitName;
    }
    /**
     * Set orgunitName value
     * @param string $orgunitName
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setOrgunitName(?string $orgunitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitName) && !is_string($orgunitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitName, true), gettype($orgunitName)), __LINE__);
        }
        $this->orgunitName = $orgunitName;
        
        return $this;
    }
    /**
     * Get selection value
     * @return string|null
     */
    public function getSelection(): ?string
    {
        return $this->selection;
    }
    /**
     * Set selection value
     * @param string $selection
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setSelection(?string $selection = null): self
    {
        // validation for constraint: string
        if (!is_null($selection) && !is_string($selection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selection, true), gettype($selection)), __LINE__);
        }
        $this->selection = $selection;
        
        return $this;
    }
    /**
     * Get fromFinishTimestamp value
     * @return string|null
     */
    public function getFromFinishTimestamp(): ?string
    {
        return $this->fromFinishTimestamp;
    }
    /**
     * Set fromFinishTimestamp value
     * @param string $fromFinishTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setFromFinishTimestamp(?string $fromFinishTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($fromFinishTimestamp) && !is_string($fromFinishTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromFinishTimestamp, true), gettype($fromFinishTimestamp)), __LINE__);
        }
        $this->fromFinishTimestamp = $fromFinishTimestamp;
        
        return $this;
    }
    /**
     * Get untilFinishTimestamp value
     * @return string|null
     */
    public function getUntilFinishTimestamp(): ?string
    {
        return $this->untilFinishTimestamp;
    }
    /**
     * Set untilFinishTimestamp value
     * @param string $untilFinishTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setUntilFinishTimestamp(?string $untilFinishTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($untilFinishTimestamp) && !is_string($untilFinishTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($untilFinishTimestamp, true), gettype($untilFinishTimestamp)), __LINE__);
        }
        $this->untilFinishTimestamp = $untilFinishTimestamp;
        
        return $this;
    }
    /**
     * Get fromCreationTimestamp value
     * @return string|null
     */
    public function getFromCreationTimestamp(): ?string
    {
        return $this->fromCreationTimestamp;
    }
    /**
     * Set fromCreationTimestamp value
     * @param string $fromCreationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setFromCreationTimestamp(?string $fromCreationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCreationTimestamp) && !is_string($fromCreationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCreationTimestamp, true), gettype($fromCreationTimestamp)), __LINE__);
        }
        $this->fromCreationTimestamp = $fromCreationTimestamp;
        
        return $this;
    }
    /**
     * Get untilCreationTimestamp value
     * @return string|null
     */
    public function getUntilCreationTimestamp(): ?string
    {
        return $this->untilCreationTimestamp;
    }
    /**
     * Set untilCreationTimestamp value
     * @param string $untilCreationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setUntilCreationTimestamp(?string $untilCreationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($untilCreationTimestamp) && !is_string($untilCreationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($untilCreationTimestamp, true), gettype($untilCreationTimestamp)), __LINE__);
        }
        $this->untilCreationTimestamp = $untilCreationTimestamp;
        
        return $this;
    }
    /**
     * Get notice value
     * @return string|null
     */
    public function getNotice(): ?string
    {
        return $this->notice;
    }
    /**
     * Set notice value
     * @param string $notice
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setNotice(?string $notice = null): self
    {
        // validation for constraint: string
        if (!is_null($notice) && !is_string($notice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notice, true), gettype($notice)), __LINE__);
        }
        $this->notice = $notice;
        
        return $this;
    }
    /**
     * Get taskType value
     * @return string|null
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }
    /**
     * Set taskType value
     * @param string $taskType
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setTaskType(?string $taskType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskType) && !is_string($taskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
        return $this;
    }
    /**
     * Get finishUser value
     * @return int|null
     */
    public function getFinishUser(): ?int
    {
        return $this->finishUser;
    }
    /**
     * Set finishUser value
     * @param int $finishUser
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingNoticesResponse
     */
    public function setFinishUser(?int $finishUser = null): self
    {
        // validation for constraint: int
        if (!is_null($finishUser) && !(is_int($finishUser) || ctype_digit($finishUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($finishUser, true), gettype($finishUser)), __LINE__);
        }
        $this->finishUser = $finishUser;
        
        return $this;
    }
}
