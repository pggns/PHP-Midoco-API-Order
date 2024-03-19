<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemDocumentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellItemDocumentsRequest extends AbstractStructBase
{
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $itemId;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for GetSellItemDocumentsRequest
     * @uses GetSellItemDocumentsRequest::setItemId()
     * @uses GetSellItemDocumentsRequest::setType()
     * @param int $itemId
     * @param string $type
     */
    public function __construct(int $itemId, ?string $type = null)
    {
        $this
            ->setItemId($itemId)
            ->setType($type);
    }
    /**
     * Get itemId value
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemDocumentsRequest
     */
    public function setItemId(int $itemId): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemDocumentsRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
