
window.onload = function () {
  document.body.classList.add('loaded_hiding');
  window.setTimeout(function () {
    document.body.classList.add('loaded');
    document.body.classList.remove('loaded_hiding');
  }, 1000);
}




const  animItems = document.querySelectorAll('._anim-items');

if (animItems.length > 0) { 
setTimeout(() => {
  animOnScroll();
}, 300);
  window.addEventListener('scroll', animOnScroll);
   function animOnScroll() {
      for (let index = 0; index < animItems.length; index++) {
        const animItem = animItems[index];
        const animItemHeight = animItem.offsetHeight;
        const animItemOffset = offset(animItem).top;
        const animStart = 4;

        let animItemPoint = window.innerHeight - animItemHeight / animStart;

        if(animItemHeight > window.innerHeight){
          animItemPoint = window.innerHeight - innerHeight / animStart;
        }
         if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
            animItem.classList.add('_active');
         } else{
          if (!animItem.classList.contains('_anim-no-hide')) {
            animItem.classList.remove('_active');
          } 
        }
      }
   }
   function offset(el) {
    const rect = el.getBoundingClientRect(),
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
  }
}
  

  
 
  function additionPhoto(){
    const checkbox = document.querySelector('#newMailEntry-checkbox');
    const fileDive = document.querySelector('#fileDive');
   // const checkboxDive = document.querySelector('.checkbox_label');
    const file_inp = document.querySelector('#photo')
    checkbox.addEventListener("change" , function(){
        if(checkbox.checked){
            fileDive.style.display = 'block';
        }else{
          file_inp.value = ''; 
          let newControl = file_inp.cloneNode( true )
          file_inp.replaceWith(newControl);
          //file_inp = newControl;
          fileDive.style.display = 'none';
         
        }
    });

  }
    function validstion(){
      
    }
  $(document).ready(function() {
    $('#newMailEntry-button').click(function(e) {
      e.preventDefault();
      

      const form = e.target.closest('form'),
      inputs = form.querySelectorAll('.input');
    
     const data = {},
      errors = {};
    
          const regexes = {
            email: new RegExp('^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$'),
            password: new RegExp('^[a-zA-Z0-9!@#$%^&*()_+\\-=[\\]{};\'":\\\\|,.<>/?]+$'),
            name: new RegExp('^[A-Za-zА-Яа-я\\s\'-]+$'),
            nameOrg: new RegExp('^[A-Za-z0-9\\s\\-.,&\'()]+$'),
            phone: new RegExp('^(\\+7|8)\\d{3}\\d{3}\\d{2}\\d{2}$'),
            fio: new RegExp('^([А-ЯЁ][а-яё]+([-\'"][А-ЯЁ][а-яё]+)?\\s){2}[А-ЯЁ][а-яё]+$'),
            fioApplicant: new RegExp('^([А-ЯЁ][а-яё]+([-\'"][А-ЯЁ][а-яё]+)?\\s){2}[А-ЯЁ][а-яё]+$'),
            inn: new RegExp('^[0-9]{10}$|^[0-9]{12}$'),  
            age: new RegExp('^(0?[1-9]|[1-9][0-9])$'),
          };
          
          form.querySelectorAll('.message').forEach(el => {
            el.remove();
          });
          
          inputs.forEach(input => {
              input.classList.remove('invalid');
              data[input.name] = input.value;
            if (!input.value.trim()) {
            
              errors[input.name] = 'Поле не может быть пустым';
              let message = `<span class="message invalid">${errors[input.name]}</span>`;
              if(input.closest('.box')){
                input.closest('.box').insertAdjacentHTML('beforeend', message);
              }
              input.classList.add('invalid');
              input.value = ''; 
              let newControl = input.cloneNode( true )
              input.replaceWith(newControl);
            } else if (regexes[input.name] && !regexes[input.name].test(input.value)) {

              errors[input.name] = 'Поле заполнено некорректно';
              let message = `<span class="message invalid">${errors[input.name]}</span>`;
              if(input.closest('.box')){
                input.closest('.box').insertAdjacentHTML('beforeend', message);
              }
              input.classList.add('invalid');
              input.value = ''; 
              let newControl = input.cloneNode( true )
              input.replaceWith(newControl);
            }
           

          });
             
          if (Object.keys(errors).length > 0) {
            return false;
          };

          
          var formData = new FormData($(form)[0]);
          console.log(formData)
           $.ajax({
             url: 'vendor/newMailEntry.php',
             type: 'POST',
             data: formData,
             processData: false,
             contentType: false,
             success: function(response) {
              const form = e.target.closest('form'),
              inputs = form.querySelectorAll('.inputs');
              inputs.forEach(input => {
                input.value = ''; 
                let newControl = input.cloneNode( true )
                input.replaceWith(newControl);
              });
               console.log(response);
               alert('Ваша заявка успешно отправлена');
             },
             error: function(jqXHR, status, error) {
               console.log(status + ': ' + error);
             }
           });
          
           // валидация формы
          
    });
  });


  $(document).ready(function() {
    $('#volunteerUniform-button').click(function(e) {
      e.preventDefault();
      

      const form = e.target.closest('form'),
      inputs = form.querySelectorAll('.input');
    
     const data = {},
      errors = {};
    
          const regexes = {
            email_user: new RegExp('^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$'),
            password: new RegExp('^[a-zA-Z0-9!@#$%^&*()_+\\-=[\\]{};\'":\\\\|,.<>/?]+$'),
            name_user: new RegExp('^[A-Za-zА-Яа-я\\s\'-]+$'),
            nameOrg: new RegExp('^[A-Za-z0-9\\s\\-.,&\'()]+$'),
            phone: new RegExp('^(\\+7|8)\\d{3}\\d{3}\\d{2}\\d{2}$'),
            fio: new RegExp('^([А-ЯЁ][а-яё]+([-\'"][А-ЯЁ][а-яё]+)?\\s){2}[А-ЯЁ][а-яё]+$'),
            fioApplicant: new RegExp('^([А-ЯЁ][а-яё]+([-\'"][А-ЯЁ][а-яё]+)?\\s){2}[А-ЯЁ][а-яё]+$'),
            inn: new RegExp('^[0-9]{10}$|^[0-9]{12}$'),  
            age_user: new RegExp('^(0?[1-9]|[1-9][0-9])$'),
            familiya_user: new RegExp('^[A-Za-zА-Яа-я\\s\'-]+$'),
            otchestvo_user: new RegExp('^[A-Za-zА-Яа-я\\s\'-]+$'),
          };
          
          form.querySelectorAll('.message').forEach(el => {
            el.remove();
          });
          
          inputs.forEach(input => {
              input.classList.remove('invalid');
              data[input.name] = input.value;
            if (!input.value.trim()) {
            
              errors[input.name] = 'Поле не может быть пустым';
              let message = `<span class="message invalid">${errors[input.name]}</span>`;
              if(input.closest('.box')){
                input.closest('.box').insertAdjacentHTML('beforeend', message);
              }
              input.classList.add('invalid');
              input.value = ''; 
              let newControl = input.cloneNode( true )
              input.replaceWith(newControl);
            } else if (regexes[input.name] && !regexes[input.name].test(input.value)) {

              errors[input.name] = 'Поле заполнено некорректно';
              let message = `<span class="message invalid">${errors[input.name]}</span>`;
              if(input.closest('.box')){
                input.closest('.box').insertAdjacentHTML('beforeend', message);
              }
              input.classList.add('invalid');
              input.value = ''; 
              let newControl = input.cloneNode( true )
              input.replaceWith(newControl);
            }
           

          });
             
          if (Object.keys(errors).length > 0) {
            return false;
          };
          var formData = new FormData($(form)[0]);
          console.log(formData)
            $.ajax({
             url: 'vendor/volunteerUniform.php',
             type: 'POST',
             data: formData,
             processData: false,
             contentType: false,
            success: function(response) {
              const form = e.target.closest('form'),
              inputs = form.querySelectorAll('.inputs');
              inputs.forEach(input => {
                input.value = ''; 
                let newControl = input.cloneNode( true )
                input.replaceWith(newControl);
              });
               console.log(response);
               alert('Ваша заявка успешно отправлена');
             },
            error: function(jqXHR, status, error) {
                console.log(status + ': ' + error);
             }
           });
          console.log('ура, все прошло');
           // валидация формы
          
    });
  });

 
  // function togglePasswordVisibility() {
  //   const passwordInput = document.querySelector('#password');
  //   const eyeIcon = document.querySelector('.password-toggle label i');
  
  //   if (passwordInput.type === 'password') {
  //     passwordInput.type = 'text';
  //     eyeIcon.classList.remove('fa-eye');
  //     eyeIcon.classList.add('fa-eye-slash');
  //   } else {
  //     passwordInput.type = 'password';
  //     eyeIcon.classList.remove('fa-eye-slash');
  //     eyeIcon.classList.add('fa-eye');
  //   }
  // }

  

 