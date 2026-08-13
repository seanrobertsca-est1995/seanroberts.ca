<?php if (!isset($intCurrentPage)) {
	$intCurrentPage = 0;
} ?>

<section aria-labelledby="footer-contact">

	<div id="footer-contact" class="container-ftr">

		<div>

			<h3 class="mt-20">Navigation</h3>

			<nav aria-label="Footer">

				<ul class="checkmark-fancy-disc extra-lh mb-30">

					<li>
						<a <?php if ($intCurrentPage == 1) { ?>aria-current="page" <?php } ?>
							class="<?php if ($intCurrentPage == 1) { ?>active <?php } ?>green-link fw-light fs-larger"
							href="/">Sean Roberts'
							Resume</a>
					</li>

					<li>
						<a <?php if ($intCurrentPage == 3) { ?>aria-current="page" <?php } ?>
							class="<?php if ($intCurrentPage == 3) { ?>active <?php } ?>green-link fw-light fs-larger"
							href="/ai-powered-php-mysql-web-application-developer/">PHP
							Web
							Apps Built Smarter</a>
					</li>

					<li>
						<a <?php if ($intCurrentPage == 2) { ?>aria-current="page" <?php } ?>
							class="<?php if ($intCurrentPage == 2) { ?>active <?php } ?>green-link fw-light fs-larger"
							href="/winnipeg-mb-web-design-and-development/">Web Design &amp;
							Development</a>

					</li>

					<li>
						<a <?php if ($intCurrentPage == 4) { ?>aria-current="page" <?php } ?>
							class="<?php if ($intCurrentPage == 4) { ?>active <?php } ?>green-link fw-light fs-larger"
							href="/current-website-dev-design-promotion/"><strong>View
								My Current Promotion</strong></a>
					</li>

				</ul>

			</nav>


			<h3 class="mt-20 mb-10 ftr-contact-ml">
				Contact Sean <span class="pro-skills"> - located in Winnipeg, MB. Serving clients globally.</span>
			</h3>

			<ul class="checkmark-fancy-disc extra-lh mb-30">

				<li class="contact">
					<a class="green-link fw-light fs-larger" target="_blank" href="https://wa.me/12048997142">
						<svg class="contact-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
							<path
								d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
							</path>
						</svg>WhatsApp Sean!
					</a>
				</li>

				<li class="contact">
					<a class="green-link fw-light fs-larger" href="tel:12048997142">
						<svg class="contact-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
							<path
								d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
							</path>
						</svg>+1 (204) 899-7142
					</a>
				</li>

				<li class="contact">
					<a class="green-link fw-light fs-larger" target="_blank" href="mailto:seanroberts-ca@outlook.com">
						<svg class="contact-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
							<rect width="20" height="16" x="2" y="4" rx="2"></rect>
							<path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
						</svg>seanroberts-ca@outlook.com
					</a>
				</li>

			</ul>

		</div>

		<div>

			<img class="portrait footer" src="/img/sean-roberts-winnipeg-web-developer.png"
				alt="Picture of Sean Roberts, Winnipeg-based web developer and web designer.">

		</div>

	</div>

</section>