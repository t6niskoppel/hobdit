<div class="container text-left">
   <div class="col-sm-10">
      <h2><?php echo lang("search_title"); ?></h2>
      <div class="form-group">
         <label for="pealkiri"><?php echo lang("search_post_title"); ?>:</label>
         <input type="text" class="form-control" id="pealkiri">
      </div>
      <div class="form-group">
         <label for="sisu"><?php echo lang("search_words"); ?>:</label>
         <input type="text" class="form-control" id="sisu">
      </div>
      <div class="form-group">
         <label for="kategooriad"><?php echo lang("search_category"); ?>:</label>
		 <br>
         <select class="selectpicker" id="kategooriad">
            <option><?php echo lang("search_all_categories"); ?> </option>
            <?php
              foreach ($categories as $value) {
                echo '<option>' . $value['Kategooria'] . '</option>';
              }
             ?>
          </select>
      </div>
      <div class="form-group">
         <div class="form-group ">
            <label for="startDate"><?php echo lang("search_start_date"); ?>:</label>
			<br>
            <input id="startDate" name="date" placeholder="MM/DD/YYYY" type="text"/>
         </div>
      </div>
      <div class="form-group">
            <label for="endDate"><?php echo lang("search_end_date"); ?>:</label>
			<br>
            <input id="endDate" name="date" placeholder="MM/DD/YYYY" type="text"/>
      </div>
      <br>
      <button type="submit" value="Submit" class="btn btn-primary btn-md"><?php echo lang("button_search"); ?></button>
   </div>
