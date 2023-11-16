<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitExternalLinkDTO StructType
 * @subpackage Structs
 */
class OrgunitExternalLinkDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The extLinkId
     * @var int|null
     */
    protected ?int $extLinkId = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The parentId
     * @var int|null
     */
    protected ?int $parentId = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The users
     * @var string|null
     */
    protected ?string $users = null;
    /**
     * Constructor method for OrgunitExternalLinkDTO
     * @uses OrgunitExternalLinkDTO::setDescription()
     * @uses OrgunitExternalLinkDTO::setExtLinkId()
     * @uses OrgunitExternalLinkDTO::setLink()
     * @uses OrgunitExternalLinkDTO::setName()
     * @uses OrgunitExternalLinkDTO::setParentId()
     * @uses OrgunitExternalLinkDTO::setPassword()
     * @uses OrgunitExternalLinkDTO::setUnitName()
     * @uses OrgunitExternalLinkDTO::setUsers()
     * @param string $description
     * @param int $extLinkId
     * @param string $link
     * @param string $name
     * @param int $parentId
     * @param string $password
     * @param string $unitName
     * @param string $users
     */
    public function __construct(?string $description = null, ?int $extLinkId = null, ?string $link = null, ?string $name = null, ?int $parentId = null, ?string $password = null, ?string $unitName = null, ?string $users = null)
    {
        $this
            ->setDescription($description)
            ->setExtLinkId($extLinkId)
            ->setLink($link)
            ->setName($name)
            ->setParentId($parentId)
            ->setPassword($password)
            ->setUnitName($unitName)
            ->setUsers($users);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
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
     * Get extLinkId value
     * @return int|null
     */
    public function getExtLinkId(): ?int
    {
        return $this->extLinkId;
    }
    /**
     * Set extLinkId value
     * @param int $extLinkId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
     */
    public function setExtLinkId(?int $extLinkId = null): self
    {
        // validation for constraint: int
        if (!is_null($extLinkId) && !(is_int($extLinkId) || ctype_digit($extLinkId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extLinkId, true), gettype($extLinkId)), __LINE__);
        }
        $this->extLinkId = $extLinkId;
        
        return $this;
    }
    /**
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get parentId value
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Set parentId value
     * @param int $parentId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
     */
    public function setParentId(?int $parentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        $this->parentId = $parentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
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
     * Get users value
     * @return string|null
     */
    public function getUsers(): ?string
    {
        return $this->users;
    }
    /**
     * Set users value
     * @param string $users
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO
     */
    public function setUsers(?string $users = null): self
    {
        // validation for constraint: string
        if (!is_null($users) && !is_string($users)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($users, true), gettype($users)), __LINE__);
        }
        $this->users = $users;
        
        return $this;
    }
}
