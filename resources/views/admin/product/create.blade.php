@extends('admin.admin_layouts')

@section('admin_content')
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Name Product</label>
                <input type="text" class="form-control" name="name" placeholder="name">
                @error('name')
                <small class="form-text text-muted">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Color</label>
                <input type="text" class="form-control" name="color" placeholder="color">
                @error('color')
                <small class="form-text text-muted">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" name="price" placeholder="price">
                @error('price')
                <small class="form-text text-muted">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control" name="description" placeholder="description">
                @error('description')
                <small class="form-text text-muted">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>chooses photo</label>
                <input type="file" name="image">
                @error('image')
                <small>{{$message}}</small>
                @enderror
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


