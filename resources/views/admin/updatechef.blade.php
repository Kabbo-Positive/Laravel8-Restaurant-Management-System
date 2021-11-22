<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">

    @include("admin.adminnavbar")

    <form  action="{{ url('/updatefoodchef',$data->id) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label>Chef Name</label>
            <input style="color: blue" type="text" name="name" value="{{ $data->name }}">
        </div>
        <div>
            <label>Speciality</label>
            <input style="color: blue" type="text" name="name" value="{{ $data->name }}">
        </div>
        <div>
            <label>old Image</label>
            <img height="200" width="200" src="/chefimage/{{ $data->image }}">
        </div>

        <div>
            <label>New Image Name</label>
            <input type="file" name="image">
        </div>
        <div>
            <input style="color: blue" type="submit" value="update chef" required="">
        </div>


    </form>

    </div>
    
    @include("admin.adminjs")
    
  </body>
</html>