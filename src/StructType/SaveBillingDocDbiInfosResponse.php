<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocDbiInfosResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingDocDbiInfosResponse extends AbstractStructBase
{
    /**
     * The documentVersion
     * @var int|null
     */
    protected ?int $documentVersion = null;
    /**
     * Constructor method for SaveBillingDocDbiInfosResponse
     * @uses SaveBillingDocDbiInfosResponse::setDocumentVersion()
     * @param int $documentVersion
     */
    public function __construct(?int $documentVersion = null)
    {
        $this
            ->setDocumentVersion($documentVersion);
    }
    /**
     * Get documentVersion value
     * @return int|null
     */
    public function getDocumentVersion(): ?int
    {
        return $this->documentVersion;
    }
    /**
     * Set documentVersion value
     * @param int $documentVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosResponse
     */
    public function setDocumentVersion(?int $documentVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($documentVersion) && !(is_int($documentVersion) || ctype_digit($documentVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentVersion, true), gettype($documentVersion)), __LINE__);
        }
        $this->documentVersion = $documentVersion;
        
        return $this;
    }
}
