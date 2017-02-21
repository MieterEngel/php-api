<?php

namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * Sofort Payment Class
 *
 * Sofort is a payment method from SOFORT GmbH also known as sofortüberweisung in Germany.
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  https://dev.heidelpay.de/PhpApi
 *
 * @author  Jens Richter
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */
class SofortPaymentMethod extends AbstractPaymentMethod
{
    
    /**
     * Payment code for this payment method
     *
     * @var string payment code
     */
    protected $_paymentCode = 'OT';
    
    /**
     * Weather this Payment method can authorise transactions or not
     *
     * @var boolean canAuthorise
     */
    protected $_canAuthorise = true;
    
    /**
     * Weather this Payment method can refund transactions or not
     *
     * @var boolean canRefund
     */
    protected $_canRefund = true;
    
    /**
     * Weather this Payment method can reversal transactions or not
     *
     * @var boolean canReversal
     */
    protected $_canReversal = true;
        
    /**
     * Payment brand name for this payment method
     *
     * @var string brand name
     */
    protected $_brand = "SOFORT";
}
