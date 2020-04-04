<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['method' => 'post','enctype' => 'multipart/form-data', 'id' => 'add-task-form']) !!}
                @csrf  
                <div class="form-group">
                    {{Form::label('task_label', 'Task')}}
                    {{Form::text('task', '', ['class' => 'form-control', 'placeholder' => 'E.g. wash car', 'required'])}}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id='add_task_submit'>Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>