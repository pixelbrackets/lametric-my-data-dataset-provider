<?php

require __DIR__ . '/../vendor/autoload.php';

use ElementaryFramework\WaterPipe\WaterPipe;
use ElementaryFramework\WaterPipe\HTTP\Request\Request;
use ElementaryFramework\WaterPipe\HTTP\Response\Response;
use Pixelbrackets\Html5MiniTemplate\Html5MiniTemplate;

$root = new WaterPipe;

// homepage
// http GET localhost/
$root->get('/', function (Request $request, Response $response) {
    $content = '<h1>LaMetric My Data Dataset Provider</h1>
      <p>
          1. Install the <a href="https://apps.lametric.com/apps/my_data__diy_/8942">My Data (DIY)</a> app on your LaMetric<br>
          2. Add the URL <code>###BASEURL###frames.json</code> as data source
      </p>';
    $content = str_replace(
        '###BASEURL###',
        empty(getenv('BASEURL'))? 'http://localhost/' : getenv('BASEURL'),
        $content
    );
    $template = (new Html5MiniTemplate())
        ->setStylesheet('skeleton')
        ->setStylesheetMode(Html5MiniTemplate::STYLE_INLINE)
        ->setContent($content);
    $response->sendHtml($template->getMarkup());
});

// frames file endpoint
// http GET localhost/frames.json
$root->get('/frames.json', function (Request $request, Response $response) {
    $frames = json_decode(file_get_contents(__DIR__ . '/../data/frames.template.json'), true);
    $response->sendJson($frames);
});

$root->run();
