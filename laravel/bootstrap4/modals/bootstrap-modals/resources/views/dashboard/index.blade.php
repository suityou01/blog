@extends('layout.layout')
@section('content')
<h1>Dashboard</h1>
<button type="button" class='btn btn-success' id='addTask' value = {{ route('task.create') }}>+ Add Task</button>
<!--modal placeholders-->
<div id='modal-placeholder'></div>
<!--end of modal placeholders-->
<script>
    $(document).ready(function(){
        $("#addTask").click(function(){
            var url = $(this).val();
            console.log(url);
            $('#modal-placeholder').load(url, function (){
                $('.modal').modal('show');
            });
        });
    });
    $(document).on('click', "#add_task_submit", function(e) {
      e.preventDefault();
      e.stopPropagation();
      fetch('task', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body : $('#add-task-form').serialize()
        })
      .then((response) => {
        return response.text();
      })
      .then((data) => {
        console.log(data);
      });
      e.preventDefault();
      e.stopPropagation();
      $('.modal').modal('hide');
      return false;
    });
</script>
@endsection