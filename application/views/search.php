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
</div>
