<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit2\ComputerGames\Controller\Adminhtml\Game;

use Magento\Backend\App\Action;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Edit
 * Edit extends Action
 */
class Edit extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    /**
     * @var Registry
     */
    protected $coreRegistry;

    /**
     * __construct
     *
     * @param PageFactory $resultPageFactory
     * @param Registry $coreRegistry
     * @param Action\Context $context
     */
    public function __construct(
        PageFactory $resultPageFactory,
        Registry $coreRegistry,
        Action\Context $context
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * * execute
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Edit Game'));
        $gameId = $this->getRequest()->getParam('game_id');
        $this->coreRegistry->register('game_id', $gameId);

        return $resultPage;
    }

    /**
     * _isAllowed
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Unit2_ComputerGames::grid');
    }
}
