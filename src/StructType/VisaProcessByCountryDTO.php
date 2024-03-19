<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VisaProcessByCountryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VisaProcessByCountryDTO extends AbstractStructBase
{
    /**
     * The countryId
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * The countryNeedsVisa
     * @var bool|null
     */
    protected ?bool $countryNeedsVisa = null;
    /**
     * The daysToDueDate
     * @var int|null
     */
    protected ?int $daysToDueDate = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The nextTaskType
     * @var string|null
     */
    protected ?string $nextTaskType = null;
    /**
     * The passDataTo
     * @var string|null
     */
    protected ?string $passDataTo = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * Constructor method for VisaProcessByCountryDTO
     * @uses VisaProcessByCountryDTO::setCountryId()
     * @uses VisaProcessByCountryDTO::setCountryNeedsVisa()
     * @uses VisaProcessByCountryDTO::setDaysToDueDate()
     * @uses VisaProcessByCountryDTO::setDestination()
     * @uses VisaProcessByCountryDTO::setId()
     * @uses VisaProcessByCountryDTO::setNextTaskType()
     * @uses VisaProcessByCountryDTO::setPassDataTo()
     * @uses VisaProcessByCountryDTO::setTaskType()
     * @param string $countryId
     * @param bool $countryNeedsVisa
     * @param int $daysToDueDate
     * @param string $destination
     * @param int $id
     * @param string $nextTaskType
     * @param string $passDataTo
     * @param string $taskType
     */
    public function __construct(?string $countryId = null, ?bool $countryNeedsVisa = null, ?int $daysToDueDate = null, ?string $destination = null, ?int $id = null, ?string $nextTaskType = null, ?string $passDataTo = null, ?string $taskType = null)
    {
        $this
            ->setCountryId($countryId)
            ->setCountryNeedsVisa($countryNeedsVisa)
            ->setDaysToDueDate($daysToDueDate)
            ->setDestination($destination)
            ->setId($id)
            ->setNextTaskType($nextTaskType)
            ->setPassDataTo($passDataTo)
            ->setTaskType($taskType);
    }
    /**
     * Get countryId value
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param string $countryId
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setCountryId(?string $countryId = null): self
    {
        // validation for constraint: string
        if (!is_null($countryId) && !is_string($countryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
        return $this;
    }
    /**
     * Get countryNeedsVisa value
     * @return bool|null
     */
    public function getCountryNeedsVisa(): ?bool
    {
        return $this->countryNeedsVisa;
    }
    /**
     * Set countryNeedsVisa value
     * @param bool $countryNeedsVisa
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setCountryNeedsVisa(?bool $countryNeedsVisa = null): self
    {
        // validation for constraint: boolean
        if (!is_null($countryNeedsVisa) && !is_bool($countryNeedsVisa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($countryNeedsVisa, true), gettype($countryNeedsVisa)), __LINE__);
        }
        $this->countryNeedsVisa = $countryNeedsVisa;
        
        return $this;
    }
    /**
     * Get daysToDueDate value
     * @return int|null
     */
    public function getDaysToDueDate(): ?int
    {
        return $this->daysToDueDate;
    }
    /**
     * Set daysToDueDate value
     * @param int $daysToDueDate
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setDaysToDueDate(?int $daysToDueDate = null): self
    {
        // validation for constraint: int
        if (!is_null($daysToDueDate) && !(is_int($daysToDueDate) || ctype_digit($daysToDueDate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysToDueDate, true), gettype($daysToDueDate)), __LINE__);
        }
        $this->daysToDueDate = $daysToDueDate;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get nextTaskType value
     * @return string|null
     */
    public function getNextTaskType(): ?string
    {
        return $this->nextTaskType;
    }
    /**
     * Set nextTaskType value
     * @param string $nextTaskType
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setNextTaskType(?string $nextTaskType = null): self
    {
        // validation for constraint: string
        if (!is_null($nextTaskType) && !is_string($nextTaskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextTaskType, true), gettype($nextTaskType)), __LINE__);
        }
        $this->nextTaskType = $nextTaskType;
        
        return $this;
    }
    /**
     * Get passDataTo value
     * @return string|null
     */
    public function getPassDataTo(): ?string
    {
        return $this->passDataTo;
    }
    /**
     * Set passDataTo value
     * @param string $passDataTo
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setPassDataTo(?string $passDataTo = null): self
    {
        // validation for constraint: string
        if (!is_null($passDataTo) && !is_string($passDataTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passDataTo, true), gettype($passDataTo)), __LINE__);
        }
        $this->passDataTo = $passDataTo;
        
        return $this;
    }
    /**
     * Get taskType value
     * @return string|null
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }
    /**
     * Set taskType value
     * @param string $taskType
     * @return \Pggns\MidocoApi\Order\StructType\VisaProcessByCountryDTO
     */
    public function setTaskType(?string $taskType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskType) && !is_string($taskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
        return $this;
    }
}
