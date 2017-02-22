<?php

$app->get('/', function($req, $res) {
  return $res->write('Hello world');
});
