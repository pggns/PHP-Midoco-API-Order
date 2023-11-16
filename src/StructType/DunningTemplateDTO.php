<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DunningTemplateDTO StructType
 * @subpackage Structs
 */
class DunningTemplateDTO extends AbstractStructBase
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
     * The dunningTemplateId
     * @var int|null
     */
    protected ?int $dunningTemplateId = null;
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
     * The senderEmail
     * @var string|null
     */
    protected ?string $senderEmail = null;
    /**
     * Constructor method for DunningTemplateDTO
     * @uses DunningTemplateDTO::setCreationDate()
     * @uses DunningTemplateDTO::setCreationUser()
     * @uses DunningTemplateDTO::setDunningTemplateId()
     * @uses DunningTemplateDTO::setModifyDate()
     * @uses DunningTemplateDTO::setModifyUser()
     * @uses DunningTemplateDTO::setName()
     * @uses DunningTemplateDTO::setSenderEmail()
     * @param string $creationDate
     * @param int $creationUser
     * @param int $dunningTemplateId
     * @param string $modifyDate
     * @param int $modifyUser
     * @param string $name
     * @param string $senderEmail
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?int $dunningTemplateId = null, ?string $modifyDate = null, ?int $modifyUser = null, ?string $name = null, ?string $senderEmail = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDunningTemplateId($dunningTemplateId)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setName($name)
            ->setSenderEmail($senderEmail);
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateDTO
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
     * Get dunningTemplateId value
     * @return int|null
     */
    public function getDunningTemplateId(): ?int
    {
        return $this->dunningTemplateId;
    }
    /**
     * Set dunningTemplateId value
     * @param int $dunningTemplateId
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateDTO
     */
    public function setDunningTemplateId(?int $dunningTemplateId = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningTemplateId) && !(is_int($dunningTemplateId) || ctype_digit($dunningTemplateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningTemplateId, true), gettype($dunningTemplateId)), __LINE__);
        }
        $this->dunningTemplateId = $dunningTemplateId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateDTO
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
     * Get senderEmail value
     * @return string|null
     */
    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }
    /**
     * Set senderEmail value
     * @param string $senderEmail
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateDTO
     */
    public function setSenderEmail(?string $senderEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmail, true), gettype($senderEmail)), __LINE__);
        }
        $this->senderEmail = $senderEmail;
        
        return $this;
    }
}
