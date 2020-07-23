@extends('layout')

@section("head")
<link href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" rel="stylesheet" />
@endsection

@section("contant")
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <h1>New Article</h1>

            <form method="POST" action="/articlesS">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input @error('title') 'is-danger' @enderror" type="text" name="title" id="title" value="{{old('title')}}">

                        @error('title')
                        <p class="help is-danger"> {{ $errors->first('title') }} </p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>

                        @error('excerpt')
                        <p class="help is-danger"> {{ $errors->first('excerpt') }} </p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body">{{old('body')}}</textarea>

                        @error('excerpt')
                        <p class="help is-danger"> {{ $errors->first('excerpt') }} </p>
                        @enderror
                    </div>
                </div>



                <label class="label" for="tag_id">Tags</label>
                <div class="select is-multiple">

                    <select multiple name="tags[]" size="3">
                        @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>

                    @error('excerpt')
                    <p class="help is-danger"> {{ $message }} </p>
                    @enderror
                </div>


                <label class="label" for="user_id">User</label>
                <div class="select is-multiple">
                    <select multiple name="user_id" size="3">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- <label class="label" for="body">Tags</label>
                <div class="select is-multiple">
                    <select multiple size="3">
                        <option value="Laravel">ggg</option>
                        <option value="PHP">PHP</option>
                        <option value="Education">Education</option>
                    </select>
                </div>

                <label class="label" for="body">User</label>
                <div class="select ">
                    <select >
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                    </select>
                </div> -->



                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
