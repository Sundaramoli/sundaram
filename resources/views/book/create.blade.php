  <form action="{{route('book.store')}}" method="post" >
    {{ csrf_field() }}
     
      <div class="clearfix"></div>
              @if(Session::has('success_message'))
                  <div class="alert alert-success">
                      {{ Session::get('success_message') }}
                  </div>
              @endif
              @if(Session::has('error_message'))
                  <div class="alert alert-danger">
                      {{ Session::get('error_message') }}
                  </div>
              @endif
        <div class="col-sm-8 form center" >
    	<div class="container_fluid ">
        <br>
        <br>
    	<div  class="col-sm-6">
        <label for="formGroupExampleInput2">Book_Name </label>
        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Book name" name="book_name">
      </div>
      
       <div  class="col-sm-6">
        <label for="formGroupExampleInput2">Price </label>
        <input type="text" class="form-control form-control-user" placeholder="Enter Price" name="price">
      </div>
       <div  class="col-sm-6">
        <label for="formGroupExampleInput2">Publication </label>
        <input type="text" class="form-control form-control-user" placeholder="Enter publication" name="publication">
      </div>
      
      
      
     

      
    
      
      


    </div>
    <div class="col-sm-12">
      
        <button type="submit" class="btn btn-danger" >Save</button>
                                           
      </div>

    </div>

    </form>