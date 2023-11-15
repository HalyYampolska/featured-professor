<?php

function generateProfessorHTML($id) {
    $profPost = new WP_Query(array(
        'post_type' => 'professor',
        'p' => $id
    ));

    while($profPost->have_posts())
}

