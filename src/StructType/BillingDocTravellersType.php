<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDocTravellersType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingDocTravellersType extends AbstractStructBase
{
    /**
     * The index
     * @var int|null
     */
    protected ?int $index = null;
    /**
     * The travellerForename
     * @var string|null
     */
    protected ?string $travellerForename = null;
    /**
     * The travellerSurname
     * @var string|null
     */
    protected ?string $travellerSurname = null;
    /**
     * The travellerId
     * @var string|null
     */
    protected ?string $travellerId = null;
    /**
     * Constructor method for BillingDocTravellersType
     * @uses BillingDocTravellersType::setIndex()
     * @uses BillingDocTravellersType::setTravellerForename()
     * @uses BillingDocTravellersType::setTravellerSurname()
     * @uses BillingDocTravellersType::setTravellerId()
     * @param int $index
     * @param string $travellerForename
     * @param string $travellerSurname
     * @param string $travellerId
     */
    public function __construct(?int $index = null, ?string $travellerForename = null, ?string $travellerSurname = null, ?string $travellerId = null)
    {
        $this
            ->setIndex($index)
            ->setTravellerForename($travellerForename)
            ->setTravellerSurname($travellerSurname)
            ->setTravellerId($travellerId);
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocTravellersType
     */
    public function setIndex(?int $index = null): self
    {
        // validation for constraint: int
        if (!is_null($index) && !(is_int($index) || ctype_digit($index))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($index, true), gettype($index)), __LINE__);
        }
        $this->index = $index;
        
        return $this;
    }
    /**
     * Get travellerForename value
     * @return string|null
     */
    public function getTravellerForename(): ?string
    {
        return $this->travellerForename;
    }
    /**
     * Set travellerForename value
     * @param string $travellerForename
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocTravellersType
     */
    public function setTravellerForename(?string $travellerForename = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerForename) && !is_string($travellerForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerForename, true), gettype($travellerForename)), __LINE__);
        }
        $this->travellerForename = $travellerForename;
        
        return $this;
    }
    /**
     * Get travellerSurname value
     * @return string|null
     */
    public function getTravellerSurname(): ?string
    {
        return $this->travellerSurname;
    }
    /**
     * Set travellerSurname value
     * @param string $travellerSurname
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocTravellersType
     */
    public function setTravellerSurname(?string $travellerSurname = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerSurname) && !is_string($travellerSurname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerSurname, true), gettype($travellerSurname)), __LINE__);
        }
        $this->travellerSurname = $travellerSurname;
        
        return $this;
    }
    /**
     * Get travellerId value
     * @return string|null
     */
    public function getTravellerId(): ?string
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param string $travellerId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocTravellersType
     */
    public function setTravellerId(?string $travellerId = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerId) && !is_string($travellerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
}
