<div>
    <input wire:model="newTask" type="text" placeholder="Add Your Task">
    <button wire:click="addTask">Add Task </button>
    <hr>
    <div class="alert">
        @error('newTask')
            <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        .alert {
            background: #000;
            color: #cdd7a7;
            text-align: center;
            padding: 10px;
        }

        th,
        td {
            border: 1px solid#ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }

        tr:nth-child(even) {
            background-color: #cdd7a7;
        }

        .btn {
            background-color: red;
            color: #fff;
            border: none;
            outline: none;
            padding: 5px;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>
                        {{ $task->task }}
                    </td>
                    <td>
                        <button wire:click="removeTask({{ $task->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
