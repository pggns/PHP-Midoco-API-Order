<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelCMSRequest StructType
 * @subpackage Structs
 */
class SaveTravelCMSRequest extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The hotelcode
     * @var string|null
     */
    protected ?string $hotelcode = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The errorInfo
     * @var string|null
     */
    protected ?string $errorInfo = null;
    /**
     * Constructor method for SaveTravelCMSRequest
     * @uses SaveTravelCMSRequest::setAny()
     * @uses SaveTravelCMSRequest::setSupplierId()
     * @uses SaveTravelCMSRequest::setHotelcode()
     * @uses SaveTravelCMSRequest::setItemId()
     * @uses SaveTravelCMSRequest::setStatus()
     * @uses SaveTravelCMSRequest::setErrorInfo()
     * @param \DOMDocument|string|null $any
     * @param string $supplierId
     * @param string $hotelcode
     * @param int $itemId
     * @param string $status
     * @param string $errorInfo
     */
    public function __construct($any = null, ?string $supplierId = null, ?string $hotelcode = null, ?int $itemId = null, ?string $status = null, ?string $errorInfo = null)
    {
        $this
            ->setAny($any)
            ->setSupplierId($supplierId)
            ->setHotelcode($hotelcode)
            ->setItemId($itemId)
            ->setStatus($status)
            ->setErrorInfo($errorInfo);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSRequest
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get hotelcode value
     * @return string|null
     */
    public function getHotelcode(): ?string
    {
        return $this->hotelcode;
    }
    /**
     * Set hotelcode value
     * @param string $hotelcode
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSRequest
     */
    public function setHotelcode(?string $hotelcode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelcode) && !is_string($hotelcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelcode, true), gettype($hotelcode)), __LINE__);
        }
        $this->hotelcode = $hotelcode;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSRequest
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get errorInfo value
     * @return string|null
     */
    public function getErrorInfo(): ?string
    {
        return $this->errorInfo;
    }
    /**
     * Set errorInfo value
     * @param string $errorInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSRequest
     */
    public function setErrorInfo(?string $errorInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($errorInfo) && !is_string($errorInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorInfo, true), gettype($errorInfo)), __LINE__);
        }
        $this->errorInfo = $errorInfo;
        
        return $this;
    }
}
