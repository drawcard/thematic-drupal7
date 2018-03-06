<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<header role="banner">
       <div class="uk-container">
         <?php include './'. path_to_theme() .'/templates/partials/header.tpl.php';?>
       </div>
</header>

<div class="uk-container uk-margin-auto">
  <div uk-grid>
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
      // Decide on layout classes by checking if sidebars have content.
      $content_class = 'col';
      $sidebar_first_class = $sidebar_second_class = '';
      if ($sidebar_first && $sidebar_second):
        $content_class = 'uk-width-expand';
        $sidebar_first_class = 'uk-width-1-5@s first-md sidebar-left';
        $sidebar_second_class = 'uk-width-1-5@s last-md sidebar-right';
      elseif ($sidebar_second):
        $content_class = 'uk-width-expand';
        $sidebar_second_class = 'uk-width-1-5@s last-md sidebar-right';
      elseif ($sidebar_first):
        $content_class = 'uk-width-expand';
        $sidebar_first_class = 'uk-width-1-5@s first-md sidebar-left';
      endif;
    ?>

    <main class="<?php print $content_class; ?>" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-content">Back to top</a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </main>

    <div class="layout-swap__top layout-3col__full">

      <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-menu" tabindex="-1">Back to top</a>

    </div>

    <?php if ($sidebar_first): ?>
      <aside class="<?php print $sidebar_first_class; ?>" role="complementary">
        <?php print $sidebar_first; ?>
      </aside>
    <?php endif; ?>

    <?php if ($sidebar_second): ?>
      <aside class="<?php print $sidebar_second_class; ?>" role="complementary">
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

<div id="footer-wrapper">    
    <div class="uk-container uk-auto-wrap uk-padding" uk-grid>
        <?php print render($page['footer']); ?>
    </div>
</div>
</div>
</div>

<?php print render($page['bottom']); ?>
