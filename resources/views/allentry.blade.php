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
                            <div class="box_content">
                                <div class="row" >
                                    <div class="col-md-3">
                                        Date
                                    </div>
                                    <div class="col-md-6">
                                        Title
                                    </div>
                                    <div class="col-md-3">
                                        Actions
                                    </div>
                                </div>
                            </div>
                            <div class="box_content">
                                <div class="row" >
                                    <div class="col-md-3">
                                        asasasa
                                    </div>
                                    <div class="col-md-6">
                                        asdsdasd
                                    </div>
                                    <div class="col-md-3">
                                        sadasdasdasdasd
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--Pagination-->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>

    </div>
</div>

    @endsection