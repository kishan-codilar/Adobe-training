<?php

namespace Kishan\Assignment6\Api;

use Kishan\Assignment6\Api\Data\FormInterface;
use Kishan\Assignment6\Model\Form;
use Kishan\Assignment6\Model\ResourceModel\Form\Collection;

interface FormRepositoryInterface
{

    /**
     * GetId
     *
     * @param int $entityId
     * @return FormInterface
     */
    public function getById($entityId);

    /**
     * Create Model
     *
     * @return Form
     */
    public function create();

    /**
     * Save Data
     *
     * @param Data\FormInterface $modelData
     * @return FormInterface
     */
    public function save(FormInterface $modelData);

    /**
     * Load
     *
     * @param $value
     * @param $field
     * @return Form
     */
    public function load($value, $field = null);

    /**
     * GetCollection
     *
     * @return array
     */
    public function getCollection();

    /**
     * GetDataById
     *
     * @param int $id
     * @return FormInterface
     */
    public function getDataById($id);

    /**
     * Get Data list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Kishan\Assignment6\Api\Data\FormSearchResultInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
