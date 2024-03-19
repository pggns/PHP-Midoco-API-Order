<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableSupplierHistoricRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableSupplierHistoricRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * The creationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The travelDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * Constructor method for GetAvailableSupplierHistoricRequest
     * @uses GetAvailableSupplierHistoricRequest::setMidocoSupplier()
     * @uses GetAvailableSupplierHistoricRequest::setCreationDate()
     * @uses GetAvailableSupplierHistoricRequest::setTravelDate()
     * @uses GetAvailableSupplierHistoricRequest::setAccountId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @param string $creationDate
     * @param string $travelDate
     * @param string $accountId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null, ?string $creationDate = null, ?string $travelDate = null, ?string $accountId = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier)
            ->setCreationDate($creationDate)
            ->setTravelDate($travelDate)
            ->setAccountId($accountId);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierHistoricRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierHistoricRequest
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierHistoricRequest
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierHistoricRequest
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
}
