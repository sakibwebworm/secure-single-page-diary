@extends('layouts.mainapp')
@section('css')
    <link href="/css/allentry.css" rel="stylesheet">
@endsection
@section('content')

    <!-- New Entry -->
    <section id="newentry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading text-uppercase text-center">Write Your Entry</h2>
                </div>
                <div class="col-lg-12 text-center">
                    <div id ="app" class="align-middle">
                        <form method="post" action="/posts/" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
                        <!-- {{ csrf_field() }}-->
                            <div class="form-group">
                                <label for="Date">Date</label>
                                <input type="text" name="title" id="title" class="form-control" v-model="form.title" >
                                <small id="emailHelp" v-if="form.errors.has('title')" class="form-text text-muted" v-text="form.errors.get('title')"></small>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" v-model="form.title" >
                                <small id="emailHelp" v-if="form.errors.has('title')" class="form-text text-muted" v-text="form.errors.get('title')"></small>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control" v-model="form.body" ></textarea>
                                <small id="emailHelp" v-if="form.errors.has('body')"  class="form-text text-muted" v-text="form.errors.get('body')"></small>
                            </div>
                            <div class="form-group">

                                <button  type="submit" class="btn btn-primary btn-xl text-uppercase" :disabled="form.errors.any()">Publish</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>


@endsection
        @section('js')
    </section>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection