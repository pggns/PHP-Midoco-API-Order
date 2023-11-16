<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgTemplateTextFooterResponse StructType
 * @subpackage Structs
 */
class GetOrgTemplateTextFooterResponse extends AbstractStructBase
{
    /**
     * The textFooter
     * @var string|null
     */
    protected ?string $textFooter = null;
    /**
     * Constructor method for GetOrgTemplateTextFooterResponse
     * @uses GetOrgTemplateTextFooterResponse::setTextFooter()
     * @param string $textFooter
     */
    public function __construct(?string $textFooter = null)
    {
        $this
            ->setTextFooter($textFooter);
    }
    /**
     * Get textFooter value
     * @return string|null
     */
    public function getTextFooter(): ?string
    {
        return $this->textFooter;
    }
    /**
     * Set textFooter value
     * @param string $textFooter
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgTemplateTextFooterResponse
     */
    public function setTextFooter(?string $textFooter = null): self
    {
        // validation for constraint: string
        if (!is_null($textFooter) && !is_string($textFooter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textFooter, true), gettype($textFooter)), __LINE__);
        }
        $this->textFooter = $textFooter;
        
        return $this;
    }
}
