<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPositionsForDocumentIdRequest StructType
 * @subpackage Structs
 */
class GetBillingPositionsForDocumentIdRequest extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The numPositions
     * @var int|null
     */
    protected ?int $numPositions = null;
    /**
     * Constructor method for GetBillingPositionsForDocumentIdRequest
     * @uses GetBillingPositionsForDocumentIdRequest::setDocumentId()
     * @uses GetBillingPositionsForDocumentIdRequest::setNumPositions()
     * @param int $documentId
     * @param int $numPositions
     */
    public function __construct(?int $documentId = null, ?int $numPositions = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setNumPositions($numPositions);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositionsForDocumentIdRequest
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
     * Get numPositions value
     * @return int|null
     */
    public function getNumPositions(): ?int
    {
        return $this->numPositions;
    }
    /**
     * Set numPositions value
     * @param int $numPositions
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositionsForDocumentIdRequest
     */
    public function setNumPositions(?int $numPositions = null): self
    {
        // validation for constraint: int
        if (!is_null($numPositions) && !(is_int($numPositions) || ctype_digit($numPositions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numPositions, true), gettype($numPositions)), __LINE__);
        }
        $this->numPositions = $numPositions;
        
        return $this;
    }
}
