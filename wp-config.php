<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'magictrips' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'senha' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/ojD8p#2s+qvQ$rC4_JE2B|x4$1#y1wPqTMQ)M<aLeSR*|_gWhz^=9x].cXkN%XC' );
define( 'SECURE_AUTH_KEY',  'Y=U*;Yx~ln5:#$r[VBh=5u;nr`|lg~<c+;}![ylp!)8X(hZZqP&72+F$K)t}{ymM' );
define( 'LOGGED_IN_KEY',    'p`%Q96En(]T.PP Mlq]%SHr}5cz&VjZd;Z|t/9)YV002aR/!R JPi/7{!{D[#9I$' );
define( 'NONCE_KEY',        'yb4NM=NZ=[;y 4wAX/KRP T5V`eool9t#8RF_,Yy}:`F60D&o)$U_fi.8*DBG:fz' );
define( 'AUTH_SALT',        'V@To3d6l[P!W pO3p8pxp?bn*eyI8yQ1yruZL;z{(K]7hz>9L TG_FTm4vk<hTjq' );
define( 'SECURE_AUTH_SALT', '*7U6j{>2sj0b_CUz!S0=!;4D2iAA0[HHlOU,ZfwC&+;MMfiY,oWn&<7(;*7w},pm' );
define( 'LOGGED_IN_SALT',   ',-GrHL91iAUpW3,w (.j4+)[WeAM!nir>fzn#rGf5mo1zj+ky`R[@Q~0%[KXB$9J' );
define( 'NONCE_SALT',       'YG(:R4+Fnw&]c@h3,QU)wEJiEf#5Z@#;9Wm$I$W]W(2Ry>Q!bj]|:@aQ3lIqLk5W' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'mt_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
