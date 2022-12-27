$(document).ready(() => {
 
    const $showData = $('#show-form');
    const $showAyah = $('#show-tabel');
   
    const $raw = $('pre');
      // get json di endpoint
      $.getJSON('https://api.alquran.cloud/v1/surah', (respon) => {
        console.log(respon.code);
        console.log(respon.status);
       
        // mengatur ulang format respon dari json menjadi html
        const markup = respon.data
          .map(item => `<li class="surat" data-nomer="${item.number}">
                  Nama surat: ${item.number}: ${item.name}
              </li>`)
          .join('');
        const list = $('<ul />').html(markup);
        // tampilkan di kolom ke dua
        $showData.html(list);
       
        $('.surat').on('click', function (event) {
          var id = $(event.target).data("nomer");
          $.getJSON(`https://api.alquran.cloud/v1/surah/${id}?offset=0&limit=10`, function (respon2) {
              console.log(respon2);
              const markup = respon2.data.ayahs
                .map(item => `<li> ${item.text} </li>`)
                .join('');
       
              const list = $('<ul />').html(markup);
       
              // tampilkan di kolom ke dua
              $showAyah.html(list);
          });
        });
  
      });
     
   
  });