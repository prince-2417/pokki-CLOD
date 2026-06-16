<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account — LUXORA</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">
<style>
    .name-row {
        display: flex;
        gap: 16px;
    }
    .name-row .input-box {
        flex: 1;
    }
    .input-box {
        position: relative;
    }
    .input-box input {
        font-family: 'Poppins', sans-serif;
    }
    .input-box .eye-btn {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: #999;
        font-size: 15px;
    }
    .strength-bar {
        height: 4px;
        background: #eee;
        margin-top: 8px;
        border-radius: 2px;
        overflow: hidden;
    }
    .strength-fill {
        height: 100%;
        width: 0%;
        border-radius: 2px;
        transition: width 0.3s, background 0.3s;
    }
    .strength-text {
        font-size: 11px;
        color: #999;
        margin-top: 4px;
    }
    .terms-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 28px;
        font-size: 13px;
        color: #666;
        line-height: 1.5;
    }
    .terms-row input { margin-top: 3px; flex-shrink: 0; }
    .terms-row a { color: #c8a86b; text-decoration: none; }
    .divider {
        display: flex;
        align-items: center;
        gap: 14px;
        margin: 24px 0;
        color: #bbb;
        font-size: 12px;
        letter-spacing: 1px;
    }
    .divider::before, .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .social-btns {
        display: flex;
        gap: 12px;
        margin-bottom: 24px;
    }
    .social-btn {
        flex: 1;
        height: 48px;
        border: 1.5px solid #eee;
        background: #fff;
        cursor: pointer;
        font-size: 13px;
        font-family: 'Poppins', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: border-color 0.2s, background 0.2s;
        color: #333;
    }
    .social-btn:hover { border-color: #c8a86b; background: #fdfaf5; }
    .social-btn img { width: 18px; height: 18px; }
</style>
</head>
<body>

<div class="login-section">

    <!-- Left Side -->
    <div class="login-content">
        <span class="small-title">JOIN LUXORA</span>

        <h1>Create Your <span>Account</span></h1>

        <p>
            Sign up to enjoy exclusive offers, track your orders,
            save your wishlist and explore luxury fashion collections.
        </p>

        <form id="registerForm" onsubmit="handleRegister(event)">

            <div class="name-row">
                <div class="input-box">
                    <input type="text" id="firstName" placeholder="First Name" required />
                </div>
                <div class="input-box">
                    <input type="text" id="lastName" placeholder="Last Name" required />
                </div>
            </div>

            <div class="input-box">
                <input type="email" id="email" placeholder="Email Address" required />
            </div>

            <div class="input-box">
                <input type="tel" id="phone" placeholder="Phone Number (optional)" />
            </div>

            <div class="input-box">
                <input type="password" id="password" placeholder="Create Password" oninput="checkStrength(this.value)" required />
                <button type="button" class="eye-btn" onclick="togglePass('password', this)">
                    <i class="fas fa-eye-slash"></i>
                </button>
                <div class="strength-bar"><div class="strength-fill" id="strengthFill"></div></div>
                <p class="strength-text" id="strengthText"></p>
            </div>

            <div class="input-box">
                <input type="password" id="confirmPassword" placeholder="Confirm Password" required />
                <button type="button" class="eye-btn" onclick="togglePass('confirmPassword', this)">
                    <i class="fas fa-eye-slash"></i>
                </button>
            </div>

            <div class="terms-row">
                <input type="checkbox" id="terms" required />
                <label for="terms">
                    I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a> of LUXORA
                </label>
            </div>

            <button class="login-btn" type="submit">Create Account</button>

        </form>

        <div class="divider">OR SIGN UP WITH</div>

        <div class="social-btns">
            <button class="social-btn">
                <img src="https://www.google.com/favicon.ico" alt="Google" /> Google
            </button>
            <button class="social-btn">
                <img src="https://www.facebook.com/favicon.ico" alt="Facebook" /> Facebook
            </button>
        </div>

        <div class="bottom-text">
            Already have an account? <a href="login.php">Sign In</a>
        </div>

    </div>

    <!-- Right Side -->
    <div class="login-image">
        <div class="image-box">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&q=80" alt="LUXORA Fashion" />
        </div>
    </div>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<script>
function togglePass(id, btn) {
    const input = document.getElementById(id);
    const icon  = btn.querySelector('i');
    if (input.type === 'password') {
        input.type = 'text';
        icon.className = 'fas fa-eye';
    } else {
        input.type = 'password';
        icon.className = 'fas fa-eye-slash';
    }
}

function checkStrength(val) {
    const fill = document.getElementById('strengthFill');
    const text = document.getElementById('strengthText');
    let score = 0;
    if (val.length >= 8) score++;
    if (/[A-Z]/.test(val)) score++;
    if (/[0-9]/.test(val)) score++;
    if (/[^A-Za-z0-9]/.test(val)) score++;

    const levels = [
        { w: '0%',   bg: '',          label: '' },
        { w: '25%',  bg: '#e74c3c',   label: 'Weak' },
        { w: '50%',  bg: '#e67e22',   label: 'Fair' },
        { w: '75%',  bg: '#f1c40f',   label: 'Good' },
        { w: '100%', bg: '#27ae60',   label: 'Strong' },
    ];
    fill.style.width      = levels[score].w;
    fill.style.background = levels[score].bg;
    text.textContent      = levels[score].label;
    text.style.color      = levels[score].bg;
}

function handleRegister(e) {
    e.preventDefault();
    const pass    = document.getElementById('password').value;
    const confirm = document.getElementById('confirmPassword').value;
    const btn     = document.querySelector('.login-btn');

    if (pass !== confirm) {
        document.getElementById('confirmPassword').style.borderColor = '#e74c3c';
        document.getElementById('confirmPassword').placeholder = 'Passwords do not match!';
        return;
    }

    btn.textContent = '✓ Account Created!';
    btn.style.background = '#27ae60';
    setTimeout(() => { window.location.href = 'login.php'; }, 1500);
}
</script>

</body>
</html>
