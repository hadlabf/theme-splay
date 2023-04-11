<?php get_header(); ?>
<?php 
	$customer = get_field('case_customer');
	$name = get_field('case_name');
	$image = get_field('case_image');
	$description = get_field('case_description');
?>
<div class="case_single_image_wrapper">
	<img src="<?php echo $image['url'];?>"/>
</div>
<div class="case_single_page">
	<div class="content section_padding_3">
		<h1 class="large_title pb-5">Case</h1>
		<div class="d-flex flex-row row">
			<div class="d-flex flex-column col-4">
				<p class="text_2 bold_1 mb-1">Client:</p>
				<p class="text_2 bold_1"><?php echo $customer; ?></p>
			</div>
			<div class="d-flex flex-column col-8">
				<p class="text_2 bold_1 mb-1">Services:</p>
				<div class="d-flex flex-row">
					<?php if(have_rows('case_service_tags') ):
							while( have_rows('case_service_tags') ) : the_row(); ?>
								<p class="text_2 bold_1 service_tag"><?php echo the_sub_field('case_service_tag'); ?></p>
							<?php                         
							endwhile;                            
						endif;
					?>
				</div>
				<p class="text_2"><?php echo $description; ?></p>
			</div>
		</div>
	</div>
</div>

<div class="content section_padding_3">
	<div class="d-flex flex-column">
		<p class="text_2 mb-0">Views:</p>
		<p class="kpi_1">10 423 087</p>
	</div>
	<div class="d-flex flex-row justify-content-between">
		<div class="d-flex flex-column">
			<p class="text_2 mb-0">Likes:</p>
			<p class="kpi_2">46k</p>
		</div>
		<div class="d-flex flex-column">
			<p class="text_2 mb-0">Viewing time:</p>
			<p class="kpi_2">78h</p>
		</div>
		<div class="d-flex flex-column">
			<p class="text_2 mb-0">Profiles activated:</p>
			<p class="kpi_2">8</p>
		</div>
		<div class="d-flex flex-column justify-content-end pb-4">
			<p class="text_2">And counting...</p>
		</div>
	</div>
</div>



<?php get_footer(); ?>