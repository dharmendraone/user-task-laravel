<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\TasksExport;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function create()
    {
        return view('admin.create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
        ]);

        User::create($request->all());
        return redirect()->to('/admin/users')->with('success', 'User   created successfully');
    }

    // public function tasks()
    // {
    //     $tasks = Task::all();
    //     $tasks->load('user');
    //     return view('admin.tasks', compact('tasks'));
    // }
    public function tasks()
{
    $tasks = Task::with('user')->get();
    return view('admin.tasks', compact('tasks'));
}


    public function createTask()
    {
        $users = User::all();
        return view('admin.create-task', compact('users'));
    }

    public function storeTask(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'task_detail' => 'required',
            'task_type' => 'required',
            'task_status' => 'required',
        ]);
    
        $user = User::find($request->input('user_id'));
    
        if (!$user) {
            return redirect()->back()->with('error', 'User  not found');
        }
    
        $task = new Task();
        $task->user_id = $user->id;
        $task->task_detail = $request->input('task_detail');
        $task->task_type = $request->input('task_type');
        $task->task_status = $request->input('task_status');
        $task->save();
    
        return redirect()->route('admin.tasks')->with('success', 'Task created successfully');
    }

    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportTasks()
    {
        return Excel::download(new TasksExport, 'tasks.xlsx');
    }
}