@extends('layouts.main')
@section('content')
    <section class="section">
     <div class="title">
        <h1 style="color: black; margin-left: 10px; margin-top:20px">Report Progress</h1>
     </div> 
     <a class="btn btn-primary" href="/create_report" style="margin-left: 800px; background-color:#379FFF; border:none">Add New Project</a>
    </section>
    <table class="table  table-md" style="margin-top: 20px;">
        <tr>
          <th>NO</th>
          <th>Kode Project</th>
          <th>Nama Institusi</th>
          <th>Nama Project</th>
          <th>Nama AM</th>
          <th>HPS</th>
          <th>Status Approve</th>
          <th>Action</th>
        </tr>
       
            
        @foreach ($reports as $r)    
        <tr>
          <td>{{ $r->id }}</td>
          <td>B001</td>
          <td>{{ $r->name_institusi }}</td>
          <td>{{ $r->name_project }}</td>
          <td>{{ $r->name_am }}</td>
          <td>Rp{{ $r->hps }}</td>
          <td>{{ $r->status_approve }}</td>
          
          <td><a href="#" class="btn btn-secondary" style="background-color: #5FB2FF">Detail</a></td>
        </tr>
        @endforeach 
      </table>
      @endsection
      
    