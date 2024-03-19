<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendPasswordRecoveryMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendPasswordRecoveryMailRequest extends AbstractStructBase
{
    /**
     * The userLogin
     * @var string|null
     */
    protected ?string $userLogin = null;
    /**
     * Constructor method for SendPasswordRecoveryMailRequest
     * @uses SendPasswordRecoveryMailRequest::setUserLogin()
     * @param string $userLogin
     */
    public function __construct(?string $userLogin = null)
    {
        $this
            ->setUserLogin($userLogin);
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
     * @return \Pggns\MidocoApi\Order\StructType\SendPasswordRecoveryMailRequest
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
}
