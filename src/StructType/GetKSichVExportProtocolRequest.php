<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKSichVExportProtocolRequest StructType
 * @subpackage Structs
 */
class GetKSichVExportProtocolRequest extends AbstractStructBase
{
    /**
     * The exportId
     * @var string|null
     */
    protected ?string $exportId = null;
    /**
     * Constructor method for GetKSichVExportProtocolRequest
     * @uses GetKSichVExportProtocolRequest::setExportId()
     * @param string $exportId
     */
    public function __construct(?string $exportId = null)
    {
        $this
            ->setExportId($exportId);
    }
    /**
     * Get exportId value
     * @return string|null
     */
    public function getExportId(): ?string
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param string $exportId
     * @return \Pggns\MidocoApi\Order\StructType\GetKSichVExportProtocolRequest
     */
    public function setExportId(?string $exportId = null): self
    {
        // validation for constraint: string
        if (!is_null($exportId) && !is_string($exportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
}
