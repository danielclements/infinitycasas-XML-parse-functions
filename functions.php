<?php

function image( $url = null) {
	$output = '';
	foreach ( $url as $image ) {
		
		$output .= '**LT**Photo**GT**';
		$output .= '**LT**PhotoURL**GT**' . $image . '**LT**/PhotoURL**GT**';
		$output .= '**LT**PhotoDesc**GT**' . "" . '**LT**/PhotoDesc**GT**';
		$output .= '**LT**/Photo**GT**';
	}
	return $output;
}


function imageKyero( $url = null) {
	$output = '';
	$i = 1;
	foreach ( $url as $image ) {
		
		$output .= '**LT**image id="' . $i . '"**GT**';
		$output .= '**LT**url**GT**' . $image . '**LT**/url**GT**';
		$output .= '**LT**/image**GT**';
		$i++;
}

}

function featuresKyero($id){
	
	 $prop_id                 = $id;
	 $reales_amenity_settings = get_option('reales_amenity_settings');
	 $output 				  = '';	
            if(is_array($reales_amenity_settings) && count($reales_amenity_settings) > 0) {
              
                $amenities_count = 0;
                
                foreach($reales_amenity_settings as $key => $value) {
                    $am_label = $value['label'];
                    if(function_exists('icl_translate')) {
                        $am_label = icl_translate('realeswp', 'reales_property_amenity_' . $value['label'], $value['label']);
                    }

                    if(get_post_meta($prop_id, $key, true) == 1) {
						if ($amenities_count <= 30){
						$output .= '**LT**feature**GT**' . esc_html($am_label) . '**LT**/feature**GT**';
                        $amenities_count++;}
						else{break;}
                    }
                }
                if($amenities_count == 0) {
                   
                }
                
            }
	return $output;
	}
		
	
function features($id){
	
	 $prop_id                 = $id;
	 $reales_amenity_settings = get_option('reales_amenity_settings');
	 $output 				  = '';	
            if(is_array($reales_amenity_settings) && count($reales_amenity_settings) > 0) {
              
                $amenities_count = 0;
                
                foreach($reales_amenity_settings as $key => $value) {
                    $am_label = $value['label'];
                    if(function_exists('icl_translate')) {
                        $am_label = icl_translate('realeswp', 'reales_property_amenity_' . $value['label'], $value['label']);
                    }

                    if(get_post_meta($prop_id, $key, true) == 1) {
						if ($amenities_count <= 30){
						$output .= '**LT**Feature**GT**';
						$output .= '**LT**en**GT**' . esc_html($am_label) . '**LT**/en**GT**';
						$output .= '**LT**/Feature**GT**';
                        $amenities_count++;}
						else{break;}
                    }
                }
                if($amenities_count == 0) {
                   
                }
                
            }
	return $output;
}	

function long_str($long){
	$output = "";
	if (is_array($long)){
		$output = array_key_first($long);}

	else{
	
	$output = $long; }

	return $output;
}


function desc_html_strip($desc){
	$output = strip_tags($desc);
	return $output;
}
?>
