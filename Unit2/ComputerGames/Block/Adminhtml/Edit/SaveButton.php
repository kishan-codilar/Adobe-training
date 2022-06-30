<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit2\ComputerGames\Block\Adminhtml\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 * SaveButton extends GenericButton implements ButtonProviderInterface
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{

    /**
     * * return array
     *
     * @return array
     */
    public function getButtonData()
    {
        $data = [
            'label'          => __('Save Game'),
            'class'          => 'save primary',
            'data_attribute' => [
                'mage-init'  => ['button' => ['event' => 'save']],
                'form-role'  => 'save',
            ],
            'sort_order'     => 90,
        ];
        return $data;
    }
}
