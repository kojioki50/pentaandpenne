'use strict'; {

  
    const targets = document.querySelectorAll('.js-api');

    function callback(entries, obs) {
      console.log(entries);

      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add('appear');
       
        obs.unobserve(entry.target);
      });
    }



  const options = {
    threshold: .5,
  };
  
  const observer = new IntersectionObserver(callback, options);

  targets.forEach(target => {
    observer.observe(target);

  });
}
'use strict'; {

  
    const targets = document.querySelectorAll('.js-goods-api');

    function callback(entries, obs) {
      console.log(entries);

      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add('appear');
       
        obs.unobserve(entry.target);
      });
    }



  const options = {
    threshold: .2,
  };
  
  const observer = new IntersectionObserver(callback, options);

  targets.forEach(target => {
    observer.observe(target);

  });
}
'use strict'; {

  
    const goods = document.querySelectorAll('.js-goods-new-api');

    function callback(entries, obs) {
      console.log(entries);

      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add('appear');
       
        obs.unobserve(entry.target);
      });
    }



  const options = {
    threshold: .2,
  };
  
  const observer = new IntersectionObserver(callback, options);

  goods.forEach(good => {
    observer.observe(good);

  });
}

window.onload = function(){
  const target = document.querySelector('.js-onload');
  target.classList.add('appear');
}

// 'use strict'; {


//   const targets = document.querySelectorAll('.js-onload');

//   function callback(entries, obs) {
//     console.log(entries);

//     entries.forEach(entry => {
//       if (!entry.isIntersecting) {
//         return;
//       }

//       entry.target.classList.add('appear');

//       obs.unobserve(entry.target);
//     });
//   }



//   const options = {
//     threshold: .5,
//   };

//   const observer = new IntersectionObserver(callback, options);

//   targets.forEach(target => {
//     observer.observe(target);

//   });
// }