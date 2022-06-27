<?php
namespace Unit1\SimpleUiComponent\Controller\Adminhtml\UiComponent;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultInterface;

class Index extends Action
{
    /**
     * ACL access restriction
     */
     const ADMIN_RESOURCE = 'Unit1_SimpleUiComponent::simple_list';

    /**
     * View page action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
