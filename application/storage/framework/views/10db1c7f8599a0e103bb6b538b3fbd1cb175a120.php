<?php if($show == 'form'): ?>
<?php if(count($products ?? []) > 0): ?>

<!--stripe product-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.product'); ?> <a
            class="align-middle font-14 toggle-collapse" href="#stripe_products_info" role="button"><i
                class="ti-info-alt text-themecontrast"></i></a></label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic stripe_product_price form-control form-control-sm dynamic-select2-product"
            id="subscription_gateway_product" data-placeholder="<?php echo app('translator')->get('lang.select'); ?>"
            name="subscription_gateway_product" data-prices-dropdown="subscription_gateway_price">
            <option></option>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($product['id'] != 'dashboard_invoice_default_do_not_delete'): ?>
            <option value="<?php echo e($product['id']); ?>"><?php echo e($product['name']); ?></option>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>


<!--stripe price-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.plan'))); ?>

        <a class="align-middle font-14 toggle-collapse" href="#stripe_products_info" role="button"><i
                class="ti-info-alt text-themecontrast"></i></a></label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm dynamic-select2-price" id="subscription_gateway_price"
            name="subscription_gateway_price" disabled>
        </select>
    </div>
</div>


<!--/#project manager-->
<div class="collapse" id="stripe_products_info">
    <div class="alert alert-info"><?php echo e(cleanLang(__('lang.stripe_products_info'))); ?></div>
</div>

<!--client and project-->
<?php if(config('visibility.subscription_modal_client_project_fields')): ?>
<!--client-->
<div class="form-group row">
    <label
        class="col-sm-12 col-lg-3 text-left control-label col-form-label  required"><?php echo e(cleanLang(__('lang.client'))); ?>*</label>
    <div class="col-sm-12 col-lg-9">
        <!--select2 basic search-->
        <select name="subscription_clientid" id="subscription_clientid"
            class="clients_and_projects_toggle form-control form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
            data-projects-dropdown="subscription_projectid" data-feed-request-type="clients_projects"
            data-ajax--url="<?php echo e(url('/')); ?>/feed/company_names">
        </select>
    </div>
</div>
<!--projects-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.project'))); ?></label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm dynamic_subscription_projectid"
            id="subscription_projectid" name="subscription_projectid" disabled>
        </select>
    </div>
</div>
<?php endif; ?>


<!--clients projects-->
<?php if(config('visibility.expense_modal_clients_projects')): ?>
<div class="form-group row">
    <label for="example-month-input"
        class="col-sm-12 col-lg-3 col-form-label text-left"><?php echo e(cleanLang(__('lang.project'))); ?></label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm" id="expense_projectid" name="expense_projectid">
            <?php $__currentLoopData = config('settings.clients_projects'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($project->project_id ?? ''); ?>"><?php echo e($project->project_title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php endif; ?>

<!--category-->
<div class="form-group row">
    <label for="example-month-input"
        class="col-sm-12 col-lg-3 col-form-label text-left required"><?php echo e(cleanLang(__('lang.category'))); ?></label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm" id="subscription_categoryid"
            name="subscription_categoryid">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->category_id); ?>"
                <?php echo e(runtimePreselected($subscription->subscription_categoryid ?? '', $category->category_id)); ?>><?php echo e(runtimeLang($category->category_name)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<!--notify client-->
<div class="form-group form-group-checkbox row">
    <div class="col-12 text-left p-t-5">
        <input type="checkbox" id="show_after_adding" name="send_email_to_customer" class="filled-in chk-col-light-blue"
            checked="checked">
        <label for="send_email_to_customer"><?php echo e(cleanLang(__('lang.send_email_to_client'))); ?></label>
    </div>
</div>

<?php else: ?>
<div class="splash-image" id="updatePasswordSplash">
    <img src="<?php echo e(url('/')); ?>/public/images/products-not-found.svg" alt="404 - Not found" />
</div>
<div class="splash-text p-b-30">
    <?php echo app('translator')->get('lang.stripe_products_not_found'); ?>
    </br>
    <a href="https://growcrm.io/documentation/subscription-plans/"
        target="_blank"><?php echo app('translator')->get('lang.see_documentation_for_details'); ?></a>
</div>
<?php endif; ?>
<?php endif; ?>

<!--error connecting to stripe-->
<?php if($show == 'error'): ?>
<div class="splash-image" id="updatePasswordSplash">
    <img src="<?php echo e(url('/')); ?>/public/images/general-error.png" alt="404 - Not found" />
</div>
<div class="splash-text">
    <?php echo e($message); ?>

</div>
<?php endif; ?>



<!--error connecting to stripe-->
<?php if($show == 'no-products'): ?>
<div class="splash-image" id="updatePasswordSplash">
    <img src="<?php echo e(url('/')); ?>/public/images/products-not-found.svg" alt="404 - Not found" />
</div>
<div class="splash-text p-b-30">
    <?php echo app('translator')->get('lang.stripe_products_not_found'); ?>
    </br>
    <a href="https://growcrm.io/documentation/subscription-plans/"
        target="_blank"><?php echo app('translator')->get('lang.see_documentation_for_details'); ?></a>
</div>
<?php endif; ?><?php /**PATH /home/painelsevenclick/public_html/application/resources/views/pages/subscriptions/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>