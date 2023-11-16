<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusAdditionDTO StructType
 * @subpackage Structs
 */
class BonusAdditionDTO extends AbstractStructBase
{
    /**
     * The additionId
     * @var int|null
     */
    protected ?int $additionId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for BonusAdditionDTO
     * @uses BonusAdditionDTO::setAdditionId()
     * @uses BonusAdditionDTO::setAmount()
     * @uses BonusAdditionDTO::setBonusId()
     * @uses BonusAdditionDTO::setDescription()
     * @uses BonusAdditionDTO::setUserId()
     * @param int $additionId
     * @param float $amount
     * @param int $bonusId
     * @param string $description
     * @param int $userId
     */
    public function __construct(?int $additionId = null, ?float $amount = null, ?int $bonusId = null, ?string $description = null, ?int $userId = null)
    {
        $this
            ->setAdditionId($additionId)
            ->setAmount($amount)
            ->setBonusId($bonusId)
            ->setDescription($description)
            ->setUserId($userId);
    }
    /**
     * Get additionId value
     * @return int|null
     */
    public function getAdditionId(): ?int
    {
        return $this->additionId;
    }
    /**
     * Set additionId value
     * @param int $additionId
     * @return \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO
     */
    public function setAdditionId(?int $additionId = null): self
    {
        // validation for constraint: int
        if (!is_null($additionId) && !(is_int($additionId) || ctype_digit($additionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($additionId, true), gettype($additionId)), __LINE__);
        }
        $this->additionId = $additionId;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
