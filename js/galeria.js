document.querySelector('#todos').classList.add('block');
document.querySelector('#btntodos').classList.add('active');





window.addEventListener("load", function() {
  document.getElementById('btntodos').addEventListener('click', function() {
      document.querySelector('#todos').classList.add('block');
      document.querySelector('#btntodos').classList.add('active');
      document.querySelector('#profesional').classList.remove('block');
      document.querySelector('#btnprofesional').classList.remove('active');
      document.querySelector('#personal').classList.remove('block');
      document.querySelector('#btnpersonal').classList.remove('active');
  })
 
  document.getElementById('btnprofesional').addEventListener('click', function() {
      document.querySelector('#profesional').classList.add('block');
      document.querySelector('#btnprofesional').classList.add('active');
      document.querySelector('#todos').classList.remove('block');
      document.querySelector('#btntodos').classList.remove('active');
      document.querySelector('#personal').classList.remove('block');
      document.querySelector('#btnpersonal').classList.remove('active');
  })
  document.getElementById('btnpersonal').addEventListener('click', function() {
      document.querySelector('#personal').classList.add('block');
      document.querySelector('#btnpersonal').classList.add('active');
      document.querySelector('#profesional').classList.remove('block');
      document.querySelector('#btnprofesional').classList.remove('active');
      document.querySelector('#todos').classList.remove('block');
      document.querySelector('#btntodos').classList.remove('active');
  })
  
  


  


});


  