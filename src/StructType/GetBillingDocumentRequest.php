<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocumentRequest StructType
 * @subpackage Structs
 */
class GetBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The maskCcNo
     * @var bool|null
     */
    protected ?bool $maskCcNo = null;
    /**
     * The loadPositions
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $loadPositions = null;
    /**
     * Constructor method for GetBillingDocumentRequest
     * @uses GetBillingDocumentRequest::setDocumentId()
     * @uses GetBillingDocumentRequest::setDocumentNo()
     * @uses GetBillingDocumentRequest::setMaskCcNo()
     * @uses GetBillingDocumentRequest::setLoadPositions()
     * @param int $documentId
     * @param int $documentNo
     * @param bool $maskCcNo
     * @param bool $loadPositions
     */
    public function __construct(?int $documentId = null, ?int $documentNo = null, ?bool $maskCcNo = null, ?bool $loadPositions = true)
    {
        $this
            ->setDocumentId($documentId)
            ->setDocumentNo($documentNo)
            ->setMaskCcNo($maskCcNo)
            ->setLoadPositions($loadPositions);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest
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
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get maskCcNo value
     * @return bool|null
     */
    public function getMaskCcNo(): ?bool
    {
        return $this->maskCcNo;
    }
    /**
     * Set maskCcNo value
     * @param bool $maskCcNo
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest
     */
    public function setMaskCcNo(?bool $maskCcNo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($maskCcNo) && !is_bool($maskCcNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($maskCcNo, true), gettype($maskCcNo)), __LINE__);
        }
        $this->maskCcNo = $maskCcNo;
        
        return $this;
    }
    /**
     * Get loadPositions value
     * @return bool|null
     */
    public function getLoadPositions(): ?bool
    {
        return $this->loadPositions;
    }
    /**
     * Set loadPositions value
     * @param bool $loadPositions
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest
     */
    public function setLoadPositions(?bool $loadPositions = true): self
    {
        // validation for constraint: boolean
        if (!is_null($loadPositions) && !is_bool($loadPositions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($loadPositions, true), gettype($loadPositions)), __LINE__);
        }
        $this->loadPositions = $loadPositions;
        
        return $this;
    }
}
