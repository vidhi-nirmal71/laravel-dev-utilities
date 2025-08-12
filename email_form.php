<!-- Example using Bootstrap Toast -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .email-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
    }
    input[type="email"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        width: 220px;
        font-size: 14px;
    }
    input[type="email"]:focus {
        border-color: #193b68;
        box-shadow: 0 0 4px #193b68;
    }
    button {
        padding: 10px 18px;
        background-color: #193b68;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
    }
    button:hover {
        background-color: #193b68;
    }
</style>

<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="toastMessage" class="toast text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body"></div>
    </div>
</div>

<form id="documentForm">
    <div class="email-container">
        <input type="hidden" name="version" value="<?php echo htmlspecialchars($post); ?>">
        <input type="email" name="email" placeholder="Enter email" required>
        <button type="submit" id="submitBtn">Get Document</button>
    </div>
</form>

<script>
document.getElementById('documentForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const btn = document.getElementById('submitBtn');
    const form = this;

    // Show loader and disable button
    btn.disabled = true;
    btn.textContent = 'Sending...';

    fetch('send_document.php', {
        method: 'POST',
        body: new FormData(form)
    })
    .then(res => res.json())
    .then(data => {
        const toastEl = document.getElementById('toastMessage');
        const toastBody = toastEl.querySelector('.toast-body');

        toastBody.textContent = data.message;
        toastEl.classList.remove('text-bg-danger', 'text-bg-success');
        toastEl.classList.add(data.status === 'success' ? 'text-bg-success' : 'text-bg-danger');

        $('#toastMessage').toast('show');

        if (data.status === 'success') {
            form.querySelector('input[name="email"]').value = '';
        }
    })
    .catch(err => console.error(err))
    .finally(() => {
        // Always hide loader and re-enable button
        btn.disabled = false;
        btn.textContent = 'Get Document';
    });
});
</script>
