<?php

namespace Kishan\Assignment6\Plugin;

use Kishan\Assignment6\Api\Data\AddressExtension;
use Kishan\Assignment6\Api\Data\AddressExtensionFactory;
use Kishan\Assignment6\Model\FormRepositoryModel;
use Kishan\Assignment6\Model\ResourceModel\Address\CollectionFactory;

class AddressRepositoryInterface
{
    /**
     * @var AddressExtensionFactory
     */
    protected AddressExtensionFactory $extensionFactory;

    /**
     * @var FormRepositoryModel
     */
    private FormRepositoryModel $formRepository;
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    /**
     * @var AddressExtension
     */
    private AddressExtension $formExtension;

    public function __construct(
        AddressExtensionFactory $extensionFactory,
        FormRepositoryModel $formRepository,
        CollectionFactory $collectionFactory,
        AddressExtension $formExtension
    ) {
        $this->extensionFactory = $extensionFactory;
        $this->formRepository = $formRepository;
        $this->collectionFactory = $collectionFactory;
        $this->formExtension = $formExtension;
    }

    /**
     * @param \Kishan\Assignment6\Api\AddressRepositoryInterface $subject
     * @param \Kishan\Assignment6\Api\Data\AddressInterface $address
     *
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function afterGetById(
        \Kishan\Assignment6\Api\AddressRepositoryInterface $subject,
        \Kishan\Assignment6\Api\Data\AddressInterface $address
    ) {
        $customExtensionAttributes = $address->getExtensionAttributes();
        $customAttributes = $customExtensionAttributes ? $customExtensionAttributes : $this->extensionFactory->create();
        $formAddress = $this->formRepository->getDataById($address->getAddressId());
        $customAttributes->setCustomId($formAddress);
        return $address->setExtensionAttributes($customAttributes);
    }
}
