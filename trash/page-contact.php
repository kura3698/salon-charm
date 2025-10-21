<?php
/**
 * Template Name:コンタクトページ
 **/
get_header();
?>

<div class="contact-form">
  <!-- 管理画面でID、タイトル確認して書き換え -->
  <?php echo do_shortcode('[contact-form-7 id="d79df5f" title="お問い合わせ"]'); ?>
</div>

<?php
get_footer();
