<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencySettlementSearchCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencySettlementSearchCriteria extends AbstractStructBase
{
    /**
     * The creationStartDate
     * @var string|null
     */
    protected ?string $creationStartDate = null;
    /**
     * The creationEndDate
     * @var string|null
     */
    protected ?string $creationEndDate = null;
    /**
     * The agencyNo
     * @var string|null
     */
    protected ?string $agencyNo = null;
    /**
     * Constructor method for MidocoAgencySettlementSearchCriteria
     * @uses MidocoAgencySettlementSearchCriteria::setCreationStartDate()
     * @uses MidocoAgencySettlementSearchCriteria::setCreationEndDate()
     * @uses MidocoAgencySettlementSearchCriteria::setAgencyNo()
     * @param string $creationStartDate
     * @param string $creationEndDate
     * @param string $agencyNo
     */
    public function __construct(?string $creationStartDate = null, ?string $creationEndDate = null, ?string $agencyNo = null)
    {
        $this
            ->setCreationStartDate($creationStartDate)
            ->setCreationEndDate($creationEndDate)
            ->setAgencyNo($agencyNo);
    }
    /**
     * Get creationStartDate value
     * @return string|null
     */
    public function getCreationStartDate(): ?string
    {
        return $this->creationStartDate;
    }
    /**
     * Set creationStartDate value
     * @param string $creationStartDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria
     */
    public function setCreationStartDate(?string $creationStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationStartDate) && !is_string($creationStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationStartDate, true), gettype($creationStartDate)), __LINE__);
        }
        $this->creationStartDate = $creationStartDate;
        
        return $this;
    }
    /**
     * Get creationEndDate value
     * @return string|null
     */
    public function getCreationEndDate(): ?string
    {
        return $this->creationEndDate;
    }
    /**
     * Set creationEndDate value
     * @param string $creationEndDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria
     */
    public function setCreationEndDate(?string $creationEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationEndDate) && !is_string($creationEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationEndDate, true), gettype($creationEndDate)), __LINE__);
        }
        $this->creationEndDate = $creationEndDate;
        
        return $this;
    }
    /**
     * Get agencyNo value
     * @return string|null
     */
    public function getAgencyNo(): ?string
    {
        return $this->agencyNo;
    }
    /**
     * Set agencyNo value
     * @param string $agencyNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementSearchCriteria
     */
    public function setAgencyNo(?string $agencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyNo) && !is_string($agencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyNo, true), gettype($agencyNo)), __LINE__);
        }
        $this->agencyNo = $agencyNo;
        
        return $this;
    }
}
