<?php
// Array of search tags.
$csv = array_map( 'str_getcsv', file( 'inc/files/list-pmpro.csv' ) );

foreach ( $csv[0] as $key => $value ) {
		$search_tag[] = $value;
}

// get the q parameter from URL
$q = $_REQUEST['q'];

$hint = '';

// lookup all hints from array if $q is different from ""
if ( $q !== '' ) {
	$q = strtolower( $q );
	$len = strlen( $q );
	foreach ( $search_tag as $name ) {
		if ( stristr( $q, substr( $name, 0, $len ) ) ) {
			if ( $hint === '' ) {
				$hint = $name;
			} else {
				$hint .= ", $name";
			}
		}
	}
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === '' ? 'no suggestion' : $hint;
