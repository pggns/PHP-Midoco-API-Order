<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmSearchContactDTO StructType
 * @subpackage Structs
 */
class CrmSearchContactDTO extends AbstractStructBase
{
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The mobile
     * @var string|null
     */
    protected ?string $mobile = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The fax
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * Constructor method for CrmSearchContactDTO
     * @uses CrmSearchContactDTO::setPhone()
     * @uses CrmSearchContactDTO::setMobile()
     * @uses CrmSearchContactDTO::setEmail()
     * @uses CrmSearchContactDTO::setFax()
     * @param string $phone
     * @param string $mobile
     * @param string $email
     * @param string $fax
     */
    public function __construct(?string $phone = null, ?string $mobile = null, ?string $email = null, ?string $fax = null)
    {
        $this
            ->setPhone($phone)
            ->setMobile($mobile)
            ->setEmail($email)
            ->setFax($fax);
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Order\StructType\CrmSearchContactDTO
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \Pggns\MidocoApi\Order\StructType\CrmSearchContactDTO
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmSearchContactDTO
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
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Pggns\MidocoApi\Order\StructType\CrmSearchContactDTO
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
        return $this;
    }
}
