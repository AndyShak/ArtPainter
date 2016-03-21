<div class="footer-wrapper">
	<div class="footer-main">
    	<div class="foter-left">
            <a href="/"><img src="<?php bloginfo('template_url') ?>/images/logo-ftr.jpg" alt="" /></a>
              <p>copyright 2016 <a href="http://andy-kr.pp.ua">Andy Kryvoruka</a></p>
        </div>
        <div class="foter-right">
        	<?php if(!dynamic_sidebar( 'footer' )): ?>
                <p style="color: #FEFCFC">Добавьте содержимое через виджет Текст</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>