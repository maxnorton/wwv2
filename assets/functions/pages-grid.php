<?php 
function pages_grid_classes( $id ) {
	echo 'small-12 columns';
}

function pages_grid_panel_classes ($id ) {
	if ($id == 1) 
		echo 'callout ';
	switch ($id) {
		case 1:
		case 3:
			echo 'text-left ';
			break;
		case 2:
		case 4:
			echo 'text-right ';
			break;
	}
	echo 'panel transpanel';
}
function pages_grid_img_classes( $id ) {
	if ($id == 2 || $id == 3)
		echo 'small';
}
?>