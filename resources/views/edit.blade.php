@extends('app')

@section('title', 'Edition d\'un évenement')

@section('content')
    <div class="container">
        <form class="vstack gap-2 mt-2" action="{{route('event.update', $event)}}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="">Titre</label>
                <input class="form-control  @error('title')  is-invalid @enderror" value="{{$event->title ?? old('title')}}" type="text" name="title" id="">
            </div>
            @error('title')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Description</label>
                <textarea class="form-control @error('description')  is-invalid @enderror" name="description" id="" cols="30" rows="10">{{$event->description ?? old('description')}}</textarea>
            </div>
            @error('description')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Date</label>
                <input type="date" name="date" class="@error('date')  is-invalid @enderror form-control" id="" value="{{$event->date ?? old('date')}}">
            </div>
            @error('date')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Lieu</label>
                <input type="text" name="place" id=""  value="{{$event->place ?? old('place')}}" class="@error('place')  is-invalid @enderror form-control">
            </div>
            @error('place')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <div class="form-group">
                <label class="form-label"  for="">Prix</label>
                <input type="number"  value="{{$event->price ?? old('price')}}" name="price" id="" class="@error('price')  is-invalid @enderror form-control">
            </div>
            @error('price')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
            <button class="btn btn-info text-white">Modifier</button>
        </form>
    </div>
@endsection
