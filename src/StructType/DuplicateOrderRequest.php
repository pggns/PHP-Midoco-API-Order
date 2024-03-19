<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DuplicateOrderRequest extends AbstractStructBase
{
    /**
     * The sourceOrderId
     * Meta information extracted from the WSDL
     * - documentation: The id of the order that shall be copied.
     * @var int|null
     */
    protected ?int $sourceOrderId = null;
    /**
     * The targetOrgunit
     * Meta information extracted from the WSDL
     * - documentation: The target orgunit name.
     * @var string|null
     */
    protected ?string $targetOrgunit = null;
    /**
     * The preserveOrderNo
     * Meta information extracted from the WSDL
     * - documentation: If true, the orderNo of the order in the target orgunit is same as in the source orgunit, which may result in duplicate orderNo. Otherwise a new orderNo is generated.
     * - default: true
     * @var bool|null
     */
    protected ?bool $preserveOrderNo = null;
    /**
     * The excludeItemTypes
     * Meta information extracted from the WSDL
     * - documentation: A comma-separated list of item types, that shall not be copied. Matching items are removed from the order. If the resulting order would be empty, the order is not copied. The response informs you in this case.
     * @var string|null
     */
    protected ?string $excludeItemTypes = null;
    /**
     * The dryRun
     * Meta information extracted from the WSDL
     * - documentation: If set to true, the order will not be copied. If the order would not have been copied the responses contains a fitting message. If the order would have been copied, the message of the response is not set.
     * - default: false
     * @var bool|null
     */
    protected ?bool $dryRun = null;
    /**
     * Constructor method for DuplicateOrderRequest
     * @uses DuplicateOrderRequest::setSourceOrderId()
     * @uses DuplicateOrderRequest::setTargetOrgunit()
     * @uses DuplicateOrderRequest::setPreserveOrderNo()
     * @uses DuplicateOrderRequest::setExcludeItemTypes()
     * @uses DuplicateOrderRequest::setDryRun()
     * @param int $sourceOrderId
     * @param string $targetOrgunit
     * @param bool $preserveOrderNo
     * @param string $excludeItemTypes
     * @param bool $dryRun
     */
    public function __construct(?int $sourceOrderId = null, ?string $targetOrgunit = null, ?bool $preserveOrderNo = true, ?string $excludeItemTypes = null, ?bool $dryRun = false)
    {
        $this
            ->setSourceOrderId($sourceOrderId)
            ->setTargetOrgunit($targetOrgunit)
            ->setPreserveOrderNo($preserveOrderNo)
            ->setExcludeItemTypes($excludeItemTypes)
            ->setDryRun($dryRun);
    }
    /**
     * Get sourceOrderId value
     * @return int|null
     */
    public function getSourceOrderId(): ?int
    {
        return $this->sourceOrderId;
    }
    /**
     * Set sourceOrderId value
     * @param int $sourceOrderId
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderRequest
     */
    public function setSourceOrderId(?int $sourceOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($sourceOrderId) && !(is_int($sourceOrderId) || ctype_digit($sourceOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourceOrderId, true), gettype($sourceOrderId)), __LINE__);
        }
        $this->sourceOrderId = $sourceOrderId;
        
        return $this;
    }
    /**
     * Get targetOrgunit value
     * @return string|null
     */
    public function getTargetOrgunit(): ?string
    {
        return $this->targetOrgunit;
    }
    /**
     * Set targetOrgunit value
     * @param string $targetOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderRequest
     */
    public function setTargetOrgunit(?string $targetOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($targetOrgunit) && !is_string($targetOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetOrgunit, true), gettype($targetOrgunit)), __LINE__);
        }
        $this->targetOrgunit = $targetOrgunit;
        
        return $this;
    }
    /**
     * Get preserveOrderNo value
     * @return bool|null
     */
    public function getPreserveOrderNo(): ?bool
    {
        return $this->preserveOrderNo;
    }
    /**
     * Set preserveOrderNo value
     * @param bool $preserveOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderRequest
     */
    public function setPreserveOrderNo(?bool $preserveOrderNo = true): self
    {
        // validation for constraint: boolean
        if (!is_null($preserveOrderNo) && !is_bool($preserveOrderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preserveOrderNo, true), gettype($preserveOrderNo)), __LINE__);
        }
        $this->preserveOrderNo = $preserveOrderNo;
        
        return $this;
    }
    /**
     * Get excludeItemTypes value
     * @return string|null
     */
    public function getExcludeItemTypes(): ?string
    {
        return $this->excludeItemTypes;
    }
    /**
     * Set excludeItemTypes value
     * @param string $excludeItemTypes
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderRequest
     */
    public function setExcludeItemTypes(?string $excludeItemTypes = null): self
    {
        // validation for constraint: string
        if (!is_null($excludeItemTypes) && !is_string($excludeItemTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludeItemTypes, true), gettype($excludeItemTypes)), __LINE__);
        }
        $this->excludeItemTypes = $excludeItemTypes;
        
        return $this;
    }
    /**
     * Get dryRun value
     * @return bool|null
     */
    public function getDryRun(): ?bool
    {
        return $this->dryRun;
    }
    /**
     * Set dryRun value
     * @param bool $dryRun
     * @return \Pggns\MidocoApi\Order\StructType\DuplicateOrderRequest
     */
    public function setDryRun(?bool $dryRun = false): self
    {
        // validation for constraint: boolean
        if (!is_null($dryRun) && !is_bool($dryRun)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dryRun, true), gettype($dryRun)), __LINE__);
        }
        $this->dryRun = $dryRun;
        
        return $this;
    }
}
