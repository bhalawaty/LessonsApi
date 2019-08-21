<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{

    const HTTP_NOT_FOUND = 404;
    const HTTP_success = 200;
    protected $statusCode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function RespondNotFound($message = 'not found!')
    {
        return $this->setStatusCode(self::HTTP_NOT_FOUND)->RespondWithError($message);
    }

    public function RespondCreated($message)
    {
        return $this->setStatusCode(self::HTTP_success)->RespondWithSuccess($message);
    }

    public function RespondWithSuccess($message)
    {
        return $this->respond([
            'Success' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    public function RespondWithError($message)
    {
        return $this->respond([
            'Error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    public function respond($data, $header = [])
    {
        return Response::json($data, $this->getStatusCode(), $header);
    }
}
