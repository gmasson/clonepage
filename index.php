<?php
/*
	ClonePage
	Script para clonar páginas em seu servidor e domínio
	URL: https://github.com/gmasson/clonepage
	Licença MIT
*/

/* Aqui você insere a URL */
$url = "sua_URL_aqui";

/*
	Não alterar nada a partir daqui!
*/

function clonePage( $site_url ){
	$ch = curl_init();
	$timeout = 5;
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
	Caso precise substituir textos dentro da página, apague o trecho "echo $page;" acima e as marcações de comentários das linhas abaixo.
	Após isso, insira nas linhas dentro da array, os textos que precisam ser alterados, como no exemplo.
*/

/*
$changedPage = strtr($page, array(
    "Texto Original 1" => "Texto Editado 1",
    "Texto Original 2" => "Texto Editado 2",
));
echo $changedPage;
*/
