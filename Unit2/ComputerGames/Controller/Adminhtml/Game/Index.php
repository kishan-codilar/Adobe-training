<?php
/**
 *  Copyright © Magento. All rights reserved.
 *  See COPYING.txt for license details.
 */
namespace Unit2\ComputerGames\Controller\Adminhtml\Game;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * Index extends Action
 */
class Index extends Action
{
    /**
     * ACL access restriction
     */
    public const ADMIN_RESOURCE = 'Unit2_ComputerGames::grid';

    /**
     * * return \Magento\Framework\View\Result\Page
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $backendPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $backendPage->setActiveMenu('Unit2_ComputerGames::grid');
        $backendPage->addBreadcrumb(__('Dashboard'), __('Games'));
        $backendPage->getConfig()->getTitle()->prepend(__('Games'));

        return $backendPage;
    }
}
