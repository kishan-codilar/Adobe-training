<?php

namespace Unit1\SimpleForm\Controller\Index;

use Magento\Framework\App\Action\Action;
use Unit1\SimpleForm\Model\FormFactory as ModelFactory;
use Unit1\SimpleForm\Model\ResourceModel\Form as ResourceModel;
use Magento\Framework\App\Action\Context;

class Add extends Action
{
    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    /**
     * @var ResourceModel
     */
    protected $resourceModel;

    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    ) {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
    }

    public function execute()
    {
        $form = $this->modelFactory->create();
        $data = $this->getRequest()->getParams();
        $form->setFirstname($data['firstname']);
        $form->setLastname($data['lastname']);
        $form->setNumber($data['number']);
        $form->setEmail($data['email']);
        $form->setAddress($data['address']);
        $this->resourceModel->save($form);
        $this->messageManager->addSuccessMessage(__('Form %1 saved successfully', $form->getFirstname()));
        return $this->resultRedirectFactory->create()->setPath('simpleform/index/view');
    }
}
