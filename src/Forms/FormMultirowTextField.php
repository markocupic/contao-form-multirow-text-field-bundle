<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Markocupic\ContaoFormMultirowTextFieldBundle\Forms;

use Contao\FormTextField;

/**
 * Class FormMultirowTextField.
 */
class FormMultirowTextField extends FormTextField
{
    /**
     * @var bool
     */
    protected $blnSubmitInput = true;

    /**
     * @var bool
     */
    protected $blnForAttribute = true;

    /**
     * @var string
     */
    protected $strTemplate = 'form_multirow_text_field';

    /**
     * @var string
     */
    protected $strPrefix = 'widget widget-multitext';

    /**
     * FormMultirowTextField constructor.
     *
     * @param null $arrAttributes
     */
    public function __construct($arrAttributes = null)
    {
        parent::__construct($arrAttributes);

        if ($this->multiple) {
            $this->blnForAttribute = false;
        }

        $this->addRowLbl = $GLOBALS['TL_LANG']['MSC']['ffl_multirowTextField_addRowLbl'];
        $this->deleteRowLbl = $GLOBALS['TL_LANG']['MSC']['ffl_multirowTextField_deleteRowLbl'];
    }
}
