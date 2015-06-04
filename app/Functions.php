<?php 

class Functions {
	
	/*
	 * Limits the words within a paragraph
	 */
	public static function word_limiter ( $str, $limit = 100, $end_char = '&#8230;' )
	{
		if (trim( $str ) == '') {
			return $str;
		}

		preg_match( '/^\s*+(?:\S++\s*+){1,'.(int)$limit.'}/', $str, $matches );
		
		if (strlen( $str ) == strlen($matches[0]) ) {
			$end_char = '';
		}

		return rtrim ($matches[0]) . $end_char;
	}

}

?>