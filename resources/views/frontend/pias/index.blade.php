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
.wrap {
    display: table;
    width: 100%;
    height: 100%;
}

.valign-middle {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}
.input-file input[type="file"] {
  visibility: hidden;
  width: 1px;
  height: 1px;
}
.input-file .btn {
  background-color: #ddd;
  border-color: #ccc;
  color: #333;
}
.input-file .file-selected {
  font-size: 10px;
  text-align: center;
  width: 100%;
  display: block;
  margin-top: 5px;
}
.image-result{
    width: 100px;
    height: 100px;
}
</style>
</head>
<body>
<section class="image-upload">
    <div class="container-fluid">
        <div class="row pt-3">

            <div class="col-md-6">

                <form action="{{ route('pias.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header text-center">
                            <b>Upload New Data</b>
                        </div>
                        <div class="card-body image text-center">
                            <div class="wrap">
                                <div class="valign-middle">
                                    <div class="form-group">
                                        <label for="file" class="sr-only">Select an Image</label>
                                        <input type="file" id="file" name="avatar" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" name="name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nid">NID</label>
                                <input type="text" class="form-control" id="nid" aria-describedby="nid" placeholder="Enter NID" name="nid" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Phone Number" name="phone" required>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-outline-light" type="submit">Upload New Information</button>
                        </div>
                    </div>

                </form>

            </div>

            <div class="col-md-6">

                <form action="{{ route('pias.image.search') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header text-center">
                            <b>Search With Image</b>
                        </div>
                        <div class="card-body image text-center">
                            <div class="wrap">
                                <div class="valign-middle">
                                    <div class="form-group">
                                        <label for="file" class="sr-only">Select an Image</label>
                                        <input type="file" id="file" name="image" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </div>
                    </div>

                </form>

                <form action="{{ route('pias.basic.search') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="card text-white bg-dark">
                        <div class="card-header text-center">
                            <b>Search With Name / NID / Phone</b>
                        </div>
                        <div class="card-body image text-center">
                            <div class="form-group">
                                <label for="basicSearch">Name / NID / Phone</label>
                                <input type="text" class="form-control" id="basicSearch" aria-describedby="BasicSearch" placeholder="Enter Name / NID / Phone" name="basic">
                                <small id="BasicSearch" class="form-text text-muted">Search with any Name or NID Number or Any Phone Number</small>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>


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
                                @foreach ($results as $result)
                                <tr>
                                    <th scope="row">{{ $result->name }}</th>
                                    <td>{{ $result->nid }}</td>
                                    <td>{{ $result->phone }}</td>
                                    <td>
                                        {{-- <img src="data:image/png;base64," alt="Image Not Found" class="image-result img-responsive img-thumbnail"> --}}
                                        <img src="data:image/png;base64,{{ $result->avatar }}" alt="Image Not Found" class="image-result img-responsive img-thumbnail">
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
<script>
$('input[type="file"]').each(function() {
    // get label text
    var label = $(this).parents('.form-group').find('label').text();
    label = (label) ? label : 'Upload File';

    // wrap the file input
    $(this).wrap('<div class="input-file"></div>');
    // display label
    $(this).before('<span class="btn">'+label+'</span>');
    // we will display selected file here
    $(this).before('<span class="file-selected"></span>');

    // file input change listener
    $(this).change(function(e){
        // Get this file input value
        var val = $(this).val();

        // Let's only show filename.
        // By default file input value is a fullpath, something like
        // C:\fakepath\Nuriootpa1.jpg depending on your browser.
        var filename = val.replace(/^.*[\\\/]/, '');

        // Display the filename
        $(this).siblings('.file-selected').text(filename);
    });
});

// Open the file browser when our custom button is clicked.
$('.input-file .btn').click(function() {
    $(this).siblings('input[type="file"]').trigger('click');
});
</script>
</body>
</html>
