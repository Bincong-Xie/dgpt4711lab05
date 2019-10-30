<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-22 19:34:42 --> Class 'App\Models\Places' not found
#0 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#1 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#2 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#5 {main}
CRITICAL - 2019-10-22 20:33:48 --> Class 'App\Models\App\Models\Simple\CSVModel' not found
#0 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once()
#1 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Plac...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Plac...')
#4 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): spl_autoload_call('App\\Models\\Plac...')
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#6 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#10 {main}
CRITICAL - 2019-10-22 20:33:53 --> Class 'App\Models\App\Models\Simple\CSVModel' not found
#0 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once()
#1 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Plac...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Plac...')
#4 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): spl_autoload_call('App\\Models\\Plac...')
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#6 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#10 {main}
CRITICAL - 2019-10-22 20:34:36 --> Undefined property: App\Models\Places::$keyfield
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:34:55 --> Undefined property: App\Models\Places::$keyfield
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:36:15 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:36:17 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:36:20 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:36:30 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:36:33 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:37:43 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:40:07 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:40:20 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:41:57 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:45:50 --> Undefined property: stdClass::$id
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 21:01:45 --> Undefined property: App\Models\Places::$keyfield
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
