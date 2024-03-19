<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrderDocumentRequest extends AbstractStructBase
{
    /**
     * The orderDocumentId
     * @var int|null
     */
    protected ?int $orderDocumentId = null;
    /**
     * Constructor method for DeleteOrderDocumentRequest
     * @uses DeleteOrderDocumentRequest::setOrderDocumentId()
     * @param int $orderDocumentId
     */
    public function __construct(?int $orderDocumentId = null)
    {
        $this
            ->setOrderDocumentId($orderDocumentId);
    }
    /**
     * Get orderDocumentId value
     * @return int|null
     */
    public function getOrderDocumentId(): ?int
    {
        return $this->orderDocumentId;
    }
    /**
     * Set orderDocumentId value
     * @param int $orderDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderDocumentRequest
     */
    public function setOrderDocumentId(?int $orderDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderDocumentId) && !(is_int($orderDocumentId) || ctype_digit($orderDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderDocumentId, true), gettype($orderDocumentId)), __LINE__);
        }
        $this->orderDocumentId = $orderDocumentId;
        
        return $this;
    }
}
