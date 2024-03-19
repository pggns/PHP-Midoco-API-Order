<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsersJwtTokenDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UsersJwtTokenDTO extends AbstractStructBase
{
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
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The scope
     * @var string|null
     */
    protected ?string $scope = null;
    /**
     * The token
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for UsersJwtTokenDTO
     * @uses UsersJwtTokenDTO::setCreationDate()
     * @uses UsersJwtTokenDTO::setCreationUser()
     * @uses UsersJwtTokenDTO::setDescription()
     * @uses UsersJwtTokenDTO::setId()
     * @uses UsersJwtTokenDTO::setScope()
     * @uses UsersJwtTokenDTO::setToken()
     * @uses UsersJwtTokenDTO::setUserId()
     * @uses UsersJwtTokenDTO::setValidUntil()
     * @param string $creationDate
     * @param int $creationUser
     * @param string $description
     * @param int $id
     * @param string $scope
     * @param string $token
     * @param int $userId
     * @param string $validUntil
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?string $description = null, ?int $id = null, ?string $scope = null, ?string $token = null, ?int $userId = null, ?string $validUntil = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setId($id)
            ->setScope($scope)
            ->setToken($token)
            ->setUserId($userId)
            ->setValidUntil($validUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
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
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get scope value
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
     * Set scope value
     * @param string $scope
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->scope = $scope;
        
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
