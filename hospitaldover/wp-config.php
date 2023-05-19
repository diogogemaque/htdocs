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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hospitaldover_bd' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6*C%tXo6Seq]Fc<S{/:^r^!`Gq[T(jJNwT-<bdHR(w$ hM-7[:6 L)}*&3nqrJp>' );
define( 'SECURE_AUTH_KEY',  '*fiq(f$Pup~_-r_`@[ 43cMBng9Qdn)93XoPDSaR1c*`DMld/x@5` dMH*i1i<y&' );
define( 'LOGGED_IN_KEY',    'IA*7o6l]nbS6P?(njR!`ow!hGKoG[*OE!u{-9{( IYJTl4Oc= (|e4^z~f=s:XQ/' );
define( 'NONCE_KEY',        'k645Vw4%+ W]L%`)txM`V$, )W51b1|RC+>BaSJFdZOd?Z@ f`YHxz,u|Ue&8zmN' );
define( 'AUTH_SALT',        'q|W)W=a)-?GY^^R+|Cswp3|Bu.mGO_ERnKIy>JViBkO4PG^.&>2.J(kJe6$/56_P' );
define( 'SECURE_AUTH_SALT', 'B:F;ZOs6~4=wKUMz33}s`sbVWrdd_n0(XjGg<%aiI|1h8w|=C^;;8q%ZVLl(xX,:' );
define( 'LOGGED_IN_SALT',   'fHk,sll~9vB;B[#TW[U#hT~PBUu4[e4w&b3=~2-_TOV2<Wj3hDsb/>3UW4!k16(^' );
define( 'NONCE_SALT',       '|M;N0%{^!18ag<@zDIc<Lq3e$@-VNQF3jiM&Wc#]/F|],6,c]F[>lA_gnVCVpfjm' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
