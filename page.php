<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="main">
    <?php if (!empty($this->options->Breadcrumbs) && in_array('Pageshow', $this->options->Breadcrumbs)) : ?>
        <div class="mdui-card breadcrumbs">
            <span class="mdui-chip-icon"><i class="mdui-icon material-icons">chevron_right</i></span>
            <span class="mdui-chip-title">
                <a href="<?php $this->options->siteUrl(); ?>">首页</a> &raquo; <?php $this->title() ?>
            </span>
        </div>
    <?php endif; ?>
    <div id="post" class="mdui-card <?php if ($this->options->PjaxOption && $this->hidden) : ?> protected<?php endif; ?>" style="margin-top:20px;">
        <div class="mdui-card-media">
            <?php echo postThumb($this); ?>
        </div>
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title"><?php $this->title() ?></div>
        </div>
        <div class="mdui-card-content mdui-typo" style="padding: 0px 16px 16px 16px;">
            <?php $this->content(); ?>
            <?php license($this->fields->linceses); ?>
        </div>
    </div>
    <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>