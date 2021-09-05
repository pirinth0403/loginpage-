<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration page </title>
</head>
<body>
     <div class="container">
        <div class="form-group col-12 p-0"> 
            <div>  
          @if(Session::has('success')) 
          <div class= "alert alert-success"> 
              {{Session::get('success')}} 
          </div>
          @endif 
           </div> 

        <form  action="{{route('store')}}"   method="POST">  
            @csrf
            <div class= form-group>
                <div class="col-sm-12">
                    <h2 style="text-align:center; color:blue">Student details </h2> 
                </div>
            </div> 

            <div class=row>
                <div class="form-group col-md-6"> 
                    <label >student name</label> 
                    <input type="text" name="studname" class="flow-control" id="studname" placeholder="studentname"> 
                </div> 

                <div class="form-group col-md-6"> 
                    <label >course</label> 
                    <input type="text" name="course" class="flow-control" id="course" placeholder="Course">  
                </div> 

                <div class="form-group col-md-6"> 
                    <label >fee</label> 
                    <input type="text" name="fee" class="flow-control" id="fee" placeholder="Fee">  
                </div> 

                <div class= "form-group col-md-6" align="center">  
                    <button class="btn btn-success" style="width:80px; ">submit</button>
                </div>


            </div>


        </form>




        </div>    

     </div>
</body>
</html>