<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionDetail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CommissionDetail extends AbstractStructBase
{
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $orderNo;
    /**
     * The customerName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $customerName;
    /**
     * The travelPrice
     * @var float|null
     */
    protected ?float $travelPrice = null;
    /**
     * The calculatedCommission
     * @var float|null
     */
    protected ?float $calculatedCommission = null;
    /**
     * The payedCommission
     * @var float|null
     */
    protected ?float $payedCommission = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * Constructor method for CommissionDetail
     * @uses CommissionDetail::setOrderNo()
     * @uses CommissionDetail::setCustomerName()
     * @uses CommissionDetail::setTravelPrice()
     * @uses CommissionDetail::setCalculatedCommission()
     * @uses CommissionDetail::setPayedCommission()
     * @uses CommissionDetail::setTravelDate()
     * @uses CommissionDetail::setCreationDate()
     * @param string $orderNo
     * @param string $customerName
     * @param float $travelPrice
     * @param float $calculatedCommission
     * @param float $payedCommission
     * @param string $travelDate
     * @param string $creationDate
     */
    public function __construct(string $orderNo, string $customerName, ?float $travelPrice = null, ?float $calculatedCommission = null, ?float $payedCommission = null, ?string $travelDate = null, ?string $creationDate = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setCustomerName($customerName)
            ->setTravelPrice($travelPrice)
            ->setCalculatedCommission($calculatedCommission)
            ->setPayedCommission($payedCommission)
            ->setTravelDate($travelDate)
            ->setCreationDate($creationDate);
    }
    /**
     * Get orderNo value
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param string $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail
     */
    public function setOrderNo(string $orderNo): self
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail
     */
    public function setCustomerName(string $customerName): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get travelPrice value
     * @return float|null
     */
    public function getTravelPrice(): ?float
    {
        return $this->travelPrice;
    }
    /**
     * Set travelPrice value
     * @param float $travelPrice
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail
     */
    public function setTravelPrice(?float $travelPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($travelPrice) && !(is_float($travelPrice) || is_numeric($travelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelPrice, true), gettype($travelPrice)), __LINE__);
        }
        $this->travelPrice = $travelPrice;
        
        return $this;
    }
    /**
     * Get calculatedCommission value
     * @return float|null
     */
    public function getCalculatedCommission(): ?float
    {
        return $this->calculatedCommission;
    }
    /**
     * Set calculatedCommission value
     * @param float $calculatedCommission
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail
     */
    public function setCalculatedCommission(?float $calculatedCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedCommission) && !(is_float($calculatedCommission) || is_numeric($calculatedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedCommission, true), gettype($calculatedCommission)), __LINE__);
        }
        $this->calculatedCommission = $calculatedCommission;
        
        return $this;
    }
    /**
     * Get payedCommission value
     * @return float|null
     */
    public function getPayedCommission(): ?float
    {
        return $this->payedCommission;
    }
    /**
     * Set payedCommission value
     * @param float $payedCommission
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail
     */
    public function setPayedCommission(?float $payedCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($payedCommission) && !(is_float($payedCommission) || is_numeric($payedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payedCommission, true), gettype($payedCommission)), __LINE__);
        }
        $this->payedCommission = $payedCommission;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail
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
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDetail
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
}
