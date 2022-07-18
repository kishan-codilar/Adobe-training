<?php

namespace Kishan\Assignment6\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Kishan\Assignment6\Api\FormRepositoryInterface;
use Kishan\Assignment6\Api\AddressRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\TestFramework\Exception\NoSuchActionException;

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
     * @var AddressRepositoryInterface
     */
    protected AddressRepositoryInterface $addressRepositoryInterface;

    /**
     * Index constructor.
     * @param Context $context
     * @param JsonFactory $resultJsonFactory
     * @param FormRepositoryInterface $formRepositoryInterface
     * @param AddressRepositoryInterface $addressRepositoryInterface
     */
    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        FormRepositoryInterface $formRepositoryInterface,
        AddressRepositoryInterface $addressRepositoryInterface
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->formRepositoryInterface = $formRepositoryInterface;
        $this->addressRepositoryInterface = $addressRepositoryInterface;
    }

    /**
     * * Execute
     *
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultJson = $this->resultJsonFactory->create();
        try {
            $formData = $this->addressRepositoryInterface->getById('2')->getData();
            return $resultJson->setData(['success'=>true,'data'=>$formData]);
        } catch (NoSuchEntityException $e) {
            return $resultJson->setData([$e->getMessage()]);
        }
    }
}
