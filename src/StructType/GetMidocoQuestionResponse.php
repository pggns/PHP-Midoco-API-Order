<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoQuestionResponse StructType
 * @subpackage Structs
 */
class GetMidocoQuestionResponse extends AbstractStructBase
{
    /**
     * The MidocoQuestion
     * Meta information extracted from the WSDL
     * - ref: MidocoQuestion
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQuestion|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQuestion $MidocoQuestion = null;
    /**
     * Constructor method for GetMidocoQuestionResponse
     * @uses GetMidocoQuestionResponse::setMidocoQuestion()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion = null)
    {
        $this
            ->setMidocoQuestion($midocoQuestion);
    }
    /**
     * Get MidocoQuestion value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuestion|null
     */
    public function getMidocoQuestion(): ?\Pggns\MidocoApi\Order\StructType\MidocoQuestion
    {
        return $this->MidocoQuestion;
    }
    /**
     * Set MidocoQuestion value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoQuestionResponse
     */
    public function setMidocoQuestion(?\Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion = null): self
    {
        $this->MidocoQuestion = $midocoQuestion;
        
        return $this;
    }
}
