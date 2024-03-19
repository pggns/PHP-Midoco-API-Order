<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerAssignDTO extends AbstractStructBase
{
    /**
     * The assignedCustomer
     * @var int|null
     */
    protected ?int $assignedCustomer = null;
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
     * The originCustomer
     * @var int|null
     */
    protected ?int $originCustomer = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for CustomerAssignDTO
     * @uses CustomerAssignDTO::setAssignedCustomer()
     * @uses CustomerAssignDTO::setCreationDate()
     * @uses CustomerAssignDTO::setCreationUser()
     * @uses CustomerAssignDTO::setOriginCustomer()
     * @uses CustomerAssignDTO::setType()
     * @param int $assignedCustomer
     * @param string $creationDate
     * @param int $creationUser
     * @param int $originCustomer
     * @param int $type
     */
    public function __construct(?int $assignedCustomer = null, ?string $creationDate = null, ?int $creationUser = null, ?int $originCustomer = null, ?int $type = null)
    {
        $this
            ->setAssignedCustomer($assignedCustomer)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setOriginCustomer($originCustomer)
            ->setType($type);
    }
    /**
     * Get assignedCustomer value
     * @return int|null
     */
    public function getAssignedCustomer(): ?int
    {
        return $this->assignedCustomer;
    }
    /**
     * Set assignedCustomer value
     * @param int $assignedCustomer
     * @return \Pggns\MidocoApi\Order\StructType\CustomerAssignDTO
     */
    public function setAssignedCustomer(?int $assignedCustomer = null): self
    {
        // validation for constraint: int
        if (!is_null($assignedCustomer) && !(is_int($assignedCustomer) || ctype_digit($assignedCustomer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assignedCustomer, true), gettype($assignedCustomer)), __LINE__);
        }
        $this->assignedCustomer = $assignedCustomer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerAssignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerAssignDTO
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
     * Get originCustomer value
     * @return int|null
     */
    public function getOriginCustomer(): ?int
    {
        return $this->originCustomer;
    }
    /**
     * Set originCustomer value
     * @param int $originCustomer
     * @return \Pggns\MidocoApi\Order\StructType\CustomerAssignDTO
     */
    public function setOriginCustomer(?int $originCustomer = null): self
    {
        // validation for constraint: int
        if (!is_null($originCustomer) && !(is_int($originCustomer) || ctype_digit($originCustomer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originCustomer, true), gettype($originCustomer)), __LINE__);
        }
        $this->originCustomer = $originCustomer;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Order\StructType\CustomerAssignDTO
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
