<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{

    // define property
    public $code;
    public $status;
    public $message; 

    /**
     * __construct
     *
     * @param  mixed $code
     * @param  mixed $status
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */
    public function __construct($code, $status, $message, $resource)
    {
        parent::__construct($resource);
        $this->code  = $code;
        $this->status  = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'success'   => $this->status,
            'code'      => $this->code,
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
}
