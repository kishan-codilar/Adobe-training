<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\AddressRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Kishan\Assignment6\Model\FormFactory as ModelFactory;
use Kishan\Assignment6\Api\Data\AddressInterface;
use Kishan\Assignment6\Api\Data\AddressExtensionFactory;

class AddressRepositoryModel implements AddressRepositoryInterface
{
    /**
     * @var FormFactory
     */
    private $modelFactory;
    public function __construct(
        ModelFactory $modelFactory
    ) {
        $this->modelFactory = $modelFactory;
    }

    public function getById($id)
    {
        $model = $this->modelFactory->create();
        $entity = $model->load($id);
        if (!$model->getId()) {
            throw new NoSuchEntityException(__('Id %1 does not exist', $id));
        }
        $this->setAddressId($entity);
        return $entity->getData();
    }

    public function setAddressId(AddressInterface $address)
    {
//        $extensionAttributes = $address->getExtensionAttributes();
//        $extensionAttributes = $extensionAttributes ? $extensionAttributes : $this->extensionFactory->create();
    }
}
