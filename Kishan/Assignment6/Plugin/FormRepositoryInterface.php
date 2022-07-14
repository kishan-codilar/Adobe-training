<?php


namespace Kishan\Assignment6\Plugin;

use Kishan\Assignment6\Api\Data\FormExtension;
use Kishan\Assignment6\Api\Data\FormExtensionFactory;
use Kishan\Assignment6\Model\AddressRepositoryModel;
use Kishan\Assignment6\Model\ResourceModel\Form\CollectionFactory;

class FormRepositoryInterface
{
    /**
     * Order Extension Attributes Factory
     *
     * @var FormExtensionFactory
     */
    protected FormExtensionFactory $extensionFactory;

    /**
     * @var AddressRepositoryModel
     */
    private AddressRepositoryModel $addressRepository;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    /**
     * @var FormExtension
     */
    private FormExtension $formExtension;

    /**
     * FormRepositoryInterface constructor.
     * @param FormExtensionFactory $extensionFactory
     * @param AddressRepositoryModel $addressRepository
     * @param CollectionFactory $collectionFactory
     * @param FormExtension $formExtension
     */
    public function __construct(
        FormExtensionFactory $extensionFactory,
        AddressRepositoryModel $addressRepository,
        CollectionFactory $collectionFactory,
        FormExtension $formExtension
    ) {
        $this->extensionFactory = $extensionFactory;
        $this->addressRepository = $addressRepository;
        $this->collectionFactory = $collectionFactory;
        $this->formExtension = $formExtension;
    }

    /**
     * @param \Kishan\Assignment6\Api\FormRepositoryInterface $subject
     * @param \Kishan\Assignment6\Api\Data\FormInterface $form
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function afterGetById(
        \Kishan\Assignment6\Api\FormRepositoryInterface $subject,
        \Kishan\Assignment6\Api\Data\FormInterface $form
    ) {
        $extensionAttributes = $form->getExtensionAttributes();
        $extensionAttribute = $extensionAttributes ? $extensionAttributes : $this->extensionFactory->create();
        $formAddress = $this->addressRepository->getAddressDataId($form->getEntityId());
        $extensionAttribute->setAddressId($formAddress);
        return $form->setExtensionAttributes($extensionAttribute);
    }
}
