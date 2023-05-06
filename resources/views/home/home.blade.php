<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('/add_data')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="div_design">
        <label class="lavel_design" for=""> Blog Title : </label>
        <input required="" type="text" name="title" placeholder="Write title" class="inputblack">
    </div>
    <div class="div_design">
        <label class="lavel_design" for="">Blog Image : </label>
        <input required="" type="file" name="image">
    </div>
    <div class="div_design">
        <label class="lavel_design" for="">Description : </label>
        <input required="" type="text" name="desc" placeholder="Write title" class="inputblack">
    </div>

    <div class="div_design">
        <label class="lavel_design" for="">Tag : </label>
        <input required="" type="text" name="tag" placeholder="Write title" class="inputblack">
    </div>

    <div class="div_design">
        <input required="" type="submit" value="Add Blog" class
                    ="btn btn-primary">
    </div>
</form>
</body>
</html>