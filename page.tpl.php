<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <?php // Using absolute path to prevent possible bogus behavior that can occur when using relative paths. ?>
  <!--[if IE]>
  <script type="text/javascript">
    var blankImg = '<?php print drupal_get_path('theme', 'october') ?>/images/blank.gif';
  </script>

  <style type="text/css">
    /* Alpha transparency fix. */
    span#logo img,
    div.pngfix {
      /* Update directory path here and in iepngfix.htc to match theme location. */
      behavior: url(<?php print drupal_get_path('theme', 'october') ?>/iepngfix.htc);
    }
  </style>
  <![endif]-->
</head>

<body class="<?php print $body_classes; ?>">
  <div id="page" class="container-16 clear-block">

    <div id="skip-links">
      <?php if ($primary_links): ?>
      <a href="#site-menu"><?php print t('Skip to navigation'); ?></a>
      <?php endif; ?>
      <a href="#content"><?php print t('Skip to content'); ?></a>
    </div>

    <div id="site-header" class="clear-block">
      <?php if ($tools): ?>
      <div id="tools" class="grid-16 clear-block">
        <?php print $tools; ?>
      </div>
      <?php endif; ?>

      <?php if ($banner): ?>
      <div id="banner" class="clear-block">
        <?php print $banner; ?>
      </div>
      <?php endif; ?>

      <div id="header-inner">
        <?php if ($linked_logo_img || $site_name): ?>
        <div id="branding" <?php if (!$site_name): ?>class="no-site-name"<?php endif; ?>>
          <div id="branding-inner">
            <?php if ($linked_logo_img): ?>
            <span id="logo"><?php print $linked_logo_img; ?></span>
            <?php endif; ?>

            <?php if ($site_name): ?>
              <?php if ($title): ?>
              <div id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
              </div>
              <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="nofollow"><?php print $site_name; ?></a></h1>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </div> <!--/#branding -->
        <?php endif; ?>

        <?php if ($main_menu_links): ?>
        <div id="site-menu">
          <?php print $main_menu_links; ?>
        </div> <!--/#site-menu -->
        <?php endif; ?>

      </div> <!--/#header-inner -->
    </div> <!--/#site-header -->

    <?php print $messages; ?>

    <?php if ($mission): ?>
    <div id="mission">
      <?php print $mission; ?>
    </div>
    <?php endif; ?>

    <div id="main" class="column <?php print ns('grid-16', $left, 4, $right, 4) . ' ' . ns('push-4', !$left, 4); ?>">
      <div id="content">
        <div id="content-inner">

          <?php print $breadcrumb; ?>

          <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
          <?php endif; ?>

          <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
          <?php endif; ?>

          <?php print $help; ?>

          <?php if ($content_top): ?>
          <div id="content-top" class="region region-content_top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
          <?php endif; ?>

          <div id="main-content" class="region clear-block">
            <?php print $content; ?>
          </div> <!-- /#main-content -->

          <?php print $feed_icons; ?>

          <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region region-content_bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
          <?php endif; ?>

        </div> <!-- // #content-inner -->
      </div> <!-- //#content -->
    </div> <!-- //end #main -->

    <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $right, 4); ?>">
      <div id="sidebar-left-inner">
        <?php print $left; ?>
      </div>
    </div> <!-- //end #sidebar-left-inner -->
    <?php endif; ?>

    <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-4">
      <div id="sidebar-right-inner">
        <?php print $right; ?>
      </div>
    </div> <!--//end #sidebar-right-inner -->
    <?php endif; ?>

    <?php if ($footer || $footer_message): ?>
    <div id="footer">
      <div id="footer-inner" class="clear-block">
      <?php if ($footer): ?>
        <?php print $footer; ?>
      <?php endif; ?>

      <?php if ($footer_message): ?>
      <div id="footer-message" class="clear-block">
        <?php print $footer_message; ?>
      </div>
      <?php endif; ?>
      </div> <!--//end #footer-inner -->
    </div> <!-- /#footer -->
    <?php endif; ?>

  </div> <!-- /#page -->

<?php print $closure; ?>

</body>
</html>
