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

        <!-------------------------------
        //    大手美容サロンは違います
        //------------------------------->
        <section class="p-insight">
            <div class="p-insight__bg">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/bg_pink.webp' alt='' width='393' height='1810' loading='lazy'>
            </div>
            <div class="l-inner p-insight__inner">
                <p class="p-insight__but">でも･･･</p>
                <div class="p-insight__container">
                    <h2 class="p-insight__head">大手美容サロンは違います
                    </h2>

                    <p class="p-insight__description p-insight__description--1">
                        その力を知っているからこそ、<br>セールスライター（<span>商品を売るための文章を書く専門家）</span>を<br>雇い、徹底して言葉を磨いています。
                    </p>
                    <p class="p-insight__description p-insight__description--2">
                        もちろんデザインも大切。<br><span class="u-font-color--accent-pink">けれど、それ以上に大切なのは文章です。</span><br>だから大手サロンでは、<br>たった1つのLP（商品販売ページ）の<br>文章をつくるのに、2〜3週間。<br>主力商品や100万円以上の高額商品の場合は、<br>3か月以上かけることもあるのです。
                    </p>
                    <p class="p-insight__description p-insight__description--3">
                        でも、個人サロンのオーナーさんにとっては、<br>毎日のお客様対応に加えて、<br><span class="u-font-color--accent-pink">こまめなインスタ投稿やメッセージ作成に<br>数時間もかけるなんて、現実的ではありません。</span>
                    </p>
                    <p class="p-insight__description p-insight__description--4">
                        「やらなきゃ」と分かっていても、<br>施術が終わった夜に疲れた体で<br>文章を考えるのは本当に大変。
                    </p>
                    <div class="p-insight__image">
                        <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/img_insight-1.webp' alt='ベッドに座ってスマホを操作している女性の画像' width='300' height='200' loading='lazy'>
                    </div>
                    <p class="p-insight__description p-insight__description--5">
                        だからこそ多くのオーナーさんが、
                    </p>
                    <ul class="p-insight__flow c-flow">
                        <li class="c-flow__item">
                            <p class="c-flow__text">
                                続けられない
                            </p>
                            <div class="c-flow__image">
                                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/img_flow-1.webp' alt='女性が悲しんでいるイラスト' width='72' height='72' loading='lazy'>
                            </div>
                        </li>
                        <li class="c-flow__item">
                            <p class="c-flow__text">
                                結局割引
                            </p>
                            <div class="c-flow__image">
                                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/img_flow-2.webp' alt='天秤にお金が乗っているイラスト' width='58' height='58' loading='lazy'>
                            </div>
                        </li>
                        <li class="c-flow__item">
                            <p class="c-flow__text">
                                集客できない
                            </p>
                            <div class="c-flow__image">
                                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/img_flow-3.webp' alt='お店に行列ができているイラスト' width='72' height='72' loading='lazy'>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-------------------------------
        //    予約につながる型をツールにそのまま入れました
        //------------------------------->
        <section class="p-feature">
            <h2 class="p-feature__head">
                <span class="u-font-size-large">30個</span>の<span class="u-font-size-large u-font-color--accent-yellow">"予約につながる型"</span>を<br>ツールにそのまま入れました
            </h2>
            <div class="l-inner p-feature__inner">
                <div class="p-feature__bg">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/bg_pink.webp' alt='' width='393' height='1810' loading='lazy'>
                </div>
                <p class="p-feature__description p-feature__description--1">
                    実は、かなうのメルマガ限定特典として<br>無料で“予約につながる文章の30の型”を<br>お渡ししています。<br><span class="u-space-top">でも、</span>
                </p>
                <div class="p-feature__contents">
                    <div class="p-feature__text-wrap">
                        <div class="c-feature-text-bg">
                            <p class="c-feature-text">その型を見ながら<br>自分で文章を考えるのは大変</p>
                        </div>
                        <div class="c-feature-text-bg c-feature-text-bg--reverse">
                            <p class="c-feature-text c-feature-text">そもそも合ってるのか自信がない</p>
                        </div>
                        <div class="c-feature-text-bg">
                            <p class="c-feature-text">添削してほしい･･･</p>
                        </div>
                    </div>
                    <div class="p-feature__image">
                        <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/img_nayami.webp' alt='頭を抱える男女のイラスト' width='311' height='153' loading='lazy'>
                    </div>
                </div>
                <p class="p-feature__description p-feature__description--2">
                    そんな声もたくさんいただきました。
                </p>
                <p class="p-feature__description p-feature__description--3">
                    しかし私は家事に、3人の育児に、<br>病弱な夫の代わりに大黒柱としての役割。<br>さらにライティングの仕事では、<br>毎月10万文字以上——<br>文庫本にすれば約250ページ、<br>つまり小説1冊分に相当する量を書いています。
                </p>
                <p class="p-feature__description p-feature__description--4">
                    依頼が重なれば、30万文字を超えることも。<br>これは文庫本およそ750ページ、<br>小説3冊分に匹敵します。
                </p>
                <p class="p-feature__description p-feature__description--5 u-font-color--accent-pink">
                    家事・育児と膨大な文章を日々書きながら、<br>全員の文章を添削してあげるのは、<br>正直、現実的に難しいのです。
                </p>
                <div class="p-feature__description p-feature__description--6">
                    <p class="">それでも</p>
                    <p class="">“なんとか力になりたい”</p>
                </div>
                <p class="p-feature__description p-feature__description--7">
                    だから今回、<br>メルマガ限定特典の“30個の型”をインプットさせた<br><span class="u-font-color--accent-pink">【予約につながる文章作成ツール】</span><br>
                    「サロンチャーム」をご用意しました。
                </p>
                <div class="p-feature__image--top">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/img_feature-1.webp' alt='サロンチャームのトップ画面' width='330' height='167' loading='lazy'>
                </div>
                <div class="p-feature__image--sp">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/img_feature-2.webp' alt='サロンチャームを実際使ったチャットの画像' width='347' height='340' loading='lazy'>
                </div>
            </div>


        </section>


        <!-------------------------------
//    サロンチャームを手に入れるとこうなる
//------------------------------->
        <section class="p-benefit">
            <div class="p-benefit__head">
                <svg class="p-benefit__head-bg" aria-hidden="true" width="393" height="249" viewBox="0 0 393 249" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_2007_515" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-94" y="0" width="578" height="173">
                        <rect x="-94" width="578" height="173" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_2007_515)">
                        <path d="M-16.5449 23.0492C157.729 -58.9636 252.788 111.135 412.858 23.0492C572.928 -65.0371 412.858 3908 412.858 3908H-16.5449C-16.5449 3908 -190.819 105.062 -16.5449 23.0492Z" fill="#E5647E" />
                    </g>
                    <mask id="mask1_2007_515" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-69" y="76" width="578" height="173">
                        <rect x="509" y="249" width="578" height="173" transform="rotate(180 509 249)" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask1_2007_515)">
                        <path d="M431.545 225.951C257.271 307.964 162.212 137.865 2.14221 225.951C-157.928 314.037 2.14221 -3659 2.14221 -3659H431.545C431.545 -3659 605.819 143.938 431.545 225.951Z" fill="#E5647E" />
                    </g>
                </svg>
                <h2 class="p-benefit__head-text">予約につながる文章作成ツール<br><span class="p-benefit__head-text--accent">「サロンチャーム」</span><br>を手に入れると、こうなれます</h2>
            </div>
            <div class="l-inner p-benefit__inner">
                <ol class="p-benefit__list">
                    <li class="p-benefit__item c-benefit-card">
                        <div class="c-benefit-card__head">
                            <div class="c-benefit-card__bg"></div>
                            <span class="c-benefit-card__number">01</span>
                            <h3 class="c-benefit-card__text">もう"文章に1時間"<br>悩まなくていい</h3>
                        </div>
                        <div class="c-benefit-card__body">
                            <div class="c-benefit-card__description-wrap">
                                <p class="c-benefit-card__description">
                                    今までは、投稿1つ考えるだけで1時間。<br>「この表現でいいのかな？」「もっといい言い方があるのでは？」と手が止まっていたかもしれません。でもサロンチャームなら、型に沿ってスマホでポチポチするだけ。<span class="u-font-color--accent-pink">10分<span class="u-font-small u-font-color--accent-pink">※</span>ほどで"予約につながる文章"が完成します。余った時間は施術に集中することも、ゆっくりお茶を飲むことだってできます。</span>
                                </p>
                                <span class="u-font--attention u-font--attention--left c-benefit-card__attention">
                                    ※文章作成時間には個人差があります。<br>慣れによって所要時間が短縮されるケースもあります。
                                </span>
                            </div>
                            <figure class="c-benefit-card__image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_benefit-1.webp" loading="lazy" alt="12時を指し示そうな時計の画像" width="361" height="180">
                            </figure>
                        </div>
                    </li>
                    <li class="p-benefit__item c-benefit-card">
                        <div class="c-benefit-card__head">
                            <div class="c-benefit-card__bg"></div>
                            <span class="c-benefit-card__number">02</span>
                            <h3 class="c-benefit-card__text">ネタ切れから<br>サヨナラできる</h3>
                        </div>
                        <div class="c-benefit-card__body">
                            <div class="c-benefit-card__description-wrap">
                                <p class="c-benefit-card__description">
                                    「今日は何を書けばいいんだろう？」<br>毎回頭を抱えていたインスタ投稿も、サロンチャームがあれば安心。30の型がインプットされているから、テーマ選びに迷いません。<span class="u-font-color--accent-pink">「ネタ切れで投稿が止まる」という心配がなくなる</span>ので、集客の波が安定します。
                                </p>
                            </div>
                            <figure class="c-benefit-card__image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_benefit-2.webp" loading="lazy" alt="軽快にスマートフォンを操作する女性の画像" width="361" height="180">
                            </figure>
                        </div>
                    </li>
                    <li class="p-benefit__item c-benefit-card">
                        <div class="c-benefit-card__head">
                            <div class="c-benefit-card__bg"></div>
                            <span class="c-benefit-card__number">03</span>
                            <h3 class="c-benefit-card__text">値下げなしで<br>新規が来てくれる</h3>
                        </div>
                        <div class="c-benefit-card__body">
                            <div class="c-benefit-card__description-wrap">
                                <p class="c-benefit-card__description">
                                    これまで「割引しなきゃ誰も来ない…」と価格を下げていたオーナーさんも、サロンチャームを活用した文章なら、<span class="u-font-color--accent-pink">あなたの人柄やこだわりがしっかり伝わります。</span>「この人に会いたい」「ここに行ってみたい」と思って来てくれるから、<span class="u-font-color--accent-pink">値下げをしなくても新規予約が入るようになります。</span>
                                </p>
                            </div>
                            <figure class="c-benefit-card__image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_benefit-3.webp" loading="lazy" alt="硬貨が階段状に積みあがっていきゴールにたどり着く画像" width="361" height="180">
                            </figure>
                        </div>
                    </li>
                    <li class="p-benefit__item c-benefit-card">
                        <div class="c-benefit-card__head">
                            <div class="c-benefit-card__bg"></div>
                            <span class="c-benefit-card__number">04</span>
                            <h3 class="c-benefit-card__text">リピーターが自然と増える</h3>
                        </div>
                        <div class="c-benefit-card__body">
                            <div class="c-benefit-card__description-wrap">
                                <p class="c-benefit-card__description">
                                    一度来店したお客様に「また行きたい」と思ってもらうには、接客や技術だけでは足りません。日々の投稿やメッセージで"人柄"が伝わることが大切です。サロンチャームなら、<span class="u-font-color--accent-pink">あなたの魅力を自然に文章にのせられるから、リピーターが増えて売上も安定します。</span>
                                </p>
                            </div>
                            <figure class="c-benefit-card__image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_benefit-4.webp" loading="lazy" alt="女性が知り合いに合う雰囲気で来店する画像" width="361" height="180">
                            </figure>
                        </div>
                    </li>
                    <li class="p-benefit__item c-benefit-card">
                        <div class="c-benefit-card__head">
                            <div class="c-benefit-card__bg"></div>
                            <span class="c-benefit-card__number">05</span>
                            <h3 class="c-benefit-card__text">施術や家族との時間が<br>戻ってくる</h3>
                        </div>
                        <div class="c-benefit-card__body">
                            <div class="c-benefit-card__description-wrap">
                                <p class="c-benefit-card__description">
                                    「投稿を考えるだけで夜が終わってしまう…」そんな日々から解放されます。サロンチャームを使えば、短時間で文章が完成するので、家族と夕食をゆっくり食べたり、子どもと過ごしたり。<span class="u-font-color--accent-pink">サロンの集客とプライベート、どちらも大切にできるようになります。</span>
                                </p>
                            </div>
                            <figure class="c-benefit-card__image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_benefit-5.webp" loading="lazy" alt="家族3人で公園を散歩している画像" width="361" height="180">
                            </figure>
                        </div>
                    </li>
                    <li class="p-benefit__item c-benefit-card">
                        <div class="c-benefit-card__head">
                            <div class="c-benefit-card__bg"></div>
                            <span class="c-benefit-card__number">06</span>
                            <h3 class="c-benefit-card__text">自信を持って発信できる</h3>
                        </div>
                        <div class="c-benefit-card__body">
                            <div class="c-benefit-card__description-wrap">
                                <p class="c-benefit-card__description">
                                    「これで合ってるのかな？」そんな不安を抱えながら投稿しても、思うように反応は返ってきません。でもサロンチャームなら、すでに結果が出ている"型"を使えるので安心。<span class="u-font-color--accent-pink">「これなら大丈夫」と自信を持って発信できるようになります。</span>その自信が、さらにお客様に伝わりやすくなるのです。
                                </p>
                            </div>
                            <figure class="c-benefit-card__image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_benefit-6.webp" loading="lazy" alt="自信を持って発信する女性の画像" width="361" height="180">
                            </figure>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <!-------------------------------
        //    サロンチャームは誰でも安心して使えます
        //------------------------------->
        <section class="p-easeofuse">
            <h2 class="p-easeofuse__head">本当に簡単？安心してください。<br>『サロンチャーム』は誰でも使えます。</h2>
            <div class="l-inner p-easeofuse__inner">
                <p class="p-easeofuse__description-1">
                    <span class="u-font-squire">『でも、こういうツールって難しそう…』</span><br>多くのオーナーさんが最初に口にする言葉です。<br>安心してください。サロンチャームには、<br>最初から<span class="u-font-squire">専用マニュアル</span>をおつけしています。<br>使い方に迷ったときには、<br>操作動画を見ながら<span class="u-font-squire">そのまま真似するだけ。</span><br>『本当にできるの？』そんな不安も不要です。<br>
                    サロンチャームは、<br>
                    <span class="u-font-squire">まるでLINEで友達とやり取りするような感覚</span>で<br>進められます。<br>スマホでポチポチ質問に答えていくだけで、<br>型に沿った文章が自動で完成するのです。
                </p>
                <div class="p-easeofuse__video-container">
                    <video controls width="100%" height="auto" preload="metadata" loading="lazy">
                        <source src="<?php echo esc_url(get_template_directory_uri()); ?>/video/howto.mp4" type="video/mp4">
                        お使いのブラウザは動画に対応していません。<a href="<?php echo esc_url(get_template_directory_uri()); ?>/video/howto.mp4">動画をダウンロード</a>してください。
                    </video>
                </div>
                <p class="p-easeofuse__description-2">どうですか？<br>思ったより簡単ですよね？</p>
                <p class="p-easeofuse__description-3">動画を見れば、<br><span class="u-font-squire">"私でもできる"</span>と安心していただけるはずです。<br>『どうやってやるの？』と思ったら、<br>こちらも動画で確認できます。<br>見ながら操作すれば、<br><span class="u-font-squire">パソコンが苦手な方でも</span>安心して使いこなせます。</p>
                <div class="p-easeofuse__point">
                    <span class="p-easeofuse__point-head">
                        <svg width="189" height="18" viewBox="0 0 189 18" fill="none" aria-labelledby="point-label" xmlns="http://www.w3.org/2000/svg">
                            <title id="point-label">Point</title>
                            <path d="M75.0747 14.5131L75.0517 14.3751C76.2247 14.1221 76.4317 13.8921 76.5467 13.1331C76.6157 12.7191 76.7077 11.5921 76.7077 9.66013V5.42813C76.7077 2.87513 76.6387 1.97813 76.5467 1.26513C76.5007 0.897132 76.3627 0.621132 75.1207 0.322132C75.0057 0.299132 74.9597 0.276133 74.9597 0.230132C74.9597 0.138132 75.0057 0.0921323 75.0517 0.0461316C75.6037 0.0461316 76.7997 0.0921323 77.6967 0.0921323C78.2717 0.0921323 79.9737 0.000132143 80.8247 0.000132143C82.0207 0.000132143 83.6307 0.184133 85.1027 1.28813C86.3907 2.23113 86.7357 3.72613 86.7357 4.43913C86.7357 5.86513 86.1837 6.87713 85.3097 7.61313C83.8607 8.83213 81.7217 9.29213 80.0197 9.29213C79.6747 9.29213 79.3757 9.29213 79.2607 9.29213C79.1457 9.29213 79.0997 9.31513 79.0997 9.63713C79.0997 10.8331 79.1457 11.7301 79.2377 12.6501C79.3067 13.3861 79.3987 13.6161 79.9967 13.9151C80.2037 14.0071 80.6637 14.1221 81.2387 14.2141C81.3767 14.2371 81.3997 14.2601 81.3997 14.3291C81.3997 14.4211 81.3767 14.5361 81.3307 14.5361C79.4447 14.5361 78.5477 14.5361 78.2947 14.5361C77.0527 14.5361 75.9947 14.6281 75.3277 14.6511C75.1437 14.6511 75.1207 14.6281 75.0747 14.5131ZM83.8607 4.62313C83.8607 2.16213 82.7567 0.414132 80.4337 0.414132C80.1117 0.414132 79.7437 0.529132 79.5137 0.713133C79.3757 0.828132 79.2837 0.966132 79.2607 1.33413C79.1917 2.16213 79.1457 6.78513 79.1457 8.32613C79.1457 8.51013 79.2147 8.57913 79.3987 8.67113C79.6747 8.78613 80.1117 8.90113 80.4567 8.90113C80.8247 8.90113 81.3537 8.80913 81.7907 8.60213C83.2167 7.98113 83.8607 6.41713 83.8607 4.62313ZM91.2908 5.77313C93.3378 5.77313 95.6378 7.22213 95.6378 10.2351C95.6378 12.3511 94.0968 13.5471 93.6598 13.8001C92.8778 14.2371 91.6818 14.7431 90.9228 14.7431C89.6348 14.7431 88.1628 14.2371 87.3348 13.1561C86.7368 12.3971 86.4148 11.5461 86.4148 10.3961C86.4148 9.52213 86.6908 8.41813 87.3348 7.65913C87.8178 7.08413 88.2318 6.78513 88.9448 6.46313C89.5658 6.18713 90.7388 5.77313 91.2908 5.77313ZM90.5778 6.32513C90.1408 6.32513 89.8878 6.41713 89.6118 6.76213C89.2668 7.22213 89.0368 8.07313 89.0368 9.86713C89.0368 11.0861 89.4738 12.6731 89.9568 13.2481C90.5778 13.9611 91.0838 14.1681 91.5208 14.1681C91.8658 14.1681 92.2798 14.0301 92.5558 13.7541C92.9238 13.2941 93.1308 12.4661 93.1308 11.0861C93.1308 9.75213 92.9008 7.86613 92.1188 7.03813C91.7278 6.60113 91.1068 6.32513 90.5778 6.32513ZM99.3715 1.10413C99.9925 1.10413 100.291 1.65613 100.291 2.16213C100.291 2.99013 99.6475 3.40413 99.1185 3.40413C98.6585 3.40413 98.1065 2.99013 98.1065 2.27713C98.1065 1.44913 99.0035 1.10413 99.3715 1.10413ZM97.7155 9.98213L97.6005 7.54413C97.5775 7.45213 97.4165 7.31413 96.9105 7.03813C96.8415 6.99213 96.8415 6.90013 96.8415 6.87713C96.8645 6.80813 96.8875 6.76213 96.9795 6.73913C97.6465 6.60113 99.0495 6.23313 99.9005 5.81913C99.9925 5.77313 100.038 5.75013 100.084 5.75013C100.107 5.75013 100.13 5.79613 100.107 5.91113C100.015 7.45213 99.9005 10.4651 99.9005 11.7761C99.9005 12.6731 99.9005 13.3171 99.9465 13.6621C99.9695 13.8921 100.015 13.9841 100.429 14.0991C100.705 14.1681 100.981 14.1911 101.073 14.2371C101.119 14.2371 101.165 14.3291 101.142 14.3981L101.073 14.4901C101.05 14.5821 101.004 14.5821 100.866 14.5821C100.383 14.5821 99.6705 14.5361 99.0725 14.5361C97.8305 14.5361 96.8415 14.6741 96.6805 14.6741C96.7035 14.6741 96.6345 14.6511 96.6345 14.6281C96.6115 14.5591 96.5885 14.5361 96.5885 14.4901C96.5885 14.4441 96.6575 14.4211 96.7265 14.3981C97.2555 14.1911 97.4855 13.9381 97.5775 13.3401C97.6465 12.9491 97.7845 11.5461 97.7155 9.98213ZM101.642 14.5131L101.688 14.3751C102.401 14.0071 102.539 13.8921 102.585 13.3631C102.677 12.6041 102.723 11.3391 102.723 10.3041C102.723 9.33813 102.654 8.48713 102.608 8.00413C102.585 7.75113 102.516 7.65913 101.78 7.24513C101.711 7.22213 101.711 7.17613 101.734 7.10713C101.757 7.01513 101.78 6.96913 101.849 6.94613C103.298 6.44013 104.31 5.86513 104.632 5.68113C104.701 5.63513 104.77 5.61213 104.839 5.61213C104.862 5.61213 104.954 5.65813 104.977 5.77313C105.023 6.02613 104.954 6.41713 104.954 7.10713C104.954 7.22213 105 7.26813 105.069 7.22213C105.874 6.73913 106.38 6.44013 106.909 6.16413C107.3 5.95713 107.645 5.84213 108.082 5.84213C108.634 5.84213 109.186 6.02613 109.738 6.46313C110.221 6.83113 110.612 7.61313 110.658 8.74013C110.681 9.13113 110.704 9.86713 110.681 10.4881C110.658 11.5461 110.635 12.7191 110.612 13.8001C110.612 13.9841 110.75 14.0071 110.934 14.0071C111.233 14.0301 111.463 14.0301 111.716 14.0531C111.808 14.0531 111.854 14.0761 111.854 14.1221C111.854 14.1911 111.808 14.3981 111.716 14.4901C111.67 14.5591 111.647 14.5591 111.555 14.5591C109.485 14.5591 108.22 14.6741 107.737 14.6741C107.576 14.6741 107.484 14.6511 107.438 14.5591V14.4901C108.013 14.0761 108.128 13.8461 108.197 13.5931C108.312 13.2481 108.381 12.2821 108.381 9.40713C108.381 8.46413 108.22 8.00413 107.829 7.68213C107.461 7.38313 107.139 7.22213 106.472 7.22213C106.035 7.22213 105.322 7.38313 105.115 7.54413C105.023 7.61313 105 7.77413 104.977 8.21113C104.954 9.01613 104.954 11.9601 105.023 13.3171C105.046 13.7541 105.115 13.7771 105.851 14.1911C105.966 14.2601 105.989 14.3291 105.943 14.3981L105.874 14.5361H103.827C102.654 14.5361 102.01 14.6511 101.757 14.6511C101.665 14.6511 101.596 14.6281 101.642 14.5131ZM115.668 4.14013C115.737 4.14013 115.806 4.20913 115.806 4.48513C115.806 4.89913 115.714 5.98013 115.714 6.21013C116.703 6.21013 117.968 6.07213 118.52 6.07213C118.681 6.07213 118.704 6.09513 118.704 6.16413C118.704 6.27913 118.658 6.64713 118.566 6.90013C118.497 7.08413 118.336 7.13013 118.083 7.13013C117.669 7.15313 116.887 7.13013 115.898 7.15313C115.783 7.15313 115.668 7.26813 115.668 7.40613C115.599 9.43013 115.622 11.1551 115.622 12.1671C115.622 13.1331 116.312 13.6161 116.795 13.6161C117.163 13.6161 117.761 13.5241 118.175 13.2481C118.29 13.1561 118.382 13.1331 118.428 13.1561C118.474 13.2021 118.543 13.2941 118.543 13.3401C118.543 13.4091 118.474 13.5011 118.29 13.6161C117.163 14.3521 116.289 14.8121 115.3 14.8121C114.771 14.8121 114.104 14.5821 113.667 14.0301C113.368 13.6621 113.322 13.1101 113.345 12.5121C113.414 10.7181 113.414 8.05013 113.437 7.36013C113.437 7.29113 113.368 7.19913 113.299 7.19913C112.931 7.17613 112.724 7.13013 112.517 7.10713C112.333 7.06113 112.264 7.01513 112.333 6.96913C112.885 6.46313 114.173 5.42813 115.208 4.46213C115.484 4.20913 115.599 4.14013 115.668 4.14013Z" fill="#E5647E" />
                            <line x1="142" y1="9.46582" x2="189" y2="9.46582" stroke="#E5647E" />
                            <line y1="9.46582" x2="47" y2="9.46582" stroke="#E5647E" />
                        </svg>
                    </span>
                    <ul class="p-easeofuse__point-list">
                        <li class="p-easeofuse__point-item">
                            <span class="p-easeofuse__point-title">専用マニュアル付き</span>
                            <p class="p-easeofuse__point-description">最初から専用マニュアルをおつけしています</p>
                        </li>
                        <li class="p-easeofuse__point-item">
                            <span class="p-easeofuse__point-title">操作動画で安心</span>
                            <p class="p-easeofuse__point-description">使い方に迷ったときには、<br>操作動画を見ながらそのまま真似するだけ</p>
                        </li>
                        <li class="p-easeofuse__point-item">
                            <span class="p-easeofuse__point-title">パソコン不要</span>
                            <p class="p-easeofuse__point-description">スマホだけで操作OK<br>パソコンが苦手な方でも安心</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>



        <!--
        <section class="p-overview">
            <h2 class="p-overview__head">サロンチャームの概要</h2>
            <div class="l-inner p-overview__inner">
                <table class="p-overview__table">
                    <tbody class="p-overview__contents">
                        <tr class="p-overview__item">
                            <th class="p-overview__table-head">商品名</th>
                            <td class="p-overview__table-data">
                                <span class="product-name-text">予約につながる文章作成ツール<br>「サロンチャーム」</span>
                            </td>
                        </tr>
                        <tr class="p-overview__item">
                            <th class="p-overview__table-head">特徴</th>
                            <td class="p-overview__table-data">
                                <ul>
                                    <li>"予約につながる30の型"を内蔵</li>
                                    <li>スマホだけで操作OK<br>（パソコン不要）</li>
                                    <li>質問に答えてポチポチするだけで文章完成</li>
                                    <li>マニュアル＆操作動画つき</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="p-overview__item">
                            <th class="p-overview__table-head">利用環境</th>
                            <td class="p-overview__table-data">
                                <ul>
                                    <li>ChatGPTを利用／<br>無料プラン可（回数制限あり）</li>
                                    <li>安定利用には有料課金<br>（約3,000円／月）推奨</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="p-overview__item">
                            <th class="p-overview__table-head">価格</th>
                            <td class="p-overview__table-data">
                                <span class="u-font-color--accent-pink">
                                    リリース記念価格<br>19,800円（買い切り）
                                    <span class="price-note">※通常価格<span class="original-price">49,800円</span></span>
                                </span>
                            </td>
                        </tr>
                        <tr class="p-overview__item">
                            <th class="p-overview__table-head">注意点</th>
                            <td class="p-overview__table-data">
                                <ul>
                                    <li>効果を確実に保証するものでは<br>ありません</li>
                                    <li>ご利用環境により表示や操作が<br>異なる場合があります</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section> -->




        <section class="p-plan"></section>


        <!-------------------------------
//    お客様の声
//------------------------------->
        <section class="p-voice">
            <h2 class="p-voice__head"><span>サロンチャームを使った</span><br>オーナーさんの声</h2>
            <div class="l-inner p-voice__inner">
                <p class="p-voice__attention u-font--attention u-font--attention--left">※下記は実際にご利用いただいた方の声の一例です。
                </p>
                <p class="p-voice__attention u-font--attention u-font--attention--left">
                    ※効果には個人差があり、同様の成果を保証するものではありません。
                </p>
                <p class="p-voice__attention u-font--attention u-font--attention--left">
                    ※写真はイメージです。</p>
                <ul class="p-voice__list">
                    <li class="p-voice__item">
                        <figure class="p-voice__image">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_voice-1.webp" loading="lazy" alt="数ヶ月で＋10万円1年後には＋30万円アップ！フォロワーは100人以下でした。それでもサロンチャームを使って週3回投稿を続けただけで数ヶ月で売上が＋10万円。1年経った今では、毎月＋30万円の売上アップにつながりました。個人サロンにとっては経営が変わるレベルの成果です。" width="361" height="341">
                        </figure>
                    </li>
                    <li class="p-voice__item">
                        <figure class="p-voice__image">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_voice-2.webp" loading="lazy" alt="マルシェで知り合いインスタフォロー、後日来店、リピーター化イベントで出会った方にインスタをフォローしていただき、後日来店。その後もリピートしてくださるように。営業や値下げなしでまた行きたいと思ってもらえたのは、サロンチャームを使った文章で人柄が伝わったからだと思います。" width="361" height="341">
                        </figure>
                    </li>
                    <li class="p-voice__item">
                        <figure class="p-voice__image">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img_voice-3.webp" loading="lazy" alt="文章作成が1時間→10分に！ネタ切れゼロ文章を考えるのが本当に苦手で、投稿を作るのに毎回1時間かかっていました。でもサロンチャームなら、LINEで友達に送る感覚でポチポチ進めるだけ。今では10分※で投稿が完成し、ネタ切れの心配もなくなりました。もう文章で悩まなくていいのは本当に助かっています。" width="361" height="390">
                        </figure>
                    </li>
                </ul>
            </div>
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