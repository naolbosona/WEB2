<x-app-layout>
    

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    

    
    <div style="position: relative ;top:60px;right:-150px" class="container-scroller">
@include("admin.navbar")
   
<form action ="{{'/uploadfood'}}" method="post" enctype="multipart/form-data">

    @csrf
    <div>
        <label>
            TITLE
        </label>
        <input style="color: black" type="text" name="title" placeholder="write title" required>
    </div>
    <div>
        <label>
            PRICE
        </label>
        <input style="color: black" type="num" name="price" placeholder="enter price" required>
    </div>
    <div>
        <label>
            IMAGE
        </label>
        <input style="color: rgb(255, 255, 255)"  type="file" name="image" required>
    </div>
    <div>
        <label>
            DESCRIPTION
        </label>
        <input style="color: black" type="text" name="description" placeholder="write description" required>
    </div>

    <div>
        <input style="color: black"   type="submit" value="save">
    </div>
</form>


<div>
<table bgcolor="black">
    <tr>
        <th style="padding:10px">food name</th>
        <th style="padding:10px">price</th>
        <th style="padding:10px">image</th>
        <th style="padding:10px">Description</th>
        <th style="padding:10px">Action</th>
        <th style="padding:10px">Action2</th>
    </tr>

    @foreach ($data as $data)
        
    <tr align="center">
<td>{{$data->title}}</td>
<td>{{$data->price}}</td>
<td>{{$data->description}}</td>
<td><a href="{{url('/deletemenu',$data->id)}}">delete</a></td>
<td><img src="/foodimage/{{$data->image}}"></td>
<td><a href="{{url('/updateview',$data->id)}}">update</a></td>
    </tr>
    @endforeach
 

</table>


</div>
</div>


</div>



    </div>
  
    @include("admin.adminscript")
  </body>
</html>
