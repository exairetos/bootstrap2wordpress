<?php
// Advanced Custom Fields

// ------ Video Featurette ----------
$video_section_title        = get_field('video_section_title');
$video_embed_id             = get_field('video_embed_code');
?>

<!-- VIDEO FEATURETTE 
    =========================================================== -->
    <section id="featurette">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-sm-offset-2">
                
                    <h2><?php echo $video_section_title ?></h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/<?php echo $video_embed_id?>?start=1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div> <!-- column end -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section><!-- featurette -->