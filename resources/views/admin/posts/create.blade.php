@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="title"><h3>Titolo</h3></label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo del post" name="title">
                </div>
                <div class="form-group d-flex flex-column">
                    <label for="content"><h3>Categoria</h3></label>
                    <select name="category_id" id="category" class="w-25">
                        <option value="">Nessuna categoria</option>
                        @foreach ($categories as $category)
                            <option @if(old('category_id') == $category->id) selected @endif value="{{$category->id}}">{{$category->label}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group d-flex flex-column">
                    <label for="content"><h3>Contenuto</h3></label>
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenuto del post"></textarea>
                </div>

                <!-- <div class="form-group d-flex flex-column">
                    <label for="image"><h3>Immagine</h3></label>
                    <textarea name="image" id="image" placeholder="Immagine del post"></textarea>
                </div> -->

                <div class="form-group d-flex flex-column">
                    <label for="image"><h3>Immagine</h3></label>
                    <input type="file" class="form-control-file" name="image" id="image" placeholder="Immagine del post">
                </div>

                <div class="pb-3 d-flex flex-column">
                    <label for="tag"><h3>Tags</h3></label>
                    <div>
                        @foreach($tags as $tag)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tag-{{$tag->id}}" value="{{$tag->id}}" name="tags[]" @if(in_array($tag->id, old('tags', [])))checked @endif>
                                <label class="form-check-label" for="tag-{{$tag->id}}">{{$tag->label}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Crea</button>
                </div>
        </form>
    </div>
@endsection

@section('scripts')

@endsection