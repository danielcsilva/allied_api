<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require __DIR__ . '/vendor/autoload.php';

use App\Lib\App;
use App\Lib\Request;
use App\Lib\Response;
use App\Controllers\Home;
use App\Lib\Router;
use App\Model\People;
use App\Model\Planeta;

Router::get('/', function () {
    (new Home())->indexAction();
});

Router::get('/people', function (Request $req, Response $res) {
    $res->toJSON(People::all());
});

Router::get('/people/([a-z]*[A-Z]*)', function (Request $req, Response $res) {

    $people = People::findByName($req->params[0]);
    if ($people) {
        $res->toJSON($people);
    } else {
        $res->status(404)->toJSON(['error' => "Não econtrado"]);
    }
});


Router::get('/planets/([1-9]*)', function (Request $req, Response $res) {
    $planeta = Planeta::findById($req->params[0]);
    if ($planeta) {
        $res->toJSON($planeta);
    } else {
        $res->status(404)->toJSON(['error' => "Não econtrado"]);
    }
});

App::run();