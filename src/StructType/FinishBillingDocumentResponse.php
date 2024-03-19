<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinishBillingDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: finishBillingDocument --- this will throw an exception, if the document_no has already been assigned In other case, the document_no should be assigned using a sequence of the orgUnit (inheritable) The document is unchangeable after
 * this action. Set the printing_count to 0 ! Return: a BillingDocumentDTO, containing the actual status of the Document (document_no set and print_counter = 0)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FinishBillingDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errorArgs = null;
    /**
     * Constructor method for FinishBillingDocumentResponse
     * @uses FinishBillingDocumentResponse::setMidocoBillingDocument()
     * @uses FinishBillingDocumentResponse::setErrorCode()
     * @uses FinishBillingDocumentResponse::setErrorBundle()
     * @uses FinishBillingDocumentResponse::setErrorArgs()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param string $errorCode
     * @param string $errorBundle
     * @param string[] $errorArgs
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?string $errorCode = null, ?string $errorBundle = null, ?array $errorArgs = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorArgs($errorArgs);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\FinishBillingDocumentResponse
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\FinishBillingDocumentResponse
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\FinishBillingDocumentResponse
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get errorArgs value
     * @return string[]
     */
    public function getErrorArgs(): ?array
    {
        return $this->errorArgs;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrorArgs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorArgs method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorArgsForArrayConstraintFromSetErrorArgs(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $finishBillingDocumentResponseErrorArgsItem) {
            // validation for constraint: itemType
            if (!is_string($finishBillingDocumentResponseErrorArgsItem)) {
                $invalidValues[] = is_object($finishBillingDocumentResponseErrorArgsItem) ? get_class($finishBillingDocumentResponseErrorArgsItem) : sprintf('%s(%s)', gettype($finishBillingDocumentResponseErrorArgsItem), var_export($finishBillingDocumentResponseErrorArgsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errorArgs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errorArgs value
     * @throws InvalidArgumentException
     * @param string[] $errorArgs
     * @return \Pggns\MidocoApi\Order\StructType\FinishBillingDocumentResponse
     */
    public function setErrorArgs(?array $errorArgs = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArgsArrayErrorMessage = self::validateErrorArgsForArrayConstraintFromSetErrorArgs($errorArgs))) {
            throw new InvalidArgumentException($errorArgsArrayErrorMessage, __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
    /**
     * Add item to errorArgs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\FinishBillingDocumentResponse
     */
    public function addToErrorArgs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errorArgs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errorArgs[] = $item;
        
        return $this;
    }
}
