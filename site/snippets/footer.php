		
	<!-- Footer-->
	<footer class="footer">
		<div class="container">
			<!-- Callout-->
			<aside class="callout">
				<?php $contacturl = $pages->find('contact')->url(); ?>
				<h2>Got a project and need some advice? <a href="<?= $contacturl ?>">Come talk with us.</a></h2>
			</aside>
			<!-- / Callout-->
			<!-- Footer rows-->
			<div class="grid">
				<div class="grid-item" itemscope itemtype="http://schema.org/LocalBusiness">
					<h2>Get in touch</h2>					
					<p class="text-address">
						<span itemprop="name">PebbleRoad Pte Ltd</span>
						<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<br>
							<span itemprop="streetAddress">73A Neil Road</span>,
							<br><span itemprop="addressCountry">Singapore</span> - 
							<span itemprop="postalCode">088901</span>
						</span>
					</p>
					<p class="text-email" itemprop="email" content="info@pebbleroad.com"><em class="icon icon-envelope"> </em><a href="mailto:info@pebbleroad.com">info@pebbleroad.com</a></p>
				</div>
				<div class="grid-item">
					<h2>Find out more</h2>
					<nav class="nav-footer">
					    <?php foreach($pages->visible() as $p): ?>
					    <a <?php e($p->isOpen(), ' class="active" ') ?>href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
					    <?php endforeach ?>
					</nav>
				</div>
				<div class="grid-item">
					<h2>Stay connected</h2>
					<p>
						<a href="https://plus.google.com/116500201979181780899" class="link-gplus link-round"><span class="visuallyhidden">Google Plus</span></a>
						<a href="http://www.linkedin.com/company/pebbleroad" class="link-linkedin link-round"><span class="visuallyhidden">LinkedIn</span></a>
						<a href="http://github.com/PebbleRoad" class="link-github link-round"><span class="visuallyhidden">Github</span></a>
					</p>
					<h3>Subscribe to our newsletter</h3>
					<form action="http://pebbleroad.us2.list-manage1.com/subscribe" class="form-subscribe" method="GET">
						<input type="hidden" name="u" value="7039e618134bbccd1c1d6b82e">
						<input type="hidden" name="id" value="9efa45b5a3">
						<label for="email" class="visuallyhidden">Email</label>
						<input id="email" type="email" name="MERGE0" placeholder="Enter your email address" class="text-input">
						<button class="btn btn-primary">Subscribe</button>
					</form>
				</div>
			</div>
			<!-- / Footer rows-->
			
			<p>

				<a href="<?php echo url() ?>" title="Home" class="logo-small">
					<span class="visuallyhidden">PebbleRoad</span>
				</a>
			</p>
			<p>&copy; 2004-<?php echo date('Y') ?> PebbleRoad Pte Ltd</p>
			
		</div>
	</footer>
	<!-- / Footer-->

	
	<script type="text/javascript">
		var disqus_shortname = 'pebbleroad';		
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>	
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MFLJPT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MFLJPT');</script>
<!-- End Google Tag Manager -->
	<?php echo js('scripts/salvatore.min.js') ?>
	<?php echo js('scripts/main.js') ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script>
</body>
</html>
