<?php
/**
 * Digital Labs Agency
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GiaPhuGroup.com license that is
 * available through the world-wide-web at this URL:
 * https://digitallabs.agency/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    DigitalLabs
 * @package     DigitalLabs_CurrencySymbolPosition
 * @copyright   Copyright (c) 2021 Digital Labs Agency All rights reserved. (http://digitallabs.agency/)
 * @license     https://digitallabs.agency/LICENSE.txt
 */

namespace DigitalLabs\CurrencySymbolPosition\Controller\Adminhtml\System\Currencysymbolposition;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'DigitalLabs_CurrencySymbolPosition::symbols_position';

    /**
     * Show Currency Symbol Position Management dialog
     *
     * @return void
     */
    public function execute()
    {
        // set active menu and breadcrumbs
        $this->_view->loadLayout();
        $this->_setActiveMenu(
            'DigitalLabs_CurrencySymbolPosition::symbols_position'
        );

        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Currency Symbols Position'));
        $this->_view->renderLayout();
    }
}
