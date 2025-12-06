<?php 
$specialization_section = get_field('specialization_section');

// debug দরকার হলে layout এর আগে দাও, আর পরে remove করো
// echo '<pre>'; print_r($specialization_section); echo '</pre>';

$service_slider = $specialization_section['service_slider'] ?? []; // repeater/list
?>

<section class="services-section">
    <div class="upper-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/2.jpg);">
        <div class="auto-container">    
            <div class="sec-title text-center light">
                <span class="float-text">Specialization</span>
                <?php if( !empty($specialization_section['section_title']) ): ?>
                    <h2><?php echo esc_html($specialization_section['section_title']); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="services-box">
        <div class="auto-container">
            <div class="services-carousel owl-carousel owl-theme">

                <?php if( !empty($service_slider) && is_array($service_slider) ): ?>
                    <?php foreach( $service_slider as $slider ): 
                        // ekekta slider row
                        $learn_more_button = $slider['learon_more_button'] ?? null;
                    ?> 

                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <?php if(!empty($slider['image']['url'])): ?>
                                    <figure class="image">
                                        <a href="<?php echo esc_url($learn_more_button['url'] ?? '#'); ?>">
                                            <img src="<?php echo esc_url($slider['image']['url']); ?>" alt="">
                                        </a>
                                    </figure>
                                <?php endif; ?>
                            </div>

                            <div class="lower-content">
                                <h3>
                                    <a href="<?php echo esc_url($learn_more_button['url'] ?? '#'); ?>">
                                        <?php echo esc_html($slider['title'] ?? ''); ?>
                                    </a>
                                </h3>

                                <div class="text">
                                    <?php echo esc_html($slider['description'] ?? ''); ?>
                                </div>

                                <?php if($learn_more_button): 
                                    $link_url    = $learn_more_button['url'] ?? '#';
                                    $link_title  = $learn_more_button['title'] ?? 'Learn More';
                                    $link_target = !empty($learn_more_button['target']) ? $learn_more_button['target'] : '_self';
                                ?>
                                    <div class="link-box">
                                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                            <?php echo esc_html($link_title); ?> <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
