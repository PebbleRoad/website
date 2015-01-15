		
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
							<span itemprop="streetAddress">314 Tanglin Road</span>, 
							<br>#01-14<br>
							<span itemprop="addressCountry">Singapore</span> - 
							<span itemprop="postalCode">247977</span>
						</span>
					</p>
					<p class="text-phone" itemprop="telephone"><em class="icon icon-phone"> </em>+65 6736 2180</p>
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
					<h2>Stay updated</h2>
					<p>
						<a href="https://plus.google.com/116500201979181780899" class="link-gplus link-round"><span class="visuallyhidden">Google Plus</span></a>
						<a href="http://www.linkedin.com/company/pebbleroad" class="link-linkedin link-round"><span class="visuallyhidden">LinkedIn</span></a>
						<a href="http://github.com/PebbleRoad" class="link-github link-round"><span class="visuallyhidden">Github</span></a>
					</p>
					<h3>Join our newsletter</h3>
					<form action="http://pebbleroad.us2.list-manage1.com/subscribe?u=7039e618134bbccd1c1d6b82e&amp;id=9efa45b5a3" class="form-subscribe">
						<label for="email" class="visuallyhidden">Email</label>
						<input id="email" type="email" name="email" placeholder="Enter your email address" class="text-input">
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
	<script>

	    var _gaq = _gaq || [];
	      _gaq.push(['_setAccount', 'UA-119367-1']);
	      _gaq.push(['_trackPageview']);

	    (function() {
	      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	    })();
	</script>	
	<?php echo js('scripts/salvatore.min.js') ?>
	<?php echo js('scripts/main.js') ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script>
</body>
</html>