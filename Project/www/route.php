<?php

return [
    // '~^$~'=>[app\Controllers\MainController::class, 'main'],
    '~^$~'=>[app\Controllers\ArticleController::class, 'index'],
    '~article/(\d+)/edit~'=>[app\Controllers\ArticleController::class, 'edit'],
    '~article/(\d+)/update~'=>[app\Controllers\ArticleController::class, 'update'],
    '~^article/(\d+)$~'=>[app\Controllers\ArticleController::class, 'show'],
    '~^article/(\d+)/delete$~'=>[app\Controllers\ArticleController::class, 'delete'],
    '~^article/create$~'=>[app\Controllers\ArticleController::class, 'addArticle'],
    '~^article/store$~'=>[app\Controllers\ArticleController::class, 'store'],
    '~^hello/(.+)$~'=>[app\Controllers\MainController::class,'sayHello'],
];