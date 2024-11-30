<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select([
            'id', 'name', 'email', 'balance', 'pending_earnings',
            'total_withdrawn', 'tasks_completed', 'success_rate',
            'average_rating', 'created_at'
        ])->get();

        return $this->successResponse($users);
    }
}