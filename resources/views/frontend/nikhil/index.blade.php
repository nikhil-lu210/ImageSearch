<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Image Search || NIKHIL || CREATE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">


        <style>
            body{
                background-color: #dddddd;
                /* height: 100vh; */
            }
            .card{
                margin-bottom: 20px;
                background-color: #ffffff;
            }
            .card-body{
                padding: 20px;
            }
            .card-body.image{
                padding: 39px 20px;
            }

            .fileUpload {
                position: relative;
                overflow: hidden;
            }
            .fileUpload input.upload {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
            }

            .btn--browse{
                border: 1px solid #ddd;
                border-left: 0;
                border-radius: 0 2px 2px 0;
                background-color: #ddd;
                color: #3e3e3e;
                height: 42px;
                padding: 8px 14px;
                font-weight: bold;
            }

            .f-input{
                height: 42px;
                background-color: white;
                border: 1px solid #ddd;
                width: 100%;
                max-width: 400px;
                float: left;
                padding: 0 14px;
            }
        </style>
    </head>
    <body>
        <section class="image-upload">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('nikhil.create') }}" class="btn btn-dark float-right">Add New Data</a>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <form action="{{ route('nikhil.image.search') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                            <div class="card">
                                                <div class="card-header">
                                                    <b>Search With Image</b>
                                                </div>
                                                <div class="card-body image">
                                                    <input id="uploadFile" class="f-input" placeholder="Upload an Image" disabled/>
                                                    <div class="fileUpload btn btn--browse">
                                                        <span>Browse</span>
                                                        <input id="uploadBtn" type="file" class="upload" name="imageSearch" required/>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-outline-dark float-right" type="submit">Search</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                    <div class="col-md-6">

                                        <form action="{{ route('nikhil.name.search') }}" method="post">
                                        @csrf

                                            <div class="card">
                                                <div class="card-header">
                                                    <b>Search With Name</b>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group mt-3">
                                                        <input type="text" class="form-control form-control-lg" placeholder="Name: Jhon Doe" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-outline-dark float-right" type="submit">Search</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                    <div class="col-md-6">

                                        <form action="{{ route('nikhil.nid.search') }}" method="post">
                                        @csrf

                                            <div class="card">
                                                <div class="card-header">
                                                    <b>Search With NID</b>
                                                </div>
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-lg" placeholder="NID: 286289426948924" name="nid" required>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-outline-dark float-right" type="submit">Search</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                    <div class="col-md-6">

                                        <form action="{{ route('nikhil.phone.search') }}" method="post">
                                        @csrf

                                            <div class="card">
                                                <div class="card-header">
                                                    <b>Search With Mobile Number</b>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-lg" placeholder="Phone: 1234567890" name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-outline-dark float-right" type="submit">Search</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>










<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

        <script>
            document.getElementById("uploadBtn").onchange = function () {
                document.getElementById("uploadFile").value = this.value.replace("C:\\fakepath\\", "");
            };
        </script>
    </body>
</html>
