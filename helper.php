<?php

class helper {


    public function sendResponse($status, $message, $response){
        return [
            'status' => $status,
            'message' => $message,
            'response' => $response
        ];
    }


}