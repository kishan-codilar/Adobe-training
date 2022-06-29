<?php

namespace Unit1\SimpleForm\Block;

use Magento\Framework\View\Element\Template;
use Unit1\SimpleForm\Model\ResourceModel\Form\CollectionFactory;
use Unit1\SimpleForm\Api\SimpleFormInterface;

class SimpleForm extends Template implements SimpleFormInterface
{
    /**
     * @var CollectionFactory
     */
    protected CollectionFactory $collectionFactory;

    /**
     * SimpleForm constructor.
     * @param Template\Context $context
     * @param CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * * return string
     *
     * @return string
     */
    public function getIndexUrl()
    {
        return $this->getUrl('simpleform/index/index');
    }

    /**
     * * return string
     *
     * @return string
     */
    public function getAddUrl()
    {
        return $this->getUrl('simpleform/index/add');
    }

    /**
     * * return \Magento\Framework\DataObject[]
     *
     * @return \Magento\Framework\DataObject[]
     */
    public function getAllDetails()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getItems();
    }
}
