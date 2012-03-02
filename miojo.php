<?php
class Miojo {
	function calc($amp1, $amp2, $coz, $r1, $r2) {
		if ($r1 == $coz || $r2 == $coz) {
			return $coz;
		} elseif ($r1 == $r2) {
			return "tempo de cozimento invalido";
		}     

        if ($r1 > $r2) {
			return $r2 + $this->calc($amp1, $amp2, $coz, $r1 - $r2, $amp2);
        } else {
			return $r1 + $this->calc($amp1, $amp2, $coz, $amp1, $r2 - $r1);
		}
	}

	function calcularTempo($amp1, $amp2, $coz) {
		if ($coz >= $amp1) return "tempo de cozimento invalido";
		if ($coz >= $amp2) return "tempo de cozimento invalido";
		return $this->calc($amp1, $amp2, $coz, $amp1, $amp2);
	}
}	
?>
