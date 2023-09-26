
$(window).load(function(){
    $('.str').liMarquee();
    });
  
    const tickerContent = document.getElementById('ticker__content');

    $.ajax({
      url: '../vendor/activeSearches.php',
      dataType: 'json',
      success: function(response) {
        let tickerItemsHtml = '';
    
        for (const item of response) {
          
            tickerItemsHtml += item.photo ? `
              <div class="ticker__item" data-id="${item.newMailEntry_id}"> 
                <div class="photo-of-the-missing">
                  <div>
                    <img src="${item.photo}" alt="">
                  </div>
                  <div> 
                    <p><span class="color-requirements">Область/край:</span> Самарский</p>
                    <p><span class="color-requirements">Возраст:</span> ${item.age} ${item.age >= 10 && item.age <= 20 ? 'лет' : item.age % 10 === 1 ? 'год' : item.age % 10 >= 2 && item.age % 10 <= 4 ? 'года' : 'лет'}</p>
                  </div> 
                </div> 
              </div>`: '';  
        }
        
        tickerContent.innerHTML = tickerItemsHtml;
        
      },
      error: function(jqXHR, status, error) {
        console.log(status + ': ' + error);
     }
  
    });