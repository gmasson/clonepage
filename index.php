<?php
/*
	ClonePage
	Script para clonar páginas em seu servidor e domínio
	URL: https://github.com/gmasson/clonepage
	Licença MIT
*/

/* Insira a URL */
$url = "sua_URL_aqui";

/*
	Não alterar nada a partir daqui! (pois exige conhecimento mais avançado)
*/

// Iniciando a instância do cURL
$ch = curl_init();

// Definindo Timeout
$timeout = 5;

curl_setopt($ch, CURLOPT_URL, $url);

// Timeout
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

// Conteúdo obtido deve ser retornado em vez de exibido
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Seguir redirecionamentos
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Executando
$page = curl_exec($ch);

// Substituindo textos
/*
	Caso precise substituir textos dentro da página, apague a marcação de comentários da linha abaixo (#).
	Após isso, insira os textos que precisam ser alterados, como no exemplo.
	Você pode copiar e colas a linha do código, para substituir quantas palavras quiser.
*/
#$page = strtr($page, "Texto Original", "Texto Editado");

// Visualizando conteúdo (para desenvolvedores)
#var_dump($page);

// Visualizando conteúdo
echo $page;

// Encerrando a instância do cURL
curl_close($ch);
