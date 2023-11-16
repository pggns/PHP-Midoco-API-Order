<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocumentPositionRequest StructType
 * @subpackage Structs
 */
class SaveBillingDocumentPositionRequest extends AbstractStructBase
{
    /**
     * The parentInternalVersion
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $parentInternalVersion;
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $MidocoBillingPosition = null;
    /**
     * Constructor method for SaveBillingDocumentPositionRequest
     * @uses SaveBillingDocumentPositionRequest::setParentInternalVersion()
     * @uses SaveBillingDocumentPositionRequest::setMidocoBillingPosition()
     * @param int $parentInternalVersion
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     */
    public function __construct(int $parentInternalVersion, ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null)
    {
        $this
            ->setParentInternalVersion($parentInternalVersion)
            ->setMidocoBillingPosition($midocoBillingPosition);
    }
    /**
     * Get parentInternalVersion value
     * @return int
     */
    public function getParentInternalVersion(): int
    {
        return $this->parentInternalVersion;
    }
    /**
     * Set parentInternalVersion value
     * @param int $parentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentPositionRequest
     */
    public function setParentInternalVersion(int $parentInternalVersion): self
    {
        // validation for constraint: int
        if (!is_null($parentInternalVersion) && !(is_int($parentInternalVersion) || ctype_digit($parentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentInternalVersion, true), gettype($parentInternalVersion)), __LINE__);
        }
        $this->parentInternalVersion = $parentInternalVersion;
        
        return $this;
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    public function getMidocoBillingPosition(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * Set MidocoBillingPosition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentPositionRequest
     */
    public function setMidocoBillingPosition(?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null): self
    {
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
}
