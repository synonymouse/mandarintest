<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Golden_Mandarin
 */

get_header(); ?>

	<div class="page-404">
		<p class="text-style1">Ошибка</p>
		<p class="text-style2">404</p>
		<p class="text-style3">Вы запросили страницу, которую как ни старались наши серверы - не смогли найти. Что случилось?</p>
		<p class="text-style3">Ссылка, на которую Вы щелкнули, чтобы прибыть сюда, содержит опечатку</p>
		<p class="text-style3">Или эта страница была каким-то образом либо удалена, либо переименована нами</p>
		<p class="text-style3">Или, что конечно же маловероятно, Вы вводили ее вручную и при этом допустили небольшую ошибку?</p>
		<p class="text-style1">Впрочем, на этом мир не кончается: Вас, возможно, заинтересуют другие страницы на нашем сайте!</p>
		<a href="/" class="link-next">Перейти на главную</a>
	</div>
	
<?php
get_footer();
