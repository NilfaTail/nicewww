<div class='article'>

	<h1>Портфолио</h1>
	<p>Здесь представлены небольшие описания на ранее выполенные работы.</p>

	<?php foreach($data as $key => $row) : ?>
		<div class="portfolio-row flex-row"> <!-- одна работа -->
			<div class="portfolio-gallery"><!-- одна работа -->
				<div class="portfolio-gallery-image-cur image" >
					<img src="https://nicewww.ru/<?php echo $row['Preview']?>" alt=""/>
				</div>
				<!--
				<div class="portfolio-gallety-images-slide" style="display: flex; justify-content: space-between;">
					<img src="http://nicewww.ru/img/portfolio/80_80.png" alt="">
					<img src="http://nicewww.ru/img/portfolio/80_80.png" alt="">
					<img src="http://nicewww.ru/img/portfolio/80_80.png" alt="">
				</div>
				-->
			</div>

			<div class="portfolio-info">
				<div class="portfolio-info-project">
					<h4>
						<a href="<?php echo $row['Site']?>" target="_blank" rel="nofollow" title=""><?php echo $row['Site']?></a>
					</h4>
				</div>
				<div class="portfolio-info-period">Период: <?php echo $row['Year']?></div>
				<div class="portfolio-info-skills">
					<span>Технологии и навыки:</span>
					<?php foreach( $row['Skills'] as $skill) : ?>
						<label><?php echo $skill; ?></label>
					<?php endforeach;?>
				</div>
				<div class="portfolio-info-descr">
					<?php echo $row['Description']?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

<!--
<table class="table">
	<tbody>
		<tr>
			<td>JavaScript</td>
			<td>Старт (февраль 2019)</td>
			<td>
				<img src="/img/skills/javascript_1.png" alt="">
			</td>
		</tr>
	</tbody>
</table>
-->
</div>