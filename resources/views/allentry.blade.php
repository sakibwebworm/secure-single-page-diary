@extends('layouts.mainapp')
@section('css')
    <link href="/css/allentry.css" rel="stylesheet">
    @endsection
@section('content')

<!-- All Entry Entry -->
<section id="newentry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading text-uppercase text-center">Write Your Entries</h2>
            </div>
            <div class="col-lg-12 text-center">
                <div id ="app" class="align-middle">
                    <div class="box_all_entry">
                        <div class="container">


                            <router-view></router-view>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--Pagination-->



    @endsection