<!--CRUMBS CONTAINER (RIGHT)-->
<div class="col-md-12  col-lg-6 align-self-center text-right parent-page-actions p-b-9"
    id="list-page-actions-container-contracts">
    <div id="list-page-actions">


        <!--reminder-->
        <?php if(config('visibility.modules.reminders')): ?>
        <button type="button" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.reminder'))); ?>"
            id="reminders-panel-toggle-button"
            class="reminder-toggle-panel-button list-actions-button btn btn-page-actions waves-effect waves-dark js-toggle-reminder-panel ajax-request <?php echo e($document->reminder_status); ?>"
            data-url="<?php echo e(url('reminders/start?resource_type='.$document->doc_type.'&resource_id='.$document->doc_id)); ?>"
            data-loading-target="reminders-side-panel-body" data-progress-bar='hidden'
            data-target="reminders-side-panel" data-title="<?php echo app('translator')->get('lang.my_reminder'); ?>">
            <i class="ti-alarm-clock"></i>
        </button>
        <?php endif; ?>

        <!--print-->
        <a data-toggle="tooltip" title="<?php echo app('translator')->get('lang.print'); ?>"
            href="<?php echo e(url('contracts/'.$document->doc_id.'?render=print')); ?>" target="_blank"
            class="list-actions-button btn btn-page-actions waves-effect waves-dark">
            <i class="sl-icon-printer"></i>
        </a>
    </div>

</div><?php /**PATH /home/painelsevenclick/public_html/application/resources/views/pages/documents/components/contract/actions-client.blade.php ENDPATH**/ ?>