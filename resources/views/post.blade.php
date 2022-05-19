@extends('layouts.master')

@section('title')
    Test Fullstack - Loops.id
@endsection

@push('page-styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.css"/>
@endpush

@section('content')
@include('layouts.flash-message')
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Table Data Post</h4>
          <div class="table-responsive ">
            <table id="table_id" class="text-center table table-striped">
                <thead class="text-light bg-primary">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Post Creator Name</th>
                        <th>Post Creator Email</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($post as $no => $data)
                    <tr>
                        <td>{{ $no+1 }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ Str::limit($data->content, 50)}}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->user->email }}</td>
                    </tr>
                    @endforeach   
                </tbody>
            </table>
          </div>
        </div>
      </div>
      </div>
</div>

@endsection

@push('after-scripts')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'pdf', 'excel', 'print'
            ]
        } );
        } );
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.js"></script>

@endpush

 