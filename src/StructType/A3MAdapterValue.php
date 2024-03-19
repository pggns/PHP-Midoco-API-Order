<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for A3MAdapterValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class A3MAdapterValue extends AbstractStructBase
{
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The user
     * @var string|null
     */
    protected ?string $user = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The exportContactData
     * @var bool|null
     */
    protected ?bool $exportContactData = null;
    /**
     * The exportAccomodationData
     * @var bool|null
     */
    protected ?bool $exportAccomodationData = null;
    /**
     * Constructor method for A3MAdapterValue
     * @uses A3MAdapterValue::setMidocoCustomerId()
     * @uses A3MAdapterValue::setUrl()
     * @uses A3MAdapterValue::setUser()
     * @uses A3MAdapterValue::setPassword()
     * @uses A3MAdapterValue::setExportContactData()
     * @uses A3MAdapterValue::setExportAccomodationData()
     * @param int $midocoCustomerId
     * @param string $url
     * @param string $user
     * @param string $password
     * @param bool $exportContactData
     * @param bool $exportAccomodationData
     */
    public function __construct(?int $midocoCustomerId = null, ?string $url = null, ?string $user = null, ?string $password = null, ?bool $exportContactData = null, ?bool $exportAccomodationData = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setUrl($url)
            ->setUser($user)
            ->setPassword($password)
            ->setExportContactData($exportContactData)
            ->setExportAccomodationData($exportAccomodationData);
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValue
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValue
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValue
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValue
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get exportContactData value
     * @return bool|null
     */
    public function getExportContactData(): ?bool
    {
        return $this->exportContactData;
    }
    /**
     * Set exportContactData value
     * @param bool $exportContactData
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValue
     */
    public function setExportContactData(?bool $exportContactData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportContactData) && !is_bool($exportContactData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportContactData, true), gettype($exportContactData)), __LINE__);
        }
        $this->exportContactData = $exportContactData;
        
        return $this;
    }
    /**
     * Get exportAccomodationData value
     * @return bool|null
     */
    public function getExportAccomodationData(): ?bool
    {
        return $this->exportAccomodationData;
    }
    /**
     * Set exportAccomodationData value
     * @param bool $exportAccomodationData
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValue
     */
    public function setExportAccomodationData(?bool $exportAccomodationData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportAccomodationData) && !is_bool($exportAccomodationData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportAccomodationData, true), gettype($exportAccomodationData)), __LINE__);
        }
        $this->exportAccomodationData = $exportAccomodationData;
        
        return $this;
    }
}
