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
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
        <symbol id="check-icon" viewBox="0 0 14 14">
            <path d="M6.98542 0.00213774C8.69914 0.00213774 10.4129 -0.00170342 12.1266 0.00388373C13.258 0.00772489 13.9919 0.737546 13.9943 1.88536C14.0019 5.29352 14.0019 8.70203 13.9929 12.1102C13.9898 13.2842 13.2605 13.9959 12.0838 13.9969C8.67272 14.0004 5.26162 14.0004 1.85018 13.9962C0.713838 13.9948 0.00575551 13.2957 0.00401746 12.1643C-0.0015443 8.70727 -0.0015443 5.24987 0.00366985 1.79247C0.0054079 0.727769 0.728437 0.00842329 1.79525 0.00388373C3.52531 -0.00344941 5.25536 0.00178855 6.98542 0.00213774ZM3.5479 6.01566C3.39426 6.00309 3.32787 6.07956 3.25904 6.14835C3.00424 6.40257 2.76161 6.67075 2.49291 6.9096C2.26626 7.11074 2.27808 7.25146 2.49291 7.46273C3.46135 8.41499 4.42319 9.37458 5.36625 10.352C5.62105 10.616 5.76635 10.6153 6.02428 10.3527C7.61807 8.72961 9.2289 7.12366 10.8352 5.51316C11.7539 4.59198 11.7435 4.6042 10.8307 3.66207C10.5554 3.37782 10.4063 3.39738 10.1389 3.67115C8.77805 5.0641 7.389 6.42911 6.02671 7.821C5.76705 8.08639 5.61514 8.08535 5.36625 7.81612C4.86674 7.27556 4.3335 6.76608 3.81209 6.24613C3.72136 6.15568 3.61916 6.07746 3.54756 6.01566H3.5479Z" fill="#E5647E" />
        </symbol>
    </svg>
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

        <!-------------------------------
//    大手美容サロンで培った
//------------------------------->
        <section class="p-credibility">
            <div class="p-credibility__head">
                <svg aria-hidden="true" class="p-credibility__head-bg" width="393" height="180" viewBox="0 0 393 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M310.622 130.738C330.051 103.717 317.883 69.4536 283.444 54.2091C249.004 38.9647 205.335 48.5118 185.905 75.5333C166.476 102.555 178.644 136.818 213.084 152.062C247.523 167.307 291.192 157.76 310.622 130.738Z" fill="#E5647E" />
                    <path d="M165.351 155.542C204.893 155.542 236.949 130.391 236.949 99.3662C236.949 68.3412 204.893 43.1904 165.351 43.1904C125.809 43.1904 93.7542 68.3412 93.7542 99.3662C93.7542 130.391 125.809 155.542 165.351 155.542Z" fill="#E5647E" />
                    <path d="M111.609 130.942C148.659 120.103 167.494 87.7495 153.678 58.6798C139.863 29.61 98.628 14.8318 61.578 25.6716C24.528 36.5114 5.69275 68.8645 19.5083 97.9342C33.3239 127.004 74.5586 141.782 111.609 130.942Z" fill="#E5647E" />
                    <path d="M122.579 63.7832C162.121 63.7832 194.177 38.6324 194.177 7.60742C194.177 -23.4176 162.121 -48.5684 122.579 -48.5684C83.0373 -48.5684 50.9821 -23.4176 50.9821 7.60742C50.9821 38.6324 83.0373 63.7832 122.579 63.7832Z" fill="#E5647E" />
                    <path d="M65.5872 80.5518C102.637 69.712 121.472 37.3589 107.657 8.28914C93.8412 -20.7806 52.6065 -35.5589 15.5565 -24.719C-21.4935 -13.8792 -40.3287 18.4739 -26.5132 47.5436C-12.6976 76.6134 28.5371 91.3916 65.5872 80.5518Z" fill="#E5647E" />
                    <path d="M442.835 34.5686C443.456 3.54737 411.908 -21.9954 372.371 -22.4827C332.834 -22.97 300.279 1.78263 299.658 32.8038C299.037 63.825 330.585 89.3677 370.122 89.855C409.659 90.3423 442.214 65.5898 442.835 34.5686Z" fill="#E5647E" />
                    <path d="M331.138 145.462C370.68 145.462 402.735 120.311 402.735 89.2861C402.735 58.2611 370.68 33.1104 331.138 33.1104C291.596 33.1104 259.541 58.2611 259.541 89.2861C259.541 120.311 291.596 145.462 331.138 145.462Z" fill="#E5647E" />
                    <path d="M234.052 53.1124C271.48 43.1039 291.481 11.1842 278.725 -18.1821C265.968 -47.5484 225.286 -63.241 187.858 -53.2324C150.43 -43.2239 130.43 -11.3042 143.186 18.0621C155.942 47.4284 196.624 63.121 234.052 53.1124Z" fill="#E5647E" />
                    <path d="M351.839 14.4159C361.987 -15.5701 339.231 -46.333 301.014 -54.2948C262.796 -62.2567 223.588 -44.4026 213.44 -14.4165C203.293 15.5695 226.048 46.3323 264.266 54.2941C302.484 62.256 341.692 44.4019 351.839 14.4159Z" fill="#E5647E" />
                </svg>
                <h2 class="p-credibility__head-text">大手美容サロンで培った<br>広告ライティングの経験を<br>個人サロンへ</h2>
            </div>
            <div class="l-inner p-credibility__inner">
                <div class="p-credibility__content">
                    <div class="p-credibility__name-group">
                        <div class="p-credibility__name-text">広告ライター</div>
                        <div class="p-credibility__name-text">「かなう」</div>
                        <div class="p-credibility__icon">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_arrow.webp" alt="" loading="lazy" width="193" height="34">
                        </div>
                        <p class="p-credibility__text p-credibility__text--1">　大手美容サロンにて広告ライターとして活動している、かなうです。これまでに<span class="u-font-color--accent-pink">累計3,700本以上の事やLPを執筆</span>し、美容機器や美容サロン集客に関する広告文章を数多く手がけてきました。</p>
                        <p class="p-credibility__text p-credibility__text--2">そんな中、大手サロンで培った広告ライター経験を活かして、知人が運営する個人サロンに文章のアドバイスをしたところ、<span class="u-font-color--accent-pink">売上アップなど大きな改善が見られたのです。</span></p>
                        <p class="p-credibility__text p-credibility__text--3">　その経験を通じて気づいたのは、集客や売上に困っている個人サロンオーナーが本当に多いという現実でした。<span class="u-font-color--accent-pink">「文章でこんなに変わるなら、もっと多くのオーナーさんの力になれるはず」</span>そう考え制作したのが、<span class="u-font-color--accent-pink">予約につながる文章作成ツール『サロンチャーム』</span>です。</p>
                        <p class="p-credibility__text p-credibility__text--4">　サロンチャームを使えば、これまで<span class="u-font-color--accent-pink">1時間かかっていた投稿作成が、たった10分※に短縮できます。</span>外注ライターにお願いすれば毎月数万円かかる文章も、サロンチャームなら買い切りでずっと使える。</p>
                        <p class="p-credibility__text p-credibility__text--5">　だからこそ、ぜひこの機会に手に入れて、実際に使ってみてください。<br>「もう文章で悩まなくていい」という安心感を、あなたのサロンにも。</p>
                        <p class="p-credibility__text p-credibility__text--6 u-font--attention">※文章作成時間には個人差があります。慣れによって所要時間が短縮されるケースもあります。</p>
                    </div>
        </section>

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
            <div class="l-inner p-action__inner">
                <h2 class="p-action__head">
                    <div class="p-action__head-text">ほんの10分<span>※</span>で、</div>
                    <div class="p-action__head-text">あなたのサロンも</div>
                    <div class="p-action__head-text">"予約につながる投稿"へ！</div>
                </h2>
                <div class="p-action__contents">
                    <div class="p-action__text p-action__text--1">毎日一生懸命インスタに投稿して、<br>こまめに発信しているのに——<br>「いいね」も少なく、予約につながらない。<br><span class="u-font-color--accent-pink">そんな悩みも、これでおさらばです。</span></div>
                    <div class="p-action__text p-action__text--2">サロンチャームがあれば、<br>あなたの言葉が<span class="u-font-color--accent-pink">"お客様の心に届く文章"</span>に変わります。</div>
                    <div class="p-action__text p-action__text--3 u-font--attention">※文章作成時間には個人差があります。<br>慣れによって所要時間が短縮されるケースもあります。</div>
                    <ul class="p-action__list">
                        <li class="p-action__item">
                            <svg class="p-action__item-check" width="14" height="14" viewBox="0 0 14 14" role="presentation">
                                <use href="#check-icon"></use>
                            </svg>
                            <p class="p-action__item-text">値下げに頼らず</p>
                        </li>
                        <li class="p-action__item">
                            <svg class="p-action__item-check" width="14" height="14" viewBox="0 0 14 14" role="presentation">
                                <use href="#check-icon"></use>
                            </svg>
                            <p class="p-action__item-text">人柄やこだわりが伝わり</p>
                        </li>
                        <li class="p-action__item">
                            <svg class="p-action__item-check" width="14" height="14" viewBox="0 0 14 14" role="presentation">
                                <use href="#check-icon"></use>
                            </svg>
                            <p class="p-action__item-text">自然と「行ってみたい」と思われる投稿</p>
                        </li>
                    </ul>
                    <div class="p-action__text p-action__text--4 ">これまでの努力を無駄にしないために。<br>そして、<br><span class="u-font-color--accent-pink">あなたの想いをきちんとお客様に届けるために。</span><br>次は、あなたのサロンで体感してください。</div>
                    <div class="p-action__text p-action__text--5 u-font--attention">※文章作成時間には個人差があります。<br>慣れによって所要時間が短縮されるケースもあります。</div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>