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
                margin-top: 10px;
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

            .image-result{
                max-width: 150px;
            }
        </style>
    </head>
    <body>
        <section class="image-upload">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left"><b>Search Result</b></div>
                                <div class="float-right"><a href="{{ route('nikhil.index') }}" class="btn btn-dark">Back</a></div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">NID</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nikhils as $key => $item)
                                        <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->nid }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td class="image-td">
                                                <img src="data:image/png;base64,{{ $item->avatar }}" alt="Image Not Found" class="image-result img-responsive img-thumbnail">
                                                {{-- <img src="data:image/png;base64," alt="Image Not Found" class="img-responsive img-thumbnail"> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
