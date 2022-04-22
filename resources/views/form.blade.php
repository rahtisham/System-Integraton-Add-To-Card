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
                <label for="exampleInputPassword1">Sub Category</label>
                <select class="form-control" name="subCategory">
                    <option value="">Select Sub Category</option>
                    <option value="SPT-Mini">SPT-Mini</option>
                    <option value="SPT-Mini Plus">SPT-Mini Plus</option>
                    <option value="SPT-30">SPT-30</option>
                    <option value="SPT-35">SPT-35</option>
                    <option value="SPT-50">SPT-50</option>
                    <option value="SPT-60F">SPT-60F</option>
                    <option value="SP-4EL">SP-4EL</option>
                    <option value="QP-15F">QP-15F</option>


                    <option value="SPH-24 LED">SPH-24 LED</option>
                    <option value="SPH-30 LED">SPH-30 LED</option>
                    <option value="SPNH-30 LED">SPNH-30 LED</option>
                    <option value="SPH-24 MX">SPH-24 MX</option>
                    <option value="SPH-$0 MX">SPH-$0 MX</option>


                    <option value="SP-50 LED">SP-50 LED</option>
                    <option value="SP-80 LED">SP-80 LED</option>


                    <option value="SPT-Home">SPT-Home</option>
                    <option value="SPQ-Mini Plus">SPQ-Mini Plus</option>
                    <option value="SPQ-30">SPQ-30</option>
                    <option value="SPQ-35">SPQ-35</option>


                    <option value="SCH-15">SCH-15</option>
                    <option value="SPNH-30 LED">SPNH-30 LED</option>


                    <option value="SC-106P">SC-106P</option>
                    <option value="SC-106MMD">SC-106MMD</option>
                    <option value="SC-106AT">SC-106AT</option>
                    <option value="SC-206AT">SC-206AT</option>
                    <option value="SC-206MMD">SC-206MMD</option>
                    <option value="SC-306MMD">SC-306MMD</option>
                    <option value="SC-4i">SC-4i</option>
                    <option value="SC-106J Jumbo">SC-106J Jumbo</option>
                    <option value="SC-8i">SC-8i</option>


                    <option value="SC-106AT">SC-106AT</option>
                    <option value="SC-206AT">SC-206AT</option>


                    <option value="PC-180">PC-180</option>
                    <option value="PC-2i">PC-2i</option>
                    <option value="PC-2i">PC-2i</option>
                    <option value="SW-2i">SW-2i</option>
                    <option value="PC-3i">PC-3i</option>
                    <option value="PC-4i">PC-4i</option>
                    <option value="PC-5i">PC-5i</option>


                    <option value="PC-MX2">PC-MX2</option>
                    <option value="PC-MX4">PC-MX4</option>
                    <option value="PC-MX12">PC-MX12</option>
                    <option value="PC-MX12TH">PC-MX12TH</option>


                    <option value="PC-MX2">PC-MX2</option>
                    <option value="PC-MX4">PC-MX4</option>
                    <option value="PC-MX12">PC-MX12</option>
                    <option value="PC-MX12TH">PC-MX12TH</option>


                    <option value="HC-5P">HC-5P</option>
                    <option value="HC-4TM">HC-4TM</option>


                </select>
                @error('subCategory')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" class="form-control" name="price" id="exampleInputPassword1" placeholder="Price">
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
