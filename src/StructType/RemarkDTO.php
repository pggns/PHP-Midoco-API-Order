<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemarkDTO extends AbstractStructBase
{
    /**
     * The categoryId
     * @var string|null
     */
    protected ?string $categoryId = null;
    /**
     * The constraintOrgunit
     * @var bool|null
     */
    protected ?bool $constraintOrgunit = null;
    /**
     * The constraintSupplier
     * @var bool|null
     */
    protected ?bool $constraintSupplier = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The enableTask
     * @var bool|null
     */
    protected ?bool $enableTask = null;
    /**
     * The flightTimeChange
     * @var bool|null
     */
    protected ?bool $flightTimeChange = null;
    /**
     * The longDescription
     * @var string|null
     */
    protected ?string $longDescription = null;
    /**
     * The shortId
     * @var string|null
     */
    protected ?string $shortId = null;
    /**
     * The useInAdditService
     * @var bool|null
     */
    protected ?bool $useInAdditService = null;
    /**
     * The useInEmail
     * @var bool|null
     */
    protected ?bool $useInEmail = null;
    /**
     * The useInNotice
     * @var bool|null
     */
    protected ?bool $useInNotice = null;
    /**
     * The useInOrder
     * @var bool|null
     */
    protected ?bool $useInOrder = null;
    /**
     * The useInService
     * @var bool|null
     */
    protected ?bool $useInService = null;
    /**
     * The useInVerk
     * @var bool|null
     */
    protected ?bool $useInVerk = null;
    /**
     * Constructor method for RemarkDTO
     * @uses RemarkDTO::setCategoryId()
     * @uses RemarkDTO::setConstraintOrgunit()
     * @uses RemarkDTO::setConstraintSupplier()
     * @uses RemarkDTO::setCultureId()
     * @uses RemarkDTO::setEnableTask()
     * @uses RemarkDTO::setFlightTimeChange()
     * @uses RemarkDTO::setLongDescription()
     * @uses RemarkDTO::setShortId()
     * @uses RemarkDTO::setUseInAdditService()
     * @uses RemarkDTO::setUseInEmail()
     * @uses RemarkDTO::setUseInNotice()
     * @uses RemarkDTO::setUseInOrder()
     * @uses RemarkDTO::setUseInService()
     * @uses RemarkDTO::setUseInVerk()
     * @param string $categoryId
     * @param bool $constraintOrgunit
     * @param bool $constraintSupplier
     * @param string $cultureId
     * @param bool $enableTask
     * @param bool $flightTimeChange
     * @param string $longDescription
     * @param string $shortId
     * @param bool $useInAdditService
     * @param bool $useInEmail
     * @param bool $useInNotice
     * @param bool $useInOrder
     * @param bool $useInService
     * @param bool $useInVerk
     */
    public function __construct(?string $categoryId = null, ?bool $constraintOrgunit = null, ?bool $constraintSupplier = null, ?string $cultureId = null, ?bool $enableTask = null, ?bool $flightTimeChange = null, ?string $longDescription = null, ?string $shortId = null, ?bool $useInAdditService = null, ?bool $useInEmail = null, ?bool $useInNotice = null, ?bool $useInOrder = null, ?bool $useInService = null, ?bool $useInVerk = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setConstraintOrgunit($constraintOrgunit)
            ->setConstraintSupplier($constraintSupplier)
            ->setCultureId($cultureId)
            ->setEnableTask($enableTask)
            ->setFlightTimeChange($flightTimeChange)
            ->setLongDescription($longDescription)
            ->setShortId($shortId)
            ->setUseInAdditService($useInAdditService)
            ->setUseInEmail($useInEmail)
            ->setUseInNotice($useInNotice)
            ->setUseInOrder($useInOrder)
            ->setUseInService($useInService)
            ->setUseInVerk($useInVerk);
    }
    /**
     * Get categoryId value
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param string $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setCategoryId(?string $categoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryId) && !is_string($categoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get constraintOrgunit value
     * @return bool|null
     */
    public function getConstraintOrgunit(): ?bool
    {
        return $this->constraintOrgunit;
    }
    /**
     * Set constraintOrgunit value
     * @param bool $constraintOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setConstraintOrgunit(?bool $constraintOrgunit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($constraintOrgunit) && !is_bool($constraintOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($constraintOrgunit, true), gettype($constraintOrgunit)), __LINE__);
        }
        $this->constraintOrgunit = $constraintOrgunit;
        
        return $this;
    }
    /**
     * Get constraintSupplier value
     * @return bool|null
     */
    public function getConstraintSupplier(): ?bool
    {
        return $this->constraintSupplier;
    }
    /**
     * Set constraintSupplier value
     * @param bool $constraintSupplier
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setConstraintSupplier(?bool $constraintSupplier = null): self
    {
        // validation for constraint: boolean
        if (!is_null($constraintSupplier) && !is_bool($constraintSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($constraintSupplier, true), gettype($constraintSupplier)), __LINE__);
        }
        $this->constraintSupplier = $constraintSupplier;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get enableTask value
     * @return bool|null
     */
    public function getEnableTask(): ?bool
    {
        return $this->enableTask;
    }
    /**
     * Set enableTask value
     * @param bool $enableTask
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setEnableTask(?bool $enableTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableTask) && !is_bool($enableTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableTask, true), gettype($enableTask)), __LINE__);
        }
        $this->enableTask = $enableTask;
        
        return $this;
    }
    /**
     * Get flightTimeChange value
     * @return bool|null
     */
    public function getFlightTimeChange(): ?bool
    {
        return $this->flightTimeChange;
    }
    /**
     * Set flightTimeChange value
     * @param bool $flightTimeChange
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setFlightTimeChange(?bool $flightTimeChange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flightTimeChange) && !is_bool($flightTimeChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flightTimeChange, true), gettype($flightTimeChange)), __LINE__);
        }
        $this->flightTimeChange = $flightTimeChange;
        
        return $this;
    }
    /**
     * Get longDescription value
     * @return string|null
     */
    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }
    /**
     * Set longDescription value
     * @param string $longDescription
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setLongDescription(?string $longDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($longDescription) && !is_string($longDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longDescription, true), gettype($longDescription)), __LINE__);
        }
        $this->longDescription = $longDescription;
        
        return $this;
    }
    /**
     * Get shortId value
     * @return string|null
     */
    public function getShortId(): ?string
    {
        return $this->shortId;
    }
    /**
     * Set shortId value
     * @param string $shortId
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setShortId(?string $shortId = null): self
    {
        // validation for constraint: string
        if (!is_null($shortId) && !is_string($shortId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortId, true), gettype($shortId)), __LINE__);
        }
        $this->shortId = $shortId;
        
        return $this;
    }
    /**
     * Get useInAdditService value
     * @return bool|null
     */
    public function getUseInAdditService(): ?bool
    {
        return $this->useInAdditService;
    }
    /**
     * Set useInAdditService value
     * @param bool $useInAdditService
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setUseInAdditService(?bool $useInAdditService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInAdditService) && !is_bool($useInAdditService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInAdditService, true), gettype($useInAdditService)), __LINE__);
        }
        $this->useInAdditService = $useInAdditService;
        
        return $this;
    }
    /**
     * Get useInEmail value
     * @return bool|null
     */
    public function getUseInEmail(): ?bool
    {
        return $this->useInEmail;
    }
    /**
     * Set useInEmail value
     * @param bool $useInEmail
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setUseInEmail(?bool $useInEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInEmail) && !is_bool($useInEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInEmail, true), gettype($useInEmail)), __LINE__);
        }
        $this->useInEmail = $useInEmail;
        
        return $this;
    }
    /**
     * Get useInNotice value
     * @return bool|null
     */
    public function getUseInNotice(): ?bool
    {
        return $this->useInNotice;
    }
    /**
     * Set useInNotice value
     * @param bool $useInNotice
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setUseInNotice(?bool $useInNotice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInNotice) && !is_bool($useInNotice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInNotice, true), gettype($useInNotice)), __LINE__);
        }
        $this->useInNotice = $useInNotice;
        
        return $this;
    }
    /**
     * Get useInOrder value
     * @return bool|null
     */
    public function getUseInOrder(): ?bool
    {
        return $this->useInOrder;
    }
    /**
     * Set useInOrder value
     * @param bool $useInOrder
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setUseInOrder(?bool $useInOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInOrder) && !is_bool($useInOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInOrder, true), gettype($useInOrder)), __LINE__);
        }
        $this->useInOrder = $useInOrder;
        
        return $this;
    }
    /**
     * Get useInService value
     * @return bool|null
     */
    public function getUseInService(): ?bool
    {
        return $this->useInService;
    }
    /**
     * Set useInService value
     * @param bool $useInService
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setUseInService(?bool $useInService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInService) && !is_bool($useInService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInService, true), gettype($useInService)), __LINE__);
        }
        $this->useInService = $useInService;
        
        return $this;
    }
    /**
     * Get useInVerk value
     * @return bool|null
     */
    public function getUseInVerk(): ?bool
    {
        return $this->useInVerk;
    }
    /**
     * Set useInVerk value
     * @param bool $useInVerk
     * @return \Pggns\MidocoApi\Order\StructType\RemarkDTO
     */
    public function setUseInVerk(?bool $useInVerk = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInVerk) && !is_bool($useInVerk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInVerk, true), gettype($useInVerk)), __LINE__);
        }
        $this->useInVerk = $useInVerk;
        
        return $this;
    }
}
