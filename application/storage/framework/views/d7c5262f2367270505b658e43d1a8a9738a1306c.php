<div class="line m-t-20"></div>
<div class="doc-signed-panel">
    <div class="row">
        <div class="col-sm-12 col-6">
        </div>
        <div class="col-sm-12 col-6 text-right">
            <div class="p-r-40">
                <ul>
                    <li>
                        <h5><?php echo app('translator')->get('lang.client'); ?></h5>
                    </li>
                    <li><?php echo e($document->doc_signed_first_name); ?>

                        <?php echo e($document->doc_signed_last_name); ?></li>
                    <li>
                        <img src="<?php echo e(url('storage/files/'.$document->doc_signed_signature_directory .'/'.$document->doc_signed_signature_filename)); ?>"
                            alt="<?php echo app('translator')->get('lang.signature'); ?>" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/painelsevenclick/public_html/application/resources/views/pages/documents/elements/signatures-proposals.blade.php ENDPATH**/ ?>