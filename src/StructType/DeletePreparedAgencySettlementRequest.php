<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePreparedAgencySettlementRequest StructType
 * @subpackage Structs
 */
class DeletePreparedAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $agencyId;
    /**
     * The settlementId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $settlementId;
    /**
     * Constructor method for DeletePreparedAgencySettlementRequest
     * @uses DeletePreparedAgencySettlementRequest::setAgencyId()
     * @uses DeletePreparedAgencySettlementRequest::setSettlementId()
     * @param string $agencyId
     * @param int $settlementId
     */
    public function __construct(string $agencyId, int $settlementId)
    {
        $this
            ->setAgencyId($agencyId)
            ->setSettlementId($settlementId);
    }
    /**
     * Get agencyId value
     * @return string
     */
    public function getAgencyId(): string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\DeletePreparedAgencySettlementRequest
     */
    public function setAgencyId(string $agencyId): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int
     */
    public function getSettlementId(): int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\DeletePreparedAgencySettlementRequest
     */
    public function setSettlementId(int $settlementId): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
}
