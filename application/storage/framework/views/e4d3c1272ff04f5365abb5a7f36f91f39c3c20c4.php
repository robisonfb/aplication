<?php if(config('visibility.signing_public')): ?>
<!--first name-->
<div class="form-group row">
    <label class="col-4 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.first_name'); ?></label>
    <div class="col-8">
        <input type="text" class="form-control form-control-sm" id="doc_signed_first_name" name="doc_signed_first_name">
    </div>
</div>

<!--last name-->
<div class="form-group row">
    <label class="col-4 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.last_name'); ?></label>
    <div class="col-8">
        <input type="text" class="form-control form-control-sm" id="doc_signed_last_name" name="doc_signed_last_name">
    </div>
</div>
<?php endif; ?>

<!--signature pad-->
<div class="row">
    <label class="col-4 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.draw_your_signature'); ?></label>
    <div class="col-8" id="signature-col-wrapper">
        <div id="signature-wrapper">
            <canvas id="signature-pad" height="180"></canvas>
        </div>
    </div>
    <input type="hidden" name="signature_code" id="signature_code">
</div>

<script src="public/vendor/js/signaturepad/signature_pad.min.js?v=<?php echo e(config('system.versioning')); ?>"></script>
<script src="public/js/dynamic/sign.document.js?v=<?php echo e(config('system.versioning')); ?>"></script><?php /**PATH /home/painelsevenclick/public_html/application/resources/views/pages/documents/components/proposal/sign.blade.php ENDPATH**/ ?>