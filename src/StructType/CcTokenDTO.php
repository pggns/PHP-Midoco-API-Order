<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcTokenDTO StructType
 * @subpackage Structs
 */
class CcTokenDTO extends AbstractStructBase
{
    /**
     * The ccOwner
     * @var string|null
     */
    protected ?string $ccOwner = null;
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The ccTokenSkills
     * @var int|null
     */
    protected ?int $ccTokenSkills = null;
    /**
     * The ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccValidMonth
     * @var int|null
     */
    protected ?int $ccValidMonth = null;
    /**
     * The ccValidYear
     * @var int|null
     */
    protected ?int $ccValidYear = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * Constructor method for CcTokenDTO
     * @uses CcTokenDTO::setCcOwner()
     * @uses CcTokenDTO::setCcToken()
     * @uses CcTokenDTO::setCcTokenSkills()
     * @uses CcTokenDTO::setCcTokenType()
     * @uses CcTokenDTO::setCcType()
     * @uses CcTokenDTO::setCcValidMonth()
     * @uses CcTokenDTO::setCcValidYear()
     * @uses CcTokenDTO::setCreationTimestamp()
     * @uses CcTokenDTO::setId()
     * @uses CcTokenDTO::setIsRecurring()
     * @param string $ccOwner
     * @param string $ccToken
     * @param int $ccTokenSkills
     * @param string $ccTokenType
     * @param string $ccType
     * @param int $ccValidMonth
     * @param int $ccValidYear
     * @param string $creationTimestamp
     * @param int $id
     * @param bool $isRecurring
     */
    public function __construct(?string $ccOwner = null, ?string $ccToken = null, ?int $ccTokenSkills = null, ?string $ccTokenType = null, ?string $ccType = null, ?int $ccValidMonth = null, ?int $ccValidYear = null, ?string $creationTimestamp = null, ?int $id = null, ?bool $isRecurring = null)
    {
        $this
            ->setCcOwner($ccOwner)
            ->setCcToken($ccToken)
            ->setCcTokenSkills($ccTokenSkills)
            ->setCcTokenType($ccTokenType)
            ->setCcType($ccType)
            ->setCcValidMonth($ccValidMonth)
            ->setCcValidYear($ccValidYear)
            ->setCreationTimestamp($creationTimestamp)
            ->setId($id)
            ->setIsRecurring($isRecurring);
    }
    /**
     * Get ccOwner value
     * @return string|null
     */
    public function getCcOwner(): ?string
    {
        return $this->ccOwner;
    }
    /**
     * Set ccOwner value
     * @param string $ccOwner
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCcOwner(?string $ccOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($ccOwner) && !is_string($ccOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccOwner, true), gettype($ccOwner)), __LINE__);
        }
        $this->ccOwner = $ccOwner;
        
        return $this;
    }
    /**
     * Get ccToken value
     * @return string|null
     */
    public function getCcToken(): ?string
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param string $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCcToken(?string $ccToken = null): self
    {
        // validation for constraint: string
        if (!is_null($ccToken) && !is_string($ccToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccToken, true), gettype($ccToken)), __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get ccTokenSkills value
     * @return int|null
     */
    public function getCcTokenSkills(): ?int
    {
        return $this->ccTokenSkills;
    }
    /**
     * Set ccTokenSkills value
     * @param int $ccTokenSkills
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCcTokenSkills(?int $ccTokenSkills = null): self
    {
        // validation for constraint: int
        if (!is_null($ccTokenSkills) && !(is_int($ccTokenSkills) || ctype_digit($ccTokenSkills))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccTokenSkills, true), gettype($ccTokenSkills)), __LINE__);
        }
        $this->ccTokenSkills = $ccTokenSkills;
        
        return $this;
    }
    /**
     * Get ccTokenType value
     * @return string|null
     */
    public function getCcTokenType(): ?string
    {
        return $this->ccTokenType;
    }
    /**
     * Set ccTokenType value
     * @param string $ccTokenType
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCcTokenType(?string $ccTokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTokenType) && !is_string($ccTokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTokenType, true), gettype($ccTokenType)), __LINE__);
        }
        $this->ccTokenType = $ccTokenType;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get ccValidMonth value
     * @return int|null
     */
    public function getCcValidMonth(): ?int
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param int $ccValidMonth
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCcValidMonth(?int $ccValidMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidMonth) && !(is_int($ccValidMonth) || ctype_digit($ccValidMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get ccValidYear value
     * @return int|null
     */
    public function getCcValidYear(): ?int
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param int $ccValidYear
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCcValidYear(?int $ccValidYear = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidYear) && !(is_int($ccValidYear) || ctype_digit($ccValidYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
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
     * Get isRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }
    /**
     * Set isRecurring value
     * @param bool $isRecurring
     * @return \Pggns\MidocoApi\Order\StructType\CcTokenDTO
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->isRecurring = $isRecurring;
        
        return $this;
    }
}
