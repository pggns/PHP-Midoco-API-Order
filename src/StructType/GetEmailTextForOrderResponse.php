<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailTextForOrderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEmailTextForOrderResponse extends AbstractStructBase
{
    /**
     * The subjectText
     * @var string|null
     */
    protected ?string $subjectText = null;
    /**
     * The bodyText
     * @var string|null
     */
    protected ?string $bodyText = null;
    /**
     * Constructor method for GetEmailTextForOrderResponse
     * @uses GetEmailTextForOrderResponse::setSubjectText()
     * @uses GetEmailTextForOrderResponse::setBodyText()
     * @param string $subjectText
     * @param string $bodyText
     */
    public function __construct(?string $subjectText = null, ?string $bodyText = null)
    {
        $this
            ->setSubjectText($subjectText)
            ->setBodyText($bodyText);
    }
    /**
     * Get subjectText value
     * @return string|null
     */
    public function getSubjectText(): ?string
    {
        return $this->subjectText;
    }
    /**
     * Set subjectText value
     * @param string $subjectText
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailTextForOrderResponse
     */
    public function setSubjectText(?string $subjectText = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectText) && !is_string($subjectText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectText, true), gettype($subjectText)), __LINE__);
        }
        $this->subjectText = $subjectText;
        
        return $this;
    }
    /**
     * Get bodyText value
     * @return string|null
     */
    public function getBodyText(): ?string
    {
        return $this->bodyText;
    }
    /**
     * Set bodyText value
     * @param string $bodyText
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailTextForOrderResponse
     */
    public function setBodyText(?string $bodyText = null): self
    {
        // validation for constraint: string
        if (!is_null($bodyText) && !is_string($bodyText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bodyText, true), gettype($bodyText)), __LINE__);
        }
        $this->bodyText = $bodyText;
        
        return $this;
    }
}
