<?php

namespace App\App\Admin\Controllers;

use App\App\Admin\Requests\Speaker\StoreSpeakerRequest;
use App\Domain\Department\Actions\DepartmentService;
use App\Domain\Speaker\Actions\SpeakerService;
use App\Domain\Speaker\DataTransferObjects\SpeakerCreateDto;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

final class SpeakerController
{
    public function __construct(private ResponseFactory $responseFactory)
    {
    }

    public function index(SpeakerService $speakerService): Response
    {
        $speakers = $speakerService->list();

        return $this->responseFactory->view('admin.speakers.index', [
            'speakers' => $speakers,
        ]);
    }

    public function create(DepartmentService $departmentService): Response
    {
        $departments = $departmentService->list();

        return $this->responseFactory->view('admin.speakers.create', [
            'departments' => $departments,
        ]);
    }

    public function store(
        StoreSpeakerRequest $speakerRequest,
        SpeakerService $speakerService,
    ): Response {
        $speaker = $this->getDtoSpeaker($speakerRequest);

        $speakerService->create($speaker);

        return $this->responseFactory->redirectToRoute('speakers.index');
    }

    public function edit(
        $id,
        SpeakerService $speakerService,
        DepartmentService $departmentService,
    ): Response {
        $speaker = $speakerService->getSpeakerById($id);
        $departments = $departmentService->list();

        return $this->responseFactory->view('admin.speakers.edit', [
            'speaker' => $speaker,
            'departments' => $departments,
        ]);
    }

    public function update(
        $id,
        SpeakerService $speakerService,
        StoreSpeakerRequest $request,
    ): Response {
        $speaker = $this->getDtoSpeaker($request);

        $speakerService->update($id, $speaker);

        return $this->responseFactory->redirectToRoute('speakers.index');
    }

    private function getDtoSpeaker(StoreSpeakerRequest $request): SpeakerCreateDto
    {
        $value = $request->post('firstName') . ' ' . $request->post('lastName');
        $slug = Str::of($value)->slug('-');

        return new SpeakerCreateDto(
            firstName: $request->post('firstName'),
            lastName: $request->post('lastName'),
            surname: $request->post('surname'),
            position: $request->post('position'),
            file: $request->file('image'),
            slug: $slug,
            departmentId: (int) $request->post('departmentId'),
        );
    }
}
