<div class="uk-width-1-5">
    <?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" />
    </a>
    <?php endif; ?>
</div>
    <nav id="nav-1st" class="nav-1st uk-width-3-5">
        <?php print render($page['nav-1st']); ?>
    </nav>
    <nav id="nav-2nd" class="nav-2nd uk-width-1-5">
        <?php print render($page['nav-2nd']); ?>
    </nav>
<?php print render($page['header']); ?> 
