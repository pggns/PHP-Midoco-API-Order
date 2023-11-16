<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatAccountSchemaDTO StructType
 * @subpackage Structs
 */
class VatAccountSchemaDTO extends AbstractStructBase
{
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
     * The isDefault
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The isDefaultOtherB2c
     * @var bool|null
     */
    protected ?bool $isDefaultOtherB2c = null;
    /**
     * The isDefaultOwnAccount
     * @var bool|null
     */
    protected ?bool $isDefaultOwnAccount = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The schemaName
     * @var string|null
     */
    protected ?string $schemaName = null;
    /**
     * The vatSchemaId
     * @var int|null
     */
    protected ?int $vatSchemaId = null;
    /**
     * Constructor method for VatAccountSchemaDTO
     * @uses VatAccountSchemaDTO::setCreationDate()
     * @uses VatAccountSchemaDTO::setCreationUser()
     * @uses VatAccountSchemaDTO::setIsDefault()
     * @uses VatAccountSchemaDTO::setIsDefaultOtherB2c()
     * @uses VatAccountSchemaDTO::setIsDefaultOwnAccount()
     * @uses VatAccountSchemaDTO::setModifyDate()
     * @uses VatAccountSchemaDTO::setModifyUser()
     * @uses VatAccountSchemaDTO::setSchemaName()
     * @uses VatAccountSchemaDTO::setVatSchemaId()
     * @param string $creationDate
     * @param int $creationUser
     * @param bool $isDefault
     * @param bool $isDefaultOtherB2c
     * @param bool $isDefaultOwnAccount
     * @param string $modifyDate
     * @param int $modifyUser
     * @param string $schemaName
     * @param int $vatSchemaId
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?bool $isDefault = null, ?bool $isDefaultOtherB2c = null, ?bool $isDefaultOwnAccount = null, ?string $modifyDate = null, ?int $modifyUser = null, ?string $schemaName = null, ?int $vatSchemaId = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setIsDefault($isDefault)
            ->setIsDefaultOtherB2c($isDefaultOtherB2c)
            ->setIsDefaultOwnAccount($isDefaultOwnAccount)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setSchemaName($schemaName)
            ->setVatSchemaId($vatSchemaId);
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
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
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
     * Get isDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param bool $isDefault
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->isDefault = $isDefault;
        
        return $this;
    }
    /**
     * Get isDefaultOtherB2c value
     * @return bool|null
     */
    public function getIsDefaultOtherB2c(): ?bool
    {
        return $this->isDefaultOtherB2c;
    }
    /**
     * Set isDefaultOtherB2c value
     * @param bool $isDefaultOtherB2c
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
     */
    public function setIsDefaultOtherB2c(?bool $isDefaultOtherB2c = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefaultOtherB2c) && !is_bool($isDefaultOtherB2c)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefaultOtherB2c, true), gettype($isDefaultOtherB2c)), __LINE__);
        }
        $this->isDefaultOtherB2c = $isDefaultOtherB2c;
        
        return $this;
    }
    /**
     * Get isDefaultOwnAccount value
     * @return bool|null
     */
    public function getIsDefaultOwnAccount(): ?bool
    {
        return $this->isDefaultOwnAccount;
    }
    /**
     * Set isDefaultOwnAccount value
     * @param bool $isDefaultOwnAccount
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
     */
    public function setIsDefaultOwnAccount(?bool $isDefaultOwnAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefaultOwnAccount) && !is_bool($isDefaultOwnAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefaultOwnAccount, true), gettype($isDefaultOwnAccount)), __LINE__);
        }
        $this->isDefaultOwnAccount = $isDefaultOwnAccount;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get schemaName value
     * @return string|null
     */
    public function getSchemaName(): ?string
    {
        return $this->schemaName;
    }
    /**
     * Set schemaName value
     * @param string $schemaName
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
     */
    public function setSchemaName(?string $schemaName = null): self
    {
        // validation for constraint: string
        if (!is_null($schemaName) && !is_string($schemaName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($schemaName, true), gettype($schemaName)), __LINE__);
        }
        $this->schemaName = $schemaName;
        
        return $this;
    }
    /**
     * Get vatSchemaId value
     * @return int|null
     */
    public function getVatSchemaId(): ?int
    {
        return $this->vatSchemaId;
    }
    /**
     * Set vatSchemaId value
     * @param int $vatSchemaId
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountSchemaDTO
     */
    public function setVatSchemaId(?int $vatSchemaId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatSchemaId) && !(is_int($vatSchemaId) || ctype_digit($vatSchemaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatSchemaId, true), gettype($vatSchemaId)), __LINE__);
        }
        $this->vatSchemaId = $vatSchemaId;
        
        return $this;
    }
}
