<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteDunningRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteDunningRequest extends AbstractStructBase
{
    /**
     * The MidocoDunning
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDunning
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunning[]
     */
    protected ?array $MidocoDunning = null;
    /**
     * The printIfNoEmail
     * @var bool|null
     */
    protected ?bool $printIfNoEmail = null;
    /**
     * The isReexecute
     * @var bool|null
     */
    protected ?bool $isReexecute = null;
    /**
     * The supperssEmailSend
     * @var bool|null
     */
    protected ?bool $supperssEmailSend = null;
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ordersd:MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $MidocoDunningTemplate = null;
    /**
     * Constructor method for ExecuteDunningRequest
     * @uses ExecuteDunningRequest::setMidocoDunning()
     * @uses ExecuteDunningRequest::setPrintIfNoEmail()
     * @uses ExecuteDunningRequest::setIsReexecute()
     * @uses ExecuteDunningRequest::setSupperssEmailSend()
     * @uses ExecuteDunningRequest::setMidocoDunningTemplate()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning[] $midocoDunning
     * @param bool $printIfNoEmail
     * @param bool $isReexecute
     * @param bool $supperssEmailSend
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     */
    public function __construct(?array $midocoDunning = null, ?bool $printIfNoEmail = null, ?bool $isReexecute = null, ?bool $supperssEmailSend = null, ?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null)
    {
        $this
            ->setMidocoDunning($midocoDunning)
            ->setPrintIfNoEmail($printIfNoEmail)
            ->setIsReexecute($isReexecute)
            ->setSupperssEmailSend($supperssEmailSend)
            ->setMidocoDunningTemplate($midocoDunningTemplate);
    }
    /**
     * Get MidocoDunning value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning[]
     */
    public function getMidocoDunning(): ?array
    {
        return $this->MidocoDunning;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDunning method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDunning method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDunningForArrayConstraintFromSetMidocoDunning(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeDunningRequestMidocoDunningItem) {
            // validation for constraint: itemType
            if (!$executeDunningRequestMidocoDunningItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDunning) {
                $invalidValues[] = is_object($executeDunningRequestMidocoDunningItem) ? get_class($executeDunningRequestMidocoDunningItem) : sprintf('%s(%s)', gettype($executeDunningRequestMidocoDunningItem), var_export($executeDunningRequestMidocoDunningItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDunning property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDunning, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning[] $midocoDunning
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDunningRequest
     */
    public function setMidocoDunning(?array $midocoDunning = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDunningArrayErrorMessage = self::validateMidocoDunningForArrayConstraintFromSetMidocoDunning($midocoDunning))) {
            throw new InvalidArgumentException($midocoDunningArrayErrorMessage, __LINE__);
        }
        $this->MidocoDunning = $midocoDunning;
        
        return $this;
    }
    /**
     * Add item to MidocoDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDunningRequest
     */
    public function addToMidocoDunning(\Pggns\MidocoApi\Order\StructType\MidocoDunning $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDunning) {
            throw new InvalidArgumentException(sprintf('The MidocoDunning property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDunning, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDunning[] = $item;
        
        return $this;
    }
    /**
     * Get printIfNoEmail value
     * @return bool|null
     */
    public function getPrintIfNoEmail(): ?bool
    {
        return $this->printIfNoEmail;
    }
    /**
     * Set printIfNoEmail value
     * @param bool $printIfNoEmail
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDunningRequest
     */
    public function setPrintIfNoEmail(?bool $printIfNoEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printIfNoEmail) && !is_bool($printIfNoEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printIfNoEmail, true), gettype($printIfNoEmail)), __LINE__);
        }
        $this->printIfNoEmail = $printIfNoEmail;
        
        return $this;
    }
    /**
     * Get isReexecute value
     * @return bool|null
     */
    public function getIsReexecute(): ?bool
    {
        return $this->isReexecute;
    }
    /**
     * Set isReexecute value
     * @param bool $isReexecute
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDunningRequest
     */
    public function setIsReexecute(?bool $isReexecute = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReexecute) && !is_bool($isReexecute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReexecute, true), gettype($isReexecute)), __LINE__);
        }
        $this->isReexecute = $isReexecute;
        
        return $this;
    }
    /**
     * Get supperssEmailSend value
     * @return bool|null
     */
    public function getSupperssEmailSend(): ?bool
    {
        return $this->supperssEmailSend;
    }
    /**
     * Set supperssEmailSend value
     * @param bool $supperssEmailSend
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDunningRequest
     */
    public function setSupperssEmailSend(?bool $supperssEmailSend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($supperssEmailSend) && !is_bool($supperssEmailSend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($supperssEmailSend, true), gettype($supperssEmailSend)), __LINE__);
        }
        $this->supperssEmailSend = $supperssEmailSend;
        
        return $this;
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate|null
     */
    public function getMidocoDunningTemplate(): ?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * Set MidocoDunningTemplate value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDunningRequest
     */
    public function setMidocoDunningTemplate(?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null): self
    {
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
}
