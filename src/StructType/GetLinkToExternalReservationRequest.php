<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLinkToExternalReservationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLinkToExternalReservationRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoOrderCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $MidocoOrderCustomer = null;
    /**
     * The MidocoTravelItem
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $MidocoTravelItem = null;
    /**
     * The isNew
     * @var bool|null
     */
    protected ?bool $isNew = null;
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The updateAction
     * @var bool|null
     */
    protected ?bool $updateAction = null;
    /**
     * The selectedTaxiAgency
     * @var string|null
     */
    protected ?string $selectedTaxiAgency = null;
    /**
     * Constructor method for GetLinkToExternalReservationRequest
     * @uses GetLinkToExternalReservationRequest::setMidocoOrder()
     * @uses GetLinkToExternalReservationRequest::setMidocoOrderCustomer()
     * @uses GetLinkToExternalReservationRequest::setMidocoTravelItem()
     * @uses GetLinkToExternalReservationRequest::setIsNew()
     * @uses GetLinkToExternalReservationRequest::setAdapterId()
     * @uses GetLinkToExternalReservationRequest::setUpdateAction()
     * @uses GetLinkToExternalReservationRequest::setSelectedTaxiAgency()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @param bool $isNew
     * @param string $adapterId
     * @param bool $updateAction
     * @param string $selectedTaxiAgency
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null, ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null, ?bool $isNew = null, ?string $adapterId = null, ?bool $updateAction = null, ?string $selectedTaxiAgency = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setMidocoOrderCustomer($midocoOrderCustomer)
            ->setMidocoTravelItem($midocoTravelItem)
            ->setIsNew($isNew)
            ->setAdapterId($adapterId)
            ->setUpdateAction($updateAction)
            ->setSelectedTaxiAgency($selectedTaxiAgency);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoOrderCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    public function getMidocoOrderCustomer(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer
    {
        return $this->MidocoOrderCustomer;
    }
    /**
     * Set MidocoOrderCustomer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationRequest
     */
    public function setMidocoOrderCustomer(?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null): self
    {
        $this->MidocoOrderCustomer = $midocoOrderCustomer;
        
        return $this;
    }
    /**
     * Get MidocoTravelItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    public function getMidocoTravelItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
    {
        return $this->MidocoTravelItem;
    }
    /**
     * Set MidocoTravelItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationRequest
     */
    public function setMidocoTravelItem(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null): self
    {
        $this->MidocoTravelItem = $midocoTravelItem;
        
        return $this;
    }
    /**
     * Get isNew value
     * @return bool|null
     */
    public function getIsNew(): ?bool
    {
        return $this->isNew;
    }
    /**
     * Set isNew value
     * @param bool $isNew
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationRequest
     */
    public function setIsNew(?bool $isNew = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNew) && !is_bool($isNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNew, true), gettype($isNew)), __LINE__);
        }
        $this->isNew = $isNew;
        
        return $this;
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationRequest
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get updateAction value
     * @return bool|null
     */
    public function getUpdateAction(): ?bool
    {
        return $this->updateAction;
    }
    /**
     * Set updateAction value
     * @param bool $updateAction
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationRequest
     */
    public function setUpdateAction(?bool $updateAction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($updateAction) && !is_bool($updateAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateAction, true), gettype($updateAction)), __LINE__);
        }
        $this->updateAction = $updateAction;
        
        return $this;
    }
    /**
     * Get selectedTaxiAgency value
     * @return string|null
     */
    public function getSelectedTaxiAgency(): ?string
    {
        return $this->selectedTaxiAgency;
    }
    /**
     * Set selectedTaxiAgency value
     * @param string $selectedTaxiAgency
     * @return \Pggns\MidocoApi\Order\StructType\GetLinkToExternalReservationRequest
     */
    public function setSelectedTaxiAgency(?string $selectedTaxiAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($selectedTaxiAgency) && !is_string($selectedTaxiAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectedTaxiAgency, true), gettype($selectedTaxiAgency)), __LINE__);
        }
        $this->selectedTaxiAgency = $selectedTaxiAgency;
        
        return $this;
    }
}
