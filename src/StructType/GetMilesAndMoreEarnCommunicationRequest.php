<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreEarnCommunicationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the requested and found Miles & More earn transactions. If the requested transactions can not be found, an exception is thrown.
 * @subpackage Structs
 */
class GetMilesAndMoreEarnCommunicationRequest extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - documentation: The id of the SellItem for which to return the HTTP communication of all its earn-transactions.
     * @var int|null
     */
    protected ?int $ItemId = null;
    /**
     * Constructor method for GetMilesAndMoreEarnCommunicationRequest
     * @uses GetMilesAndMoreEarnCommunicationRequest::setItemId()
     * @param int $itemId
     */
    public function __construct(?int $itemId = null)
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreEarnCommunicationRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        
        return $this;
    }
}
