<?php

namespace Kishan\AssignmentEmi\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Http\Context as AuthContext;

class ConfigData implements ArgumentInterface
{
    /**
     * @var ScopeConfigInterface
     */
    protected ScopeConfigInterface $scopeConfig;
    /**
     * @var AuthContext
     */
    private AuthContext $authContext;


    /**
     * ConfigData constructor.
     * @param ScopeConfigInterface $scopeConfig
     * @param AuthContext $authContext
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        AuthContext $authContext
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->authContext = $authContext;
    }

    /**
     * Return core config data
     *
     * @return mixed
     */
    public function getConfigValue()
    {
        $data=$this->scopeConfig->getValue("emi/general/config_table", ScopeInterface::SCOPE_STORE);
        return $data;
    }

    public function getCustomerLog()
    {
        return $this->authContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
    }
}
