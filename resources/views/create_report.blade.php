@extends('layouts.main')
@section('content')
    <section class="section">
     <div class="title">
        <h1 style="color: black; margin-left: 10px; margin-top:20px">Add New Project</h1>
     </div> 

     <!-- Nama CLient -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="code_project" class="col-form-label" style="font-weight: bold; color:black">Kode Project</label>
        </div>
        <div class="col-auto" style="margin-left:55px; width:30em;">
          <input type="text" id="code_project" class="form-control">
        </div>
     </div>

     <!-- Nama Project -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="name_institusi" class="col-form-label" style="font-weight: bold; color:black">Nama Institusi</label>
        </div>
        <div class="col-auto" style="margin-left:40px; width:30em;">
          <input type="text" id="name_institusi" class="form-control">
        </div>
     </div>

     <!-- Uraian Pekerjaan -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="name_project" class="col-form-label" style="font-weight: bold; color:black">Nama Project</label>
        </div>
        <div class="col-auto" style="margin-left:48px; width:30em;">
          <input type="text" id="name_project" class="form-control" >
        </div>
     </div>

     <!-- Date -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="name_am" class="col-form-label" style="font-weight: bold; color:black">Nama AM</label>
        </div>
        <div class="col-auto" style="margin-left:68px; width:30em;">
            <input type="text" id="name_project" class="form-control" >
          </div>
     </div>
     
     <!-- HPS -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="hps" class="col-form-label" style="font-weight: bold; color:black">HPS</label>
        </div>
        <div class="col-auto" style="margin-left:108px; width:30em;">
            <input type="text" id="hps" class="form-control" >
          </div>
     </div>
     

         <!-- Status Approve -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Status Approve</label>
        </div>
        <div class="col-auto" style="margin-left:38px; width:30em;">
          <select class="form-control selectric">
            <option>Pilih status</option>
            <option>Approve</option>
            <option>Reject</option>
          </select>
        </div>
     </div>

     <a class="btn btn-primary" style="margin-left:360px; background-color:#379FFF; border:none; margin-top:40px; width:70px; color:white">Save</a>
        <a class="btn btn-danger border-danger" style="margin-left:60px; background-color:#379FFF; border:none; margin-top:40px; width:70px; background-color:transparent; color:red;">Back</a>
@endsection