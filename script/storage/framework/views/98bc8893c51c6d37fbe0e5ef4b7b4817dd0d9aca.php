<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(config('app.name')); ?></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(Str::limit(config('app.name'),2)); ?></a>
    </div>
    <ul class="sidebar-menu">
      <li class="<?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-fire"></i> <span><?php echo e(__('Dashboard')); ?></span></a></li>
      <li class="menu-header"><?php echo e(__('Settings & Language')); ?></li>
      <li class="nav-item dropdown <?php echo e(Request::is('admin/settings*') ? 'active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span><?php echo e(__('Settings')); ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php echo e(Request::is('admin/settings/general') ? 'active' : ''); ?>" href="<?php echo e(route('admin.settings.general')); ?>"><?php echo e(__('General Settings')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/settings/sitesettings') ? 'active' : ''); ?>" href="<?php echo e(route('admin.settings.sitesettings')); ?>"><?php echo e(__('Site Settings')); ?></a></li>
        </ul>
      </li>
      <li class="nav-item dropdown <?php echo e(Request::is('admin/language*') ? 'active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe"></i> <span><?php echo e(__('Language')); ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php echo e(Request::is('admin/language/create') ? 'active' : ''); ?>" href="<?php echo e(route('admin.language.create')); ?>"><?php echo e(__('Add New Language')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/language/index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.language.index')); ?>"><?php echo e(__('Manage Languages')); ?></a></li>
        </ul>
      </li>
      <li class="menu-header"><?php echo e(__('management')); ?></li>
      <li class="nav-item dropdown <?php echo e(Request::is('admin/user*') ? 'active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span><?php echo e(__('Users')); ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php echo e(Request::is('admin/user/index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.user.index')); ?>"><?php echo e(__('Manage Users')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/user/report') ? 'active' : ''); ?>" href="<?php echo e(route('admin.user.report')); ?>"><?php echo e(__('Manage Reports')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/user/verification') ? 'active' : ''); ?>" href="<?php echo e(route('admin.user.verification.request')); ?>"><?php echo e(__('Verification Request')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/user/monetization/request') ? 'active' : ''); ?>" href="<?php echo e(route('admin.monetization.index')); ?>"><?php echo e(__('Monetization Request')); ?></a></li>
          
          <li><a class="nav-link <?php echo e(Request::is('user/pending/request*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.user.pending')); ?>"><?php echo e(__('Approved Request')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/user/withdraw/request') ? 'active' : ''); ?>" href="<?php echo e(route('admin.withdraw.index')); ?>"><?php echo e(__('Withdraw Request')); ?></a></li>
        </ul>
      </li>
      <li class="nav-item dropdown <?php echo e(Request::is('admin/video*') ? 'active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-play-circle"></i> <span><?php echo e(__('Videos')); ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php echo e(Request::is('admin/video/index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.video.index')); ?>"><?php echo e(__('Manage Videos')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/video/report') ? 'active' : ''); ?>" href="<?php echo e(route('admin.video.report')); ?>"><?php echo e(__('Manage Reports')); ?></a></li>
        </ul>
      </li>
      <li class="nav-item dropdown <?php echo e(Request::is('admin/sponsor*') ? 'active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-project-diagram"></i> <span><?php echo e(__('Sponsor')); ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php echo e(Request::is('admin/sponsor/create') ? 'active' : ''); ?>" href="<?php echo e(route('admin.sponsor.create')); ?>"><?php echo e(__('Add New Sponsor')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/sponsor') ? 'active' : ''); ?>" href="<?php echo e(route('admin.sponsor.index')); ?>"><?php echo e(__('Manage Sponsor')); ?></a></li>
        </ul>
      </li>
      <li class="nav-item dropdown <?php echo e(Request::is('admin/ads*') ? 'active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-ad"></i> <span><?php echo e(__('Manage Ads')); ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php echo e(Request::is('admin/ads/index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.ads.index')); ?>"><?php echo e(__('Manage Ads')); ?></a></li>
        </ul>
      </li>
      <li class="menu-header"><?php echo e(__('Pages')); ?></li>
      <li class="nav-item dropdown <?php echo e(Request::is('admin/page*') ? 'active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span><?php echo e(__('Page')); ?></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php echo e(Request::is('admin/page/create') ? 'active' : ''); ?>" href="<?php echo e(route('admin.page.create')); ?>"><?php echo e(__('Add New Page')); ?></a></li>
          <li><a class="nav-link <?php echo e(Request::is('admin/page') ? 'active' : ''); ?>" href="<?php echo e(route('admin.page.index')); ?>"><?php echo e(__('Manage Page')); ?></a></li>
        </ul>
      </li>
       <li><a class="nav-link" href="<?php echo e(route('admin.logout')); ?>"><i class="fas fa-sign-out-alt"></i> <span><?php echo e(__('Logout')); ?></span></a></li>
    </ul>
  </aside>
</div><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/layouts/backend/partials/sidebar.blade.php ENDPATH**/ ?>