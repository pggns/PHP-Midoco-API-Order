<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningLettersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDunningLettersRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Order\StructType\DunningLetterDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\DunningLetterDTO $MidocoDunningLetter = null;
    /**
     * Constructor method for GetDunningLettersRequest
     * @uses GetDunningLettersRequest::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Order\StructType\DunningLetterDTO $midocoDunningLetter
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\DunningLetterDTO $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO|null
     */
    public function getMidocoDunningLetter(): ?\Pggns\MidocoApi\Order\StructType\DunningLetterDTO
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * Set MidocoDunningLetter value
     * @param \Pggns\MidocoApi\Order\StructType\DunningLetterDTO $midocoDunningLetter
     * @return \Pggns\MidocoApi\Order\StructType\GetDunningLettersRequest
     */
    public function setMidocoDunningLetter(?\Pggns\MidocoApi\Order\StructType\DunningLetterDTO $midocoDunningLetter = null): self
    {
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
}
