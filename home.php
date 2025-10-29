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
        <section class="p-voice">
            <h1>お客様の声</h1>
        </section>

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
                    </div>
                    <div class="p-credibility__icon">
                        <svg aria-hidden="true" width="193" height="34" viewBox="0 0 193 34" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="193" height="34" fill="url(#pattern0_2007_201)" />
                            <defs>
                                <pattern id="pattern0_2007_201" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2007_201" transform="matrix(0.00121832 0 0 0.00694444 -0.157895 -2.875)" />
                                </pattern>
                                <image id="image0_2007_201" width="1080" height="1080" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABDgAAAQ4CAYAAADsEGyPAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEq2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSfvu78nIGlkPSdXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQnPz4KPHg6eG1wbWV0YSB4bWxuczp4PSdhZG9iZTpuczptZXRhLyc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczpBdHRyaWI9J2h0dHA6Ly9ucy5hdHRyaWJ1dGlvbi5jb20vYWRzLzEuMC8nPgogIDxBdHRyaWI6QWRzPgogICA8cmRmOlNlcT4KICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0nUmVzb3VyY2UnPgogICAgIDxBdHRyaWI6Q3JlYXRlZD4yMDI1LTA5LTI4PC9BdHRyaWI6Q3JlYXRlZD4KICAgICA8QXR0cmliOkV4dElkPmJiZjg1MTdkLTg3YjMtNDUyYS1hMWZlLTI2Y2MyZDg2OTBlZTwvQXR0cmliOkV4dElkPgogICAgIDxBdHRyaWI6RmJJZD41MjUyNjU5MTQxNzk1ODA8L0F0dHJpYjpGYklkPgogICAgIDxBdHRyaWI6VG91Y2hUeXBlPjI8L0F0dHJpYjpUb3VjaFR5cGU+CiAgICA8L3JkZjpsaT4KICAgPC9yZGY6U2VxPgogIDwvQXR0cmliOkFkcz4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6ZGM9J2h0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvJz4KICA8ZGM6dGl0bGU+CiAgIDxyZGY6QWx0PgogICAgPHJkZjpsaSB4bWw6bGFuZz0neC1kZWZhdWx0Jz7jgYbnnJ/luIYgLSAzODwvcmRmOmxpPgogICA8L3JkZjpBbHQ+CiAgPC9kYzp0aXRsZT4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRm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" />
                            </defs>
                        </svg>
                    </div>

                    <p class="p-credibility__text p1">　大手美容サロンにて広告ライターとして活動している、かなうです。これまでに<span class="u-font-color--accent-pink">累計3,700本以上の事やLPを執筆</span>し、美容機器や美容サロン集客に関する広告文章を数多く手がけてきました。</p>
                    <p class="p-credibility__text ">そんな中、大手サロンで培った広告ライター経験を活かして、知人が運営する個人サロンに文章のアドバイスをしたところ、<span class="u-font-color--accent-pink">売上アップなど大きな改善が見られたのです。</span></p>
                    <p class="p-credibility__text ">　その経験を通じて気づいたのは、集客や売上に困っている個人サロンオーナーが本当に多いという現実でした。<span class="u-font-color--accent-pink">「文章でこんなに変わるなら、もっと多くのオーナーさんの力になれるはず」</span>そう考え制作したのが、<span class="u-font-color--accent-pink">予約につながる文章作成ツール『サロンチャーム』</span>です。</p>
                    <p class="p-credibility__text ">　サロンチャームを使えば、これまで<span class="u-font-color--accent-pink">1時間かかっていた投稿作成が、たった10分※に短縮できます。</span>外注ライターにお願いすれば毎月数万円かかる文章も、サロンチャームなら買い切りでずっと使える。</p>
                    <p class="p-credibility__text ">　だからこそ、ぜひこの機会に手に入れて、実際に使ってみてください。<br>「もう文章で悩まなくていい」という安心感を、あなたのサロンにも。</p>
                    <p class="p-credibility__text  u-font--attention">※文章作成時間には個人差があります。<br>慣れによって所要時間が短縮されるケースもあります。</p>
                </div>
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