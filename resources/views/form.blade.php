<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Form</title>
</head>
<body>
    <div class="container">
        <h1>Upload Data</h1><br>
        <form method="post" action="{{ route('form-submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Super Category</label>
                <select class="form-control" name="supCategory">
                    <option value="">Select Super Category</option>
                    @foreach($superCategories as $SuperCategory)
                        <option value="{{ $SuperCategory['s_id'] }}">{{ $SuperCategory['s_name'] }}</option>
                    @endforeach
                </select>
                @error('supCategory')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" name="subCategory" id="exampleInputPassword1" placeholder="Sub Category Name">
                @error('subCategory')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Price">
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <input type="file" name="file" class="form-control" />
                @error('file')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <br> <br>
            <button type="submit" class="btn btn-primary">Upload Data</button>
        </form>
    </div>
</body>
</html>