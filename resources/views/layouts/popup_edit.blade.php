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
    <h1 id="timer">Осталось времени : </h1>
  </div>
</div>
<script>
  function submitCode(){
    var hiddenField = document.createElement('input');
    var myForm = document.getElementById('updateUserForm');
    hiddenField.type = 'hidden';
    hiddenField.name = 'code';
    hiddenField.value = $('#sms-code-input').val();
    myForm.action = "{{route('my-account.edit-account-post-code')}}"
    // Находим контейнер, куда добавим скрытое поле
    var container = document.getElementById('updateUserForm');

    // Добавляем скрытое поле в контейнер
    container.appendChild(hiddenField);
    document.getElementById('updateUserForm').submit()
  }
  function sendPhone(){
    var phoneValue = document.getElementById('phone').value;

    // Создаем объект FormData для удобной передачи данных
    var formData = new FormData();
    formData.append('phone', phoneValue);
    formData.append('name', document.getElementById('account_first_name').value);
    formData.append('surname', document.getElementById('account_last_name').value);
    formData.append('display_name', document.getElementById('account_display_name').value);
    formData.append('email', document.getElementById('account_email').value);
    formData.append('password_current', document.getElementById('password_current').value);
    formData.append('password', document.getElementById('password').value);
    formData.append('password_confirmation', document.getElementById('password_confirmation').value);
    var headers = new Headers();
    var csrfTokenInput = document.querySelector('input[name="_token"]');
    var csrfToken = csrfTokenInput.value;
    headers.append('X-CSRF-TOKEN', csrfToken);

    fetch('{{route("my-account.edit-account-post")}}', {
        method: 'POST',
        headers: headers,
        body: formData
    })
    .then(response => response.json())
    .then(data => {
      console.log(data)
      if(data.status == 201){
          document.getElementById('modalOverlay').style.display = 'flex';
          document.getElementById('sms-code-input').focus();
          startTimer(data.time_out);  
        }
        if(data.status == 301){
            document.getElementById('updateUserForm').submit()
        }if(data.status == 400){
           var errors = data.message;
           console.log(errors)
           for (var key in errors) {
              if (errors.hasOwnProperty(key)) {
                  alert(key + ": " + errors[key][0]);
              }
          }
        }
    })
    .catch(error => {
      //window.location.href = '{{route("my-account.login-account")}}';
        // Обработка ошибок
        console.error('error', error);
    });
  }
</script>
<script>
 function startTimer(seconds) {
    var timerElement = document.getElementById('timer');

    var intervalId = setInterval(function() {
        if (seconds <= 0) {
            clearInterval(intervalId);
            timerElement.innerHTML = 'Время вышло!';
        } else {
            timerElement.innerHTML = 'Осталось времени: ' + formatTime(seconds);
            seconds--;
        }
    }, 1000);
}

function formatTime(seconds) {
    var minutes = Math.floor(seconds / 60);
    var remainingSeconds = seconds % 60;

    // Добавляем ведущий ноль для однозначных цифр
    if (remainingSeconds < 10) {
        remainingSeconds = '0' + remainingSeconds;
    }

    return minutes + ':' + remainingSeconds;
}

    function openModal() {
        sendPhone()
    }

    function closeModal() {
        document.getElementById('modalOverlay').style.display = 'none';
    }
</script>
