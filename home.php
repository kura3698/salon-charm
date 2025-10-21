<?php
// home.php - LP専用
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <main class="l-salon-charm">
        <section class="p-fv"></section>
        <section class="p-problem"></section>
        <section class="p-insight"></section>
        <section class="p-feature"></section>
        <section class="p-benefit"></section>
        <section class="p-easeofuse"></section>
        <section class="p-overview"></section>
        <section class="p-plan"></section>
        <section class="p-voice"></section>
        <section class="p-credibility"></section>

        <!-- よくある質問セクション -->
        <section class="p-faq">
            <div class="l-inner p-faq__inner">
                <h2 class="p-faq__head">よくある質問</h2>
                <div class="p-faq__container">
                    <details class="p-faq__item js-details">
                        <summary class="js-summary">
                            <span class="p-faq__question">
                                <span class="p-faq__question-text">
                                    パソコンが苦手でも使えますか？
                                </span>
                            </span>
                        </summary>
                        <div class="js-content">
                            <ul class="p-faq__answer">
                                <li class="p-faq__answer-text">
                                    はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                                </li>
                            </ul>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary">
                            <span class="p-faq__question">
                                <span class="p-faq__question-text">
                                    本当に10分で文章が完成しますか？
                                </span>
                            </span>
                        </summary>
                        <div class="js-content">
                            <ul class="p-faq__answer">
                                <li class="p-faq__answer-text">
                                    はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                                </li>
                            </ul>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary">
                            <span class="p-faq__question">
                                <span class="p-faq__question-text">
                                    追加料金はかかりますか？
                                </span>
                            </span>
                        </summary>
                        <div class="js-content">
                            <ul class="p-faq__answer">
                                <li class="p-faq__answer-text">
                                    はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                                </li>
                            </ul>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary">
                            <span class="p-faq__question">
                                <span class="p-faq__question-text">
                                    効果は必ず出ますか？
                                </span>
                            </span>
                        </summary>
                        <div class="js-content">
                            <ul class="p-faq__answer">
                                <li class="p-faq__answer-text">
                                    はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                                </li>
                            </ul>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary">
                            <span class="p-faq__question">
                                <span class="p-faq__question-text">
                                    ネタ切れになりませんか？
                                </span>
                            </span>
                        </summary>
                        <div class="js-content">
                            <ul class="p-faq__answer">
                                <li class="p-faq__answer-text">
                                    はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                                </li>
                            </ul>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary">
                            <span class="p-faq__question">
                                <span class="p-faq__question-text">
                                    本当に私でも続けられるでしょうか？
                                </span>
                            </span>
                        </summary>
                        <div class="js-content">
                            <ul class="p-faq__answer">
                                <li class="p-faq__answer-text">
                                    はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                                </li>
                            </ul>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary">
                            <span class="p-faq__question">
                                <span class="p-faq__question-text">
                                    導入サポートはありますか？
                                </span>
                            </span>
                        </summary>
                        <div class="js-content">
                            <ul class="p-faq__answer">
                                <li class="p-faq__answer-text">
                                    はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                                </li>
                            </ul>
                        </div>
                    </details>
                </div>
            </div>
        </section>
        <section class="p-action"></section>
    </main>

    <?php get_footer(); ?>