<?php

namespace App\Service;

class TaskService {
    public function index () {
        return [
            [
                'id' => 1,
                'title' => 'this is a title',
                'description' => 'this is a description',
                'status' => 'in-progress'
            ],
            [
                'id' => 2,
                'title' => 'this is yet another title',
                'description' => 'this is yet another description',
                'status' => 'backlog'
            ],
            [
                'id' => 3,
                'title' => 'this is yest another title',
                'description' => 'this is yet the last description',
                'status' => 'live-approved'
            ]
        ];
    }
}
