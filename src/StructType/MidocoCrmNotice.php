<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmNotice StructType
 * @subpackage Structs
 */
class MidocoCrmNotice extends CrmNoticeDTO
{
    /**
     * The delegationComment
     * @var string|null
     */
    protected ?string $delegationComment = null;
    /**
     * Constructor method for MidocoCrmNotice
     * @uses MidocoCrmNotice::setDelegationComment()
     * @param string $delegationComment
     */
    public function __construct(?string $delegationComment = null)
    {
        $this
            ->setDelegationComment($delegationComment);
    }
    /**
     * Get delegationComment value
     * @return string|null
     */
    public function getDelegationComment(): ?string
    {
        return $this->delegationComment;
    }
    /**
     * Set delegationComment value
     * @param string $delegationComment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice
     */
    public function setDelegationComment(?string $delegationComment = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationComment) && !is_string($delegationComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationComment, true), gettype($delegationComment)), __LINE__);
        }
        $this->delegationComment = $delegationComment;
        
        return $this;
    }
}
