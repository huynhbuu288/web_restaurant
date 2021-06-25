{{-- @extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading">
     
Information Order
    </div>
    
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Date</th>
            <th>Time</th>
            <th>Number Of Peo</th>
            <th>Name Customer</th>
            <th>Phone</th>
            <th>Email</th>
           
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
     
        </tbody>
      </table>

    </div>
   
  </div>
</div>

   
  </div>
</div>
@endsection --}}