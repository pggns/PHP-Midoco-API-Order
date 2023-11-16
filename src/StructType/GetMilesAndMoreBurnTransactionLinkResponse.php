<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreBurnTransactionLinkResponse StructType
 * @subpackage Structs
 */
class GetMilesAndMoreBurnTransactionLinkResponse extends AbstractStructBase
{
    /**
     * The uri
     * @var string|null
     */
    protected ?string $uri = null;
    /**
     * Constructor method for GetMilesAndMoreBurnTransactionLinkResponse
     * @uses GetMilesAndMoreBurnTransactionLinkResponse::setUri()
     * @param string $uri
     */
    public function __construct(?string $uri = null)
    {
        $this
            ->setUri($uri);
    }
    /**
     * Get uri value
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }
    /**
     * Set uri value
     * @param string $uri
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreBurnTransactionLinkResponse
     */
    public function setUri(?string $uri = null): self
    {
        // validation for constraint: string
        if (!is_null($uri) && !is_string($uri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uri, true), gettype($uri)), __LINE__);
        }
        $this->uri = $uri;
        
        return $this;
    }
}
