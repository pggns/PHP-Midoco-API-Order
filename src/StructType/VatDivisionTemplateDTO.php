<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatDivisionTemplateDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VatDivisionTemplateDTO extends AbstractStructBase
{
    /**
     * The active
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The changeable
     * @var bool|null
     */
    protected ?bool $changeable = null;
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
     * The forInvoicing
     * @var bool|null
     */
    protected ?bool $forInvoicing = null;
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
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The vatDivTemplId
     * @var int|null
     */
    protected ?int $vatDivTemplId = null;
    /**
     * The vatSchemaId
     * @var int|null
     */
    protected ?int $vatSchemaId = null;
    /**
     * Constructor method for VatDivisionTemplateDTO
     * @uses VatDivisionTemplateDTO::setActive()
     * @uses VatDivisionTemplateDTO::setChangeable()
     * @uses VatDivisionTemplateDTO::setCreationDate()
     * @uses VatDivisionTemplateDTO::setCreationUser()
     * @uses VatDivisionTemplateDTO::setForInvoicing()
     * @uses VatDivisionTemplateDTO::setModifyDate()
     * @uses VatDivisionTemplateDTO::setModifyUser()
     * @uses VatDivisionTemplateDTO::setName()
     * @uses VatDivisionTemplateDTO::setSettlementType()
     * @uses VatDivisionTemplateDTO::setVatDivTemplId()
     * @uses VatDivisionTemplateDTO::setVatSchemaId()
     * @param bool $active
     * @param bool $changeable
     * @param string $creationDate
     * @param int $creationUser
     * @param bool $forInvoicing
     * @param string $modifyDate
     * @param int $modifyUser
     * @param string $name
     * @param string $settlementType
     * @param int $vatDivTemplId
     * @param int $vatSchemaId
     */
    public function __construct(?bool $active = null, ?bool $changeable = null, ?string $creationDate = null, ?int $creationUser = null, ?bool $forInvoicing = null, ?string $modifyDate = null, ?int $modifyUser = null, ?string $name = null, ?string $settlementType = null, ?int $vatDivTemplId = null, ?int $vatSchemaId = null)
    {
        $this
            ->setActive($active)
            ->setChangeable($changeable)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setForInvoicing($forInvoicing)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setName($name)
            ->setSettlementType($settlementType)
            ->setVatDivTemplId($vatDivTemplId)
            ->setVatSchemaId($vatSchemaId);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
    /**
     * Get changeable value
     * @return bool|null
     */
    public function getChangeable(): ?bool
    {
        return $this->changeable;
    }
    /**
     * Set changeable value
     * @param bool $changeable
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
     */
    public function setChangeable(?bool $changeable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($changeable) && !is_bool($changeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($changeable, true), gettype($changeable)), __LINE__);
        }
        $this->changeable = $changeable;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
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
     * Get forInvoicing value
     * @return bool|null
     */
    public function getForInvoicing(): ?bool
    {
        return $this->forInvoicing;
    }
    /**
     * Set forInvoicing value
     * @param bool $forInvoicing
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
     */
    public function setForInvoicing(?bool $forInvoicing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forInvoicing) && !is_bool($forInvoicing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forInvoicing, true), gettype($forInvoicing)), __LINE__);
        }
        $this->forInvoicing = $forInvoicing;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get vatDivTemplId value
     * @return int|null
     */
    public function getVatDivTemplId(): ?int
    {
        return $this->vatDivTemplId;
    }
    /**
     * Set vatDivTemplId value
     * @param int $vatDivTemplId
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
     */
    public function setVatDivTemplId(?int $vatDivTemplId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivTemplId) && !(is_int($vatDivTemplId) || ctype_digit($vatDivTemplId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivTemplId, true), gettype($vatDivTemplId)), __LINE__);
        }
        $this->vatDivTemplId = $vatDivTemplId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateDTO
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
