var swiper = new Swiper('.swiper-container', {
  loop: true, // Зацикливание слайдов
  autoplay: {
      delay: 5000, // Время задержки между переключениями в миллисекундах (5000 ms = 5 s)
      disableOnInteraction: true, // Автоплей остановится при взаимодействии пользователя
  },
  pagination: {
      el: '.swiper-pagination',
      clickable: true, // Делает пагинацию кликабельной
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});

// const productSelect = document.getElementById('product');
// const sizeSelect = document.getElementById('size');

// const sizes = {
//   'Щебень': ['5-20 мм', '20-40 мм', '40-70 мм'],
//   'Песок': ['0-4 мм'],
//   'Отсевы': ['0-120 мм'],
//   'Резиновая крошка': ['0-2 мм', '2-4 мм', '4-6 мм']
// };

// productSelect.addEventListener('change', function() {
//   sizeSelect.innerHTML = '<option value="">Размер</option>'; // Очистить предыдущие опции
//   if (sizes[this.value]) {
//     sizes[this.value].forEach(size => {
//       const option = document.createElement('option');
//       option.value = size;
//       option.textContent = size;
//       sizeSelect.appendChild(option);
//     });
//   }
// });

// document.querySelectorAll('.size-selection input[type="radio"]').forEach(input => {
//   input.addEventListener('change', function() {
//     // Получаем выбранный размер
//     const selectedSize = this.value;
//     const productCard = this.closest('.product-card');
    
//     // Обновляем изображение
//     productCard.querySelectorAll('.product-image').forEach(image => {
//       if (image.getAttribute('data-size') === selectedSize) {
//           image.style.display = 'block';
//       } else {
//           image.style.display = 'none';
//       }
//   });
    
//     // Обновляем цену
//     productCard.querySelectorAll('.price').forEach(priceElement => {
//       if (priceElement.getAttribute('data-size') === selectedSize) {
//         priceElement.style.display = 'block';
//       } else {
//         priceElement.style.display = 'none';
//       }

      
//     });

//     productCard.querySelectorAll('.price-list').forEach(priceList => {
//       if (priceList.dataset.size === selectedSize) {
//         priceList.style.display = 'block';
//       } else {
//         priceList.style.display = 'none';
//       }
//     });
//   });
// });

// document.querySelectorAll('.size-selection input[type="radio"]').forEach(input => {
//   input.addEventListener('change', function() {
//     // Получаем выбранный размер
//     const selectedSize = this.value;
//     const productCard = this.closest('.product-full-product-card');
    
//     // Обновляем изображение
//     productCard.querySelectorAll('.product-image').forEach(image => {
//       if (image.getAttribute('data-size') === selectedSize) {
//           image.style.display = 'block';
//       } else {
//           image.style.display = 'none';
//       }
//   });
    
//     // Обновляем цену
//     productCard.querySelectorAll('.price').forEach(priceElement => {
//       if (priceElement.getAttribute('data-size') === selectedSize) {
//         priceElement.style.display = 'block';
//       } else {
//         priceElement.style.display = 'none';
//       }
//     });

//     productCard.querySelectorAll('.description').forEach(priceElement => {
//       if (priceElement.getAttribute('data-size') === selectedSize) {
//         priceElement.style.display = 'block';
//       } else {
//         priceElement.style.display = 'none';
//       }
//     });

//     productCard.querySelectorAll('.price-list').forEach(priceList => {
//       if (priceList.dataset.size === selectedSize) {
//         priceList.style.display = 'block';
//       } else {
//         priceList.style.display = 'none';
//       }
//     });
//   });
// });



// function toggleGroup(groupId) {
//   var group = document.getElementById(groupId);
//   if (group.style.display === 'block') {
//       group.style.display = 'none';
//   } else {
//       group.style.display = 'block';
//   }
// }

// function toggleMenu() {
//   const menu = document.querySelector('.studies-menu');
//   menu.classList.toggle('open');
// }