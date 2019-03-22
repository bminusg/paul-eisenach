<?php

    
    $array = [
        "title"         => get_the_title(),
        "subtitle"      => get_post_meta(get_the_ID(), 'subtitle' , true),
        "job"           => get_post_meta(get_the_ID(), 'job' , true),
        "cooperation"   => get_post_meta(get_the_ID(), 'in-cooperation-with' , true),
        "directed"      => get_post_meta(get_the_ID(), 'directed-by' , true),
        "cast"          => get_post_meta(get_the_ID(), 'cast' , true),
        "production"    => get_post_meta(get_the_ID(), 'production' , true),
        "release"       => get_post_meta(get_the_ID(), 'release' , true),
        "linklabel"     => get_post_meta(get_the_ID(), 'link-label' , true),
        "link"          => get_post_meta(get_the_ID(), 'link' , true),
        "linklabel2"    => get_post_meta(get_the_ID(), 'link-label-2' , true),
        "link2"         => get_post_meta(get_the_ID(), 'link-2' , true),
        "linklabel3"    => get_post_meta(get_the_ID(), 'link-label-3' , true),
        "link3"         => get_post_meta(get_the_ID(), 'link-3' , true),
        "legal"         => get_post_meta(get_the_ID(), 'legal' , true),
        "bonus1"        => get_post_meta(get_the_ID(), 'bonus-1' , true),
        "bonus2"        => get_post_meta(get_the_ID(), 'bonus-2' , true),
        "bonus3"        => get_post_meta(get_the_ID(), 'bonus-3' , true),
        "bonus4"        => get_post_meta(get_the_ID(), 'bonus-4' , true),
        "bonus5"        => get_post_meta(get_the_ID(), 'bonus-5' , true),
        "bonus6"        => get_post_meta(get_the_ID(), 'bonus-6' , true),
        "bonus7"        => get_post_meta(get_the_ID(), 'bonus-7' , true),
        "bonus8"        => get_post_meta(get_the_ID(), 'bonus-8' , true),
        "bonus9"        => get_post_meta(get_the_ID(), 'bonus-9' , true),
        "bonus10"        => get_post_meta(get_the_ID(), 'bonus-10' , true),
        "bonus11"        => get_post_meta(get_the_ID(), 'bonus-11' , true),
        "bonus12"        => get_post_meta(get_the_ID(), 'bonus-12' , true),
        "bonus13"        => get_post_meta(get_the_ID(), 'bonus-13' , true),
        "bonus14"        => get_post_meta(get_the_ID(), 'bonus-14' , true),
        "bonus15"        => get_post_meta(get_the_ID(), 'bonus-15' , true)
    ];

    // set image as preview-src default
    $getVideoSrc = get_post_meta(get_the_ID(), 'video-src' , true);
    if ($getVideoSrc == ""){
        $additionalArray = [
            "previewtype"   => "image",
            "videosrc"      =>  get_the_post_thumbnail_url()
        ];
    } 
    else {
        $additionalArray = [
            "previewtype"   => "video",
            "videosrc"      =>  $getVideoSrc
        ];
    }

    $data = array_merge($array, $additionalArray);   

    foreach ($data as $key => $value):
        if($value != "") {
            $string .= " data-" . $key . "=\"" . $value . "\"";
        }
    endforeach;     


    echo '<li class="teaser" ' . $string . '>';


?>

    <?php 
        if ( has_post_thumbnail() ) { 
            echo '<header>';
            the_post_thumbnail('quad');
            echo '</header>';
        }            
    ?>

    <main>
        <h1><?php echo $array["title"] ?></h1>
        <subtitle><?php echo $array["subtitle"] ?></subtitle>
    </main>

    <footer>
        <job><?php echo $array["job"] ?></job>
    </footer>

</li>