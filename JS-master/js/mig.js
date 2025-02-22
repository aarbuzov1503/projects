 const cells = document.querySelectorAll('.normal-moderate');

        setInterval(() => {
            cells.forEach(cell => {
                cell.classList.toggle('blink-moderate');
                cell.classList.toggle('normal-moderate');
            });
        }, 1000);