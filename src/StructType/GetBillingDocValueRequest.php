<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingDocValueRequest extends AbstractStructBase
{
    /**
     * The paymentDocument
     * @var string|null
     */
    protected ?string $paymentDocument = null;
    /**
     * The articleType
     * @var string|null
     */
    protected ?string $articleType = null;
    /**
     * Constructor method for GetBillingDocValueRequest
     * @uses GetBillingDocValueRequest::setPaymentDocument()
     * @uses GetBillingDocValueRequest::setArticleType()
     * @param string $paymentDocument
     * @param string $articleType
     */
    public function __construct(?string $paymentDocument = null, ?string $articleType = null)
    {
        $this
            ->setPaymentDocument($paymentDocument)
            ->setArticleType($articleType);
    }
    /**
     * Get paymentDocument value
     * @return string|null
     */
    public function getPaymentDocument(): ?string
    {
        return $this->paymentDocument;
    }
    /**
     * Set paymentDocument value
     * @param string $paymentDocument
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocValueRequest
     */
    public function setPaymentDocument(?string $paymentDocument = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDocument) && !is_string($paymentDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDocument, true), gettype($paymentDocument)), __LINE__);
        }
        $this->paymentDocument = $paymentDocument;
        
        return $this;
    }
    /**
     * Get articleType value
     * @return string|null
     */
    public function getArticleType(): ?string
    {
        return $this->articleType;
    }
    /**
     * Set articleType value
     * @param string $articleType
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocValueRequest
     */
    public function setArticleType(?string $articleType = null): self
    {
        // validation for constraint: string
        if (!is_null($articleType) && !is_string($articleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($articleType, true), gettype($articleType)), __LINE__);
        }
        $this->articleType = $articleType;
        
        return $this;
    }
}
