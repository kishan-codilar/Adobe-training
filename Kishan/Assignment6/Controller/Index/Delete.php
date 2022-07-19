<?php

namespace Kishan\Assignment6\Controller\Index;

use Magento\Framework\App\Action\Action;
use Kishan\Assignment6\Api\FormRepositoryInterface;
use Codilar\Employee\Model\ResourceModel\Employee as ResourceModel;
use Magento\Framework\App\Action\Context;

class Delete extends Action
{
    /**
     * @var FormRepositoryInterface
     */
    private FormRepositoryInterface $formRepository;

    /**
     * Delete constructor.
     *
     * @param Context $context
     * @param FormRepositoryInterface $formRepository
     */
    public function __construct(
        Context $context,
        FormRepositoryInterface $formRepository
    ) {
        parent::__construct($context);
        $this->formRepository = $formRepository;
    }

    /**
     * Delete the Data
     *
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            $id = $this->getRequest()->getParam('entity_id');
            $model = $this->formRepository->load($id);
            $model->delete();
            $this->messageManager->addSuccessMessage(__('You deleted.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('unable to delete'));
        }
        return $this->resultRedirectFactory->create()->setPath('assignment6/index/view');
    }
}
