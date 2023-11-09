<div id="gateway-stripe">
    <!--BUTTONS-->
    <div class="x-button">
        <button class="btn btn-danger disable-on-click-loading" id="invoice-stripe-payment-button">
            <?php echo e(cleanLang(__('lang.pay_now'))); ?> </button>
    </div>
    <!--STRIPE REDIRECT-->
    <!--section js resource-->
    <span class="hidden" id="js-pay-stripe" data-key="<?php echo e(config('system.settings_stripe_public_key')); ?>"
        data-session="<?php echo e($session_id); ?>">placeholder</span>
</div><?php /**PATH /home/painelsevenclick/public_html/application/resources/views/pages/pay/stripe.blade.php ENDPATH**/ ?>