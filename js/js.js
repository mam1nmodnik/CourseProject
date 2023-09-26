//import { myFunction } from '../admin/js/adminJs.js';
window.onload = function () {
  document.body.classList.add('loaded_hiding');
  window.setTimeout(function () {
    document.body.classList.add('loaded');
    document.body.classList.remove('loaded_hiding');
  }, 100);
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
         if ((scrollY > animItemOffset - animItemPoint) && scrollY < (animItemOffset + animItemHeight)) {
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
    scrollLeft = window.scrollX || document.documentElement.scrollLeft,
    scrollTop = window.scrollY || document.documentElement.scrollTop;
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
          fileDive.style.display = 'none';
          file_inp.value = ''; 
          let newControl = file_inp.cloneNode( true )
          file_inp.replaceWith(newControl);
          //file_inp = newControl;
         
         
        }
    });

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
          
          // inputs.forEach(input => {
          //     input.classList.remove('invalid');
          //     data[input.name] = input.value;
          //   if (!input.value.trim()) {
          //     errors[input.name] = 'Поле не может быть пустым';
          //     let message = `<span class="message invalid">${errors[input.name]}</span>`;
          //     if(input.closest('.box')){
          //       input.closest('.box').insertAdjacentHTML('beforeend', message);
          //     }
          //     input.classList.add('invalid');
          //     input.value = ''; 
          //     let newControl = input.cloneNode( true )
          //     input.replaceWith(newControl);
          //   } else if (regexes[input.name] && !regexes[input.name].test(input.value)) {

          //     errors[input.name] = 'Поле заполнено некорректно';
          //     let message = `<span class="message invalid">${errors[input.name]}</span>`;
          //     if(input.closest('.box')){
          //       input.closest('.box').insertAdjacentHTML('beforeend', message);
          //     }
          //     input.classList.add('invalid');
          //     input.value = ''; 
          //     let newControl = input.cloneNode( true )
          //     input.replaceWith(newControl);
          //   }
          // });
             
          if (Object.keys(errors).length > 0) {
            return false;
          };
            
          $('.hide-send').toggleClass('hide');

          $(e.currentTarget).attr('disabled', true);
            // показываем процесс закгрузки
            $('.loader').toggleClass('hide');
            // подвешиваем паузу на 5 секунд
            
            setTimeout(function() {
            // скрываем процесс загрузки
            $('.loader').toggleClass('hide');
           
            
            
            // добавляем текст о том что загрузка успешно закончилась
            //$(e.currentTarget).after('<div>Загрузка завершена</div>');

            
            var formData = new FormData($(form)[0]);
            console.log(formData)
             $.ajax({
               url: '../vendor/EmailCode.php',
               type: 'POST',
               data: formData,
               processData: false,
               contentType: false,
               success: function(response) {
                 //console.log(response);   ]         
                 const containerCode = document.querySelector('.pincode-container');
                 containerCode.innerHTML = `
                 <div class="pincode" data-="">
                     <div>
                     <input type="number" class="inputse">
                     <input type="number" class="inputse">
                     <input type="number" class="inputse">
                     <input type="number" class="inputse">
                     <input type="hidden" name="pincode">
                     </div>
                     <button type="button" id="verification-button"> Отправить</button>
                 </div>`;
               },
               error: function(_jqXHR, status, error) {
                 console.log(status + ': ' + error );
               }
             });
            $(e.currentTarget).attr('disabled', false);
            $('.pincode-container').toggleClass('hide');
            console.log('Форма кода появилась)');
          }, 5000)
    });
  });

        $('#verification-button').click(function(e) {
              e.preventDefault();




        });







  $('.inputse').keydown(function(e){
    $(this).val('');
  });
   
  $('.inputse').keyup(function(e){
    var $wrap = $(this).closest('.pincode');
    var $inputs = $wrap.find('input[type="number"]');	
    var val = $(this).val();
    
    // Ввод только цифр
    if(val == val.replace(/[0-9]/, '')) {
      $(this).val('');
      return false;
    }
    
    // Передача фокуса следующему innput
    $inputs.eq($inputs.index(this) + 1).focus();
   
    // Заполнение input hidden
    var fullval = '';
    $inputs.each(function(){
      fullval = fullval + (parseInt($(this).val()) || '0');
    });
    $wrap.find('input[type="hidden"]').val(fullval);
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
          console.log(formData); 
            $.ajax({
             url: 'vendor/volunteerUniform.php',
             type: 'POST',
             data: formData,
             processData: false,
             contentType: false,
            success: function(response) {
              // const form = e.target.closest('form'),
              // inputs = form.querySelectorAll('.inputs');
              // inputs.forEach(input => {
              //   input.value = ''; 
              //   let newControl = input.cloneNode( true )
              //   input.replaceWith(newControl);
              // });
               console.log(response.message);
               console.log('Ваша заявка успешно отправлена');
               //document.location.href = "../index.php" 
             },
            error: function(_jqXHR, status, error) {
                console.log(status + ':' + error);
                //console.log(jqXHR)
             }
           });
    });
  });
   




