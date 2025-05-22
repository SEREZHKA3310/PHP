let display = document.getElementById('display');
let current = '';

display.addEventListener('input', function() {
    current = display.value;
});

function appendToDisplay(val) {
    const start = display.selectionStart;
    const end = display.selectionEnd;
    const value = display.value;

    // Если в поле только "0" и курсор в конце (или всё выделено) — заменяем ноль
    if ((value === "0" && start === 1 && end === 1) || (value === "0" && start === 0 && end === value.length)) {
        display.value = val;
        display.selectionStart = display.selectionEnd = val.length;
    } else {
        // Обычная вставка
        display.value = value.slice(0, start) + val + value.slice(end);
        display.selectionStart = display.selectionEnd = start + val.length;
    }
    current = display.value;
}

function clearDisplay() {
    current = '';
    display.value = '0';
}

function backspace() {
    if (current.length > 1) {
        current = current.slice(0, -1);
        display.value = current;
    } else {
        current = '';
        display.value = '0';
    }
}

function calculate() {
    if (!current) return;
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'calculate.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            try {
                const res = JSON.parse(xhr.responseText);
                if (res.result !== undefined) {
                    display.value = res.result;
                    current = res.result;
                } else if (res.error) {
                    display.value = res.error;
                    current = '';
                }
            } catch (e) {
                display.value = 'Ошибка';
                current = '';
            }
        }
    };
    xhr.send('expression=' + encodeURIComponent(current));
}

document.addEventListener('keydown', function(e) {
    if (e.key >= '0' && e.key <= '9') {
        appendToDisplay(e.key);
        e.preventDefault();
    }
    if (["+","-","*","/","(",")","."].includes(e.key)) {
        appendToDisplay(e.key);
        e.preventDefault();
    }
    if (e.key === 'Enter') {
        calculate();
        e.preventDefault();
    }
    if (e.key === 'Escape') {
        clearDisplay();
        e.preventDefault();
    }
    if (e.key === 'Backspace') {
        backspace();
        e.preventDefault();
    }
}); 