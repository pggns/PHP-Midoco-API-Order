<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCheckDtdAnswerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCheckDtdAnswerRequest extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer
     */
    protected \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $MidocoCheckDtdAnswer;
    /**
     * Constructor method for SaveCheckDtdAnswerRequest
     * @uses SaveCheckDtdAnswerRequest::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     */
    public function __construct(\Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer
     */
    public function getMidocoCheckDtdAnswer(): \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\Order\StructType\SaveCheckDtdAnswerRequest
     */
    public function setMidocoCheckDtdAnswer(\Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer): self
    {
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
}
