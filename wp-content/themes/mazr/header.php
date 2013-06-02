<? require_once MZ_THEME_PATH . '/functions_lazy.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?=mz_content_type()?>
    <?= mz_head_title()?>
    <?= mz_meta_author('CoolMore')?>
    <?= mz_meta_description()?>
    <?= mz_meta_generator()?>
    <?=mz_get_favicon()?>
    <?= mz_style_css()?>
    <?=mz_le_ie7_css()?>
    <?=mz_head_rss2_link()?>
    <?=mz_head_rss092_link()?>
    <?= mz_head_atom_link()?>
    <?=mz_head_pingback_link()?>
    <?= mz_jquery_script()?>
</head>
<body>
<div id="page" <? body_class() ?>>
    <div id="header_wrap">
        <h1><a href="<?= MZ_HOME ?>"><?=MZ_BLOG_NAME?></a></h1>

        <div id="header">
            <a href="<?= MZ_HOME ?>" class="description"><?= MZ_BLOG_SUB_TITLE ?></a>
        </div>
    </div>
    <div id="navigation">
        <ul class="fix_height">
            <?= mz_get_category_link_block('geek')?>
            <?= mz_get_category_link_block('life')?>
            <?= mz_get_category_link_block('music')?>
            <?= mz_get_category_link_block('poem')?>
            <?= mz_get_category_link_block('other')?>
            <li class="item message"><a href="<?= MZ_HOME ?>/messages">留言板</a></li>
        </ul>
    </div>
    <div id="container" class="fix_height">
        <div id="content" class="page_content">
