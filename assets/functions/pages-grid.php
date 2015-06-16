<?php 
function pages_grid_classes( $id ) {
	switch ($id) {
		case 1:
		case 4:
			echo 'medium-8 ';
			break;
		default: 
			echo 'medium-4 ';
			break;
	}
	echo 'columns';
}

function pages_grid_panel_classes ($id ) {
	switch ($id) {
		case 1:
			echo 'callout ';
			break;
	}
	echo 'panel transpanel';
}
?>