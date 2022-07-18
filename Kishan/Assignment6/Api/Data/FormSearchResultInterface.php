<?php

namespace Kishan\Assignment6\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface FormSearchResultInterface extends SearchResultsInterface
{
    /**
     * GetItems
     *
     * @return \Kishan\Assignment6\Api\Data\FormInterface[]
     */
    public function getItems();

    /**
     * SetItems
     *
     * @param \Kishan\Assignment6\Api\Data\FormInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}
