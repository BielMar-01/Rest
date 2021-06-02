<footer>
			<nav class="nav-footer">
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>

			<p><?php the_field('endereco_header', $contato) ?></p>
			<p class="telefone"><?php the_field('telefone_header', $contato) ?></p>
		</footer>

		<!-- Footer WordPress -->
		<?php wp_footer(); ?>
		<!-- Fecha Footer WordPress -->
	</body>
</html>