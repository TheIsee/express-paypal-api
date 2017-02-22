<?php

$app->get('/home', function ($req, $res) {
  return $this->view->render($res, 'home.twig');
});
