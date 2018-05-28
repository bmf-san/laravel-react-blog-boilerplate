<?php $__env->startSection('canonical', url()->current()); ?>

<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('additional-stylesheet'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('/dist/css/category.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div>
    <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="hero is-primary is-medium header-image">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title is-2">
            Category
          </h1>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="column is-8 is-offset-2">
          <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <p class="title is-4">
              <a href="<?php echo e('web.post.category', $category->name); ?>">
                <?php echo e($category->name); ?>

              </a>
            </p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            No Categories.
          <?php endif; ?>
        </div>
      </div>
    </section>
  </div>
  <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>