<?php
/*
	ClonePage
	Script para clonar páginas em seu servidor e domínio
	URL: https://github.com/gmasson/clonepage
	Licença MIT
*/

/* Aqui você insere a URL */
$url = "https://copypronta.com/";

/*
	Não alterar nada a partir daqui!
*/

header("Access-Control-Allow-Origin: *");

function clonePage( $site_url ){
	$ch = curl_init();
	$timeout = 5; // set to zero for no timeout
	curl_setopt ($ch, CURLOPT_URL, $site_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

$page = clonePage($url);
echo $page;

/*
	Substituindo textos
*/
/*
$changedPage = strtr($page, array(
    "Texto Original" => "Texto Editado",
));
echo $changedPage;
*/
