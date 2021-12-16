<?php

//rotas do projeto
function Routers()
{

    return [
        '/' => 'Home@Index',
        '/user/create' => 'User@create',
        '/user/home' => 'User@home',
        '/user/[0-9]+' => 'User@show',
        '/login' => 'User@login',
        '/update' => 'User@update',
        '/recuperar' => 'User@recuperarConta'
    ];
}

function uriFixa($uri, $routes)
{

    if (array_key_exists($uri, $routes)) {
        return [$uri => $routes[$uri]];
    }
    return [];
}

function expresaoRegular($uri, $routes)
{
    return array_filter($routes, function ($value) use ($uri) {
        $regex = str_replace('/', '\/', ltrim($value, '/'));
        return preg_match("/^$regex$/", ltrim($uri, '/'));
    }, ARRAY_FILTER_USE_KEY);;
}

function parametros($uri, $uriFixa)
{
    if (!empty($uriFixa)) {
        $pegarParametros = array_keys($uriFixa)[0];
        return array_diff(
            $uri,
            explode('/', ltrim($pegarParametros, '/'))
        );
    }

    return [];
}

function formatarParametros($uri, $parametros)
{
    $dadosParametros = [];
    foreach ($parametros as $index => $parametro) {
        $dadosParametros[$uri[$index - 1]] = $parametro;
    }

    return $dadosParametros;
}

function Router()
{

    $parametros = [];
    //rota do navegador
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    //rota fixa do projeto
    $routes = Routers();

    //uri fixa
    $uriFixa = uriFixa($uri, $routes);

    if (empty($uriFixa)) {

        $uriFixa =  expresaoRegular($uri, $routes);
        $uri = explode('/', ltrim($uri, '/'));
        $parametros = parametros($uri, $uriFixa);
        $parametros = formatarParametros($uri, $parametros);
    }


    if (!empty($uriFixa)) {
        return loaderController($uriFixa, $parametros);
    }
}
