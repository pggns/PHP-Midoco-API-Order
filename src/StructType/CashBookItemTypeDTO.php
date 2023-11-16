<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookItemTypeDTO StructType
 * @subpackage Structs
 */
class CashBookItemTypeDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The articleType
     * @var string|null
     */
    protected ?string $articleType = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The isExpense
     * @var bool|null
     */
    protected ?bool $isExpense = null;
    /**
     * The manuallyAdjustable
     * @var bool|null
     */
    protected ?bool $manuallyAdjustable = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * Constructor method for CashBookItemTypeDTO
     * @uses CashBookItemTypeDTO::setAccountId()
     * @uses CashBookItemTypeDTO::setArticleType()
     * @uses CashBookItemTypeDTO::setDescription()
     * @uses CashBookItemTypeDTO::setIsExpense()
     * @uses CashBookItemTypeDTO::setManuallyAdjustable()
     * @uses CashBookItemTypeDTO::setTypeId()
     * @uses CashBookItemTypeDTO::setVatCode()
     * @param string $accountId
     * @param string $articleType
     * @param string $description
     * @param bool $isExpense
     * @param bool $manuallyAdjustable
     * @param string $typeId
     * @param string $vatCode
     */
    public function __construct(?string $accountId = null, ?string $articleType = null, ?string $description = null, ?bool $isExpense = null, ?bool $manuallyAdjustable = null, ?string $typeId = null, ?string $vatCode = null)
    {
        $this
            ->setAccountId($accountId)
            ->setArticleType($articleType)
            ->setDescription($description)
            ->setIsExpense($isExpense)
            ->setManuallyAdjustable($manuallyAdjustable)
            ->setTypeId($typeId)
            ->setVatCode($vatCode);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookItemTypeDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get articleType value
     * @return string|null
     */
    public function getArticleType(): ?string
    {
        return $this->articleType;
    }
    /**
     * Set articleType value
     * @param string $articleType
     * @return \Pggns\MidocoApi\Order\StructType\CashBookItemTypeDTO
     */
    public function setArticleType(?string $articleType = null): self
    {
        // validation for constraint: string
        if (!is_null($articleType) && !is_string($articleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($articleType, true), gettype($articleType)), __LINE__);
        }
        $this->articleType = $articleType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookItemTypeDTO
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
     * Get isExpense value
     * @return bool|null
     */
    public function getIsExpense(): ?bool
    {
        return $this->isExpense;
    }
    /**
     * Set isExpense value
     * @param bool $isExpense
     * @return \Pggns\MidocoApi\Order\StructType\CashBookItemTypeDTO
     */
    public function setIsExpense(?bool $isExpense = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExpense) && !is_bool($isExpense)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExpense, true), gettype($isExpense)), __LINE__);
        }
        $this->isExpense = $isExpense;
        
        return $this;
    }
    /**
     * Get manuallyAdjustable value
     * @return bool|null
     */
    public function getManuallyAdjustable(): ?bool
    {
        return $this->manuallyAdjustable;
    }
    /**
     * Set manuallyAdjustable value
     * @param bool $manuallyAdjustable
     * @return \Pggns\MidocoApi\Order\StructType\CashBookItemTypeDTO
     */
    public function setManuallyAdjustable(?bool $manuallyAdjustable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyAdjustable) && !is_bool($manuallyAdjustable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyAdjustable, true), gettype($manuallyAdjustable)), __LINE__);
        }
        $this->manuallyAdjustable = $manuallyAdjustable;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookItemTypeDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\CashBookItemTypeDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
}
