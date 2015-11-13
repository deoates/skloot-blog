        </div><!-- restrict -->			
      </div><!-- content-wrapper -->			
      
      <div class="restrict">
        <footer class="footer" role="contentinfo">

          <p class="copyright">
            &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
          
          </p>

        </footer>

      </div><!-- restrict-->

		</div>
		<!-- /wrapper -->

    <?php wp_footer(); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts.js"></script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
