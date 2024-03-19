<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraAccessData StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoKaeraAccessData extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The passWord
     * @var string|null
     */
    protected ?string $passWord = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The timeout
     * @var int|null
     */
    protected ?int $timeout = null;
    /**
     * Constructor method for MidocoKaeraAccessData
     * @uses MidocoKaeraAccessData::setAgencyId()
     * @uses MidocoKaeraAccessData::setUserName()
     * @uses MidocoKaeraAccessData::setPassWord()
     * @uses MidocoKaeraAccessData::setUrl()
     * @uses MidocoKaeraAccessData::setTimeout()
     * @param string $agencyId
     * @param string $userName
     * @param string $passWord
     * @param string $url
     * @param int $timeout
     */
    public function __construct(?string $agencyId = null, ?string $userName = null, ?string $passWord = null, ?string $url = null, ?int $timeout = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setUserName($userName)
            ->setPassWord($passWord)
            ->setUrl($url)
            ->setTimeout($timeout);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraAccessData
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraAccessData
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get passWord value
     * @return string|null
     */
    public function getPassWord(): ?string
    {
        return $this->passWord;
    }
    /**
     * Set passWord value
     * @param string $passWord
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraAccessData
     */
    public function setPassWord(?string $passWord = null): self
    {
        // validation for constraint: string
        if (!is_null($passWord) && !is_string($passWord)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passWord, true), gettype($passWord)), __LINE__);
        }
        $this->passWord = $passWord;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraAccessData
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
     * Get timeout value
     * @return int|null
     */
    public function getTimeout(): ?int
    {
        return $this->timeout;
    }
    /**
     * Set timeout value
     * @param int $timeout
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraAccessData
     */
    public function setTimeout(?int $timeout = null): self
    {
        // validation for constraint: int
        if (!is_null($timeout) && !(is_int($timeout) || ctype_digit($timeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeout, true), gettype($timeout)), __LINE__);
        }
        $this->timeout = $timeout;
        
        return $this;
    }
}
