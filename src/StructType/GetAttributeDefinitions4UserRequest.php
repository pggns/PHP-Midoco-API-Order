<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttributeDefinitions4UserRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAttributeDefinitions4UserRequest extends AbstractStructBase
{
    /**
     * The userLogin
     * @var string|null
     */
    protected ?string $userLogin = null;
    /**
     * The contextId
     * @var string|null
     */
    protected ?string $contextId = null;
    /**
     * Constructor method for GetAttributeDefinitions4UserRequest
     * @uses GetAttributeDefinitions4UserRequest::setUserLogin()
     * @uses GetAttributeDefinitions4UserRequest::setContextId()
     * @param string $userLogin
     * @param string $contextId
     */
    public function __construct(?string $userLogin = null, ?string $contextId = null)
    {
        $this
            ->setUserLogin($userLogin)
            ->setContextId($contextId);
    }
    /**
     * Get userLogin value
     * @return string|null
     */
    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }
    /**
     * Set userLogin value
     * @param string $userLogin
     * @return \Pggns\MidocoApi\Order\StructType\GetAttributeDefinitions4UserRequest
     */
    public function setUserLogin(?string $userLogin = null): self
    {
        // validation for constraint: string
        if (!is_null($userLogin) && !is_string($userLogin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLogin, true), gettype($userLogin)), __LINE__);
        }
        $this->userLogin = $userLogin;
        
        return $this;
    }
    /**
     * Get contextId value
     * @return string|null
     */
    public function getContextId(): ?string
    {
        return $this->contextId;
    }
    /**
     * Set contextId value
     * @param string $contextId
     * @return \Pggns\MidocoApi\Order\StructType\GetAttributeDefinitions4UserRequest
     */
    public function setContextId(?string $contextId = null): self
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        $this->contextId = $contextId;
        
        return $this;
    }
}
