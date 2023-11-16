<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreCustomerDataDTO StructType
 * @subpackage Structs
 */
class MilesAndMoreCustomerDataDTO extends AbstractStructBase
{
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerNumber
     * @var string|null
     */
    protected ?string $customerNumber = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The firstName
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The lastName
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * Constructor method for MilesAndMoreCustomerDataDTO
     * @uses MilesAndMoreCustomerDataDTO::setCardNo()
     * @uses MilesAndMoreCustomerDataDTO::setCustomerId()
     * @uses MilesAndMoreCustomerDataDTO::setCustomerNumber()
     * @uses MilesAndMoreCustomerDataDTO::setEmail()
     * @uses MilesAndMoreCustomerDataDTO::setFirstName()
     * @uses MilesAndMoreCustomerDataDTO::setLastName()
     * @param string $cardNo
     * @param int $customerId
     * @param string $customerNumber
     * @param string $email
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(?string $cardNo = null, ?int $customerId = null, ?string $customerNumber = null, ?string $email = null, ?string $firstName = null, ?string $lastName = null)
    {
        $this
            ->setCardNo($cardNo)
            ->setCustomerId($customerId)
            ->setCustomerNumber($customerNumber)
            ->setEmail($email)
            ->setFirstName($firstName)
            ->setLastName($lastName);
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataDTO
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get customerNumber value
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
    }
    /**
     * Set customerNumber value
     * @param string $customerNumber
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataDTO
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNumber) && !is_string($customerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        $this->customerNumber = $customerNumber;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataDTO
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCustomerDataDTO
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
}
