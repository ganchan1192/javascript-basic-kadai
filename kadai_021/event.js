const btn1 = document.getElementById('btn');
const text1 = document.getElementById('text');

btn1.addEventListener('click', () => {
      setTimeout(() => {
      text1.textContent = 'ボタンをクリックしました';
    },2000);
  });
