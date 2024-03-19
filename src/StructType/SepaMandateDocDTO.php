<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SepaMandateDocDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SepaMandateDocDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
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
     * The mandateDocId
     * @var int|null
     */
    protected ?int $mandateDocId = null;
    /**
     * The mandateId
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * Constructor method for SepaMandateDocDTO
     * @uses SepaMandateDocDTO::setCreationTimestamp()
     * @uses SepaMandateDocDTO::setCreationUser()
     * @uses SepaMandateDocDTO::setDescription()
     * @uses SepaMandateDocDTO::setMandateDocId()
     * @uses SepaMandateDocDTO::setMandateId()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $description
     * @param int $mandateDocId
     * @param int $mandateId
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?string $description = null, ?int $mandateDocId = null, ?int $mandateId = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setMandateDocId($mandateDocId)
            ->setMandateId($mandateId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDocDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDocDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDocDTO
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
     * Get mandateDocId value
     * @return int|null
     */
    public function getMandateDocId(): ?int
    {
        return $this->mandateDocId;
    }
    /**
     * Set mandateDocId value
     * @param int $mandateDocId
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDocDTO
     */
    public function setMandateDocId(?int $mandateDocId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateDocId) && !(is_int($mandateDocId) || ctype_digit($mandateDocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateDocId, true), gettype($mandateDocId)), __LINE__);
        }
        $this->mandateDocId = $mandateDocId;
        
        return $this;
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDocDTO
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
}
