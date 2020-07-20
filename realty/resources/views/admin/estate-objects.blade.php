<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <h2>Form for adding real estate</h2>
{{--        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>--}}
    </div>

    <div class="row">
        <div class="col-md-2 order-md-1"></div>
        <div class="col-md-8 order-md-1">
            <form enctype="multipart/form-data" class="needs-validation" novalidate="" method="post" action="{{route('estate-object_create')}}">
                @csrf
                <div class="row mb-3" style="margin-top: 20px;">
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
                <div class="row mb-3" style="margin-top: 20px;">
                    <div class="col-md-12 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" value="" required="">
                    </div>
                </div>

                <div class="row mb-3" style="margin-top: 20px;">
                    <div class="col-md-6 mb-3">
                        <label for="lat">Lat</label>
                        <input type="text" class="form-control" id="lat" name="lat" placeholder="" value="" required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lng">Lng</label>
                        <input type="text" class="form-control" id="lng" name="lng" placeholder="" value="" required="">
                    </div>
                </div>

                <div class="row mb-3" style="margin-top: 20px;">
                    <div class="col-md-6 mb-3">
                        <label for="file">Photos</label>
{{--                        <input id="file" type="file" accept="image" multiple name="image">--}}
{{--                        <input type="file" name="images[]" multiple>--}}
                        <input multiple="multiple" name="images[]" type="file">
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Add new state object</button>
            </form>
        </div>
    </div>
</div>
