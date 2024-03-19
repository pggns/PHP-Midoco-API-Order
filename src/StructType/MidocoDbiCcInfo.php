<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDbiCcInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDbiCcInfo extends AbstractStructBase
{
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccPublisherId
     * @var string|null
     */
    protected ?string $ccPublisherId = null;
    /**
     * The ccMaskNo
     * @var string|null
     */
    protected ?string $ccMaskNo = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * Constructor method for MidocoDbiCcInfo
     * @uses MidocoDbiCcInfo::setCcToken()
     * @uses MidocoDbiCcInfo::setCcTokenType()
     * @uses MidocoDbiCcInfo::setCcNo()
     * @uses MidocoDbiCcInfo::setCcType()
     * @uses MidocoDbiCcInfo::setCcPublisherId()
     * @uses MidocoDbiCcInfo::setCcMaskNo()
     * @uses MidocoDbiCcInfo::setIsRecurring()
     * @param string $ccToken
     * @param string $ccTokenType
     * @param string $ccNo
     * @param string $ccType
     * @param string $ccPublisherId
     * @param string $ccMaskNo
     * @param bool $isRecurring
     */
    public function __construct(?string $ccToken = null, ?string $ccTokenType = null, ?string $ccNo = null, ?string $ccType = null, ?string $ccPublisherId = null, ?string $ccMaskNo = null, ?bool $isRecurring = null)
    {
        $this
            ->setCcToken($ccToken)
            ->setCcTokenType($ccTokenType)
            ->setCcNo($ccNo)
            ->setCcType($ccType)
            ->setCcPublisherId($ccPublisherId)
            ->setCcMaskNo($ccMaskNo)
            ->setIsRecurring($isRecurring);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiCcInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiCcInfo
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
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiCcInfo
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiCcInfo
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
     * Get ccPublisherId value
     * @return string|null
     */
    public function getCcPublisherId(): ?string
    {
        return $this->ccPublisherId;
    }
    /**
     * Set ccPublisherId value
     * @param string $ccPublisherId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiCcInfo
     */
    public function setCcPublisherId(?string $ccPublisherId = null): self
    {
        // validation for constraint: string
        if (!is_null($ccPublisherId) && !is_string($ccPublisherId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccPublisherId, true), gettype($ccPublisherId)), __LINE__);
        }
        $this->ccPublisherId = $ccPublisherId;
        
        return $this;
    }
    /**
     * Get ccMaskNo value
     * @return string|null
     */
    public function getCcMaskNo(): ?string
    {
        return $this->ccMaskNo;
    }
    /**
     * Set ccMaskNo value
     * @param string $ccMaskNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiCcInfo
     */
    public function setCcMaskNo(?string $ccMaskNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccMaskNo) && !is_string($ccMaskNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccMaskNo, true), gettype($ccMaskNo)), __LINE__);
        }
        $this->ccMaskNo = $ccMaskNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiCcInfo
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
