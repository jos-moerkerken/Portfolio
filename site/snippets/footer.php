			
		
		<footer class="footer" style="background-image: url(<?php if($image = $page->footerBackground()->toFile()): ?>
                <?= $image->url() ?><?php endif ?>); background-size: cover; background-repeat: no-repeat; background-position: center; background-attachment: fixed;">
			<div class="container big">
				<div class="footer-col">
					<div class="title-col">
						<h1 id="split-text">Let's <br>connect.</h1>			
						<?php if($image = $page->footerImage()->toFile()): ?>
                        	<img class="footerImage" src="<?= $image->url() ?>" alt="">
                    	<?php endif ?>			
					</div>
				<hr/>
				<p class="footerText">Bacon ipsum dolor amet venison jowl picanha pork chop ham hock. Landjaeger sirloin pork chop burgdoggen sausage spare ribs, meatball turkey meatloaf bacon filet mignon t-bone. Jerky kielbasa flank, alcatra fatback shankle meatloaf. Biltong porchetta doner chislic. Bacon pork beef ribs cupim.</p>
				<div class="contactContainer">
					<div class="contact"><i class="fa-regular fa-envelope icon"></i>josmoerkerken@gmail.com</div>
					<div class="contact"><i class="fa-solid fa-phone icon"></i>+31 6 81334472</div>
				</div>
				<div class="iconContainer">
					<ul>
						<li>
							<a href="<?= $page->youtubeURL() ?>"><i class="fab fa-brands fa-linkedin icon"></i>    </a>
						</li>	
						<li>
							<a href="<?= $page->instagramURL() ?>"><i class="fab fa-brands fa-instagram icon"></i></a></li>
						<li>
							<a href="<?= $page->twitterURL() ?>"><i class="fa-regular fa-envelope icon"></i></a></li>
					</ul>
				</div>
			</div>
		</div>	
				

			</div>
			<p class="credits">© 2023 Jos Moerkerken - Designed and coded by me</p>
  		</footer>
		</main>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<script src="https://unpkg.com/split-type"></script> 
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    	<script src="https://unpkg.com/@barba/core"></script>
		<script src="https://kit.fontawesome.com/d3c80d56e2.js" crossorigin="anonymous"></script>
	
		<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

		<?= js('assets/js/ScrollTrigger.min.js') ?>
		<?= js('assets/js/ScrollSmoother.min.js') ?>
		<?= js('assets/js/index.js') ?>
		<?= js('assets/js/project.js') ?>
		
			
	</body>
</html>
