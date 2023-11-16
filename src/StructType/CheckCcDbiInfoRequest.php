<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckCcDbiInfoRequest StructType
 * @subpackage Structs
 */
class CheckCcDbiInfoRequest extends AbstractStructBase
{
    /**
     * The billingDocumentId
     * @var int|null
     */
    protected ?int $billingDocumentId = null;
    /**
     * The OrgUnit
     * @var string|null
     */
    protected ?string $OrgUnit = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * Constructor method for CheckCcDbiInfoRequest
     * @uses CheckCcDbiInfoRequest::setBillingDocumentId()
     * @uses CheckCcDbiInfoRequest::setOrgUnit()
     * @uses CheckCcDbiInfoRequest::setCcNo()
     * @uses CheckCcDbiInfoRequest::setCcType()
     * @param int $billingDocumentId
     * @param string $orgUnit
     * @param string $ccNo
     * @param string $ccType
     */
    public function __construct(?int $billingDocumentId = null, ?string $orgUnit = null, ?string $ccNo = null, ?string $ccType = null)
    {
        $this
            ->setBillingDocumentId($billingDocumentId)
            ->setOrgUnit($orgUnit)
            ->setCcNo($ccNo)
            ->setCcType($ccType);
    }
    /**
     * Get billingDocumentId value
     * @return int|null
     */
    public function getBillingDocumentId(): ?int
    {
        return $this->billingDocumentId;
    }
    /**
     * Set billingDocumentId value
     * @param int $billingDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\CheckCcDbiInfoRequest
     */
    public function setBillingDocumentId(?int $billingDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingDocumentId) && !(is_int($billingDocumentId) || ctype_digit($billingDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingDocumentId, true), gettype($billingDocumentId)), __LINE__);
        }
        $this->billingDocumentId = $billingDocumentId;
        
        return $this;
    }
    /**
     * Get OrgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->OrgUnit;
    }
    /**
     * Set OrgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\CheckCcDbiInfoRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->OrgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Order\StructType\CheckCcDbiInfoRequest
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\CheckCcDbiInfoRequest
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
}
