//import $ from 'jquery';

wp.customize('blogname', (value) => {
  let brands=document.querySelectorAll('.brand');
  value.bind(to => brands.textContent = to);
});
