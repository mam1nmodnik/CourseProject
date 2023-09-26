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
    });
});






$(document).ready(function() { 
  const navLinks = [
    {name: 'Обзор', link: 'indexAdminPanel.php'},
    {name: 'Поиски', link: '#'},
    
  ];  
  document.getElementById('button-img').addEventListener('click', function() {  
    const imgRotate = document.getElementById('button-img');
    const ul = document.querySelector('.nav-links'); 
      if (ul.children.length > 0) {
        ul.innerHTML = '';
        imgRotate.style.transform = "rotate(180deg)";
      }else{
        imgRotate.style.transform = "rotate(0deg)";
        for(let kay of navLinks){
          let navLinksMessage = `<li><a href="${kay.link}">${kay.name}</a></li>`
          ul.innerHTML += navLinksMessage;
        }
      }
    });
});







$(document).ready(function() {
  // Функция для проверки значения в базе данных
        let div = document.querySelector('.new-user-container');
      $.ajax({
          url: '../vendor/notificationsAdminPanel.php',
          type: 'GET',
          datatype: 'json',
          success: function(response) {  
            //console.log(response.length);
              div.innerHTML = ' ';
              const currentTimestamp = Math.floor(Date.now() / 1000);
                      let diffInMilliseconds = [],
                    inner = ``;
                  for (let kay of response) {
                    let time = currentTimestamp - kay.currentTime;      
                    if (time > 300) {
                      diffInMilliseconds.push(1);
                    }else{
                      inner += `
                      <div class="new-user-container-flex" data - id="${kay.volunteerUniform_id}" >
                      ${kay.photo_user ?`<img src="../../${kay.photo_user}" alt="" class="img-container">` : ''}
                        <div class="container-flex1">
                        <div class="container-flex">
                          <h2>Новый доброволец ${kay.name_user}</h2>
                          <img src="${kay.notification}" alt="">
                        </div>
                        <p>${kay.time} ${kay.date}</p>
                        </div>
                      </div>
                      `
                    } // находим кол-во тех, которые больше 5 минут
                  }
                    if (diffInMilliseconds.length === response.length) {
                        inner = `
                          <div class="no-notifications">
                          <h2>Нет новых уведомлений</h2>
                            </div>
                        `
                      }
                    div.innerHTML = inner;

            //   for(let kay of response){           
            //    // Вычисление разницы между текущей меткой и вашей меткой в секундах
            //     //console.log(diffInMilliseconds)
            //     let hui = currentTimestamp - kay.currentTime; 
            //    if(hui > 300){
            //         div.innerHTML = `
            //           <div class="no-notifications">
            //             <h2>Нет новых уведомлений</h2>
            //           </div>
            //           `
            //         }else{
            //           div.innerHTML += kay.photo_user ? `
            //           <div class="new-user-container-flex" data-id="${kay.volunteerUniform_id}">
            //           <img src="../../${kay.photo_user}" alt="" class="img-container">
            //           <div class="container-flex1" >
            //             <div class="container-flex">
            //               <h2>Новый доброволец ${kay.name_user}</h2>
            //                   <img src="${kay.notification}" alt="">
            //             </div>
            //             <p>${kay.time} ${kay.date}</p>
            //           </div>
            //         </div>`: `
            //         <div class="new-user-container-flex" data-id="${kay.volunteerUniform_id}">
            //         <div class="container-flex1" >
            //           <div class="container-flex">
            //             <h2>Новый доброволец ${kay.name_user}</h2>
            //                   <img src="${kay.notification}" alt="">
            //           </div>
            //           <p>${kay.time} ${kay.date}</p>
            //         </div>
            //       </div>`

            //   } 
            // }               
          }
      });
});


setInterval(function() {
  let div = document.querySelector('.new-user-container');
  $.ajax({
      url: '../vendor/notificationsAdminPanel.php',
      type: 'GET',
      datatype: 'json',
      success: function(response) {  
        //console.log(response.length);
        div.innerHTML = ' ';
        const currentTimestamp = Math.floor(Date.now() / 1000);
                let diffInMilliseconds = [],
              inner = ``;
            for (let kay of response) {
              let hui = currentTimestamp - kay.currentTime;     
              if (hui > 300) {
                diffInMilliseconds.push(1);
              }else{
                inner += `
                <div class="new-user-container-flex" data - id="${kay.volunteerUniform_id}" >
                ${kay.photo_user ?`<img src="../../${kay.photo_user}" alt="" class="img-container">` : ''}
                  <div class="container-flex1" >
                  <div class="container-flex">
                    <h2>Новый доброволец ${kay.name_user}</h2>
                    <img src="${kay.notification}" alt="">
                  </div>
                  <p>${kay.time} ${kay.date}</p>
                  </div>
                </div>
                `
              } // находим кол-во тех, которые больше 5 минут
            }
              if(diffInMilliseconds.length === response.length){
                  inner = `
                    <div class="no-notifications">
                      <h2> Нет новых уведомлений</h2>
                    </div>
                  `
                  }
              div.innerHTML = inner;
      }
  });

  
}, 60000);