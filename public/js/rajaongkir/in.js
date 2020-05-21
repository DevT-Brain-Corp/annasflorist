$( document ).ready(function() {
	 $('#kota_asal').select2({
	    placeholder: 'Pilih kota/kabupaten asal',
	    language: "id"
	 });

	 $('#kota_tujuan').select2({
	    placeholder: 'Pilih kota/kabupaten tujuan',
	    language: "id"
	 });
 
	$.ajax({
      type: "GET",
      dataType: "html",
      url: "/kotaTujuan",
      success: function(msg){
      $("select#kota_tujuan").html(msg);                                                     
      }
   });

   $("#ongkir").submit(function(e) {
      e.preventDefault();
      $.ajax({
          url: 'cek-ongkir',
          type: 'post',
          data: $( this ).serialize(),
          success: function(data) {
            console.log(data);
            document.getElementById("response_ongkir").innerHTML = data;
          }
      });
  });

});
