<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOnlinePaymentHelper StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOnlinePaymentHelper extends OnlinePaymentInfoType
{
    /**
     * The ccValidMonth
     * @var int|null
     */
    protected ?int $ccValidMonth = null;
    /**
     * The ccValidYear
     * @var int|null
     */
    protected ?int $ccValidYear = null;
    /**
     * The isDocumentitemPayment
     * Meta information extracted from the WSDL
     * - documentation: is payment from ticket
     * @var bool|null
     */
    protected ?bool $isDocumentitemPayment = null;
    /**
     * Constructor method for MidocoOnlinePaymentHelper
     * @uses MidocoOnlinePaymentHelper::setCcValidMonth()
     * @uses MidocoOnlinePaymentHelper::setCcValidYear()
     * @uses MidocoOnlinePaymentHelper::setIsDocumentitemPayment()
     * @param int $ccValidMonth
     * @param int $ccValidYear
     * @param bool $isDocumentitemPayment
     */
    public function __construct(?int $ccValidMonth = null, ?int $ccValidYear = null, ?bool $isDocumentitemPayment = null)
    {
        $this
            ->setCcValidMonth($ccValidMonth)
            ->setCcValidYear($ccValidYear)
            ->setIsDocumentitemPayment($isDocumentitemPayment);
    }
    /**
     * Get ccValidMonth value
     * @return int|null
     */
    public function getCcValidMonth(): ?int
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param int $ccValidMonth
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper
     */
    public function setCcValidMonth(?int $ccValidMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidMonth) && !(is_int($ccValidMonth) || ctype_digit($ccValidMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get ccValidYear value
     * @return int|null
     */
    public function getCcValidYear(): ?int
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param int $ccValidYear
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper
     */
    public function setCcValidYear(?int $ccValidYear = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidYear) && !(is_int($ccValidYear) || ctype_digit($ccValidYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get isDocumentitemPayment value
     * @return bool|null
     */
    public function getIsDocumentitemPayment(): ?bool
    {
        return $this->isDocumentitemPayment;
    }
    /**
     * Set isDocumentitemPayment value
     * @param bool $isDocumentitemPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentHelper
     */
    public function setIsDocumentitemPayment(?bool $isDocumentitemPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDocumentitemPayment) && !is_bool($isDocumentitemPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDocumentitemPayment, true), gettype($isDocumentitemPayment)), __LINE__);
        }
        $this->isDocumentitemPayment = $isDocumentitemPayment;
        
        return $this;
    }
}
