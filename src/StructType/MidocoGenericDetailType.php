<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGenericDetailType StructType
 * @subpackage Structs
 */
class MidocoGenericDetailType extends GenericDetailDTO
{
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The paxAssigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paxAssigned = null;
    /**
     * The personsPerService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $personsPerService = null;
    /**
     * Constructor method for MidocoGenericDetailType
     * @uses MidocoGenericDetailType::setStartDate()
     * @uses MidocoGenericDetailType::setEndDate()
     * @uses MidocoGenericDetailType::setStatus()
     * @uses MidocoGenericDetailType::setPaxAssigned()
     * @uses MidocoGenericDetailType::setPersonsPerService()
     * @param string $startDate
     * @param string $endDate
     * @param string $status
     * @param string $paxAssigned
     * @param int $personsPerService
     */
    public function __construct(?string $startDate = null, ?string $endDate = null, ?string $status = null, ?string $paxAssigned = null, ?int $personsPerService = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setStatus($status)
            ->setPaxAssigned($paxAssigned)
            ->setPersonsPerService($personsPerService);
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get paxAssigned value
     * @return string|null
     */
    public function getPaxAssigned(): ?string
    {
        return $this->paxAssigned;
    }
    /**
     * Set paxAssigned value
     * @param string $paxAssigned
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType
     */
    public function setPaxAssigned(?string $paxAssigned = null): self
    {
        // validation for constraint: string
        if (!is_null($paxAssigned) && !is_string($paxAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxAssigned, true), gettype($paxAssigned)), __LINE__);
        }
        $this->paxAssigned = $paxAssigned;
        
        return $this;
    }
    /**
     * Get personsPerService value
     * @return int|null
     */
    public function getPersonsPerService(): ?int
    {
        return $this->personsPerService;
    }
    /**
     * Set personsPerService value
     * @param int $personsPerService
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGenericDetailType
     */
    public function setPersonsPerService(?int $personsPerService = null): self
    {
        // validation for constraint: int
        if (!is_null($personsPerService) && !(is_int($personsPerService) || ctype_digit($personsPerService))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personsPerService, true), gettype($personsPerService)), __LINE__);
        }
        $this->personsPerService = $personsPerService;
        
        return $this;
    }
}
