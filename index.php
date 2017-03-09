<?php
header("Content-type: text/html; charset=utf-8");
$あべおくん = '(´⊙ω⊙`)';

_もつを食べる($あべおくん);
echo '<hr>';
_無限にもつを食べる($あべおくん);

function _無限にもつを食べる($誰か) {
  _もつを食べる($誰か, 1000);
}

function _もつを食べる($誰か, $回数=1) {
  echo str_repeat($誰か, $回数);
}
?>
