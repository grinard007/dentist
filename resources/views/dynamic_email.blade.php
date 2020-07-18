<!-- <p>Hi this is </p>
<p>I have some query like </p>
<p>it would be appreciative if you gone through this feedback </p> -->
<div class="container">
  <p>Hi Doctor,{{$data['yourname']}} has book an appointment with us</p>
<div class="dento-price-table table-responsive">
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th scope="col"> Name</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Address</th>
                  <th scope="col">Scheldule</th>
                  <th scope="col">Booking Day</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{$data['yourname']}}</th>
                  <td>{{$data['yourphone']}}</td>
                  <td>{{$data['youraddress']}}</td>
                  <td>{{$data['yourscheldule']}}</td>
                  <td>{{$data['yourday']}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
</div>
