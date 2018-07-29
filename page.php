<?php
	error_reporting(E_ALL);
?>
	
	<?php get_header();?>
	<main>
		<div id="geninf">
			<div class="inf">
				<dl>
					<dt>
						<div class="par">
							Personal information 
						</div>
					</dt>
					<dd>
						<div class="content">	
							<strong>Age:</strong> 19. <br>
							<strong>School:</strong> finished school 22 in 2016. <br>
							<strong>University:</strong> Petro Mohyla Black Sea National University.<br>
							<strong>Department:</strong> Computer Science.<br>
							<strong>Speciality:</strong>Computer science and IT.<br>
							<strong>Hobby:</strong> play piano.<br>
						</div>
					</dd>
					<dt>
						<div class="par">
							What I already know 
						</div>
					</dt>
					<dd>
						<div class="content">
							html, css, a little bit of JavaScript and jQuery
						</div>
					</dd>
					<dt>
						<div class="par">
							What I want to learn 
						</div>
					</dt>
					<dd>
						<div class="content">
							I want to improve my skills in JavaScript, learn how to work with frameworks(e.g. Angular).
						</div>
					</dd>
				</dl>
			</div>
			<div class="imgwr">
				<img src="<?php bloginfo('template_directory')?>./images/photo.JPG" >
			</div>
		</div>
		<div id="favsh">
			<div class="inf">
				<div class="content">
					<div class="par">Ellen</div>
					<div class="fr">
					<iframe  src="https://www.youtube.com/embed/txtlWTDr34A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="par">James Corden</div>
					<div class="fr">
					<iframe  src="https://www.youtube.com/embed/QjvzCTqkBDQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="par">Jimmy Fallon</div>
					<div class="fr">
					<iframe  src="https://www.youtube.com/embed/tPwuLLL64HM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div id="cont">
			<div class="inf content">
				<strong>E-mail:</strong> <a href="mailto:svet.ragulina@gmail.com"> 
				<img src="<?php bloginfo('template_directory')?>./images/gmicon.png" class="icon">svet.ragulina@gmail.com</a>.<br>
				<strong>Instagram:</strong> <a href="https://www.instagram.com/_svtln_r/" target="_blank">
				<img src="<?php bloginfo('template_directory')?>./images/instaicon.png" class="icon">@_svtln_r</a>.<br>
				<strong>VK:</strong> <a href="https://vk.com/svetlana_ragulina" target="_blank">
					<img src="<?php bloginfo('template_directory')?>./images/vkicon.png" class="icon">Svetlana Ragulina</a>
			</div>
		</div>
		<div id="offer">
			<div id="inputoffer">
			<div class="inf content">
				<div class="err" id="errmail">Invalid e-mail</div>
				<div class="err" id="errfile">File has to be .pdf,.jpeg or .jpg</div>
				<div class="fileloaded"></div>
				<form action="/wp-content/themes/themesvtlnr/handler.php" method="post">
					
					<div class="inpfield">
						
						<strong>E-mail</strong><br>
						
						<input type="text" id="email">
					</div>
					<div class="inpfield">
						
						<strong>Comment</strong><br>
						
						<textarea id="comment"></textarea>
					</div>
					<div class="inpfield">
						<div class="fileUpload">
     					<label>
							<input type="file" id="addfile">
							<span>Choose file</span>
						</label>
					</div>
					</div>
					<div class="inpfield">
						<input type="submit" id="sendform" class="btn"  value="Send">
					</div>					
				</form>

			</div>
			</div>
			<div id="resform">
				<div class="inf content">
					Your offer is sent.
				</div>
			</div>
		</div>
		<div id="posts">
			<div class="inf content">
			<?php
$args = array(
 'numberposts' => 6,
 'category'    => 0,
 'orderby'     => 'date',
 'order'       => 'DESC',
 'include'     => array(),
 'exclude'     => array(),
 'meta_key'    => '',
 'meta_value'  =>'',
 'post_type'   => 'post',
 'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);

$posts = get_posts($args);
foreach ($posts as $post) {
	$pTitle = $post->post_title;
	$pUrl = get_permalink($post->post_ID);
	echo '<div class="shortpost">';
	echo '<a href="'.$pUrl.'">';
	echo '<div class="postname txt">';
	echo $pTitle;
	echo '</div>';
	echo '</a>';
	echo '</div>';
}
?>
</div>
		</div>
	</main>
	<?php get_footer();?>
</body>
</html>
