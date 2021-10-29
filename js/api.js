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