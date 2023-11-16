<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderBillingResponse StructType
 * @subpackage Structs
 */
class SaveOrderBillingResponse extends AbstractStructBase
{
    /**
     * The billingDocumentId
     * @var int|null
     */
    protected ?int $billingDocumentId = null;
    /**
     * Constructor method for SaveOrderBillingResponse
     * @uses SaveOrderBillingResponse::setBillingDocumentId()
     * @param int $billingDocumentId
     */
    public function __construct(?int $billingDocumentId = null)
    {
        $this
            ->setBillingDocumentId($billingDocumentId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderBillingResponse
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
}
