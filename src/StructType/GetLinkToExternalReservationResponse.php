<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLinkToExternalReservationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLinkToExternalReservationResponse extends AbstractStructBase
{
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * Constructor method for GetLinkToExternalReservationResponse
     * @uses GetLinkToExternalReservationResponse::setLink()
     * @param string $link
     */
    public function __construct(?string $link = null)
    {
        $this
            ->setLink($link);
    }
    /**
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationResponse
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
}
