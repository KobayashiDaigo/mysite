<footer>
    <div id="form">
        <?php echo do_shortcode('[contact-form-7 id="168" title="NSCform"]'); ?>
    </div>

    <div class="article">
        <div class="wrap">
        <p>お知らせ</p>
            <?php 
            if(have_posts()):
                while(have_posts()):the_post();
            ?>
            <div class="article-text">
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_time('Y.n.j'); ?>&nbsp;&nbsp;
                </a>
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_category(', ') ?>&nbsp;&nbsp;
                </a>
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>&nbsp;&nbsp;
                </a>
            </div>
            <?php 
            endwhile;
            endif;
            ?>
        </div>
    </div>


    <div id="access">
        <div class="wrap">
            <p>アクセス</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.214295487939!2d142.47784931481536!3d43.76841027911746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ce0ccb5e023cb%3A0xc825dcbd1da853d3!2z5pet5bed5biC5pet5bGx5YuV54mp5ZyS!5e0!3m2!1sja!2sjp!4v1590025147628!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <p>こどもしぜんじゅく</p>
            <p>〒123-4567</p>
            <p>北海道旭川市子供町自然塾</p>
        </div>
    </div>

    <div class="nospace">
        <div class="recruit">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/recruit1.png" alt="採用情報"></a>
        </div>
    </div>
    
    <div class="nospace">
        <img src="<?php bloginfo('template_directory'); ?>/images/background9.png" alt="砂漠背景">
    </div>

    <div class="footer">
        <div>
            <a href="">お知らせ</a>
            <a href="">採用情報</a>
            <div>
                <a href="#" class="insta_btn"><span class="insta"><i class="fab fa-instagram"></i></a>
                <a href="#" class="twitter_btn"><span class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook_btn"><span class="facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>

        <div class="inc">©2020 shizenjuku inc</div>
    </div>

</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>