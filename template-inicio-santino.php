<?php

/*
Template Name: Inicio template
*/

get_header(); ?>

<style>
    body {
        /* Color Bases */
        --museo-base3: #ffeddeff;
        --museo-base2: #f9d0adff;
        --museo-base1: #f3b37bff;
        --museo-base0: #BE8D62ff;
        --museo-museo-base00: #896749ff;
        --museo-base01: #544130ff;
        --museo-base02: #3a2e24ff;
        --museo-base03: #1f1a17ff;
        
        /* Color Accents */
        --museo-red: #dc322fff;
        --museo-orange: #e77817ff;
        --museo-yellow: #afb500ff;
        --museo-green: #54b50aff;
        --museo-aqua: #2aa198ff;
        --museo-blue: #268bd2ff;
        --museo-violet: #6c71c4ff;
        --museo-magenta: #d33682ff;
    }
    

    .wrapper-inicio {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .carousel {
        width: 100vw;
    }
    
    .carousel-control-box {
        display: flex;
        justify-content: center;
        align-items: center;
        
        height: 60px;
        width: 60px;
        border-radius: 30px;
        
        background-color: var(--museo-orange);
    }
    
    .carousel-control-prev-icon {
        margin-right: 6px;
    }
    
    .carousel-control-next-icon {
        margin-left: 6px;
    }
    
</style>

<div class="wrapper-inicio wrapper section medium-padding " id="site-content" style="padding-top: 0;">

	<div id="carouselExample" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active">
			    <img src="https://museo.ar/wp-content/uploads/2023/09/sala_0000_01_waifu2x_photo_noise1_scale.jpg" class="d-block w-100" alt="...">
			    <div class="carousel-caption">
                </div>
			</div>
			<div class="carousel-item">
			    <img src="https://museo.ar/wp-content/uploads/2023/09/sala_0001_02_waifu2x_photo_noise1_scale.jpg" class="d-block w-100" alt="...">
			</div>
            <div class="carousel-item">
			    <img src="https://museo.ar/wp-content/uploads/2023/09/sala_0002_03_waifu2x_photo_noise1_scale.jpg" class="d-block w-100" alt="...">
			    <!-- <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div> -->
			</div>
            <div class="carousel-item">
			    <img src="https://museo.ar/wp-content/uploads/2023/09/sala_0003_04_waifu2x_photo_noise1_scale.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
		    <div class="carousel-control-box">
		        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
		    </div>
			
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
		    <div class="carousel-control-box">
		        <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
		    </div>
		</button>
	</div>
										
	<div class="section-inner">
	
	
	</div><!-- .section-inner -->

</div><!-- .wrapper -->
								
<?php get_footer(); ?>