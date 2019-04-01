<?php 

/* FAQ
-------------------------------------------------- */

    // Add Shortcode
function faq_shortcode($atts, $content = null)
{

        // Attributes
    extract(shortcode_atts(

        array(

            'class' => '',
            'type' => '',
            'question' => '',
            'id' => '',
            'open' => ''

        ),

        $atts
    ));

    if ($open == 'true') {

        $out .= '<div class="card">';
        $out .= '<div class="card-header" id="heading' . $id . '">';
        $out .= '<h5 class="mb-0">';
        $out .= ' <button class="btn btn-link" data-toggle="collapse" data-target="#collapse' . $id . '" aria-expanded="true" aria-controls="collapse' . $id . '" >';
        $out .= $question;
        $out .= '</button>';
        $out .= '</h5>';
        $out .= '</div>';
        $out .= '<div id="collapse' . $id . '" class="collapse show" aria-labelledby="heading' . $id . '" data-parent="#accordion">';
        $out .=  '<div class="card-body">';
        $out .=  do_shortcode($content);
        $out .=  '</div>';
        $out .=  '</div>';
        $out .=  '</div>';


    } else {

        $out .= '<div class="card">';
        $out .= '<div class="card-header" id="heading' . $id . '">';
        $out .= ' <h5 class="mb-0">';
        $out .= ' <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse' . $id . '" aria-expanded="true" aria-controls="collapse' . $id . '" >';
        $out .= $question;
        $out .= '</button>';
        $out .= '</h5>';
        $out .= '</div>';
        $out .= '<div id="collapse' . $id . '" class="collapse" aria-labelledby="heading' . $id . '" data-parent="#accordion">';
        $out .=  '<div class="card-body">';
        $out .=  do_shortcode($content);
        $out .=  '</div>';
        $out .=  '</div>';
        $out .=  '</div>';
    }


    return $out;

}

add_shortcode('faq', 'faq_shortcode');