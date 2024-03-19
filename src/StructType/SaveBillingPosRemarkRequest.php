<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingPosRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingPosRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingPositionRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPositionRemark
     * @var \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO $MidocoBillingPositionRemark = null;
    /**
     * The parentInternalVersion
     * @var int|null
     */
    protected ?int $parentInternalVersion = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for SaveBillingPosRemarkRequest
     * @uses SaveBillingPosRemarkRequest::setMidocoBillingPositionRemark()
     * @uses SaveBillingPosRemarkRequest::setParentInternalVersion()
     * @uses SaveBillingPosRemarkRequest::setDocumentId()
     * @param \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO $midocoBillingPositionRemark
     * @param int $parentInternalVersion
     * @param int $documentId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO $midocoBillingPositionRemark = null, ?int $parentInternalVersion = null, ?int $documentId = null)
    {
        $this
            ->setMidocoBillingPositionRemark($midocoBillingPositionRemark)
            ->setParentInternalVersion($parentInternalVersion)
            ->setDocumentId($documentId);
    }
    /**
     * Get MidocoBillingPositionRemark value
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO|null
     */
    public function getMidocoBillingPositionRemark(): ?\Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO
    {
        return $this->MidocoBillingPositionRemark;
    }
    /**
     * Set MidocoBillingPositionRemark value
     * @param \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO $midocoBillingPositionRemark
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPosRemarkRequest
     */
    public function setMidocoBillingPositionRemark(?\Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO $midocoBillingPositionRemark = null): self
    {
        $this->MidocoBillingPositionRemark = $midocoBillingPositionRemark;
        
        return $this;
    }
    /**
     * Get parentInternalVersion value
     * @return int|null
     */
    public function getParentInternalVersion(): ?int
    {
        return $this->parentInternalVersion;
    }
    /**
     * Set parentInternalVersion value
     * @param int $parentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPosRemarkRequest
     */
    public function setParentInternalVersion(?int $parentInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($parentInternalVersion) && !(is_int($parentInternalVersion) || ctype_digit($parentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentInternalVersion, true), gettype($parentInternalVersion)), __LINE__);
        }
        $this->parentInternalVersion = $parentInternalVersion;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPosRemarkRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}
