<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceAmaTirMessageRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: imports an Ama TIR message.
 * @subpackage Structs
 */
class AnnounceAmaTirMessageRequest extends AbstractStructBase
{
    /**
     * The TirData
     * @var string|null
     */
    protected ?string $TirData = null;
    /**
     * Constructor method for AnnounceAmaTirMessageRequest
     * @uses AnnounceAmaTirMessageRequest::setTirData()
     * @param string $tirData
     */
    public function __construct(?string $tirData = null)
    {
        $this
            ->setTirData($tirData);
    }
    /**
     * Get TirData value
     * @return string|null
     */
    public function getTirData(): ?string
    {
        return $this->TirData;
    }
    /**
     * Set TirData value
     * @param string $tirData
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmaTirMessageRequest
     */
    public function setTirData(?string $tirData = null): self
    {
        // validation for constraint: string
        if (!is_null($tirData) && !is_string($tirData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tirData, true), gettype($tirData)), __LINE__);
        }
        $this->TirData = $tirData;
        
        return $this;
    }
}
