{{-- VERIFICA SE O USUARIO ESTA LOGADO --}}
@auth
    <form action="{{route('todolist.addTask')}}" class="formTodolist" method="POST">
        @csrf
        <div class="todobar">
            <button class="addTask" type="submit">
                <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                    fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>plus</title>
                        <desc>Created with Sketch Beta.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            sketch:type="MSPage">
                            <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                transform="translate(-362.000000, -1037.000000)" fill="#000000">
                                <path
                                    d="M390,1049 L382,1049 L382,1041 C382,1038.79 380.209,1037 378,1037 C375.791,1037 374,1038.79 374,1041 L374,1049 L366,1049 C363.791,1049 362,1050.79 362,1053 C362,1055.21 363.791,1057 366,1057 L374,1057 L374,1065 C374,1067.21 375.791,1069 378,1069 C380.209,1069 382,1067.21 382,1065 L382,1057 L390,1057 C392.209,1057 394,1055.21 394,1053 C394,1050.79 392.209,1049 390,1049"
                                    id="plus" sketch:type="MSShapeGroup"> </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
            <input type="text" name="taskContent" id="taskContent" class="taskContent">
        </div>
    </form>
    <div class="taskscontainer">
        <form action="{{route('todolist.taskActions')}}" method="POST">
            @csrf
            @foreach ($tasks as $task)
                @if($task->task_done == 0)
                    <div class="task">
                        <input type="hidden" id="taskId" name="taskId" value="{{$task->id}}">
                        <button class="taskDone" type="submit" name="btnAction" value="btnDone"></button>
                        <h1 class="taskText">{{$task->task_name}}</h1>
                        <div class="taskActions">
                                <button class="taskDelete" type="submit" name="btnAction" value="btnDel">
                                    <img src="{{asset('icons/delete.svg')}}" alt="button delete task">
                                </button>
                        </div>
                    </div>
                @endif 
            @endforeach
        </form>    
    </div>
@endauth

{{-- VERIFICA SE O USUARIO ESTA DESLOGADO --}}
@guest
    @include('components.card')
@endguest
