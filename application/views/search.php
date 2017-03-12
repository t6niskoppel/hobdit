<div class="container text-left">
   <div class="col-sm-12">
      <h2>Täpsem otsing</h2>
      <div class="form-group">
         <label for="pealkiri">Postituse pealkiri:</label>
         <input type="text" class="form-control" id="pealkiri">
      </div>
      <div class="form-group">
         <label for="sisu">Sisaldab teksti:</label>
         <input type="text" class="form-control" id="sisu">
      </div>
      <div class="form-group">
         <label for="kategooriad">Kategooria:</label>
		 <br>
         <select class="selectpicker" id="kategooriad">
            <option>Esimene kategooria</option>
            <option>Teine kategooria</option>
            <option>Kolmas kategooria</option>
         </select>
      </div>
      <div class="form-group">
         <div class="form-group ">
            <label for="startDate">Alguskuupäev:</label>
			<br>
            <input id="startDate" name="date" placeholder="MM/DD/YYYY" type="text"/>
         </div>
      </div>
      <div class="form-group">
            <label for="endDate">Lõppkuupäev:</label>
			<br>
            <input id="endDate" name="date" placeholder="MM/DD/YYYY" type="text"/>
      </div>
      <br>
      <button type="submit" value="Submit" class="btn btn-primary btn-md">Otsi</button>
   </div>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <!-- Include Date Range Picker -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
   <script>
      $(document).ready(function(){
          var date_input=$('input[name="date"]'); //our date input has the name "date"
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          date_input.datepicker({
              format: 'mm/dd/yyyy',
              container: container,
              todayHighlight: true,
              autoclose: true,
          })
      })
   </script>
</div>