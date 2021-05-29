<footer>
			<nav class="nav-footer">
				<ul>
					<li class="current_page_item"><a href="/">Menu</a></li>
					<li><a href="/testewp/sobre/">Sobre</a></li>
					<li><a href="/testewp/contato/">Contato</a></li>
				</ul>
			</nav>

			<p>Rest © 2015. Alguns direitos reservados.</p>

			<p><?php the_field('endereco_header', $contato) ?></p>
			<p class="telefone"><?php the_field('telefone_header', $contato) ?></p>
		</footer>

		<!-- Footer WordPress -->
		<?php wp_footer(); ?>
		<!-- Fecha Footer WordPress -->
	</body>
</html>