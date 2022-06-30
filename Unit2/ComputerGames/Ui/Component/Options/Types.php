<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit2\ComputerGames\Ui\Component\Options;

/**
 * Class Types
 * Types implements \Magento\Framework\Data\OptionSourceInterface
 */
class Types implements \Magento\Framework\Data\OptionSourceInterface
{
    const TYPE_OPTIONS = [
            ['label' => 'RPG',       'value' => 'RPG'],
            ['label' => 'RTS',       'value' => 'RTS'],
            ['label' => 'MMO',       'value' => 'MMO'],
            ['label' => 'Simulator', 'value' => 'Simulator'],
            ['label' => 'Shooter',   'value' => 'Shooter']
        ];

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {

        $this->options = self::TYPE_OPTIONS;
        return $this->options;
    }
}
