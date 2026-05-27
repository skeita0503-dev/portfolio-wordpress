<?php get_header(); ?>

<main>
    <!-- ヒーローセクション -->
    <section class="hero">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="hero__inner">
                <h1 class="hero__title"><?php the_title(); ?></h1>
                <div class="hero__content"><?php the_content(); ?></div>
                <a href="<?php echo home_url('/お問い合わせ/'); ?>" class="hero__btn">お問い合わせ</a>
            </div>
        <?php endwhile; endif; ?>
    </section>

    <!-- サービス紹介セクション -->
    <section class="services">
        <div class="services__inner">
            <h2 class="section-title">できること</h2>
            <div class="services__grid">
                <div class="services__card">
                    <h3>WordPress制作</h3>
                    <p>コーポレートサイト・LP・ブログなど、目的に合わせたWordPressサイトを制作します。</p>
                </div>
                <div class="services__card">
                    <h3>システム開発</h3>
                    <p>SE歴2年の経験を活かし、業務システムや基幹システムの開発・改修に対応します。</p>
                </div>
                <div class="services__card">
                    <h3>UI設計・Figma</h3>
                    <p>Figmaを使った画面設計・プロトタイプ作成。上流工程からの対応も可能です。</p>
                </div>
                <div class="services__card">
                    <h3>LP制作</h3>
                    <p>Next.js・TypeScriptを使ったモダンなLP制作。高速・SEOに強いサイトを提供します。</p>
                </div>
                <div class="services__card">
                    <h3>AWS画像処理</h3>
                    <p>AWS Lambdaを活用した画像処理システムの構築・運用サポートを行います。</p>
                </div>
                <div class="services__card">
                    <h3>サイト修正・保守</h3>
                    <p>既存WordPressサイトのカスタマイズ・修正・プラグイン対応など柔軟に対応します。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 制作実績セクション -->
    <section class="works">
        <div class="works__inner">
            <h2 class="section-title">制作実績</h2>
            <div class="works__grid">
                <div class="works__card">
                    <div class="works__label">Web制作</div>
                    <h3>ポートフォリオLP</h3>
                    <p>Next.js・TypeScriptで制作した自己紹介LP。ダーク/ライトモード・スクロールアニメーション実装。</p>
                    <div class="works__tags">
                        <span>Next.js</span>
                        <span>TypeScript</span>
                        <span>CSS Modules</span>
                    </div>
                    <div class="works__links">
                        <a href="https://portfolio-54942445-95d34.web.app/" target="_blank" class="works__link">サイトを見る →</a>
                        <a href="<?php echo home_url('/制作実績/'); ?>" class="works__link">詳しく見る →</a>
                    </div>
                </div>
                <div class="works__card">
                    <div class="works__label">Web制作</div>
                    <h3>花屋ランディングページ</h3>
                    <p>花屋向けLPをHTML/CSSでコーディング。季節感のあるデザインをベースにレスポンシブ対応を実装。</p>
                    <div class="works__tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>
                    <div class="works__links">
                        <a href="https://flower-lp-45173372-97e15.web.app/" target="_blank" class="works__link">サイトを見る →</a>
                        <a href="<?php echo home_url('/制作実績/'); ?>" class="works__link">詳しく見る →</a>
                    </div>
                </div>
                <div class="works__card">
                    <div class="works__label">システム開発（本業）</div>
                    <h3>コーポレートサイト×3</h3>
                    <p>本業にてコーポレートサイトを3件制作。要件定義・設計・実装まで一貫して対応。</p>
                    <div class="works__tags">
                        <span>Next.js</span>
                        <span>JavaScript</span>
                        <span>AWS</span>
                        <span>MySQL</span>
                    </div>
                    <div class="works__links">
                        <a class="works__private">※クライアント都合により非公開</a>
                        <a href="<?php echo home_url('/制作実績/'); ?>" class="works__link">詳しく見る →</a>
                    </div>
                </div>
                <div class="works__card">
                    <div class="works__label">システム開発（本業）</div>
                    <h3>基幹システム開発</h3>
                    <p>販売管理・在庫管理などの業務システム開発。要件定義から設計・実装まで対応。</p>
                    <div class="works__tags">
                        <span>Next.js</span>
                        <span>JavaScript</span>
                        <span>AWS</span>
                        <span>MySQL</span>
                        <span>Figma</span>
                    </div>
                    <div class="works__links">
                        <a class="works__private">※クライアント都合により非公開</a>
                        <a href="<?php echo home_url('/制作実績/'); ?>" class="works__link">詳しく見る →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTAセクション -->
    <section class="cta">
        <div class="cta__inner">
            <h2>まずはお気軽にご相談ください</h2>
            <p>要件定義・仕様作成から対応可能です。お気軽にお問い合わせください。</p>
            <a href="<?php echo home_url('/お問い合わせ/'); ?>" class="cta__btn">お問い合わせはこちら</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>