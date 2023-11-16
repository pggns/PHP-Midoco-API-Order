<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckMediatorFormularRequest StructType
 * @subpackage Structs
 */
class CheckMediatorFormularRequest extends AbstractStructBase
{
    /**
     * The MidocoMediatorFormular
     * Meta information extracted from the WSDL
     * - ref: MidocoMediatorFormular
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $MidocoMediatorFormular = null;
    /**
     * The saveAttributes
     * @var bool|null
     */
    protected ?bool $saveAttributes = null;
    /**
     * The sendEmail
     * @var bool|null
     */
    protected ?bool $sendEmail = null;
    /**
     * Constructor method for CheckMediatorFormularRequest
     * @uses CheckMediatorFormularRequest::setMidocoMediatorFormular()
     * @uses CheckMediatorFormularRequest::setSaveAttributes()
     * @uses CheckMediatorFormularRequest::setSendEmail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular
     * @param bool $saveAttributes
     * @param bool $sendEmail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular = null, ?bool $saveAttributes = null, ?bool $sendEmail = null)
    {
        $this
            ->setMidocoMediatorFormular($midocoMediatorFormular)
            ->setSaveAttributes($saveAttributes)
            ->setSendEmail($sendEmail);
    }
    /**
     * Get MidocoMediatorFormular value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular|null
     */
    public function getMidocoMediatorFormular(): ?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
    {
        return $this->MidocoMediatorFormular;
    }
    /**
     * Set MidocoMediatorFormular value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular
     * @return \Pggns\MidocoApi\Order\StructType\CheckMediatorFormularRequest
     */
    public function setMidocoMediatorFormular(?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular = null): self
    {
        $this->MidocoMediatorFormular = $midocoMediatorFormular;
        
        return $this;
    }
    /**
     * Get saveAttributes value
     * @return bool|null
     */
    public function getSaveAttributes(): ?bool
    {
        return $this->saveAttributes;
    }
    /**
     * Set saveAttributes value
     * @param bool $saveAttributes
     * @return \Pggns\MidocoApi\Order\StructType\CheckMediatorFormularRequest
     */
    public function setSaveAttributes(?bool $saveAttributes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($saveAttributes) && !is_bool($saveAttributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveAttributes, true), gettype($saveAttributes)), __LINE__);
        }
        $this->saveAttributes = $saveAttributes;
        
        return $this;
    }
    /**
     * Get sendEmail value
     * @return bool|null
     */
    public function getSendEmail(): ?bool
    {
        return $this->sendEmail;
    }
    /**
     * Set sendEmail value
     * @param bool $sendEmail
     * @return \Pggns\MidocoApi\Order\StructType\CheckMediatorFormularRequest
     */
    public function setSendEmail(?bool $sendEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendEmail) && !is_bool($sendEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendEmail, true), gettype($sendEmail)), __LINE__);
        }
        $this->sendEmail = $sendEmail;
        
        return $this;
    }
}
