<!-- Modal -->
<style>
    .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Затемнение */
            justify-content: center;
            align-items: center;
            z-index: 1100;
        }

        .modal {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .close-btn {
      cursor: pointer;
      font-size: 20px;
      font-weight: bold;
      color: #555;
      float: right;
    }
    </style>
</style>
<div class="modal-overlay" id="modalOverlay">
  <div class="modal">
    <span class="close-btn" onclick="closeModal()">×</span>
    <h2>Введите код из SMS</h2>
    <input type="text" id="sms-code-input" placeholder="Код из SMS" maxlength="6" minlength="6">
    <button onclick="submitCode()">Подтвердить</button>
  </div>
</div>
<script>
    function openModal() {
        document.getElementById('modalOverlay').style.display = 'flex';
        document.getElementById('sms-code-input').focus();
    }

    function closeModal() {
        document.getElementById('modalOverlay').style.display = 'none';
    }
    function submitCode() {
    // Добавьте ваш код для обработки введенного кода
    // Например, отправка запроса на сервер для проверки кода
    alert('Код успешно подтвержден!');
    closeModal();
  }
</script>