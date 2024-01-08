@extends('layout')

@section('content')
    <div class="container py-5">
      <form>
      <fieldset >
        <legend>Contact Us</legend>
        <div class="row mb-3">
          <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Your name">
          </div>
          <div class="col">
            <input type="number" name="number" class="form-control" placeholder="Your contact">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Your email">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <textarea name="text"  cols="30" rows="8" class="form-control" placeholder="Your message"></textarea>
          </div>
        </div>

       
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
    </div>
@endsection