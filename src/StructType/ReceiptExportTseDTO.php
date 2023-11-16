<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptExportTseDTO StructType
 * @subpackage Structs
 */
class ReceiptExportTseDTO extends AbstractStructBase
{
    /**
     * The clientId
     * @var string|null
     */
    protected ?string $clientId = null;
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * The tseId
     * @var int|null
     */
    protected ?int $tseId = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * Constructor method for ReceiptExportTseDTO
     * @uses ReceiptExportTseDTO::setClientId()
     * @uses ReceiptExportTseDTO::setPrintId()
     * @uses ReceiptExportTseDTO::setTseId()
     * @uses ReceiptExportTseDTO::setTssId()
     * @param string $clientId
     * @param int $printId
     * @param int $tseId
     * @param string $tssId
     */
    public function __construct(?string $clientId = null, ?int $printId = null, ?int $tseId = null, ?string $tssId = null)
    {
        $this
            ->setClientId($clientId)
            ->setPrintId($printId)
            ->setTseId($tseId)
            ->setTssId($tssId);
    }
    /**
     * Get clientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param string $clientId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportTseDTO
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientId) && !is_string($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), gettype($clientId)), __LINE__);
        }
        $this->clientId = $clientId;
        
        return $this;
    }
    /**
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportTseDTO
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
        return $this;
    }
    /**
     * Get tseId value
     * @return int|null
     */
    public function getTseId(): ?int
    {
        return $this->tseId;
    }
    /**
     * Set tseId value
     * @param int $tseId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportTseDTO
     */
    public function setTseId(?int $tseId = null): self
    {
        // validation for constraint: int
        if (!is_null($tseId) && !(is_int($tseId) || ctype_digit($tseId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tseId, true), gettype($tseId)), __LINE__);
        }
        $this->tseId = $tseId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportTseDTO
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
