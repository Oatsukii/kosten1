<?php

$base = dirname(dirname(__FILE__));

//Helpers
require_once $base  . '/ilovepdf-php/src/Lib/JWT.php';
require_once $base  . '/ilovepdf-php/src/File.php';
require_once $base  . '/ilovepdf-php/src/Request/Method.php';
require_once $base  . '/ilovepdf-php/src/Request/Response.php';
require_once $base  . '/ilovepdf-php/src/Request/Request.php';
require_once $base  . '/ilovepdf-php/src/Request/Body.php';

//Exceptions
require_once $base  . '/ilovepdf-php/src/Exceptions/ExtendedException.php';
require_once $base  . '/ilovepdf-php/src/Exceptions/DownloadException.php';
require_once $base  . '/ilovepdf-php/src/Exceptions/ProcessException.php';
require_once $base  . '/ilovepdf-php/src/Exceptions/UploadException.php';
require_once $base  . '/ilovepdf-php/src/Exceptions/StartException.php';
require_once $base  . '/ilovepdf-php/src/Exceptions/AuthException.php';
require_once $base  . '/ilovepdf-php/src/Exceptions/PathException.php';

//Ilovepdf
require_once $base  . '/ilovepdf-php/src/Ilovepdf.php';
require_once $base  . '/ilovepdf-php/src/Task.php';
require_once $base  . '/ilovepdf-php/src/Lib/Helper.php';

//Specific processes
require_once $base  . '/ilovepdf-php/src/CompressTask.php';
require_once $base  . '/ilovepdf-php/src/ExtractTask.php';
require_once $base  . '/ilovepdf-php/src/HtmlpdfTask.php';
require_once $base  . '/ilovepdf-php/src/ImagepdfTask.php';
require_once $base  . '/ilovepdf-php/src/MergeTask.php';
require_once $base  . '/ilovepdf-php/src/OfficepdfTask.php';
require_once $base  . '/ilovepdf-php/src/PagenumberTask.php';
require_once $base  . '/ilovepdf-php/src/PdfaTask.php';
require_once $base  . '/ilovepdf-php/src/PdfjpgTask.php';
require_once $base  . '/ilovepdf-php/src/ProtectTask.php';
require_once $base  . '/ilovepdf-php/src/RepairTask.php';
require_once $base  . '/ilovepdf-php/src/RotateTask.php';
require_once $base  . '/ilovepdf-php/src/SplitTask.php';
require_once $base  . '/ilovepdf-php/src/UnlockTask.php';
require_once $base  . '/ilovepdf-php/src/ValidatepdfaTask.php';
require_once $base  . '/ilovepdf-php/src/WatermarkTask.php';
require_once $base  . '/ilovepdf-php/src/EditpdfTask.php';


// //Helpers
// require_once __DIR__ . '/src/Lib/JWT.php';
// require_once __DIR__ . '/src/File.php';
// require_once __DIR__ . '/src/Request/Method.php';
// require_once __DIR__ . '/src/Request/Response.php';
// require_once __DIR__ . '/src/Request/Request.php';
// require_once __DIR__ . '/src/Request/Body.php';

// //Exceptions
// require_once __DIR__ . '/src/Exceptions/ExtendedException.php';
// require_once __DIR__ . '/src/Exceptions/DownloadException.php';
// require_once __DIR__ . '/src/Exceptions/ProcessException.php';
// require_once __DIR__ . '/src/Exceptions/UploadException.php';
// require_once __DIR__ . '/src/Exceptions/StartException.php';
// require_once __DIR__ . '/src/Exceptions/AuthException.php';
// require_once __DIR__ . '/src/Exceptions/PathException.php';

// //Ilovepdf
// require_once __DIR__ . '/src/Ilovepdf.php';
// require_once __DIR__ . '/src/Task.php';
// require_once __DIR__ . '/src/lib/Helper.php';

// //Specific processes
// require_once __DIR__ . '/src/CompressTask.php';
// require_once __DIR__ . '/src/ExtractTask.php';
// require_once __DIR__ . '/src/HtmlpdfTask.php';
// require_once __DIR__ . '/src/ImagepdfTask.php';
// require_once __DIR__ . '/src/MergeTask.php';
// require_once __DIR__ . '/src/OfficepdfTask.php';
// require_once __DIR__ . '/src/PagenumberTask.php';
// require_once __DIR__ . '/src/PdfaTask.php';
// require_once __DIR__ . '/src/PdfjpgTask.php';
// require_once __DIR__ . '/src/ProtectTask.php';
// require_once __DIR__ . '/src/RepairTask.php';
// require_once __DIR__ . '/src/RotateTask.php';
// require_once __DIR__ . '/src/SplitTask.php';
// require_once __DIR__ . '/src/UnlockTask.php';
// require_once __DIR__ . '/src/ValidatepdfaTask.php';
// require_once __DIR__ . '/src/WatermarkTask.php';
// require_once __DIR__ . '/src/EditpdfTask.php';
