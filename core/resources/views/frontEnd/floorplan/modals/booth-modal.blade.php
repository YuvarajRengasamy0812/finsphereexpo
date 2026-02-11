{{-- core\resources\views\frontEnd\floorplan\modals\booth-modal.blade.php --}}
<div id="boothModal" class="ticket-custom-modal-overlay" style="display:none;" onclick="closeBoothModal()">
    <div class="ticket-custom-modal" onclick="event.stopPropagation()">
        <form id="floorplanForm" method="POST" action="{{ route('floorplan.submit') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="boothno" id="formBoothNo">
            <input type="hidden" name="boothtitle" id="formBoothTitle">
            <input type="hidden" name="boothsize" id="formBoothSize">
            <input type="hidden" name="boothammount" id="formBoothAmount">
            <input type="hidden" name="paymenttype" id="formPaymentType">
            <input type="hidden" name="networktype" id="formNetworkType">

            <!-- HEADER -->
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h4 id="modalTitle">Booth Reservation</h4>
                <button type="button" class="fpk-modal-close" onclick="closeBoothModal()">
                    <i data-lucide="x" class="w-2 h-2 mt-1"></i>
                </button>
            </div>

            <!-- STEPS -->
            <div class="steps d-flex justify-content-center my-4">
                <div class="step active" id="stepIndicator1">Step 1</div>
                <div class="step" id="stepIndicator2">Step 2</div>
            </div>

            <!-- STEP 1 -->
            <div id="fpk-step-1" class="fpk-step">
                <div class="fpk-grid-2">
                    <!-- LEFT : FORM -->
                    <div class="fpk-form-card">
                        <h5 class="fpk-card-title">Exhibitor Details</h5>

                        <div class="fpk-form-group">
                            <input id="inputName" type="text" name="name" placeholder="Full Name" class="fpk-input" required>
                        </div>

                        <div class="fpk-form-group">
                            <input id="inputEmail" type="email" name="email" placeholder="Email Address" class="fpk-input" required>
                        </div>

                        <div class="fpk-form-group">
                            <input type="text" name="company" placeholder="Company Name" class="fpk-input">
                        </div>

                        <div class="fpk-form-group">
                            <input id="inputPhone" type="text" name="phone" placeholder="Phone Number" class="fpk-input" required>
                        </div>

                        <div class="fpk-form-group">
                            <input type="text" name="referal_code" placeholder="Referral Code (optional)" class="fpk-input">
                        </div>
                    </div>

                    <!-- RIGHT : SUMMARY -->
                    <div class="fpk-summary-wrapper">
                        <div class="fpk-summary-card">
                            <h5 class="fpk-card-title">Booth Summary</h5>

                            <div class="fpk-summary-row" id="rowBoothNo">
                                <span>Booth No:</span>
                                <strong id="sBoothNo">-</strong>
                            </div>

                            <div class="fpk-summary-row">
                                <span id="labelTitle">Booth Title:</span>
                                <strong id="sTitle">-</strong>
                            </div>

                            <div class="fpk-summary-row" id="rowSize">
                                <span id="labelSize">Booth Size:</span>
                                <strong id="sSize">-</strong>
                            </div>

                            <div class="fpk-divider"></div>

                            <div class="fpk-summary-row">
                                <span>Booth Amount:</span>
                                <strong id="sAmount">$ 0.00</strong>
                            </div>

                            <div class="fpk-total">
                                <span>Total Payable</span>
                                <strong id="sTotal">$ 0.00</strong>
                            </div>
                        </div>

                        <div class="fpk-support-card">
                            <p class="fpk-support-title">Contact us for booking support</p>
                            <p class="fpk-support-whatsapp">
                                WhatsApp: <strong><a href="https://wa.me/+971588845033" target="_blank">+971 58 884 5033</a></strong>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="fpk-modal-footer">
                    <button type="button" class="fpk-btn-outline" onclick="closeBoothModal()">Close</button>
                    <button type="button" class="fpk-btn-primary" onclick="goStep2()">Continue</button>
                </div>
            </div>

            <!-- STEP 2 -->
            <div id="modalStep2" class="fpk-step" style="display:none;">
                <h5 class="fpk-section-title">Choose Payment Method</h5>

                <div class="fpk-payment-methods">
                    <div class="fpk-pay-card" data-pay="nowpayments" onclick="fpkSelectPayment(this)">
                        <img src="{{ asset('assets/frontend/img/payments/nowpayments.png') }}" alt="NowPayments">
                    </div>

                    <div class="fpk-pay-card" data-pay="stripe" onclick="fpkSelectPayment(this)">
                        <img src="{{ asset('assets/frontend/img/payments/stripe.png') }}" alt="Stripe">
                    </div>

                    <div class="fpk-pay-card" data-pay="usdt" onclick="fpkSelectPayment(this)">
                        <img src="{{ asset('assets/frontend/img/payments/usdt.png') }}" alt="USDT">
                    </div>

                    <div class="fpk-pay-card" data-pay="bank" onclick="fpkSelectPayment(this)">
                        <img src="{{ asset('assets/frontend/img/payments/bank-deposit.png') }}" alt="Bank Deposit">
                    </div>
                </div>

                <div id="fpkPaymentDetails" class="fpk-payment-details"></div>

                <div class="fpk-modal-footer">
                    <button type="button" class="fpk-btn-outline" onclick="goStep1()">Back</button>
                    <button type="submit" class="fpk-btn-primary" id="submitDepositBtn" disabled>Submit Deposit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    /* ===============================
   MODAL BASE
================================ */
    .ticket-custom-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .ticket-custom-modal {
        background: #fff;
        width: 90%;
        max-width: 1100px;
        max-height: 90vh;
        overflow-y: auto;
        border-radius: 12px;
        padding: 24px;
    }

    .fpk-modal-close {
        background: linear-gradient(135deg, #b8860b, #f2b41e);
        border-radius: 50%;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    /* ===============================
   HEADER + STEPS
================================ */
    .steps .step {
        margin: 0 10px;
        padding: 6px 12px;
        border-radius: 20px;
        background: #eee;
        font-size: 14px;
    }

    .steps .step.active {
        background: linear-gradient(135deg, #b8860b, #f2b41e);
        color: #fff;
    }

    /* ===============================
   STEP 1 LAYOUT
================================ */
    .fpk-grid-2 {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 24px;
    }

    /* ===============================
   Responsive: Single column on small screens
================================ */
    @media (max-width: 767px) {
        .fpk-grid-2 {
            display: block;
            gap: 0;
            /* Remove gap since stacking */
        }

        .fpk-form-card,
        .fpk-summary-wrapper {
            width: 100%;
            margin-bottom: 16px;
            /* spacing between stacked cards */
        }
    }


    .fpk-form-card,
    .fpk-summary-card,
    .fpk-support-card {
        background: #fff;
        border-radius: 14px;
        padding: 22px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .fpk-card-title {
        font-weight: 700;
        margin-bottom: 16px;
        color: #111;
    }

    /* ===============================
   FORM
================================ */
    .fpk-form-group {
        margin-bottom: 14px;
    }

    .fpk-input {
        width: 100%;
        padding: 14px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        font-size: 14px;
    }

    .fpk-input:focus {
        outline: none;
        border-color: #f2b41e;
        box-shadow: 0 0 0 2px rgba(242, 180, 30, .25);
    }

    /* ===============================
   SUMMARY
================================ */
    .fpk-summary-row {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .fpk-divider {
        border-top: 1px dashed #ddd;
        margin: 14px 0;
    }

    .fpk-total {
        display: flex;
        justify-content: space-between;
        margin-top: 14px;
        font-size: 16px;
        font-weight: 700;
    }

    /* ===============================
   SUPPORT CARD
================================ */
    .fpk-support-card {
        margin-top: 16px;
        background: #fff7e6;
        border: 1px solid #fde68a;
    }

    .fpk-support-title {
        font-weight: 600;
        margin-bottom: 4px;
    }

    .fpk-support-whatsapp {
        font-size: 14px;
    }

    /* ===============================
   FOOTER BUTTONS
================================ */
    .fpk-modal-footer {
        display: flex;
        justify-content: space-between;
        margin-top: 26px;
    }

    .fpk-btn-primary {
        padding: 12px 26px;
        border-radius: 10px;
        border: none;
        color: #fff;
        font-weight: 600;
        background: linear-gradient(135deg, #b8860b, #f2b41e);
        cursor: pointer;
    }

    .fpk-btn-outline {
        padding: 12px 26px;
        border-radius: 10px;
        background: transparent;
        border: 1px solid #d1d5db;
        cursor: pointer;
    }

    /* ===============================
   STEP 2 – PAYMENT
================================ */
    .fpk-section-title {
        font-weight: 600;
        margin-bottom: 16px;
    }

    .fpk-payment-methods {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 16px;
        margin-bottom: 20px;
    }

    .fpk-pay-card {
        border: 2px dashed #f2b41e;
        border-radius: 14px;
        padding: 18px;
        text-align: center;
        cursor: pointer;
        transition: all .25s ease;
        background: #fff;
    }

    .fpk-pay-card img {
        height: 40px;
        /* margin-bottom: 8px; */
    }

    .fpk-pay-card.active {
        background: linear-gradient(135deg, #b8860b, #f2b41e);
        color: #fff;
        border-color: transparent;
    }

    .fpk-payment-details {
        margin-top: 20px;
    }

    .fpk-pay-box {
        padding: 20px;
        border-radius: 14px;
        background: #f9fafb;
    }

    /* ===============================
   STEP 2 PAYMENT DETAIL AREA
================================ */
    .fpk-pay-split {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .fpk-left {
        background: #f9fafb;
        padding: 18px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid #f2b41e;
    }

    .fpk-left,
    .fpk-right {
        flex: 1;
        min-width: 250px;
        background: #f9fafb;
        padding: 18px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .fpk-left h6,
    .fpk-right h6 {
        font-weight: 600;
        margin-bottom: 12px;
    }

    .fpk-qr-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
        gap: 12px;
        margin-top: 10px;
    }

    .fpk-qr-grid div {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 12px;
    }

    .fpk-qr-grid img {
        /* width: 60px;
        height: 60px; */
        object-fit: contain;
        margin-bottom: 4px;
    }

    .fpk-right label {
        display: block;
        margin-top: 10px;
        font-size: 13px;
        font-weight: 500;
    }

    .fpk-right input.fpk-input,
    .fpk-right select.fpk-input,
    .fpk-right input.fpk-file {
        width: 100%;
        margin-top: 4px;
        padding: 10px;
        font-size: 14px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
</style>
