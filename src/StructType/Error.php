<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Error StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Error extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * Constructor method for Error
     * @uses Error::setID()
     * @uses Error::setText()
     * @param string $iD
     * @param string $text
     */
    public function __construct(?string $iD = null, ?string $text = null)
    {
        $this
            ->setID($iD)
            ->setText($text);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Pggns\MidocoApi\Order\StructType\Error
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\Error
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
}
