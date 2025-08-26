<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | Este valor determina o driver de sessão padrão que será usado para
    | requisições. Laravel suporta vários tipos de armazenamento. O banco
    | de dados é uma boa escolha para persistência centralizada.
    |
    | Suportado: "file", "cookie", "database", "memcached",
    |            "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Duração da Sessão
    |--------------------------------------------------------------------------
    |
    | Número de minutos que a sessão pode ficar inativa antes de expirar.
    | Para expirar ao fechar o navegador, use a opção expire_on_close.
    |
    */

    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | Criptografia da Sessão
    |--------------------------------------------------------------------------
    |
    | Habilita criptografia dos dados da sessão antes de serem armazenados.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Localização dos Arquivos de Sessão
    |--------------------------------------------------------------------------
    |
    | Quando o driver "file" é usado, os arquivos ficam neste diretório.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Conexão de Banco de Dados para Sessão
    |--------------------------------------------------------------------------
    |
    | Especifique a conexão que será usada para gerenciar sessões em DB/Redis.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Tabela de Sessões
    |--------------------------------------------------------------------------
    |
    | Quando o driver "database" é usado, a tabela a seguir armazenará sessões.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Armazenamento em Cache
    |--------------------------------------------------------------------------
    |
    | Defina o cache store que será usado para drivers como Redis/Memcached.
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Limpeza automática da sessão (Lottery)
    |--------------------------------------------------------------------------
    |
    | Determina a chance de limpeza de sessões antigas em cada requisição.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Nome do Cookie da Sessão
    |--------------------------------------------------------------------------
    |
    | Nome do cookie que será criado para a sessão.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel')).'-session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Path do Cookie
    |--------------------------------------------------------------------------
    |
    | Caminho em que o cookie será válido. Normalmente é '/'.
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Domínio do Cookie
    |--------------------------------------------------------------------------
    |
    | Domínio onde o cookie será válido.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Cookies HTTPS apenas
    |--------------------------------------------------------------------------
    |
    | True para enviar cookie apenas em conexões HTTPS.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Only
    |--------------------------------------------------------------------------
    |
    | True para impedir acesso via JavaScript.
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | Controla comportamento do cookie em requisições cross-site.
    |
    | Suportado: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Partitioned Cookies
    |--------------------------------------------------------------------------
    |
    | True para cookies particionados em contexto cross-site.
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
