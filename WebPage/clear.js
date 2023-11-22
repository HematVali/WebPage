const button = document.querySelector('button[name="reset"]');
const title = document.querySelector('input[name="title"]');
const post = document.querySelector('textarea[name="text"]');


button.addEventListener('click', () => {
  title.value = '';
  post.value = '';
});

  
