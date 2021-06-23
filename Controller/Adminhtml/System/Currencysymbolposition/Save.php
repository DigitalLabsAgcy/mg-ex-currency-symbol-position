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

class Save extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'DigitalLabs_CurrencySymbolPosition::symbols_position';

    /**
     * Save custom Currency symbol position
     *
     * @return void
     */
    public function execute()
    {
        $symbolsDataArray = $this->getRequest()->getParam('custom_currency_symbol_position', null);

        try {
            $this->_objectManager->create(\DigitalLabs\CurrencySymbolPosition\Model\System\CurrencySymbolPosition::class)
                ->setPositionData($symbolsDataArray);
            $this->messageManager->addSuccess(__('You applied the custom currency symbol positions.'));
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }

        $this->getResponse()->setRedirect($this->_redirect->getRedirectUrl($this->getUrl('*')));
    }
}
