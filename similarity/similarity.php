<?php

namespace NlpTools\Similarity;

/**
 * Set similarity should return a number that is proportional to how
 * similar those two instances are (with any metric).
 * 
 */
interface Similarity
{
	public function similarity(&$A, &$B);
}

?>
