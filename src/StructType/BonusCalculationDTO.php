<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusCalculationDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BonusCalculationDTO extends AbstractStructBase
{
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The calculationBase
     * @var string|null
     */
    protected ?string $calculationBase = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The isFinished
     * @var bool|null
     */
    protected ?bool $isFinished = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * Constructor method for BonusCalculationDTO
     * @uses BonusCalculationDTO::setBonusId()
     * @uses BonusCalculationDTO::setCalculationBase()
     * @uses BonusCalculationDTO::setCreationDate()
     * @uses BonusCalculationDTO::setCreationUser()
     * @uses BonusCalculationDTO::setDescription()
     * @uses BonusCalculationDTO::setEndDate()
     * @uses BonusCalculationDTO::setIsFinished()
     * @uses BonusCalculationDTO::setStartDate()
     * @param int $bonusId
     * @param string $calculationBase
     * @param string $creationDate
     * @param int $creationUser
     * @param string $description
     * @param string $endDate
     * @param bool $isFinished
     * @param string $startDate
     */
    public function __construct(?int $bonusId = null, ?string $calculationBase = null, ?string $creationDate = null, ?int $creationUser = null, ?string $description = null, ?string $endDate = null, ?bool $isFinished = null, ?string $startDate = null)
    {
        $this
            ->setBonusId($bonusId)
            ->setCalculationBase($calculationBase)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setEndDate($endDate)
            ->setIsFinished($isFinished)
            ->setStartDate($startDate);
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
        return $this;
    }
    /**
     * Get calculationBase value
     * @return string|null
     */
    public function getCalculationBase(): ?string
    {
        return $this->calculationBase;
    }
    /**
     * Set calculationBase value
     * @param string $calculationBase
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
     */
    public function setCalculationBase(?string $calculationBase = null): self
    {
        // validation for constraint: string
        if (!is_null($calculationBase) && !is_string($calculationBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculationBase, true), gettype($calculationBase)), __LINE__);
        }
        $this->calculationBase = $calculationBase;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
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
     * Get isFinished value
     * @return bool|null
     */
    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }
    /**
     * Set isFinished value
     * @param bool $isFinished
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
     */
    public function setIsFinished(?bool $isFinished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFinished) && !is_bool($isFinished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFinished, true), gettype($isFinished)), __LINE__);
        }
        $this->isFinished = $isFinished;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusCalculationDTO
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
}
