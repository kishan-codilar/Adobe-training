<?php

namespace Unit1\SimpleForm\Block;

use Magento\Framework\View\Element\Template;
use Unit1\SimpleForm\Model\ResourceModel\Form\CollectionFactory;
use Unit1\SimpleForm\Model\Custom;

class SimpleForm extends Template
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var Custom
     */
    protected $custom;

    /**
     * SimpleForm constructor.
     * @param Template\Context $context
     * @param CollectionFactory $collectionFactory
     * @param Custom $custom
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        Custom $custom,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
        $this->custom = $custom;
    }

    /**
     * @return string
     */
    public function getIndexUrl()
    {
        return $this->getUrl('simpleform/index/index');
    }

    /**
     * @return string
     */
    public function getAddUrl()
    {
        return $this->getUrl('simpleform/index/add');
    }

    /**
     * @return \Magento\Framework\DataObject[]
     */
    public function getAllDetails()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getItems();
    }

    /**
     * @return Custom
     */
    public function getCustom()
    {
        return $this->custom;
    }
}
