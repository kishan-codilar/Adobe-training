<?php

namespace Kishan\Assignment6\Controller\Index;

use Magento\Framework\App\Action\Action;
use Kishan\Assignment6\Model\FormFactory as ModelFactory;
use Kishan\Assignment6\Model\ResourceModel\Form as ResourceModel;
use Magento\Framework\App\Action\Context;
use Kishan\Assignment6\Api\FormRepositoryInterface;

class Save extends Action
{
    /**
     * @var ModelFactory
     */
    protected ModelFactory $modelFactory;

    /**
     * @var ResourceModel
     */
    protected ResourceModel $resourceModel;
    /**
     * @var FormRepositoryInterface
     */
    private FormRepositoryInterface $formRepository;

    /**
     * Save constructor.
     * @param Context $context
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param FormRepositoryInterface $formRepository
     */
    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        FormRepositoryInterface $formRepository
    ) {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->formRepository = $formRepository;
    }

    /**
     * Save the Data
     *
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $modelData = $this->formRepository->create();
        $data = $this->getRequest()->getParams();
        $modelData->setEnable($data['enable']);
        $modelData->setFirstname($data['firstname']);
        $modelData->setLastname($data['lastname']);
        $modelData->setDob($data['dob']);
        $modelData->setNumber($data['number']);
        $modelData->setWeight($data['weight']);
        $modelData->setPrice($data['price']);
        $this->formRepository->save($modelData);
        $this->messageManager->addSuccessMessage(__('%1 updated successfully', $modelData->getFirstname()));
        return $this->resultRedirectFactory->create()->setPath('assignment6/index/view');
    }
}
