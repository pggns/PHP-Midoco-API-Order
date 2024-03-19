<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateMilesAndMoreTransactionLinkRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Validates the request parameters used to authorize a Miles and More BURN transaction
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateMilesAndMoreTransactionLinkRequest extends AbstractStructBase
{
    /**
     * The ref
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The scope
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $scope = null;
    /**
     * Constructor method for ValidateMilesAndMoreTransactionLinkRequest
     * @uses ValidateMilesAndMoreTransactionLinkRequest::setRef()
     * @uses ValidateMilesAndMoreTransactionLinkRequest::setCode()
     * @uses ValidateMilesAndMoreTransactionLinkRequest::setScope()
     * @param string $ref
     * @param string $code
     * @param string $scope
     */
    public function __construct(?string $ref = null, ?string $code = null, ?string $scope = null)
    {
        $this
            ->setRef($ref)
            ->setCode($code)
            ->setScope($scope);
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkRequest
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkRequest
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ValidateMilesAndMoreTransactionLinkRequest
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
}
