<?php

/**
 * This file is part of a markocupic Contao Bundle.
 *
 * (c) Marko Cupic 2020 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    Contao form multirow text field
 * @license    MIT
 * @see        https://github.com/markocupic/contao-form-multirow-text-field-bundle
 *
 */

namespace Markocupic\ContaoFormMultirowTextFieldBundle\Forms;

use Contao\FormTextField;
use Contao\Widget;
use Contao\Idna;
use Contao\StringUtil;

/**
 * Class FormMultirowTextField
 * @package Markocupic\ContaoFormMultirowTextFieldBundle\Forms
 */
class FormMultirowTextField extends FormTextField
{

    /** @var bool */
    protected $blnSubmitInput = true;

    /** @var bool */
    protected $blnForAttribute = true;

    /** @var string */
    protected $strTemplate = 'form_multirow_text_field';

    /** @var string */
    protected $strPrefix = 'widget widget-multitext';

    /**
     * FormMultirowTextField constructor.
     * @param null $arrAttributes
     */
    public function __construct($arrAttributes = null)
    {
        parent::__construct($arrAttributes);

        if ($this->multiple)
        {
            $this->blnForAttribute = false;
        }

        $this->addRowLbl = $GLOBALS['TL_LANG']['MSC']['ffl_multirowTextField_addRowLbl'];
        $this->deleteRowLbl = $GLOBALS['TL_LANG']['MSC']['ffl_multirowTextField_deleteRowLbl'];

    }
}