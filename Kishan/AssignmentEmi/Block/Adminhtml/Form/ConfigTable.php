<?php

namespace Kishan\AssignmentEmi\Block\Adminhtml\Form;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\DataObject;

class ConfigTable extends AbstractFieldArray
{
    protected function _prepareToRender()
    {
        $this->addColumn('interest_rate', ['label' => __('Interest Rate'), 'class' => 'required-entry']);
        $this->addColumn('tenure', ['label' => __('Tenure (Months)'), 'class' => 'required-entry']);
        $this->addColumn('gender', ['label' => __('Gender'), 'class' => 'required-entry']);
        $this->_addAfter = false;

        $this->_addButtonLabel = __('Add New Row');
    }
}
