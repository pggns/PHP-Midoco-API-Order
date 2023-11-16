<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncryptLimaGroupParamsResponse StructType
 * @subpackage Structs
 */
class EncryptLimaGroupParamsResponse extends AbstractStructBase
{
    /**
     * The encrypted
     * @var string|null
     */
    protected ?string $encrypted = null;
    /**
     * Constructor method for EncryptLimaGroupParamsResponse
     * @uses EncryptLimaGroupParamsResponse::setEncrypted()
     * @param string $encrypted
     */
    public function __construct(?string $encrypted = null)
    {
        $this
            ->setEncrypted($encrypted);
    }
    /**
     * Get encrypted value
     * @return string|null
     */
    public function getEncrypted(): ?string
    {
        return $this->encrypted;
    }
    /**
     * Set encrypted value
     * @param string $encrypted
     * @return \Pggns\MidocoApi\Order\StructType\EncryptLimaGroupParamsResponse
     */
    public function setEncrypted(?string $encrypted = null): self
    {
        // validation for constraint: string
        if (!is_null($encrypted) && !is_string($encrypted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encrypted, true), gettype($encrypted)), __LINE__);
        }
        $this->encrypted = $encrypted;
        
        return $this;
    }
}
