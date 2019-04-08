<?php
require __DIR__ . '/../autoload.php';

use App\Controllers\Admin\Error;
use App\Exceptions\BaseException;
use App\Exceptions\ControllerNotFoundException;
use App\Exceptions\DbException;
use App\Exceptions\ErrorException;
use App\Exceptions\MultiException;
use App\Mailer;

$parts = explode('/', $_SERVER['REQUEST_URI']);
$name = (!empty($parts[2])) ? ucfirst($parts[2]) : 'Index';
$classController = '\App\Controllers\Admin\\' . $name;
$path = __DIR__ . '/../' . str_replace('\\', '/', $classController) . '.php';

try {
    if (!is_readable($path)) {
        throw new ControllerNotFoundException ($classController . ' - Such Controller Not Found');
    }
    $controller = new $classController;
    $controller->data = (!empty($parts[3])) ? $parts[3] : null;
    $controller();
} catch (DbException | ErrorException | BaseException | MultiException |
ControllerNotFoundException | MailerException $e) {
    if ($e instanceof MultiException) {
        foreach ($e->all() as $ex) {
            (new \App\Logger())->error($ex);
        }
    } else {
        (new \App\Logger())->error($e);
    }
    if ($e instanceof DbException) {
        (Mailer::instance())->send($e->getMessage());
    }
    $controller = new Error();
    $controller->message = $e;
    $controller();
}
