<?php

namespace App\App\Admin\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;

final class SpeakerController
{
    public function __construct(private ResponseFactory $responseFactory)
    {
    }

    public function index()
    {
        return $this->responseFactory->view('admin.speakers.index');
    }

    public function create()
    {
        return $this->responseFactory->view('admin.speakers.create');
    }

    public function edit()
    {
        return $this->responseFactory->view('admin.speakers.edit');
    }
}
