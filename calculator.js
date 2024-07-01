document.addEventListener('DOMContentLoaded', () => {
    const display = document.getElementById('display');
    const keys = document.querySelectorAll('.key');
  
    keys.forEach(key => {
      key.addEventListener('click', () => {
        const action = key.dataset.action;
        const keyContent = key.textContent;
        const displayedNum = display.value;
        
        if (!action) {
          display.value = displayedNum === '0' ? keyContent : displayedNum + keyContent;
        } else if (action === 'clear') {
          display.value = '0';
        } else if (action === 'delete') {
          display.value = displayedNum.slice(0, -1) || '0';
        } else if (action === 'add' || action === 'subtract' || action === 'multiply' || action === 'divide') {
          display.value = displayedNum + ' ' + keyContent + ' ';
        } else if (action === 'calculate') {
          try {
            display.value = eval(displayedNum.replace(/×/g, '*').replace(/÷/g, '/'));
          } catch {
            display.value = 'Error';
          }
        }
      });
    });
  });
  