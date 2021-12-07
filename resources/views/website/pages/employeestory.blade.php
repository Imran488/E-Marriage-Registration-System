<div class="container-fluid">
  <div class="row">
    <h1><center> Employee Story List</center></h1>
    <div class="col-md-6"></div>
    
  </div>
</div>
<br>
<center>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Bridal ID</th>
      <th scope="col">GroomName</th>
      <th scope="col">BrideName</th>
      <th scope="col">GroomNID</th>
      <th scope="col">BrideNID</th>
      <th scope="col">GroomDistrict</th>
      <th scope="col">BrideDistrict</th>
      <th scope="col">GroomImage</th>
      <th scope="col">BrideImage</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach ($registerlist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->fullnameh}}</td>
      <td>{{$list->fullnamew}}</td>
      <td>{{$list->passportnumber}}</td>
      <td>{{$list->passportnumberw}}</td>
      <td>{{$list->district}}</td>
      <td>{{$list->districtw}}</td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->imageh)}}"  alt="imageh"></td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->imagew)}}"  alt="imagew"></td>
      
      
    </tr>
    @endforeach
  </tbody>
</table>
</center>