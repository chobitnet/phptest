<?php
header("Content-type: text/html; charset=utf-8");
$_あべおくん = '(´⊙ω⊙`)';
　
_もつを食べる($_あべおくん);
echo '<hr>';
_無限にもつを食べる($_あべおくん);

function _無限にもつを食べる($_誰か) {
    echo _もつを食べる($_誰か, 1000);
}

function _もつを食べる($_誰か, $_回数=1) {
    echo str_repeat($_誰か, $_回数);
}
?>
