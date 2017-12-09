<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="description" content=""> 
        <meta name="author" content="">          
        <!-- Bootstrap core CSS -->                                             
        <!-- Custom styles for this template -->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>  

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">

<?php	if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?>

					<?php if ( is_front_page() && is_home() ) : ?>
		
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'shcc' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'shcc' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'shcc' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default shcc custom header sizes attribute.
					 *
					 * @since SHCC 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>	
	
			
        <!-- Header -->         
        <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?>
        <header class="masthead" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>;color:<?php echo '#'.get_header_textcolor() ?>;"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 left"> 
                        <div class="intro-text">
                            <?php _e( 'Have You Been… The Victim of Sexual Harassment?', 'shcc_wp' ); ?>
                        </div>                         
                        <div class="row intro-list"> 
                            <!-- <ul>
	          		<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Has sexual harassment caused you shame, resentment, anger or humiliation?</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Are you afraid of losing your job or future employment in your field?</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Have you endured these emotions and thoughts in the workplace through no fault of your own?</li>
				</ul>-->                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Has sexual harassment caused you shame, resentment, anger or humiliation?', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Are you afraid of losing your job or future employment in your field?', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Have you endured these emotions and thoughts in the workplace through no fault of your own?', 'shcc_wp' ); ?></p> 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="col-md-6 custom-form"> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <form class="form-horizontal" role="form"> 
                                    <fieldset> 
                                        <!-- Form Name -->                                         
                                        <div class="form-title"> 
                                            <legend>
                                                <?php _e( 'Free No Obligation Consultation', 'shcc_wp' ); ?>
                                            </legend>                                             
                                        </div>                                         
                                        <!-- Text input-->                                         
                                        <div class="form-body"> 
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="First Name *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Last Name *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Email *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="row"> 
                                                    <div class="col-md-6"> 
                                                        <div class="col-sm-12"> 
                                                            <input type="text" placeholder="Phone" class="form-control"> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                    <div class="col-md-6"> 
                                                        <div class="col-sm-12"> 
                                                            <input type="text" placeholder="Zip code*" class="form-control"> 
                                                            <i class="zip-home-fa fa fa-info-circle" aria-hidden="true"></i> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Comments *" class="form-control"> 
                                                    <i class="comments-home-fa fa fa-info-circle" aria-hidden="true"></i> 
                                                </div>                                                 
                                            </div>                                             
                                            <a class="btn btn-primary btn-xl col-md-12" href="#services"><?php _e( 'Yes, I would like a free consultation', 'shcc_wp' ); ?></a> 
                                        </div>                                         
                                    </fieldset>                                     
                                </form>                                 
                            </div>
                            <!-- /.col-lg-12 -->                             
                        </div>
                        <!-- /.row -->                         
                    </div>                     
                </div>                 
        </header>         
        <!-- Quotation -->         
        <section class="quote"> 
            <div class="container"> 
                <div class="row centered"> 
                    <div class="col-md-1"></div>                     
                    <div class="col-md-10"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-quote.png" class="centered"> 
                        <p><?php _e( '$38,332,931 jury trial verdict for fraud, breach of fiduciary duty and professional negligence on behalf of the creator of Tae Bo, Billy Blanks, his wife Gayle Blanks, and their company, BG Star Productions, Inc. against their former law firm. Billy Blanks, et al. v. Seyfarth Shaw LLP, et al., Los Angeles Superior Court case number BC308355.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-1"></div>                     
                </div>                 
            </div>             
        </section>         
        <section class="two-col"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 first"> 
                        <h3><?php _e( 'Together We Can Put a Stop To It', 'shcc_wp' ); ?></h3> 
                        <p><?php _e( 'Before that can happen it is very important to understand what sexual harassment is.', 'shcc_wp' ); ?></p> 
                        <p><?php _e( 'The basis for sexual harassment legal protection is Title VII of the Civil Rights Act of 1974. It is unlawful to harass a person (an applicant or employee) because of that person’s sex. Harassment can include “sexual harassment” or unwelcome sexual advances. It is also unlawful to request sexual favors. Whether it is verbal or physical, harassment of a sexual nature is unlawful.', 'shcc_wp' ); ?></p> 
                        <p><?php _e( 'Every state in the union has enacted some form of sexual harassment legislation. The model version is the one used by the federal government. Some states provide for workman’s compensation. Some allow damages for personal injury and some allow punitive damages as well.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-6 second"> 
                        <h3><?php _e( 'Sexual harassment may include:', 'shcc_wp' ); ?></h3> 
                        <!--<ul>
	 					<li>The victim as well as the harasser may be a woman or a man. The victim does not have to be of the opposite sex.</li>
						<li>The harasser can be the victim’s supervisor, an agent of the employer, a supervisor in another area, a co-worker, or a non-employee.</li>
						<li>The victim does not have to be the person harassed but could be anyone affected by the offensive conduct.</li>
						<li>Unlawful sexual harassment may occur without economic injury to or discharge of the victim.</li>
						<li>The harasser’s conduct must be unwelcome.</li>
	 				</ul>-->                         
                        <div class="row"> 
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-one.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The victim as well as the harasser may be a woman or a man. The victim does not have to be of the opposite sex.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-two.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The harasser can be the victim’s supervisor, an agent of the employer, a supervisor in another area, a co-worker, or a non-employee.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-three.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The victim does not have to be the person harassed but could be anyone affected by the offensive conduct.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-four.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Unlawful sexual harassment may occur without economic injury to or discharge of the victim.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-five.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The harasser’s conduct must be unwelcome.', 'shcc_wp' ); ?></p> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
        </section>         
        <section class="help centered"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-3"></div>                     
                    <div class="col-md-6"> 
                        <h3><?php _e( 'How We Can Help', 'shcc_wp' ); ?></h3> 
                        <p><?php _e( 'If you or your loved one are in need of legal assistance concerning a potential lawsuit you should get some legal advice sooner rather than later.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"></div>                     
                </div>                 
                <div class="row four-col"> 
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon1.png"> 
                        <p class="title"><strong><?php _e( 'Case Evaluation', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'A FREE, No Obligations, No Hassle, Case Evaluation.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon2.png"> 
                        <p class="title"><strong><?php _e( 'Consumer Care', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'Personal Service, Speak Directly With A Responsible Lawyer. No Call Centers.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon3.png"> 
                        <p class="title"><strong><?php _e( 'Experience', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'Over 100 Years Of Experience With Over $200 Million In Recovery For Victims.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon4.png"> 
                        <p class="title"><strong><?php _e( 'Safety', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'We promise to keep you secure and anonymous.', 'shcc_wp' ); ?></p> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="mind-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-2"></div>                     
                    <div class="col-md-8 centered"> 
                        <h3><?php _e( 'Peace Of Mind Could Be 30 Seconds Away', 'shcc_wp' ); ?></h3>
                        <br> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-mind.png">
                        <br>
                        <br> 
                        <a class="btn btn-primary btn-xl" href="#services"><?php _e( 'Fill Out A Free Case Evaluation Form Now', 'shcc_wp' ); ?></a> 
                    </div>                     
                    <div class="col-md-2"></div>                     
                </div>                 
            </div>             
        </section> 
	</div><!-- .site-inner -->
</div><!-- .site -->        
           
<?php get_footer(); ?>   
</html>