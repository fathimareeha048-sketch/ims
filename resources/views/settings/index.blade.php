@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Institute Settings 🏫</h3>
  @if(session('success')) 
    <div class="alert alert-success">{{ session('success') }}</div> 
  @endif

  <form method="POST" action="{{ route('settings.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label>Institute Name</label>
      <input type="text" name="institute_name" class="form-control" value="{{ $setting->institute_name ?? '' }}" required>
    </div>
    <div class="mb-3">
      <label>Theme Color</label>
      <input type="color" name="primary_color" class="form-control form-control-color" value="{{ $setting->primary_color ?? '#0d6efd' }}">
    </div>
    <div class="mb-3">
      <label>Logo</label>
      <input type="file" name="logo" class="form-control">
      @if(!empty($setting->logo_path))
        <br>
        <img src="{{ asset('storage/'.$setting->logo_path) }}" height="60">
      @endif
    </div>
    <button class="btn btn-primary">Save Thanga!</button>
  </form>
</div>
@endsection