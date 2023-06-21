



$(document).ready(function() {
    $('#adminPanel-button').click(function(e) {
      e.preventDefault();
      

      const form = e.target.closest('form'),
      inputs = form.querySelectorAll('.input');
    
     const data = {},
      errors = {};
    
          const regexes = {
            email: new RegExp('^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$'),
            //password: new RegExp('^[a-zA-Z0-9!@#$%^&*()_+\\-=[\\]{};\'":\\\\|,.<>/?]+$'),
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

        console.log('ура, все прошло');

          var formData = new FormData($(form)[0]);
          console.log(formData)
            $.ajax({
             url: '../../vendor/signInAdministration.php',
             type: 'POST',
             data: formData,
             processData: false,
             contentType: false,
            success: function(response) {
                
                //console.log(response);
                div = document.querySelector('.box-response')
                let resp =  JSON.parse(response);
               if(resp.status){
                    document.location.href = "indexAdminPanel.php" 
                }else{
                  let responses =  JSON.parse(response);
                    div.innerHTML = '';
                    let message = `<span class="message invalid">${responses.message}</span>`;
                    if(div.closest('.box-response')){
                        div.closest('.box-response').insertAdjacentHTML('beforeend', message);
                    }  
                }
               
             },
            error: function(jqXHR, status, error) {
                console.log(status + ': ' + error);

             }
           });
         
           // валидация формы
          
    });
  });





