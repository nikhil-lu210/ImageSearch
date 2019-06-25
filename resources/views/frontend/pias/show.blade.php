<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Image Search || PIAS</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">


<style>

.form-group{
    margin-bottom: 0;
}
.image-result{
    max-width: 150px;
}
</style>
</head>
<body>
<section class="image-upload">
    <div class="container-fluid">
        <div class="row pt-3">

            <div class="col-md-12">

                <div class="card text-white bg-dark mb-3">
                    <div class="card-header text-center">
                        <b>All Uploaded Informations</b>
                    </div>
                    <div class="card-body image text-center">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">NID Number</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Avatar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $key => $item)
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










<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
