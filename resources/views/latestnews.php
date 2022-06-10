<!-- <div class="container" style="margin-top:220px;">
  @foreach($data as $key => $value)
    <div class="card" style="margin-left:30px;width: 67rem;">
            <div class="card-body">
            <h5 class="card-title">Job Alerts</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$key}}</h6>
            <p class="card-text">{{$value}}</p>
  </div>
</div>
  @endforeach
</div> 

<div class="record" style="margin-top:200px;">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h4>Job Alerts</h4>
                  </div>
                  <div class="card-body">
  
                      <table class="table table-bordered table-striped">
                          <thead style="background-color:#000080;color:white;">
                              <tr>
                                  <th>Sno.</th>
                                  <th>Job Title</th>
                                  <th>Description</th>
                                  <th>PDF</th>
                                  <th>Image</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($news as $row)
                              @php
                              $pdf=$row['media'];
                              $img=$row['image'];
                              @endphp
                              <tr>
                                  <td>{{$row['sno'] }}</td>
                                  <td>{{$row['title']}}</td>
                                  <td>{{$row['description']}}</td>
                                  <td><a href="{{URL::asset('assets/pdf/'.$pdf.'')}}" style="color:#0968bf;">{{$row['media']}}</a></td>
                                  <td><img style="width:80%;" src="{{URL::asset('assets/img/'.$img.'')}}"></td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br> -->

<div class="record" style="margin-top:200px;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Job Alerts</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead style="background-color:#000080;color:white;">
                            <tr>
                                <th>Serial No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Media</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $row)
                            @php
                              $img = $row['image'];
                              $pdf=$row['media'];
                            @endphp
                            <tr>
                                <td>{{$row['sno'] }}</td>
                                <td>{{$row['title']}}</td>
                                <td>{{$row['description']}}</td>
                                <td><a href="{{URL::asset('assets/pdf/'.$pdf.'')}}" style="color:#0968bf;">{{$row['media']}}</a></td>
                                <td><img src="{{URL::asset('assets/img/'.$img.'')}}" height='100'></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>