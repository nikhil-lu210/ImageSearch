<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Image Search || NIKHIL || CREATE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <style>
            body{
                background-color: #dddddd;
                height: 100vh;
            }
            .card{
                margin-top: 10%;
                background-color: #ffffff;
            }
            .card-body{
                padding: 50px 20px;
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
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 mt-5">

                        <form action="{{ route('nikhil.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                            <div class="card">
                                <div class="card-header">
                                    <div class="float-left"><b>Upload Image</b></div>
                                    <div class="float-right"><a href="{{ route('nikhil.index') }}" class="btn btn-dark">Back</a></div>
                                </div>
                                <div class="card-body">
                                    <input id="uploadFile" class="f-input" name="avatar" placeholder="Upload An Image" disabled/>
                                    <div class="fileUpload btn btn--browse">
                                        <span>Browse</span>
                                        <input id="uploadBtn" type="file" class="upload" name="avatar" required/>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control form-control-lg" placeholder="Name: Jhon Doe" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="NID: 286289426948924" name="nid" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Phone: 1234567890" name="phone" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark float-right" type="submit">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>









        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            document.getElementById("uploadBtn").onchange = function () {
                document.getElementById("uploadFile").value = this.value.replace("C:\\fakepath\\", "");
            };
        </script>
    </body>
</html>
