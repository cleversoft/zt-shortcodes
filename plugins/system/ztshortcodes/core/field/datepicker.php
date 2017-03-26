<?php
/**
 * @name        Zt Shortcodes
 * @package     Plugin
 * @subpackage  System
 * @author      Viet Vu <info@jooservices.com>
 * @link        http://cleversoft.co
 * @copyright   JOOservices Ltd
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * 
 * @version    2.0.5
 * @since      1.0.0
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesFieldDatepicker'))
{

    /**
     * 
     */
    class ZtShortcodesFieldDatepicker extends ZtShortcodesField
    {

        public function render()
        {
            $html [] = '<div class="form-group">';
            $html [] = $this->_getLabel();
            $html [] = '<input'
                    . ' class="form-control datepicker"'
                    . ' type="text"'
                    . ' value="' . $this->get('value') . '"'
                    . ' data-property="' . $this->get('name') . '"'
                    . ' data-event="' . $this->get('event', 'keyup') . '"';
            if ($this->get('required'))
            {
                $html[] = 'required';
            }
            $html [] = ' >';
            if($this->get('description')) {
                $html [] = '<small class="form-field-des">' . $this->get('description') . '</small>';
            }
            $html [] = '</div>';
            return implode(PHP_EOL, $html);
        }

    }

}