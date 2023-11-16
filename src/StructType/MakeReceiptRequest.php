<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeReceiptRequest StructType
 * @subpackage Structs
 */
class MakeReceiptRequest extends AbstractStructBase
{
    /**
     * The MidocoReceiptInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoReceiptInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $MidocoReceiptInfo = null;
    /**
     * The isCollective
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isCollective = null;
    /**
     * The preferredReceiptId
     * @var int|null
     */
    protected ?int $preferredReceiptId = null;
    /**
     * Constructor method for MakeReceiptRequest
     * @uses MakeReceiptRequest::setMidocoReceiptInfo()
     * @uses MakeReceiptRequest::setIsCollective()
     * @uses MakeReceiptRequest::setPreferredReceiptId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo
     * @param bool $isCollective
     * @param int $preferredReceiptId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo = null, ?bool $isCollective = false, ?int $preferredReceiptId = null)
    {
        $this
            ->setMidocoReceiptInfo($midocoReceiptInfo)
            ->setIsCollective($isCollective)
            ->setPreferredReceiptId($preferredReceiptId);
    }
    /**
     * Get MidocoReceiptInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo|null
     */
    public function getMidocoReceiptInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
    {
        return $this->MidocoReceiptInfo;
    }
    /**
     * Set MidocoReceiptInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo
     * @return \Pggns\MidocoApi\Order\StructType\MakeReceiptRequest
     */
    public function setMidocoReceiptInfo(?\Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo $midocoReceiptInfo = null): self
    {
        $this->MidocoReceiptInfo = $midocoReceiptInfo;
        
        return $this;
    }
    /**
     * Get isCollective value
     * @return bool|null
     */
    public function getIsCollective(): ?bool
    {
        return $this->isCollective;
    }
    /**
     * Set isCollective value
     * @param bool $isCollective
     * @return \Pggns\MidocoApi\Order\StructType\MakeReceiptRequest
     */
    public function setIsCollective(?bool $isCollective = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isCollective) && !is_bool($isCollective)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCollective, true), gettype($isCollective)), __LINE__);
        }
        $this->isCollective = $isCollective;
        
        return $this;
    }
    /**
     * Get preferredReceiptId value
     * @return int|null
     */
    public function getPreferredReceiptId(): ?int
    {
        return $this->preferredReceiptId;
    }
    /**
     * Set preferredReceiptId value
     * @param int $preferredReceiptId
     * @return \Pggns\MidocoApi\Order\StructType\MakeReceiptRequest
     */
    public function setPreferredReceiptId(?int $preferredReceiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($preferredReceiptId) && !(is_int($preferredReceiptId) || ctype_digit($preferredReceiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preferredReceiptId, true), gettype($preferredReceiptId)), __LINE__);
        }
        $this->preferredReceiptId = $preferredReceiptId;
        
        return $this;
    }
}
