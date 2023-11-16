<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateGrantedProvisionForSellItemRequest StructType
 * @subpackage Structs
 */
class UpdateGrantedProvisionForSellItemRequest extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The vat_incl_amount
     * @var float|null
     */
    protected ?float $vat_incl_amount = null;
    /**
     * The vat_free_amount
     * @var float|null
     */
    protected ?float $vat_free_amount = null;
    /**
     * The vat_insurance
     * @var float|null
     */
    protected ?float $vat_insurance = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * Constructor method for UpdateGrantedProvisionForSellItemRequest
     * @uses UpdateGrantedProvisionForSellItemRequest::setItemId()
     * @uses UpdateGrantedProvisionForSellItemRequest::setVat_incl_amount()
     * @uses UpdateGrantedProvisionForSellItemRequest::setVat_free_amount()
     * @uses UpdateGrantedProvisionForSellItemRequest::setVat_insurance()
     * @uses UpdateGrantedProvisionForSellItemRequest::setGrantedRevenue()
     * @param int $itemId
     * @param float $vat_incl_amount
     * @param float $vat_free_amount
     * @param float $vat_insurance
     * @param float $grantedRevenue
     */
    public function __construct(?int $itemId = null, ?float $vat_incl_amount = null, ?float $vat_free_amount = null, ?float $vat_insurance = null, ?float $grantedRevenue = null)
    {
        $this
            ->setItemId($itemId)
            ->setVat_incl_amount($vat_incl_amount)
            ->setVat_free_amount($vat_free_amount)
            ->setVat_insurance($vat_insurance)
            ->setGrantedRevenue($grantedRevenue);
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateGrantedProvisionForSellItemRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get vat_incl_amount value
     * @return float|null
     */
    public function getVat_incl_amount(): ?float
    {
        return $this->vat_incl_amount;
    }
    /**
     * Set vat_incl_amount value
     * @param float $vat_incl_amount
     * @return \Pggns\MidocoApi\Order\StructType\UpdateGrantedProvisionForSellItemRequest
     */
    public function setVat_incl_amount(?float $vat_incl_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat_incl_amount) && !(is_float($vat_incl_amount) || is_numeric($vat_incl_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat_incl_amount, true), gettype($vat_incl_amount)), __LINE__);
        }
        $this->vat_incl_amount = $vat_incl_amount;
        
        return $this;
    }
    /**
     * Get vat_free_amount value
     * @return float|null
     */
    public function getVat_free_amount(): ?float
    {
        return $this->vat_free_amount;
    }
    /**
     * Set vat_free_amount value
     * @param float $vat_free_amount
     * @return \Pggns\MidocoApi\Order\StructType\UpdateGrantedProvisionForSellItemRequest
     */
    public function setVat_free_amount(?float $vat_free_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat_free_amount) && !(is_float($vat_free_amount) || is_numeric($vat_free_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat_free_amount, true), gettype($vat_free_amount)), __LINE__);
        }
        $this->vat_free_amount = $vat_free_amount;
        
        return $this;
    }
    /**
     * Get vat_insurance value
     * @return float|null
     */
    public function getVat_insurance(): ?float
    {
        return $this->vat_insurance;
    }
    /**
     * Set vat_insurance value
     * @param float $vat_insurance
     * @return \Pggns\MidocoApi\Order\StructType\UpdateGrantedProvisionForSellItemRequest
     */
    public function setVat_insurance(?float $vat_insurance = null): self
    {
        // validation for constraint: float
        if (!is_null($vat_insurance) && !(is_float($vat_insurance) || is_numeric($vat_insurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat_insurance, true), gettype($vat_insurance)), __LINE__);
        }
        $this->vat_insurance = $vat_insurance;
        
        return $this;
    }
    /**
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\UpdateGrantedProvisionForSellItemRequest
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
}
