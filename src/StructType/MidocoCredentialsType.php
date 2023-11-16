<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCredentialsType StructType
 * @subpackage Structs
 */
class MidocoCredentialsType extends AbstractStructBase
{
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Login = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The OrganisationUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrganisationUnit = null;
    /**
     * The Locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Locale = null;
    /**
     * The RoleID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RoleID = null;
    /**
     * The SessionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SessionID = null;
    /**
     * Constructor method for MidocoCredentialsType
     * @uses MidocoCredentialsType::setLogin()
     * @uses MidocoCredentialsType::setPassword()
     * @uses MidocoCredentialsType::setOrganisationUnit()
     * @uses MidocoCredentialsType::setLocale()
     * @uses MidocoCredentialsType::setRoleID()
     * @uses MidocoCredentialsType::setSessionID()
     * @param string $login
     * @param string $password
     * @param string $organisationUnit
     * @param string $locale
     * @param int $roleID
     * @param string $sessionID
     */
    public function __construct(?string $login = null, ?string $password = null, ?string $organisationUnit = null, ?string $locale = null, ?int $roleID = null, ?string $sessionID = null)
    {
        $this
            ->setLogin($login)
            ->setPassword($password)
            ->setOrganisationUnit($organisationUnit)
            ->setLocale($locale)
            ->setRoleID($roleID)
            ->setSessionID($sessionID);
    }
    /**
     * Get Login value
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param string $login
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->Login = $login;
        
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        
        return $this;
    }
    /**
     * Get OrganisationUnit value
     * @return string|null
     */
    public function getOrganisationUnit(): ?string
    {
        return $this->OrganisationUnit;
    }
    /**
     * Set OrganisationUnit value
     * @param string $organisationUnit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     */
    public function setOrganisationUnit(?string $organisationUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationUnit) && !is_string($organisationUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationUnit, true), gettype($organisationUnit)), __LINE__);
        }
        $this->OrganisationUnit = $organisationUnit;
        
        return $this;
    }
    /**
     * Get Locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->Locale;
    }
    /**
     * Set Locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->Locale = $locale;
        
        return $this;
    }
    /**
     * Get RoleID value
     * @return int|null
     */
    public function getRoleID(): ?int
    {
        return $this->RoleID;
    }
    /**
     * Set RoleID value
     * @param int $roleID
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     */
    public function setRoleID(?int $roleID = null): self
    {
        // validation for constraint: int
        if (!is_null($roleID) && !(is_int($roleID) || ctype_digit($roleID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleID, true), gettype($roleID)), __LINE__);
        }
        $this->RoleID = $roleID;
        
        return $this;
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID(): ?string
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     */
    public function setSessionID(?string $sessionID = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionID, true), gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        
        return $this;
    }
}
