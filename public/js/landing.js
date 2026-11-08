// Тайминг PRO — интерактив лендинга
document.addEventListener('DOMContentLoaded', () => {
    // Выбор суммы поддержки: кнопки работают как переключатель,
    // «Своя сумма» спрашивает значение и подставляет его в подпись.
    const pills = document.querySelectorAll('[data-pill]');
    const customPill = document.querySelector('[data-pill="custom"]');
    const customPillLabel = customPill ? customPill.textContent : '';

    pills.forEach((pill) => {
        pill.addEventListener('click', () => {
            if (pill.dataset.pill === 'custom') {
                const input = window.prompt('Введите сумму поддержки, ₽', '');

                if (input === null) {
                    return;
                }

                const amount = parseInt(input.replace(/[^\d]/g, ''), 10);

                if (!amount) {
                    return;
                }

                pill.textContent = `${amount.toLocaleString('ru-RU')} ₽`;
            } else if (customPill) {
                customPill.textContent = customPillLabel;
            }

            pills.forEach((item) => {
                const active = item === pill;
                item.classList.toggle('is-active', active);
                item.setAttribute('aria-pressed', String(active));
            });
        });
    });

    // Подпись выбранного файла вместо плейсхолдера.
    const photoInput = document.getElementById('f-photo');
    const photoLabel = document.querySelector('[data-file-label]');

    if (photoInput && photoLabel) {
        photoInput.addEventListener('change', () => {
            const fileName = photoInput.files.length ? photoInput.files[0].name : null;
            const hint = photoLabel.querySelector('[data-file-hint]');

            photoLabel.childNodes.forEach((node) => {
                if (node.nodeType === Node.TEXT_NODE) {
                    node.textContent = '';
                }
            });

            photoLabel.append(document.createTextNode(fileName || 'Фото или логотип'));

            if (hint) {
                hint.textContent = fileName ? '— выбран' : '— необязательно';
            }
        });
    }

    // Отправка формы: проверяем обязательные поля и согласие,
    // показываем сообщение об успехе (бэкенд-приём появится позже).
    const form = document.querySelector('[data-lead-form]');

    if (form) {
        const message = form.querySelector('[data-form-message]');

        const showMessage = (text, isError) => {
            message.textContent = text;
            message.classList.toggle('is-error', isError);
            message.classList.toggle('is-success', !isError);
        };

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const name = form.querySelector('#f-name');
            const email = form.querySelector('#f-mail');
            const consent = form.querySelector('[data-consent]');

            if (!name.value.trim() || !email.value.trim()) {
                showMessage('Заполните имя и e-mail — без них файл не отправить.', true);
                return;
            }

            if (!email.checkValidity()) {
                showMessage('Проверьте e-mail: похоже, в адресе опечатка.', true);
                return;
            }

            if (!consent.checked) {
                showMessage('Нужно согласие с политикой обработки персональных данных.', true);
                return;
            }

            showMessage('Заявка отправлена! Персональный файл придёт на почту в течение 24 часов.', false);
            form.reset();

            pills.forEach((item, index) => {
                const active = index === 0;
                item.classList.toggle('is-active', active);
                item.setAttribute('aria-pressed', String(active));
            });

            if (customPill) {
                customPill.textContent = customPillLabel;
            }
        });
    }
});
