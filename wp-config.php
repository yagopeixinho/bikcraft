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
define( 'DB_NAME', 'bikcraft' );

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
define( 'AUTH_KEY',         'J.3]gnML@ldyy<c1=rf&;FRn.q)|xvkr{N/~(.!yb!fTJJ&Pyo;c>?^C63JuM{lf' );
define( 'SECURE_AUTH_KEY',  'Yf%uHBF<T${4OH;5#16fIiCAmAUD)O9>kOqqK }u7fsyhmfdP<7dG`[&Z/O$QZff' );
define( 'LOGGED_IN_KEY',    '+vf#1r5D[a(`yFJ_nQRy##i9)@Vt+}L3E+f%bywl~2aLt4SvkxNN?<iXIl=)>.t)' );
define( 'NONCE_KEY',        '&M_$<KQa(|B**}B@BmBX/Pa2167zR]HJr+XlO$f|J;#PKf?E(rh%eSxhB/cuH#p.' );
define( 'AUTH_SALT',        'B!d02/!VJw.;V~):j`YUfC/~9Oz[yU5zBC=>hmP=<XP)VZg%z;R&4|8bLbBO;ty>' );
define( 'SECURE_AUTH_SALT', '{<>htL|d_jv4yW<UQ&Gx^NIR0C(@u(e8j7E/~2i$fwqzi9z?s}M;bod9M^;jD&Po' );
define( 'LOGGED_IN_SALT',   '|I;>dKM576cL+-~0)K(Gjcoz3DrGjNvO}7sla_WIDQ6/A%,y_y{27KW+L{SbBLL%' );
define( 'NONCE_SALT',       'E!?<D{b}]|x0|:!|Iz$)N`ykar9R%$aT5#^Jn-b}Y85w.1@v[hrO>XqGO;/Uo!-+' );

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
