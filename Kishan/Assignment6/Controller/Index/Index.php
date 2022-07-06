<?php

namespace Kishan\Assignment6\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Kishan\Assignment6\Api\FormRepositoryInterface;

class Index extends Action
{

    /**
     * @var JsonFactory
     */
    private JsonFactory $resultJsonFactory;

    /**
     * @var FormRepositoryInterface
     */
    protected FormRepositoryInterface $formRepositoryInterface;

    /**
     * Index constructor.
     * @param Context $context
     * @param JsonFactory $resultJsonFactory
     * @param FormRepositoryInterface $formRepositoryInterface
     */
    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        FormRepositoryInterface $formRepositoryInterface
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->formRepositoryInterface = $formRepositoryInterface;
    }

    /**
     * * Execute
     *
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultJson = $this->resultJsonFactory->create();
        $formData = $this->formRepositoryInterface->getById('1');
        return $resultJson->setData(['success'=>true,'data'=>$formData]);
    }
}
