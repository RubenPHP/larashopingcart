@extends('layout')

@section('content')
    Contact Us
    <form action="contact-us/send" method="post" class="form-group">
        <input type="text" name="name" class="form-control" />
        <input type="text" name="email" class="form-control" />
        <textarea name="subject" id="" cols="30" rows="10"></textarea>
        <input type="submit" class="btn btn-primary" />
        {{ csrf_field() }}
    </form>
@endsection