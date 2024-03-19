<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseCashBookSignatureResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CloseCashBookSignatureResponse extends AbstractStructBase
{
    /**
     * The MidocoCashBookSignature
     * Meta information extracted from the WSDL
     * - ref: MidocoCashBookSignature
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature $MidocoCashBookSignature = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for CloseCashBookSignatureResponse
     * @uses CloseCashBookSignatureResponse::setMidocoCashBookSignature()
     * @uses CloseCashBookSignatureResponse::setRepositoryId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature
     * @param int $repositoryId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature = null, ?int $repositoryId = null)
    {
        $this
            ->setMidocoCashBookSignature($midocoCashBookSignature)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get MidocoCashBookSignature value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature|null
     */
    public function getMidocoCashBookSignature(): ?\Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature
    {
        return $this->MidocoCashBookSignature;
    }
    /**
     * Set MidocoCashBookSignature value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature
     * @return \Pggns\MidocoApi\Order\StructType\CloseCashBookSignatureResponse
     */
    public function setMidocoCashBookSignature(?\Pggns\MidocoApi\Order\StructType\MidocoCashBookSignature $midocoCashBookSignature = null): self
    {
        $this->MidocoCashBookSignature = $midocoCashBookSignature;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\CloseCashBookSignatureResponse
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
