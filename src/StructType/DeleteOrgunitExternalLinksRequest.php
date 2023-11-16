<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrgunitExternalLinksRequest StructType
 * @subpackage Structs
 */
class DeleteOrgunitExternalLinksRequest extends AbstractStructBase
{
    /**
     * The extLinkId
     * @var int|null
     */
    protected ?int $extLinkId = null;
    /**
     * Constructor method for DeleteOrgunitExternalLinksRequest
     * @uses DeleteOrgunitExternalLinksRequest::setExtLinkId()
     * @param int $extLinkId
     */
    public function __construct(?int $extLinkId = null)
    {
        $this
            ->setExtLinkId($extLinkId);
    }
    /**
     * Get extLinkId value
     * @return int|null
     */
    public function getExtLinkId(): ?int
    {
        return $this->extLinkId;
    }
    /**
     * Set extLinkId value
     * @param int $extLinkId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrgunitExternalLinksRequest
     */
    public function setExtLinkId(?int $extLinkId = null): self
    {
        // validation for constraint: int
        if (!is_null($extLinkId) && !(is_int($extLinkId) || ctype_digit($extLinkId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extLinkId, true), gettype($extLinkId)), __LINE__);
        }
        $this->extLinkId = $extLinkId;
        
        return $this;
    }
}
