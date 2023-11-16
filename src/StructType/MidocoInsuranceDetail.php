<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInsuranceDetail StructType
 * @subpackage Structs
 */
class MidocoInsuranceDetail extends InsuranceDetailDTO
{
    /**
     * The linkType
     * @var string|null
     */
    protected ?string $linkType = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * Constructor method for MidocoInsuranceDetail
     * @uses MidocoInsuranceDetail::setLinkType()
     * @uses MidocoInsuranceDetail::setLink()
     * @param string $linkType
     * @param string $link
     */
    public function __construct(?string $linkType = null, ?string $link = null)
    {
        $this
            ->setLinkType($linkType)
            ->setLink($link);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInsuranceDetail
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
}
