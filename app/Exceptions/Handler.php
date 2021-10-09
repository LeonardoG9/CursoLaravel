<?php

namespace App\Exceptions;

use App\Traits\ApiResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponse;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            
        });
    }

    public function render($request, Throwable $exception)
    {

        if(env('APP_ENV') == 'local'){
            return parent::render($request, $exception);
        }

        if ($exception instanceof NotFoundHttpException) {

            return $this->errorResponse("Page not found", 404, "Page not found");
        }

        if ($exception instanceof ModelNotFoundException) {
            return $this->errorResponse("Model not found", 404, "Model not found");
        }
    }
}
