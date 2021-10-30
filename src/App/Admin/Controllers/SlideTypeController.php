<?php

namespace App\App\Admin\Controllers;

use App\Domain\SlideTypes\Actions\SlideTypeService;
use Illuminate\Contracts\Routing\ResponseFactory;

final class SlideTypeController
{
    public function __construct(
        private ResponseFactory $responseFactory,
    ) {
    }

    public function index(SlideTypeService $slideTypeService): \Illuminate\Http\Response
    {
        $slideTypes = $slideTypeService->list();

        return $this->responseFactory->view('admin.slide_type.index', [
           'slideTypes' => $slideTypes,
        ]);
    }
}
