<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'vitoralv_jpneto');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'vitoralv_jpneto');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '412369mysql');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?bo,<;#C`Z@C:RHkMf<cYXL(0{|B[XryFJ^aLrY3]Jrn[}Fpw[`G /-$0hWi&-.F');
define('SECURE_AUTH_KEY',  '+-)8NAkyT=pduU5R;jy^E`z(R+ik#@8vinTs|cyaWbR|/oJt3>8Rf~adc6CJj?ux');
define('LOGGED_IN_KEY',    'L_2M M.c]?7j|::xl<E`W+.S&]+)b0a-Xi9!cSw}>L):jm[nC!b/{g,l5-G-[hj;');
define('NONCE_KEY',        '*psa  !Nh]PD^qw6D`4iQGz8!9D9?I21ING-G>.w?RZbaN-we#0EXMQQi:cWLwPh');
define('AUTH_SALT',        '+rG3rN(gVs9Aw|OSA6E*tE9@t/:B=wh++WOO?D|A0(P+,*EFQD/waqM{W|3A<&dQ');
define('SECURE_AUTH_SALT', '0kV~!BrJ7/_O@~ng{s<e-kWmIY+kElc`Q7hw|C+A/T}:IB CsCsXb1L_CpTc5!{-');
define('LOGGED_IN_SALT',   'IF^M85rQH>T6)l>h@fee:-9^WxSZv|.YOs{z;S;7XY|e=p@te2>-gv`ALx.Q+YgQ');
define('NONCE_SALT',       'u+]K/4+o~(~1u%2!?~Godr,.7N!5y;lkE+9D+>>>]y8@6?1R;]daVCMb07lLLnf#');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
