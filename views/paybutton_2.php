
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="ashish.d-facilitator@cisinlabs.com">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="PHPGang Payment">
    <input type="hidden" name="item_number" value="21z">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="16">
    
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="return" value="http://localhost/thebigads/views/payment.php">
    <input type='hidden' name="notify_url" value="http://localhost/thebigads/controller/notifyer.php">
    <input type='hidden' name="cancel_return" value="http://localhost/thebigads/controller/notifyer.php">
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 