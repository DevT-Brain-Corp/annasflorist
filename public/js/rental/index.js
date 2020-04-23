// Date picker
$(document).ready(function(){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  var day = date.getDate();
  var date = new Date(year - 1, month, day);
  var datemax = new Date(year, month + 6, day);
  var minOne = new Date(year, month, day - 1);
  var minNow = new Date(year, month, day + 1);
  var maxDate;

  if(maxDate == undefined){
    document.getElementById("datepicker2").disabled = true;
  }

  $('.datepicker1').datepicker({
    autoClose : true,
    format: 'dddd, dd mmmm yyyy',
    yearRange : 1,
    minDate: minNow,
    maxDate: datemax,
    i18n:{
          months:[
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
          ],
          weekdays:[
            'Minggu',
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu'
          ]
        },
    defaultDate: minNow,
    onSelect: function(){
      var forYear = this.date.getFullYear();
      var forMonth = this.date.getMonth();
      var forDay = this.date.getDate();
      firstDate = new Date(forYear, forMonth, forDay);
      maxDate = new Date(forYear, forMonth, forDay + 1);

      if(maxDate != undefined){
        document.getElementById("datepicker2").disabled = false;
      }

      $(document).ready(function(){
        $('.datepicker2').datepicker({
          autoClose : true,
          format: 'dddd, dd mmmm yyyy',
          yearRange : 1,
          defaultDate: maxDate,
          minDate:maxDate,
          i18n:{
                months:[
                  'Januari',
                  'Februari',
                  'Maret',
                  'April',
                  'Mei',
                  'Juni',
                  'Juli',
                  'Agustus',
                  'September',
                  'Oktober',
                  'November',
                  'Desember'
                ],
                weekdays:[
                  'Minggu',
                  'Senin',
                  'Selasa',
                  'Rabu',
                  'Kamis',
                  'Jumat',
                  'Sabtu'
                ]
              },
          onSelect: function(){
            var toYear = this.date.getFullYear();
            var toMonth = this.date.getMonth();
            var toDay = this.date.getDate();
            lastDate = new Date(toYear, toMonth, toDay);
            var diff = lastDate - firstDate;

            diff = Math.floor(diff / (1000 * 60 * 60 * 24));
            document.getElementById("hasil").innerHTML="Total : <span>"+diff+"</span> hari";
          },
        });
      });
    }
  });
});
// end Date picker

// nullalert
function nullalert() {
  var alert1=document.getElementById("datepicker2").value;
  if (!alert1) {
    M.toast({html: "Harap isi tanggal terlebih dahulu"});
    document.getElementById("addrental").href="#";
  } else {
    document.getElementById("addrental").href="#isi";
  }
}
// end nullalert
