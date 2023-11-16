<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTravelNoSalesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: search all travel no related sales and return values with applicable amounts (not total price of each order but only part which is travelNo related)
 * @subpackage Structs
 */
class SearchTravelNoSalesRequest extends AbstractStructBase
{
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The foreName
     * @var string|null
     */
    protected ?string $foreName = null;
    /**
     * The surName
     * @var string|null
     */
    protected ?string $surName = null;
    /**
     * Constructor method for SearchTravelNoSalesRequest
     * @uses SearchTravelNoSalesRequest::setTravelNo()
     * @uses SearchTravelNoSalesRequest::setForeName()
     * @uses SearchTravelNoSalesRequest::setSurName()
     * @param string $travelNo
     * @param string $foreName
     * @param string $surName
     */
    public function __construct(?string $travelNo = null, ?string $foreName = null, ?string $surName = null)
    {
        $this
            ->setTravelNo($travelNo)
            ->setForeName($foreName)
            ->setSurName($surName);
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoSalesRequest
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Get foreName value
     * @return string|null
     */
    public function getForeName(): ?string
    {
        return $this->foreName;
    }
    /**
     * Set foreName value
     * @param string $foreName
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoSalesRequest
     */
    public function setForeName(?string $foreName = null): self
    {
        // validation for constraint: string
        if (!is_null($foreName) && !is_string($foreName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreName, true), gettype($foreName)), __LINE__);
        }
        $this->foreName = $foreName;
        
        return $this;
    }
    /**
     * Get surName value
     * @return string|null
     */
    public function getSurName(): ?string
    {
        return $this->surName;
    }
    /**
     * Set surName value
     * @param string $surName
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoSalesRequest
     */
    public function setSurName(?string $surName = null): self
    {
        // validation for constraint: string
        if (!is_null($surName) && !is_string($surName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surName, true), gettype($surName)), __LINE__);
        }
        $this->surName = $surName;
        
        return $this;
    }
}
