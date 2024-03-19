<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoUserIdForExternCredentialsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoUserIdForExternCredentialsRequest extends AbstractStructBase
{
    /**
     * The extAgencyNo
     * @var string|null
     */
    protected ?string $extAgencyNo = null;
    /**
     * The extExpCode
     * @var string|null
     */
    protected ?string $extExpCode = null;
    /**
     * The extAgencyNoAttrName
     * @var string|null
     */
    protected ?string $extAgencyNoAttrName = null;
    /**
     * The extExpCodeAttrName
     * @var string|null
     */
    protected ?string $extExpCodeAttrName = null;
    /**
     * Constructor method for GetMidocoUserIdForExternCredentialsRequest
     * @uses GetMidocoUserIdForExternCredentialsRequest::setExtAgencyNo()
     * @uses GetMidocoUserIdForExternCredentialsRequest::setExtExpCode()
     * @uses GetMidocoUserIdForExternCredentialsRequest::setExtAgencyNoAttrName()
     * @uses GetMidocoUserIdForExternCredentialsRequest::setExtExpCodeAttrName()
     * @param string $extAgencyNo
     * @param string $extExpCode
     * @param string $extAgencyNoAttrName
     * @param string $extExpCodeAttrName
     */
    public function __construct(?string $extAgencyNo = null, ?string $extExpCode = null, ?string $extAgencyNoAttrName = null, ?string $extExpCodeAttrName = null)
    {
        $this
            ->setExtAgencyNo($extAgencyNo)
            ->setExtExpCode($extExpCode)
            ->setExtAgencyNoAttrName($extAgencyNoAttrName)
            ->setExtExpCodeAttrName($extExpCodeAttrName);
    }
    /**
     * Get extAgencyNo value
     * @return string|null
     */
    public function getExtAgencyNo(): ?string
    {
        return $this->extAgencyNo;
    }
    /**
     * Set extAgencyNo value
     * @param string $extAgencyNo
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoUserIdForExternCredentialsRequest
     */
    public function setExtAgencyNo(?string $extAgencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($extAgencyNo) && !is_string($extAgencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extAgencyNo, true), gettype($extAgencyNo)), __LINE__);
        }
        $this->extAgencyNo = $extAgencyNo;
        
        return $this;
    }
    /**
     * Get extExpCode value
     * @return string|null
     */
    public function getExtExpCode(): ?string
    {
        return $this->extExpCode;
    }
    /**
     * Set extExpCode value
     * @param string $extExpCode
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoUserIdForExternCredentialsRequest
     */
    public function setExtExpCode(?string $extExpCode = null): self
    {
        // validation for constraint: string
        if (!is_null($extExpCode) && !is_string($extExpCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extExpCode, true), gettype($extExpCode)), __LINE__);
        }
        $this->extExpCode = $extExpCode;
        
        return $this;
    }
    /**
     * Get extAgencyNoAttrName value
     * @return string|null
     */
    public function getExtAgencyNoAttrName(): ?string
    {
        return $this->extAgencyNoAttrName;
    }
    /**
     * Set extAgencyNoAttrName value
     * @param string $extAgencyNoAttrName
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoUserIdForExternCredentialsRequest
     */
    public function setExtAgencyNoAttrName(?string $extAgencyNoAttrName = null): self
    {
        // validation for constraint: string
        if (!is_null($extAgencyNoAttrName) && !is_string($extAgencyNoAttrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extAgencyNoAttrName, true), gettype($extAgencyNoAttrName)), __LINE__);
        }
        $this->extAgencyNoAttrName = $extAgencyNoAttrName;
        
        return $this;
    }
    /**
     * Get extExpCodeAttrName value
     * @return string|null
     */
    public function getExtExpCodeAttrName(): ?string
    {
        return $this->extExpCodeAttrName;
    }
    /**
     * Set extExpCodeAttrName value
     * @param string $extExpCodeAttrName
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoUserIdForExternCredentialsRequest
     */
    public function setExtExpCodeAttrName(?string $extExpCodeAttrName = null): self
    {
        // validation for constraint: string
        if (!is_null($extExpCodeAttrName) && !is_string($extExpCodeAttrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extExpCodeAttrName, true), gettype($extExpCodeAttrName)), __LINE__);
        }
        $this->extExpCodeAttrName = $extExpCodeAttrName;
        
        return $this;
    }
}
