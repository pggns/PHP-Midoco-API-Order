<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTssPukMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendTssPukMailRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * Constructor method for SendTssPukMailRequest
     * @uses SendTssPukMailRequest::setUnitName()
     * @uses SendTssPukMailRequest::setTssId()
     * @param string $unitName
     * @param string $tssId
     */
    public function __construct(?string $unitName = null, ?string $tssId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setTssId($tssId);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SendTssPukMailRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\SendTssPukMailRequest
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
}
