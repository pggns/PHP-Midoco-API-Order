<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalLinkDTO StructType
 * @subpackage Structs
 */
class ExternalLinkDTO extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * The linkDescription
     * @var string|null
     */
    protected ?string $linkDescription = null;
    /**
     * The linkId
     * @var int|null
     */
    protected ?int $linkId = null;
    /**
     * The linkType
     * @var string|null
     */
    protected ?string $linkType = null;
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The sizeH
     * @var int|null
     */
    protected ?int $sizeH = null;
    /**
     * The sizeType
     * @var string|null
     */
    protected ?string $sizeType = null;
    /**
     * The sizeW
     * @var int|null
     */
    protected ?int $sizeW = null;
    /**
     * Constructor method for ExternalLinkDTO
     * @uses ExternalLinkDTO::setItemId()
     * @uses ExternalLinkDTO::setLink()
     * @uses ExternalLinkDTO::setLinkDescription()
     * @uses ExternalLinkDTO::setLinkId()
     * @uses ExternalLinkDTO::setLinkType()
     * @uses ExternalLinkDTO::setRefId()
     * @uses ExternalLinkDTO::setSizeH()
     * @uses ExternalLinkDTO::setSizeType()
     * @uses ExternalLinkDTO::setSizeW()
     * @param int $itemId
     * @param string $link
     * @param string $linkDescription
     * @param int $linkId
     * @param string $linkType
     * @param int $refId
     * @param int $sizeH
     * @param string $sizeType
     * @param int $sizeW
     */
    public function __construct(?int $itemId = null, ?string $link = null, ?string $linkDescription = null, ?int $linkId = null, ?string $linkType = null, ?int $refId = null, ?int $sizeH = null, ?string $sizeType = null, ?int $sizeW = null)
    {
        $this
            ->setItemId($itemId)
            ->setLink($link)
            ->setLinkDescription($linkDescription)
            ->setLinkId($linkId)
            ->setLinkType($linkType)
            ->setRefId($refId)
            ->setSizeH($sizeH)
            ->setSizeType($sizeType)
            ->setSizeW($sizeW);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
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
     * Get linkDescription value
     * @return string|null
     */
    public function getLinkDescription(): ?string
    {
        return $this->linkDescription;
    }
    /**
     * Set linkDescription value
     * @param string $linkDescription
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
     */
    public function setLinkDescription(?string $linkDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($linkDescription) && !is_string($linkDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkDescription, true), gettype($linkDescription)), __LINE__);
        }
        $this->linkDescription = $linkDescription;
        
        return $this;
    }
    /**
     * Get linkId value
     * @return int|null
     */
    public function getLinkId(): ?int
    {
        return $this->linkId;
    }
    /**
     * Set linkId value
     * @param int $linkId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
     */
    public function setLinkId(?int $linkId = null): self
    {
        // validation for constraint: int
        if (!is_null($linkId) && !(is_int($linkId) || ctype_digit($linkId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($linkId, true), gettype($linkId)), __LINE__);
        }
        $this->linkId = $linkId;
        
        return $this;
    }
    /**
     * Get linkType value
     * @return string|null
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }
    /**
     * Set linkType value
     * @param string $linkType
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
     */
    public function setLinkType(?string $linkType = null): self
    {
        // validation for constraint: string
        if (!is_null($linkType) && !is_string($linkType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkType, true), gettype($linkType)), __LINE__);
        }
        $this->linkType = $linkType;
        
        return $this;
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get sizeH value
     * @return int|null
     */
    public function getSizeH(): ?int
    {
        return $this->sizeH;
    }
    /**
     * Set sizeH value
     * @param int $sizeH
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
     */
    public function setSizeH(?int $sizeH = null): self
    {
        // validation for constraint: int
        if (!is_null($sizeH) && !(is_int($sizeH) || ctype_digit($sizeH))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sizeH, true), gettype($sizeH)), __LINE__);
        }
        $this->sizeH = $sizeH;
        
        return $this;
    }
    /**
     * Get sizeType value
     * @return string|null
     */
    public function getSizeType(): ?string
    {
        return $this->sizeType;
    }
    /**
     * Set sizeType value
     * @param string $sizeType
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
     */
    public function setSizeType(?string $sizeType = null): self
    {
        // validation for constraint: string
        if (!is_null($sizeType) && !is_string($sizeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sizeType, true), gettype($sizeType)), __LINE__);
        }
        $this->sizeType = $sizeType;
        
        return $this;
    }
    /**
     * Get sizeW value
     * @return int|null
     */
    public function getSizeW(): ?int
    {
        return $this->sizeW;
    }
    /**
     * Set sizeW value
     * @param int $sizeW
     * @return \Pggns\MidocoApi\Order\StructType\ExternalLinkDTO
     */
    public function setSizeW(?int $sizeW = null): self
    {
        // validation for constraint: int
        if (!is_null($sizeW) && !(is_int($sizeW) || ctype_digit($sizeW))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sizeW, true), gettype($sizeW)), __LINE__);
        }
        $this->sizeW = $sizeW;
        
        return $this;
    }
}
