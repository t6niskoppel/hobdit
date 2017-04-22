<div class="container text-left">
   <div class="col-sm-12">
      <div class="form-group">
         <h2><?php echo lang("about_title"); ?></h2>
         <h3><?php echo lang("about_our_location"); ?></h3>
         <div id="map"></div>
      </div>
      <div class="form-group">
         <h3><?php echo lang("about_text_title"); ?></h3>
         <?php echo lang("about_text"); ?>
      </div>
      <?php
         $xml=simplexml_load_file("http://hobdit.cs.ut.ee/media/xml/kontakt.xml");
         foreach ($xml->children() as $liige) {
         echo $liige->nimi . "<br>" . $liige->telefon . "<br>" . $liige->email . "<br><br>";
		 }
         ?>
   </div>
</div>