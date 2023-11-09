<!--existing client-->
<div class="form-group row">
    <label
        class="col-sm-12 text-left control-label col-form-label "><?php echo app('translator')->get('lang.client'); ?></label>
    <div class="col-sm-12">
        <!--select2 basic search-->
        <select name="copy_target_project_clientid" id="copy_target_project_clientid"
            class="clients_and_projects_toggle form-control form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
            data-projects-dropdown="copy_target_project_option" data-feed-request-type="clients_projects"
            data-ajax--url="<?php echo e(url('/')); ?>/feed/company_names">
            <option></option>
        </select>
    </div>
</div>
<!--projects-->
<div class="form-group row">
    <label class="col-sm-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.project'); ?></label>
    <div class="col-sm-12">
            <select class="select2-basic form-control form-control-sm dynamic_copy_target_project" data-allow-clear="false"
                id="copy_target_project_option" name="copy_target_project" disabled>
            </select>
    </div>
</div><?php /**PATH /home/painelsevenclick/public_html/application/resources/views/pages/files/components/modals/copy.blade.php ENDPATH**/ ?>