<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for vat_division StructType
 * Meta information extracted from the WSDL
 * - documentation: define vat division
 * @subpackage Structs
 */
class Vat_division extends AbstractStructBase
{
    /**
     * The ratio
     * Meta information extracted from the WSDL
     * - documentation: percentage of vat division
     * @var float|null
     */
    protected ?float $ratio = null;
    /**
     * The vat_code
     * Meta information extracted from the WSDL
     * - documentation: midoco vat code
     * @var string|null
     */
    protected ?string $vat_code = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - documentation: optional comment
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The book_vat
     * Meta information extracted from the WSDL
     * - documentation: if vat due is own(=true) or customer(=false)
     * @var bool|null
     */
    protected ?bool $book_vat = null;
    /**
     * The book
     * Meta information extracted from the WSDL
     * - documentation: if false vat division is only for print
     * - default: true
     * @var bool|null
     */
    protected ?bool $book = null;
    /**
     * Constructor method for vat_division
     * @uses Vat_division::setRatio()
     * @uses Vat_division::setVat_code()
     * @uses Vat_division::setComment()
     * @uses Vat_division::setBook_vat()
     * @uses Vat_division::setBook()
     * @param float $ratio
     * @param string $vat_code
     * @param string $comment
     * @param bool $book_vat
     * @param bool $book
     */
    public function __construct(?float $ratio = null, ?string $vat_code = null, ?string $comment = null, ?bool $book_vat = null, ?bool $book = true)
    {
        $this
            ->setRatio($ratio)
            ->setVat_code($vat_code)
            ->setComment($comment)
            ->setBook_vat($book_vat)
            ->setBook($book);
    }
    /**
     * Get ratio value
     * @return float|null
     */
    public function getRatio(): ?float
    {
        return $this->ratio;
    }
    /**
     * Set ratio value
     * @param float $ratio
     * @return \Pggns\MidocoApi\Order\StructType\Vat_division
     */
    public function setRatio(?float $ratio = null): self
    {
        // validation for constraint: float
        if (!is_null($ratio) && !(is_float($ratio) || is_numeric($ratio))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ratio, true), gettype($ratio)), __LINE__);
        }
        $this->ratio = $ratio;
        
        return $this;
    }
    /**
     * Get vat_code value
     * @return string|null
     */
    public function getVat_code(): ?string
    {
        return $this->vat_code;
    }
    /**
     * Set vat_code value
     * @param string $vat_code
     * @return \Pggns\MidocoApi\Order\StructType\Vat_division
     */
    public function setVat_code(?string $vat_code = null): self
    {
        // validation for constraint: string
        if (!is_null($vat_code) && !is_string($vat_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vat_code, true), gettype($vat_code)), __LINE__);
        }
        $this->vat_code = $vat_code;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\Vat_division
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get book_vat value
     * @return bool|null
     */
    public function getBook_vat(): ?bool
    {
        return $this->book_vat;
    }
    /**
     * Set book_vat value
     * @param bool $book_vat
     * @return \Pggns\MidocoApi\Order\StructType\Vat_division
     */
    public function setBook_vat(?bool $book_vat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($book_vat) && !is_bool($book_vat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($book_vat, true), gettype($book_vat)), __LINE__);
        }
        $this->book_vat = $book_vat;
        
        return $this;
    }
    /**
     * Get book value
     * @return bool|null
     */
    public function getBook(): ?bool
    {
        return $this->book;
    }
    /**
     * Set book value
     * @param bool $book
     * @return \Pggns\MidocoApi\Order\StructType\Vat_division
     */
    public function setBook(?bool $book = true): self
    {
        // validation for constraint: boolean
        if (!is_null($book) && !is_bool($book)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($book, true), gettype($book)), __LINE__);
        }
        $this->book = $book;
        
        return $this;
    }
}
