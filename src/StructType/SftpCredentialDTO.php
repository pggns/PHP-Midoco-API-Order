<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SftpCredentialDTO StructType
 * @subpackage Structs
 */
class SftpCredentialDTO extends AbstractStructBase
{
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The emailText
     * @var string|null
     */
    protected ?string $emailText = null;
    /**
     * The folder
     * @var string|null
     */
    protected ?string $folder = null;
    /**
     * The login
     * @var string|null
     */
    protected ?string $login = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The sftpCredentialName
     * @var string|null
     */
    protected ?string $sftpCredentialName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for SftpCredentialDTO
     * @uses SftpCredentialDTO::setEmail()
     * @uses SftpCredentialDTO::setEmailText()
     * @uses SftpCredentialDTO::setFolder()
     * @uses SftpCredentialDTO::setLogin()
     * @uses SftpCredentialDTO::setPassword()
     * @uses SftpCredentialDTO::setSftpCredentialName()
     * @uses SftpCredentialDTO::setUnitName()
     * @uses SftpCredentialDTO::setUrl()
     * @param string $email
     * @param string $emailText
     * @param string $folder
     * @param string $login
     * @param string $password
     * @param string $sftpCredentialName
     * @param string $unitName
     * @param string $url
     */
    public function __construct(?string $email = null, ?string $emailText = null, ?string $folder = null, ?string $login = null, ?string $password = null, ?string $sftpCredentialName = null, ?string $unitName = null, ?string $url = null)
    {
        $this
            ->setEmail($email)
            ->setEmailText($emailText)
            ->setFolder($folder)
            ->setLogin($login)
            ->setPassword($password)
            ->setSftpCredentialName($sftpCredentialName)
            ->setUnitName($unitName)
            ->setUrl($url);
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
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
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
     * Get emailText value
     * @return string|null
     */
    public function getEmailText(): ?string
    {
        return $this->emailText;
    }
    /**
     * Set emailText value
     * @param string $emailText
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
     */
    public function setEmailText(?string $emailText = null): self
    {
        // validation for constraint: string
        if (!is_null($emailText) && !is_string($emailText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailText, true), gettype($emailText)), __LINE__);
        }
        $this->emailText = $emailText;
        
        return $this;
    }
    /**
     * Get folder value
     * @return string|null
     */
    public function getFolder(): ?string
    {
        return $this->folder;
    }
    /**
     * Set folder value
     * @param string $folder
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
     */
    public function setFolder(?string $folder = null): self
    {
        // validation for constraint: string
        if (!is_null($folder) && !is_string($folder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folder, true), gettype($folder)), __LINE__);
        }
        $this->folder = $folder;
        
        return $this;
    }
    /**
     * Get login value
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->login = $login;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
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
     * Get sftpCredentialName value
     * @return string|null
     */
    public function getSftpCredentialName(): ?string
    {
        return $this->sftpCredentialName;
    }
    /**
     * Set sftpCredentialName value
     * @param string $sftpCredentialName
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
     */
    public function setSftpCredentialName(?string $sftpCredentialName = null): self
    {
        // validation for constraint: string
        if (!is_null($sftpCredentialName) && !is_string($sftpCredentialName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sftpCredentialName, true), gettype($sftpCredentialName)), __LINE__);
        }
        $this->sftpCredentialName = $sftpCredentialName;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
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
}
