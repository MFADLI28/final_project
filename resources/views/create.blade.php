@extends('layouts.main')
@section('content')
    <section class="section">
     <div class="title">
        <h1 style="color: black; margin-left: 10px; margin-top:20px">Create Weekly Report</h1>
     </div> 

     <!-- Nama CLient -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Nama Client</label>
        </div>
        <div class="col-auto" style="margin-left:45px; width:30em;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
     </div>

     <!-- Nama Project -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Nama Project</label>
        </div>
        <div class="col-auto" style="margin-left:40px; width:30em;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
     </div>

     <!-- Uraian Pekerjaan -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Uraian Pekerjaan</label>
        </div>
        <div class="col-auto" style="margin-left:18px; width:30em;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
     </div>

     <!-- Date -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Date</label>
        </div>
        <div class="col-auto" style="margin-left:98px; width:14em;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        <div class="col-auto" style="margin-left:18px; width:14em;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
     </div>

     <!-- Status Pekerjaan -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Status</label>
        </div>
        <div class="col-auto" style="margin-left:88px; width:30em;">
          <select class="form-control selectric">
            <option>Pilih status pekerjaan</option>
            <option>On Progress</option>
            <option>Done</option>
            <option>Issue</option>
          </select>
        </div>
     </div>

        <!-- Note -->
        <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Note</label>
            </div>
            <div class="col-auto" style="margin-left:98px; width:30em;">
              <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
        </div>

        <a class="btn btn-primary" style="margin-left:360px; background-color:#379FFF; border:none; margin-top:40px; width:70px">Save</a>
        <a class="btn btn-danger border-danger" style="margin-left:60px; background-color:#379FFF; border:none; margin-top:40px; width:70px; background-color:transparent; color:red;">Back</a>
        
     </div>

          







       
    
@endsection