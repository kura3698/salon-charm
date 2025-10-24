<?php
// home.php - LP専用
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico">
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

       <!-------------------------------
       //    よくある質問
       //------------------------------->
        <section class="p-faq">
            <h2 class="p-faq__head">よくある質問</h2>
            <div class="l-inner p-faq__inner">
                <div class="p-faq__container">
                    <details class="p-faq__item js-details">
                        <summary class="js-summary p-faq__question">
                            <span class="p-faq__question-text">
                                パソコンが苦手でも使えますか？
                            </span>
                        </summary>
                        <div class="p-faq__answer js-content">
                            <p class="p-faq__answer-text">
                                はい、スマホだけで簡単に操作できます。<br>LINEで友達に送るような感覚です。
                            </p>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary p-faq__question">
                            <span class="p-faq__question-text">
                                本当に10分で文章が完成しますか？
                            </span>
                        </summary>
                        <div class="p-faq__answer js-content">
                            <p class="p-faq__answer-text">
                                はい、質問に答えるだけで型に沿った文章が仕上がります。文章作成時間には個人差があります。慣れによって所要時間が短縮されるケースもあります。
                            </p>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary p-faq__question">
                            <span class="p-faq__question-text">
                                追加料金はかかりますか？
                            </span>
                        </summary>
                        <div class="p-faq__answer js-content">
                            <p class="p-faq__answer-text">
                                サロンチャーム自体は買い切り型です。安定利用にはChatGPT有料版（月3,000円程度）を推奨していますが、無料版でもご利用いただけます。
                            </p>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary p-faq__question">
                            <span class="p-faq__question-text">
                                効果は必ず出ますか？
                            </span>
                        </summary>
                        <div class="p-faq__answer js-content">
                            <p class="p-faq__answer-text">
                                本ツールは文章作成をサポートするものであり、効果を保証するものではありません。ですが実際に売上アップや予約増につながったオーナーさんの声を多数いただいています。
                            </p>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary p-faq__question">
                            <span class="p-faq__question-text">
                                ネタ切れになりませんか？
                            </span>
                        </summary>
                        <div class="p-faq__answer js-content">
                            <p class="p-faq__answer-text">
                                いいえ。サロンチャームには30個の型がインプットされています。毎日の投稿ネタに迷うことなく、長期的に続けやすい仕組みです。
                            </p>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary p-faq__question">
                            <span class="p-faq__question-text">
                                本当に私でも続けられるでしょうか？
                            </span>
                        </summary>
                        <div class="p-faq__answer js-content">
                            <p class="p-faq__answer-text">
                                多くのオーナーさんが「パソコンが苦手」「文章が苦手」と口にされます。<br>でも、サロンチャームはスマホだけ10分※で完結なので、投稿が続きやすいと好評です。<br><span class="u-font-small">※文章作成時間には個人差があります。慣れによって所要時間が短縮されるケースもあります。</span>
                            </p>
                        </div>
                    </details>
                    <details class="p-faq__item js-details">
                        <summary class="js-summary p-faq__question">
                            <span class="p-faq__question-text">
                                導入サポートはありますか？
                            </span>
                        </summary>
                        <div class="p-faq__answer js-content">
                            <p class="p-faq__answer-text">
                                はい。最初から専用マニュアルと操作動画をお渡ししています。
                                困ったときは動画を見ながらそのまま真似するだけで安心です。

                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <!-------------------------------
        //    ほんの10分で、あなたのサロンも予約につながる投稿へ
        //------------------------------->
        <section class="p-action">
            
        </section>
    </main>

    <?php get_footer(); ?>