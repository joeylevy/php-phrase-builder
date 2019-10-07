/**
 * @param $final - 1 dimensional array to turn into csv 
 * 
 * 
 */
function create_csv_from_array($final){
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="example.csv"');
	$fp = fopen('php://output', 'wb');
	foreach ($final as $line) {
		// though CSV stands for "comma separated value"
		// in many countries (including France) separator is ";"
		fputcsv($fp, [$line], ',');
	}

	fclose($fp);

}


/**Takes two arrays and creates an array of every possible combination of the two in a phrase
 * phrase format "Hello {1} World {2}"
 * 1 will be replaced by first
 * @param $az
 * @param $all_cities
 * @param $phrase
 *
 */
function combine_arrays($arr1, $arr2, $phrase){
    $final = [];
    foreach ($arr1 as $first){
        foreach($arr2 as $second){
            $this_phrase = $phrase;
//            echo 'creating line with ' . $first . ' and ' . $second . ' using phrase: ' . $this_phrase .'<br/>';
            $this_phrase = str_replace('{1}', $first, $this_phrase );
            $this_phrase = str_replace('{2}', $second, $this_phrase );
//            echo 'phrase: ' . $this_phrase . '<br/><br/>';
            $final[] = $this_phrase;
        }
    } 
return $final;
}
