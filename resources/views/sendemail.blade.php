@extends("layouts.base")
@section("content")



<form action="{{route('send.email')}}" method="POST" 
style="margin-left: 30%; margin-right:30%; margin-top: 10%; margin-bottom: 25%">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email введите</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>


  <button type="submit" class="btn btn-primary">Отправить</button>
</form>

  @endsection