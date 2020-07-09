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
define( 'DB_NAME', 'jorgemateussolucoes' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/3EN($P#bI~1:mL,e)5z^d)Ax8bN5$w@%nY-3[ l!J$YSu|{9n|C-Un}2Lkgu> e' );
define( 'SECURE_AUTH_KEY',  '/<<ym3_vnHO5,(g58~__~d^I->hIht$ElAZm-yywgo%&0:,y)Q-RudgEmp8%>RG|' );
define( 'LOGGED_IN_KEY',    '=0&0t3uPOE&DMhrp0sL{%[#Pv:x@)SsS`7sQy%Bu`KuK{SK[Jw]0F-}`03l7N}6|' );
define( 'NONCE_KEY',        '^,sy_8mXb6tAfid<kgB$x9{<-+,{%r=-f)U59rE {I7>T=vV_G9uyjD$N&XcP8x5' );
define( 'AUTH_SALT',        ';~eBoJs2.>e%|$q*nYF4>&T!A-LAf$`O#2pJ<HKESiJ`+g^qm1dWeI4y|6:^^)-/' );
define( 'SECURE_AUTH_SALT', 'fmQ g1*Tb!mu6rG6Af)))J<-MDcNp;$X@YGoKU%upD@|u%W;Wy/$b/o*FqfPxc!I' );
define( 'LOGGED_IN_SALT',   '{UL:a/BRq$3+mT_(4oHcBIHuFg<Vfx0e_Ohq4C8SIW6}^ze>|?yhZ1bsO6R5&|Wt' );
define( 'NONCE_SALT',       'OT^)0P7o*F>t};~bqvXS*;Djg7C=PFUKQQ%>}e=KsC=- 4k6ET_dE{mu.jq4]#KC' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
