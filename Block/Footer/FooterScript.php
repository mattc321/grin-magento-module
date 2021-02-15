<?php

declare(strict_types=1);

namespace Grin\GrinModule\Block\Footer;

use Grin\GrinModule\Model\SystemConfig;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class FooterScript extends Template
{
    /**
     * @var SystemConfig
     */
    private $systemConfig;

    /**
     * @param Context $context
     * @param SystemConfig $systemConfig
     * @param array $data
     */
    public function __construct(
        Context $context,
        SystemConfig $systemConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->systemConfig = $systemConfig;
    }

    /**
     * @inheritDoc
     */
    public function toHtml()
    {
        if (!$this->systemConfig->isGrinScriptActive()) {
            return '';
        }

        return parent::toHtml();
    }
}
